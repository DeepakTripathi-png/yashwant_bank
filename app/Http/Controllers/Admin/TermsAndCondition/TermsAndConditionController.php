<?php

namespace App\Http\Controllers\Admin\TermsAndCondition;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TermsAndCondition;

class TermsAndConditionController extends Controller
{

    public function index(){

        $terms=TermsAndCondition::where('status','active')->first();
        return view('Admin.TermsAndCondition.terms-and-condition',compact('terms'));
    }



    
    public function store(Request $request){

        $rules = [
            'description_en' => 'required|string', 
            'description_mr' => 'required|string', 
        ];
    

        $messages = [
         
            'description_en.required' => 'The English description is required.',
            'description_en.string' => 'The English description must be a string.',
            'description_mr.required' => 'The Marathi description is required.',
            'description_mr.string' => 'The Marathi description must be a string.',
        ];
    
        // Validate the request
        $validated = $request->validate($rules, $messages);

   

        $input['description_en'] = $request->description_en;
        $input['description_mr'] = $request->description_mr;

      

        if (!empty($request->id)){
            $input['modified_by'] = auth()->guard('master_admins')->user()->id;
            $input['modified_ip_address'] = $request->ip();
            TermsAndCondition::find($request->id)->update($input);
            return redirect('admin/terms-and-condition')->with('success', 'Terms and Condition Updated Successfully!');
        } else {
            $input['created_by'] = auth()->guard('master_admins')->user()->id;
            $input['created_ip_address'] = $request->ip();
          
            TermsAndCondition::create($input);
            return redirect('admin/terms-and-condition')->with('success', 'Terms and Condition Added Successfully!');
        }
    }
    
}

<?php

namespace App\Http\Controllers\Admin\PrivacyPolicy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PrivacyPolicy;

class PrivacyPolicyController extends Controller
{

    public function index(){

        $privacy=PrivacyPolicy::where('status','active')->first();
        return view('Admin.PrivacyPolicy.privacy_policy',compact('privacy'));
    }


    public function store(Request $request){

     


        // Validation rules
        $rules = [

            
            'description_en' => 'required|string', 
            'description_mr' => 'required|string', 
        ];
    
        // Custom validation messages
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
            PrivacyPolicy::find($request->id)->update($input);
            return redirect('admin/privacy-policy')->with('success', 'Privacy Policy Us Updated Successfully!');
        } else {
            $input['created_by'] = auth()->guard('master_admins')->user()->id;
            $input['created_ip_address'] = $request->ip();
          
            PrivacyPolicy::create($input);
            return redirect('admin/privacy-policy')->with('success', 'Privacy Policy Added Successfully!');
        }
    }

    
}

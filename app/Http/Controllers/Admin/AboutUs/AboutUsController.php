<?php

namespace App\Http\Controllers\Admin\AboutUs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\MediaTrait;
use App\Models\AboutUs;

class AboutUsController extends Controller
{

    use MediaTrait;

    public function index(){
        $about=AboutUs::first();
        return view('Admin.AboutUs.aboutus',compact('about'));
    }


    public function store(Request $request){

        // Validation rules
        $rules = [
            'about_us_heading_en' => 'required|string|max:255',
            'about_us_heading_mr' => 'required|string|max:255',
            'description_en' => 'required|string', 
            'description_mr' => 'required|string', 
        ];
    
        // Custom validation messages
        $messages = [
            'about_us_heading_en.required' => 'The English heading is required.',
            'about_us_heading_en.string' => 'The English heading must be a string.',
            'about_us_heading_en.max' => 'The English heading cannot exceed 255 characters.',
            'about_us_heading_mr.required' => 'The Marathi heading is required.',
            'about_us_heading_mr.string' => 'The Marathi heading must be a string.',
            'about_us_heading_mr.max' => 'The Marathi heading cannot exceed 255 characters.',
            'description_en.required' => 'The English description is required.',
            'description_en.string' => 'The English description must be a string.',
            'description_mr.required' => 'The Marathi description is required.',
            'description_mr.string' => 'The Marathi description must be a string.',
        ];
    
        // Validate the request
        $validated = $request->validate($rules, $messages);



        $input['about_us_heading_en'] = $request->about_us_heading_en;
        $input['about_us_heading_mr'] = $request->about_us_heading_mr;

        $input['description_en'] = $request->description_en;
        $input['description_mr'] = $request->description_mr;


  

        if (!empty($request->id)) {
            $input['modified_by'] = auth()->guard('master_admins')->user()->id;
            $input['modified_ip_address'] = $request->ip();
            AboutUs::find($request->id)->update($input);
            return redirect('admin/about-us')->with('success', 'About Us Updated Successfully!');
        } else {
            $input['created_by'] = auth()->guard('master_admins')->user()->id;
            $input['created_ip_address'] = $request->ip();
          
            AboutUs::create($input);
            return redirect('admin/about-us')->with('success', 'About Us Added Successfully!');
        }
    }


   


   
}

<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Master\General_setting;
use App\Models\Master\Role_privilege;
use Auth;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use App\Models\TopSlider;

class GeneralSettings extends Controller
{
    public function index()
    {
        $role_id = Auth::guard('master_admins')->user()->role_id;
        $RolesPrivileges = Role_privilege::where('id', $role_id)->where('status', 'active')->select('privileges')->first();
        if (!empty($RolesPrivileges) && str_contains($RolesPrivileges, 'general_setting_view')){
            $general_settings = General_setting::where('status', '=', 'active')->first();
            return view('Admin.Settings.general-setting', compact('general_settings'));
        } else {
            return redirect()->back()->with('error', 'Sorry, You Have No Permission For This Request!');
        } 
    }

    // public function social_media_index()
    // {
    //     $role_id = Auth::guard('master_admins')->user()->role_id;
    //     $RolesPrivileges = Role_privilege::where('id', $role_id)->where('status', 'active')->select('privileges')->first();
    //     if (!empty($RolesPrivileges) && str_contains($RolesPrivileges, 'general_setting_view')){
    //         $general_settings = General_setting::where('status', 'active')->first();
    //         return view('admin.settings.general-setting-social-media', compact('general_settings'));
    //     } else {
    //         return redirect()->back()->with('error', 'Sorry, You Have No Permission For This Request!');
    //     } 
    // }

    public function store(Request $request)
    {
        $role_id = Auth::guard('master_admins')->user()->role_id;
        $RolesPrivileges = Role_privilege::where('id', $role_id)->where('status', 'active')->select('privileges')->first();
        $id = $request->id;
        if ($request->has('contact_settings')){
            // $request->validate([
            //     'email' => 'required|email',
            //     'mobile' => 'required|digits:10',
            //     'address' => 'required',
            // ]);
            $input['email'] = $request->email;
            $input['mobile'] = $request->mobile;
            $input['address'] = $request->address;
            if (!empty($id)) {
                if (!empty($RolesPrivileges) && str_contains($RolesPrivileges, 'general_setting_edit')){
                    $input['modified_by'] = auth()->guard('master_admins')->user()->id;
                    $input['modified_ip_address'] = $request->ip();
                    General_setting::where('id', '=', $id)->update($input);
                    return redirect('admin/general-setting')->with('success', 'Contact Settings updated successfully!');
                } else {
                    return redirect()->back()->with('error', 'Sorry, You Have No Permission For This Request!');
                } 
            } else {
                if (!empty($RolesPrivileges) && str_contains($RolesPrivileges, 'general_setting_add')){
                    $input['created_by'] = auth()->guard('master_admins')->user()->id;
                    $input['created_ip_address'] = $request->ip();
                    General_setting::create($input);
                    return redirect('admin/general-setting')->with('success', 'Contact Settings added successfully!');
                } else {
                    return redirect()->back()->with('error', 'Sorry, You Have No Permission For This Request!');
                } 
            }
        }

        if ($request->has('social_media_settings')) {
            // $request->validate([
            //     'facebook_url' => 'required|string',
            //     'instagram_url' => 'required|string',
            //     'linkedin_url' => 'required|string',
            //     'twitter_url' => 'required|string',
            // ]);
            $input['facebook_url'] = $request->facebook_url;
            $input['instagram_url'] = $request->instagram_url;
            $input['linkedin_url'] = $request->linkedin_url;
            $input['twitter_url'] = $request->twitter_url;
            $input['working_days'] = $request->working_days;
            $input['header_email'] = $request->header_email;

            if (!empty($id)) {
                if (!empty($RolesPrivileges) && str_contains($RolesPrivileges, 'general_setting_edit')){
                    $input['modified_by'] = auth()->guard('master_admins')->user()->id;
                    $input['modified_ip_address'] = $request->ip();
                    General_setting::where('id', '=', $id)->update($input);
                    return redirect('/admin/general-setting')->with('success', 'Social Media Settings updated successfully!');
                } else {
                    return redirect()->back()->with('error', 'Sorry, You Have No Permission For This Request!');
                } 
            } else {
                if (!empty($RolesPrivileges) && str_contains($RolesPrivileges, 'general_setting_add')){
                    $input['created_by'] = auth()->guard('master_admins')->user()->id;
                    $input['created_ip_address'] = $request->ip();
                    General_setting::create($input);
                    return redirect('/admin/general-setting')->with('success', 'Social Media Settings added successfully!');
                } else {
                    return redirect()->back()->with('error', 'Sorry, You Have No Permission For This Request!');
                } 
            }
        }
    }

    // public function storeTopSlider(Request $request){

  

       
    //     $input['slider_text_en'] = $request->slider_text_en;
    //     $input['slider_text_mr'] = $request->slider_text_mr;
    //     if (!empty($request->id)) {
    //         $input['modified_by'] = auth()->guard('master_admins')->user()->id;
    //         $input['modified_ip_address'] = $request->ip();
    //         General_setting::find($request->id)->update($input);
    //         return redirect('admin/about-us')->with('success', 'Top Slider Updated Successfully!');
    //     } else {
    //         $input['created_by'] = auth()->guard('master_admins')->user()->id;
    //         $input['created_ip_address'] = $request->ip();
          
    //         General_setting::create($input);
    //         return redirect('admin/about-us')->with('success', 'Top Slider Added Successfully!');
    //     }

    // }

    public function storeTopSlider(Request $request)
    {
        // Validation rules
        $rules = [
            'slider_text_en' => 'required|string|max:255',
            'slider_text_mr' => 'required|string|max:255',
        ];

        // Custom messages
        $messages = [
            'slider_text_en.required' => 'The English slider text is required.',
            'slider_text_en.string' => 'The English slider text must be a string.',
            'slider_text_en.max' => 'The English slider text may not be greater than 255 characters.',
            'slider_text_mr.required' => 'The Marathi slider text is required.',
            'slider_text_mr.string' => 'The Marathi slider text must be a string.',
            'slider_text_mr.max' => 'The Marathi slider text may not be greater than 255 characters.',
        ];

        // Validate the request
        $validatedData = $request->validate($rules, $messages);

        $input['slider_text_en'] = $validatedData['slider_text_en'];
        $input['slider_text_mr'] = $validatedData['slider_text_mr'];

        if (!empty($request->id)) {
            $input['modified_by'] = auth()->guard('master_admins')->user()->id;
            $input['modified_ip_address'] = $request->ip();
            TopSlider::find($request->id)->update($input);
            return redirect('admin/about-us')->with('success', 'Top Slider Updated Successfully!');
        } else {
            $input['created_by'] = auth()->guard('master_admins')->user()->id;
            $input['created_ip_address'] = $request->ip();
            TopSlider::create($input);
            return redirect('admin/about-us')->with('success', 'Top Slider Added Successfully!');
        }
    }



     
    public function data_table(Request $request){

   

        $banner = TopSlider::where('status', '!=', 'delete')->orderBy('id','DESC')->get();
        
        if ($request->ajax()){
            return DataTables::of($banner)
                ->addIndexColumn()

                ->addColumn('slider_text_en', function ($row){
                    return !empty($row->slider_text_en) ? $row->slider_text_en : '';
                })

                ->addColumn('slider_text_mr', function ($row){
                    return !empty($row->slider_text_mr) ? $row->slider_text_mr : '';
                })

                ->addColumn('status', function ($row){
                    if ($row->status == 'active') {
                        $statusActiveBtn = '<a href="javascript:void(0);"  data-id="' . $row->id . '" data-table="top_sliders" data-flash="Status Changed Successfully!" class="change-status"  ><i class="fa fa-toggle-on tgle-on  status_button" aria-hidden="true" title="Active"></i></a>';
                        return $statusActiveBtn;
                    } else {
                        $statusBlockBtn = '<a href="javascript:void(0);"  data-id="' . $row->id . '" data-table="top_sliders" data-flash="Status Changed Successfully!" class="change-status" ><i class="fa fa-toggle-off tgle-off  status_button" aria-hidden="true" title="Inactive"></i></a>';
                        return $statusBlockBtn;
                    }
                })



                ->addColumn('action', function ($row) {
                    $actionBtn = '';
                
                 
                    $actionBtn .= '<a href="' . url('admin/banner/edit/' . $row->id ) . '"> <button type="button" data-id="' . $row->id . '" class="tabledit-edit-button btn bg-warning text-white" title="Edit"><i class="mdi mdi-pencil"></i></button></a>';
                
                    $actionBtn .=  ' <a href="javascript:void(0);" data-id="' . $row->id . '" data-table="top_sliders" data-flash="Slider Content Deleted Successfully!" class="tabledit-delete-button btn btn-danger delete" title="Delete"><i class="mdi mdi-trash-can"></i></a>';
                    
                    return $actionBtn;
                })
                
            
                ->rawColumns([ 'action', 'status', 'slider_text_en','slider_text_mr'])
                ->make(true);
    
               
        }
    }


}

<?php

namespace App\Http\Controllers\Admin\Banner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\MediaTrait;
use App\Models\MasterBanner;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use App\Models\Service;



class BannerMasterController extends Controller
{

    use MediaTrait;

    public function index(){

        $services=Service::where('status','active')->get();
        return view('Admin.Banner.banner',compact('services'));
    }




    // public function store(Request $request)
    // {

        
    //     // Validation rules
    //         $rules = [
    //             'page_name' => 'required|string|max:255',
    //             'banner_heading_heading_en' => 'required|string',
    //             'banner_heading_heading_mr' => 'required|string',
    //             'banner_image_path' => $request->id ? 'sometimes|image|mimes:jpeg,png,jpg,gif' : 'required|image|mimes:jpeg,png,jpg,gif', 
    //         ];

    //         // Language-specific validation rules
    //         if ($request->input('lang') === 'en') {
    //             $rules['banner_heading_heading_en'] = 'required|string|in:single,multiple';
    //         } elseif ($request->input('lang') === 'mr') {
    //             $rules['banner_heading_heading_mr'] = 'required|string|max:255';
    //         }

    //         // Custom validation messages
    //         $messages = [
    //             'page_name.required' => 'Please select a page.',
    //             'banner_heading_heading_en.required' => 'The English banner heading is required.',
    //             'banner_heading_heading_en.in' => 'The English banner heading must be either "single" or "multiple".',
    //             'banner_heading_heading_mr.required' => 'The Marathi banner heading is required.',
    //             'banner_heading_heading_mr.max' => 'The Marathi banner heading cannot exceed 255 characters.',
    //             'banner_image_path.required' => 'The banner image is required.',
    //             'banner_image_path.image' => 'The file must be an image.',
    //             'banner_image_path.mimes' => 'Only jpeg, png, jpg, and gif files are allowed.',
    //             'banner_image_path.max' => 'The image size must not exceed 2MB.',
    //         ];

    //         // Validate the request
    //         $validated = $request->validate($rules, $messages);
    
    //         // Prepare input data
    //         $input = $validated;
    //         $input['page_name'] = $request->page_name;
    //         $input['banner_heading_heading_en'] = $request->banner_heading_heading_en;
    //         $input['banner_heading_heading_mr'] = $request->banner_heading_heading_mr;
        
    //         // Handle file upload
    //         if ($request->hasFile('banner_image_path')) {
    //             $input['banner_image_path'] = $this->verifyAndUpload($request, 'banner_image_path', 'banner_image_path');
    //             $input['banner_image_name'] = $request->file('banner_image_path')->getClientOriginalName();
    //         }

        
        
    //         // Create or update banner
    //         if (!empty($request->id)) {
    //             $id = $request->id;
    //             $input['modified_by'] = auth()->guard('master_admins')->user()->id;
    //             $input['modified_ip_address'] = $request->ip();
    //             MasterBanner::findOrFail($id)->update($input);
    //             return redirect('admin/banner-image-master')->with('success', 'Banner Updated Successfully!');
    //         } else {
    //             $input['created_by'] = auth()->guard('master_admins')->user()->id;
    //             $input['created_ip_address'] = $request->ip();
            
    //             MasterBanner::create($input);
    //             return redirect('admin/banner-image-master')->with('success', 'Banner Added Successfully!');
    //         }
    // }


    public function store(Request $request)
   {
        // Validation rules
        $rules = [
            'page_name' => 'required|string|max:255',
            'banner_heading_heading_en' => 'required|string',
            'banner_heading_heading_mr' => 'required|string',
            'banner_image_path' => $request->id ? 'sometimes|image|mimes:jpeg,png,jpg,gif' : 'required|image|mimes:jpeg,png,jpg,gif', 
        ];

        // Language-specific validation rules
        if ($request->input('lang') === 'en') {
            $rules['banner_heading_heading_en'] = 'required|string|in:single,multiple';
        } elseif ($request->input('lang') === 'mr') {
            $rules['banner_heading_heading_mr'] = 'required|string|max:255';
        }

        // Custom validation messages
        $messages = [
            'page_name.required' => 'Please select a page.',
            'banner_heading_heading_en.required' => 'The English banner heading is required.',
            'banner_heading_heading_en.in' => 'The English banner heading must be either "single" or "multiple".',
            'banner_heading_heading_mr.required' => 'The Marathi banner heading is required.',
            'banner_heading_heading_mr.max' => 'The Marathi banner heading cannot exceed 255 characters.',
            'banner_image_path.required' => 'The banner image is required.',
            'banner_image_path.image' => 'The file must be an image.',
            'banner_image_path.mimes' => 'Only jpeg, png, jpg, and gif files are allowed.',
            'banner_image_path.max' => 'The image size must not exceed 2MB.',
        ];

        // Validate the request
        $validated = $request->validate($rules, $messages);

        // Prepare input data
        $input = $validated;
        $input['page_name'] = $request->page_name;
        $input['banner_heading_heading_en'] = $request->banner_heading_heading_en;
        $input['banner_heading_heading_mr'] = $request->banner_heading_heading_mr;

        // Handle file upload
        if ($request->hasFile('banner_image_path')) {
            $input['banner_image_path'] = $this->verifyAndUpload($request, 'banner_image_path', 'banner_image_path');
            $input['banner_image_name'] = $request->file('banner_image_path')->getClientOriginalName();
        }

        // Check if a banner with the same page_name already exists
        $banner = MasterBanner::where('page_name', $request->page_name)->where('status','!=','delete')->first();

        if ($banner) {
            // If banner exists, update it
            $input['modified_by'] = auth()->guard('master_admins')->user()->id;
            $input['modified_ip_address'] = $request->ip();
            $banner->update($input);
            return redirect('admin/banner-image-master')->with('success', 'Banner Updated Successfully!');
        } else {
            // If banner does not exist, create a new one
            $input['created_by'] = auth()->guard('master_admins')->user()->id;
            $input['created_ip_address'] = $request->ip();
            MasterBanner::create($input);
            return redirect('admin/banner-image-master')->with('success', 'Banner Added Successfully!');
        }
    }




    
    public function data_table(Request $request){

        $banner = MasterBanner::where('status', '!=', 'delete')->orderBy('id','DESC')->get();
        
        if ($request->ajax()){
            return DataTables::of($banner)
                ->addIndexColumn()

                ->addColumn('page_name', function ($row) {
                    return !empty($row->page_name) 
                        ? ucfirst(str_replace('_', ' ', $row->page_name)) 
                        : '';
                })
                

                ->addColumn('banner_heading_heading_en', function ($row){
                    return !empty($row->banner_heading_heading_en) ? $row->banner_heading_heading_en : '';
                })

                ->addColumn('banner_heading_heading_mr', function ($row){
                    return !empty($row->banner_heading_heading_mr) ? $row->banner_heading_heading_mr : '';
                })

                ->addColumn('image', function ($row){
                    $image_path = '';
                    $image_name = '';
                    if (!empty($row->banner_image_path)) {
                        $image_path = Storage::exists($row->banner_image_path) ? url('/').Storage::url($row->banner_image_path) : URL::asset('admin_panel\images\default\default profile.jpg');
                        $image_name = $row->image_name;
                    }
                    return '<img src="' . $image_path . '" alt="' . $image_name . '" width="50" class="review-image" style="cursor:pointer;">';
                })





                ->addColumn('status', function ($row){
                    if ($row->status == 'active') {
                        $statusActiveBtn = '<a href="javascript:void(0);"  data-id="' . $row->id . '" data-table="master_banners" data-flash="Status Changed Successfully!" class="change-status"  ><i class="fa fa-toggle-on tgle-on  status_button" aria-hidden="true" title="Active"></i></a>';
                        return $statusActiveBtn;
                    } else {
                        $statusBlockBtn = '<a href="javascript:void(0);"  data-id="' . $row->id . '" data-table="master_banners" data-flash="Status Changed Successfully!" class="change-status" ><i class="fa fa-toggle-off tgle-off  status_button" aria-hidden="true" title="Inactive"></i></a>';
                        return $statusBlockBtn;
                    }
                })



                ->addColumn('action', function ($row) {
                    $actionBtn = '';
                
                 
                    $actionBtn .= '<a href="' . url('admin/banner/edit/' . $row->id ) . '"> <button type="button" data-id="' . $row->id . '" class="tabledit-edit-button btn bg-warning text-white" title="Edit"><i class="mdi mdi-pencil"></i></button></a>';
                
                    $actionBtn .=  ' <a href="javascript:void(0);" data-id="' . $row->id . '" data-table="master_banners" data-flash="Banner Deleted Successfully!" class="tabledit-delete-button btn btn-danger delete" title="Delete"><i class="mdi mdi-trash-can"></i></a>';
                    
                    return $actionBtn;
                })
                
            
                ->rawColumns([ 'action', 'status', 'image'])
                ->make(true);
    
               
        }
    }



    public function edit($id){

     

        $banner = MasterBanner::where('id',$id)->first();

        $services=Service::where('status','active')->get();

     

        return view('Admin.Banner.banner',compact('banner','services'));
    }




    






}

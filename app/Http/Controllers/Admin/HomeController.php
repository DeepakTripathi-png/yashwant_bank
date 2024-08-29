<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeSliderImages;
use App\Traits\MediaTrait;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use App\Models\HomeServiceSection;
use App\Models\HomeChairManSection;
use App\Models\HomeVariousSchemeSection;


class HomeController extends Controller
{

    use MediaTrait;

    public function index(){

        $home=HomeServiceSection::where('status','active')->first();

        $chairMan=HomeChairManSection::where('status','active')->first();
        
        return view('Admin.Home.home',compact('home','chairMan'));
    }




   public function storeSlierImages(Request $request){


            $rules = [
              
                'ban_image_path' => $request->id ? 'sometimes|image|mimes:jpeg,png,jpg,gif' : 'required|image|mimes:jpeg,png,jpg,gif', 
            ];

    
            $messages = [
                'ban_image_path.required' => 'The banner image is required.',
                'ban_image_path.image' => 'The file must be an image.',
                'ban_image_path.mimes' => 'Only jpeg, png, jpg, and gif files are allowed.',
                'ban_image_path.max' => 'The image size must not exceed 2MB.',
            ];

            $validated = $request->validate($rules, $messages);
    
   
       
            $input['lang'] = $request->language;
        
            // Handle file upload
            if ($request->hasFile('ban_image_path')) {
                $input['image_path'] = $this->verifyAndUpload($request, 'ban_image_path', 'home_slider');
                $input['image_name'] = $request->file('ban_image_path')->getClientOriginalName();
            }

           

        
        
            // Create or update banner
            if (!empty($request->id)) {
                $id = $request->id;
                $input['modified_by'] = auth()->guard('master_admins')->user()->id;
                $input['modified_ip_address'] = $request->ip();
                HomeSliderImages::findOrFail($request->id)->update($input);
                return redirect('admin/home')->with('success', 'Home Slider Images Updated Successfully!');
            } else {
                $input['created_by'] = auth()->guard('master_admins')->user()->id;
                $input['created_ip_address'] = $request->ip();

                // dd($request->all());

                HomeSliderImages::create($input);
                return redirect('admin/home')->with('success', 'Home Slider Images Added Successfully!');
            }

   }



       
   public function slider_data_table(Request $request){

    $banner = HomeSliderImages::where('status', '!=', 'delete')->orderBy('id','DESC')->get();
    
    if ($request->ajax()){
        return DataTables::of($banner)
            ->addIndexColumn()

          
            

            ->addColumn('lang',function ($row){
                if($row->lang=='en'){
                    return 'English';
                }elseif($row->lang=='mr'){
                    return 'Marathi';
                }else{
                    return '-';
                }
                
            })

          

            ->addColumn('image', function ($row){
                $image_path = '';
                $image_name = '';
                if (!empty($row->image_path)) {
                    $image_path = Storage::exists($row->image_path) ? url('/').Storage::url($row->image_path) : URL::asset('admin_panel\images\default\default profile.jpg');
                    $image_name = $row->image_name;
                }
                return '<img src="' . $image_path . '" alt="' . $image_name . '" width="50" class="review-image" style="cursor:pointer;">';
            })





            ->addColumn('status', function ($row){
                if ($row->status == 'active') {
                    $statusActiveBtn = '<a href="javascript:void(0);"  data-id="' . $row->id . '" data-table="home_slider_images" data-flash="Status Changed Successfully!" class="change-status"  ><i class="fa fa-toggle-on tgle-on  status_button" aria-hidden="true" title="Active"></i></a>';
                    return $statusActiveBtn;
                } else {
                    $statusBlockBtn = '<a href="javascript:void(0);"  data-id="' . $row->id . '" data-table="home_slider_images" data-flash="Status Changed Successfully!" class="change-status" ><i class="fa fa-toggle-off tgle-off  status_button" aria-hidden="true" title="Inactive"></i></a>';
                    return $statusBlockBtn;
                }
            })



            ->addColumn('action', function ($row) {
                $actionBtn = '';
            
             
                $actionBtn .= '<a href="' . url('admin/home-slider/edit/' . $row->id ) . '"> <button type="button" data-id="' . $row->id . '" class="tabledit-edit-button btn bg-warning text-white" title="Edit"><i class="mdi mdi-pencil"></i></button></a>';
            
                $actionBtn .=  ' <a href="javascript:void(0);" data-id="' . $row->id . '" data-table="home_slider_images" data-flash="Slider Deleted Successfully!" class="tabledit-delete-button btn btn-danger delete" title="Delete"><i class="mdi mdi-trash-can"></i></a>';
                
                return $actionBtn;
            })
            
        
            ->rawColumns([ 'action', 'status', 'image'])
            ->make(true);

           
    }
   }


    public function editSlider($id){

        $banner = HomeSliderImages::where('id',$id)->first();

        $home=HomeServiceSection::where('status','active')->first();

        $chairMan=HomeChairManSection::where('status','active')->first();

        return view('Admin.Home.home',compact('banner','home','chairMan'));
    }


    // public function storeServiceSection(Request $request)
    // {
    
    //     $input['heading_1_en'] = $request->heading_1_en;
    //     $input['heading_1_mr'] = $request->heading_1_mr;

    //     $input['heading_2_en'] = $request->heading_2_en;

    //     $input['heading_2_mr'] = $request->heading_2_mr;

    //     $input['description_en'] = $request->description_en;

    //     $input['description_mr'] = $request->description_mr;

    
    //     if (!empty($request->id)) {
    //         $id = $request->id;
    //         $input['modified_by'] = auth()->guard('master_admins')->user()->id;
    //         $input['modified_ip_address'] = $request->ip();
    //         HomeServiceSection::findOrFail($request->id)->update($input);
    //         return redirect('admin/home')->with('success', 'Home Service Section Updated Successfully!');
    //     } else {
    //         $input['created_by'] = auth()->guard('master_admins')->user()->id;
    //         $input['created_ip_address'] = $request->ip();
    //         HomeServiceSection::create($input);
    //         return redirect('admin/home')->with('success', 'Home Service Section Added Successfully!');
    //     }
    // }


    public function storeServiceSection(Request $request)
    {

       

        // Validation rules
        $rules = [
            'heading_1_en' => 'required|string',
            'heading_1_mr' => 'required|string',
            'heading_2_en' => 'required|string',
            'heading_2_mr' => 'required|string',
            'description_en' => 'required|string',
            'description_mr' => 'required|string',
        ];

        // Custom messages
        $messages = [
            'heading_1_en.required' => 'The Heading 1 (English) field is required.',
            'heading_1_en.string' => 'The Heading 1 (English) must be a string.',
            'heading_1_en.max' => 'The Heading 1 (English) must not exceed 255 characters.',
            'heading_1_mr.required' => 'The Heading 1 (Marathi) field is required.',
            'heading_1_mr.string' => 'The Heading 1 (Marathi) must be a string.',
            'heading_1_mr.max' => 'The Heading 1 (Marathi) must not exceed 255 characters.',
            'heading_2_en.required' => 'The Heading 2 (English) field is required.',
            'heading_2_en.string' => 'The Heading 2 (English) must be a string.',
            'heading_2_en.max' => 'The Heading 2 (English) must not exceed 255 characters.',
            'heading_2_mr.required' => 'The Heading 2 (Marathi) field is required.',
            'heading_2_mr.string' => 'The Heading 2 (Marathi) must be a string.',
            'heading_2_mr.max' => 'The Heading 2 (Marathi) must not exceed 255 characters.',
            'scheme_name_mr.required' => 'The Scheme Name (Marathi) field is required.',
            'scheme_name_mr.string' => 'The Scheme Name (Marathi) must be a string.',
            'scheme_name_mr.max' => 'The Scheme Name (Marathi) must not exceed 255 characters.',
            'description_en.required' => 'The Description (English) field is required.',
            'description_en.string' => 'The Description (English) must be a string.',
            'description_mr.required' => 'The Description (Marathi) field is required.',
            'description_mr.string' => 'The Description (Marathi) must be a string.',
        ];

        // Validate the request
        $request->validate($rules, $messages);

        $input['heading_1_en'] = $request->heading_1_en;
        $input['heading_1_mr'] = $request->heading_1_mr;
        $input['heading_2_en'] = $request->heading_2_en;
        $input['heading_2_mr'] = $request->heading_2_mr;
        $input['scheme_name_mr'] = $request->scheme_name_mr;
        $input['description_en'] = $request->description_en;
        $input['description_mr'] = $request->description_mr;

        if (!empty($request->id)) {
            $id = $request->id;
            $input['modified_by'] = auth()->guard('master_admins')->user()->id;
            $input['modified_ip_address'] = $request->ip();
            HomeServiceSection::findOrFail($request->id)->update($input);
            return redirect('admin/home')->with('success', 'Home Service Section Updated Successfully!');
        } else {
            $input['created_by'] = auth()->guard('master_admins')->user()->id;
            $input['created_ip_address'] = $request->ip();
            HomeServiceSection::create($input);
            return redirect('admin/home')->with('success', 'Home Service Section Added Successfully!');
        }
    }





  


    public function storeChairManSection(Request $request)
   {
            // Define validation rules
            $rules = [
                'chair_man_heading_1_en' => 'required|string',
                'chair_man_heading_1_mr' => 'required|string',
                'chair_man_heading_2_en' => 'required|string',
                'chair_man_heading_2_mr' => 'required|string',
                'chair_man_description_en' => 'required|string',
                'chair_man_description_mr' => 'required|string',
                'chair_man_name_en' => 'required|string',
                'chair_man_name_mr' => 'required|string',

                'chair_man_image' => $request->id ? 'sometimes|image|mimes:jpeg,png,jpg,gif' : 'required|image|mimes:jpeg,png,jpg,gif', 
            ];

            // Custom validation messages (optional)
            $messages = [
                'chair_man_heading_1_en.required' => 'Chairman Heading 1 (English) is required.',
                'chair_man_heading_1_mr.required' => 'Chairman Heading 1 (Marathi) is required.',
                'chair_man_heading_2_en.required' => 'Chairman Heading 2 (English) is required.',
                'chair_man_heading_2_mr.required' => 'Chairman Heading 2 (Marathi) is required.',
                'chair_man_description_en.required' => 'Chairman Description (English) is required.',
                'chair_man_description_mr.required' => 'Chairman Description (Marathi) is required.',
                'chair_man_name_en.required' => 'Chairman Name (English) is required.',
                'chair_man_name_mr.required' => 'Chairman Name (Marathi) is required.',
                'chair_man_image.required' => 'Chairman Image is required.',
                'chair_man_image.image' => 'Chairman Image must be an image file.',
                'chair_man_image.mimes' => 'Chairman Image must be a file of type: jpeg, png, jpg, gif.',
                'chair_man_image.max' => 'Chairman Image may not be greater than 2048 kilobytes.',
            ];

            // Validate the request
            $validatedData = $request->validate($rules, $messages);

            // Handle validated data
            $input = $validatedData;

            // Handle file upload
            if ($request->hasFile('chair_man_image')) {
                $input['chair_man_image_path'] = $this->verifyAndUpload($request, 'chair_man_image', 'home_slider');
                $input['chair_man_image_name'] = $request->file('chair_man_image')->getClientOriginalName();
            }

            // Check if it's an update or a new creation
            if (!empty($request->id)) {
                $id = $request->id;
                $input['modified_by'] = auth()->guard('master_admins')->user()->id;
                $input['modified_ip_address'] = $request->ip();
                HomeChairManSection::findOrFail($request->id)->update($input);
                return redirect('admin/home')->with('success', 'Home Chairman Section Updated Successfully!');
            } else {
                $input['created_by'] = auth()->guard('master_admins')->user()->id;
                $input['created_ip_address'] = $request->ip();
                HomeChairManSection::create($input);
                return redirect('admin/home')->with('success', 'Home Chairman Section Added Successfully!');
            }
}




// public function storeSchemes(Request $request){

//     dd($request->all());





//     $input['scheme_name_en'] = $request->scheme_name_en;

//     $input['scheme_name_mr'] = $request->scheme_name_mr;




//     // Handle file upload
//     if ($request->hasFile('ban_image_path')) {
//         $input['image_path'] = $this->verifyAndUpload($request, 'ban_image_path', 'home_slider');
//         $input['image_name'] = $request->file('ban_image_path')->getClientOriginalName();
//     }

   



//     // Create or update banner
//     if (!empty($request->id)) {
//         $id = $request->id;
//         $input['modified_by'] = auth()->guard('master_admins')->user()->id;
//         $input['modified_ip_address'] = $request->ip();
//         HomeVariousSchemeSection::findOrFail($request->id)->update($input);
//         return redirect('admin/home')->with('success', 'Scheme Updated Successfully!');
//     } else {
//         $input['created_by'] = auth()->guard('master_admins')->user()->id;
//         $input['created_ip_address'] = $request->ip();

//         // dd($request->all());

//         HomeVariousSchemeSection::create($input);
//         return redirect('admin/home')->with('success', 'Scheme Added Successfully!');
//     }

// }



public function storeSchemes(Request $request)
{

   


    $rules = [
        'scheme_name_en' => 'required|string',
        'scheme_name_mr' => 'required|string',

        'scheme_image' => $request->id ? 'sometimes|image|mimes:jpeg,png,jpg,gif' : 'required|image|mimes:jpeg,png,jpg,gif', 
    ];

  
    $messages = [
        'scheme_name_en.required' => 'The scheme name in English is required.',
        'scheme_name_mr.required' => 'The scheme name in Marathi is required.',
        'scheme_image.required' => 'The banner image is required.',
        'scheme_image.image' => 'The file must be an image.',
        'scheme_image.max' => 'The image must not be larger than 2MB.',
    ];


    $validatedData = $request->validate($rules, $messages);


    $input['scheme_name_en'] = $request->scheme_name_en;
    $input['scheme_name_mr'] = $request->scheme_name_mr;


    if ($request->hasFile('scheme_image')) {
        $input['scheme_image_path'] = $this->verifyAndUpload($request, 'scheme_image', 'home_slider');
        $input['scheme_image_name'] = $request->file('scheme_image')->getClientOriginalName();
    }

  
    if (!empty($request->id)) {
        $id = $request->id;
        $input['modified_by'] = auth()->guard('master_admins')->user()->id;
        $input['modified_ip_address'] = $request->ip();
        HomeVariousSchemeSection::findOrFail($id)->update($input);
        return redirect('admin/home')->with('success', 'Scheme Updated Successfully!');
    } else {
        $input['created_by'] = auth()->guard('master_admins')->user()->id;
        $input['created_ip_address'] = $request->ip();
        HomeVariousSchemeSection::create($input);
        return redirect('admin/home')->with('success', 'Scheme Added Successfully!');
    }
}



public function scheme_data_table(Request $request){

    $banner = HomeVariousSchemeSection::where('status', '!=', 'delete')->get();
    
    if ($request->ajax()){
        return DataTables::of($banner)
            ->addIndexColumn()

          
            

            ->addColumn('scheme_name_en',function ($row){
              
                    return !empty($row->scheme_name_en)?$row->scheme_name_en:'';
            })


            ->addColumn('scheme_name_mr',function ($row){
              
                return !empty($row->scheme_name_mr)?$row->scheme_name_mr:'';
            })


          

            ->addColumn('image', function ($row){
                $image_path = '';
                $image_name = '';
                if (!empty($row->scheme_image_path)) {
                    $image_path = Storage::exists($row->scheme_image_path) ? url('/').Storage::url($row->scheme_image_path) : URL::asset('admin_panel\images\default\default profile.jpg');
                    $image_name = $row->scheme_image_name;
                }
                return '<img src="' . $image_path . '" alt="' . $image_name . '" width="50" class="review-image" style="cursor:pointer;">';
            })





            ->addColumn('status', function ($row){
                if ($row->status == 'active') {
                    $statusActiveBtn = '<a href="javascript:void(0);"  data-id="' . $row->id . '" data-table="home_various_scheme_sections" data-flash="Status Changed Successfully!" class="change-status"  ><i class="fa fa-toggle-on tgle-on  status_button" aria-hidden="true" title="Active"></i></a>';
                    return $statusActiveBtn;
                } else {
                    $statusBlockBtn = '<a href="javascript:void(0);"  data-id="' . $row->id . '" data-table="home_various_scheme_sections" data-flash="Status Changed Successfully!" class="change-status" ><i class="fa fa-toggle-off tgle-off  status_button" aria-hidden="true" title="Inactive"></i></a>';
                    return $statusBlockBtn;
                }
            })



            ->addColumn('action', function ($row) {
                $actionBtn = '';
                $actionBtn .= '<a href="' . url('admin/home-scheme/edit/' . $row->id ) . '"> <button type="button" data-id="' . $row->id . '" class="tabledit-edit-button btn bg-warning text-white" title="Edit"><i class="mdi mdi-pencil"></i></button></a>';
            
                $actionBtn .=  ' <a href="javascript:void(0);" data-id="' . $row->id . '" data-table="home_various_scheme_sections" data-flash="Slider Deleted Successfully!" class="tabledit-delete-button btn btn-danger delete" title="Delete"><i class="mdi mdi-trash-can"></i></a>';
                
                return $actionBtn;
            })
            
        
            ->rawColumns([ 'action', 'status', 'image'])
            ->make(true);

           
    }
   }



   public function editScheme($id){

 

    $scheme = HomeVariousSchemeSection::where('id',$id)->first();


    $home=HomeServiceSection::where('status','active')->first();

    $chairMan=HomeChairManSection::where('status','active')->first();
        
    return view('Admin.Home.home',compact('home','chairMan','scheme'));

    

   }


    

}

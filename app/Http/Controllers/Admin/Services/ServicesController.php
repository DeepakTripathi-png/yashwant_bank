<?php

namespace App\Http\Controllers\Admin\Services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\MediaTrait;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;
use App\Models\Service;

class ServicesController extends Controller
{

    use MediaTrait;

    public function index(){
        return view('Admin.Services.services');
    }


    public function store(Request $request)
    {

        
        // Base validation rules
        $rules = [
         
            'service_name_en' => 'required|string',
            'service_name_mr' => 'required|string',
            'service_description_en' => 'required|string',
            'service_description_mr' => 'required|string',
            'service_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg', 
        ];
    
        // Custom validation messages
        $messages = [
           
            'service_name_en.required' => 'The English service name is required.',
            'service_name_en.string' => 'The English service name must be a string.',
            'service_name_mr.required' => 'The Marathi service name is required.',
            'service_name_mr.string' => 'The Marathi service name must be a string.',
            'service_description_en.required' => 'The English service description is required.',
            'service_description_en.string' => 'The English service description must be a string.',
            'service_description_mr.required' => 'The Marathi service description is required.',
            'service_description_mr.string' => 'The Marathi service description must be a string.',
            'service_image.image' => 'The service image must be an image file.',
            'service_image.mimes' => 'Only JPEG, PNG, JPG, GIF, and SVG files are allowed for the service image.',
            'service_image.max' => 'The service image size must not exceed 2MB.',
        ];
    
        // Validate the request
        $validated = $request->validate($rules, $messages);


        $serviceName = $request->service_name_en;
        $slug = Str::slug($serviceName);



    
        // Prepare input data
        $input['service_slug_url'] = $slug;

        $input['service_name_en'] = $request->service_name_en;

        $input['service_name_mr'] = $request->service_name_mr;
        $input['service_description_en'] = $request->service_description_en;
        $input['service_description_mr'] = $request->service_description_mr;
    
        // Handle file uploads
        if ($request->hasFile('service_image')) {
            $input['service_image_path'] = $this->verifyAndUpload($request, 'service_image', 'service');
            $input['service_image_name'] = $request->file('service_image')->getClientOriginalName();
        }
    
        // Check if it's an update or create operation
        if (!empty($request->id)) {
            $id = $request->id;
            $input['modified_by'] = auth()->guard('master_admins')->user()->id;
            $input['modified_ip_address'] = $request->ip();
            Service::findOrFail($request->id)->update($input);
            return redirect('admin/services')->with('success', 'Service Updated Successfully!');
        } else {
            $input['created_by'] = auth()->guard('master_admins')->user()->id;
            $input['created_ip_address'] = $request->ip();
            Service::create($input);
            return redirect('admin/services')->with('success', 'Service Added Successfully!');
        }
    }




    public function data_table(Request $request){

        $service = Service::where('status', '!=', 'delete')->get();
        
        if ($request->ajax()){
            return DataTables::of($service)
                ->addIndexColumn()

                ->addColumn('service_name_en', function ($row) {
                    return !empty($row->service_name_en) ? $row->service_name_en: '';
                })

                ->addColumn('service_name_mr', function ($row) {
                    return !empty($row->service_name_mr) ? $row->service_name_mr: '';
                })

                // ->addColumn('service_description_en', function ($row) {
                //     $serviceDescription = '';
                //     if (!empty($row->service_description_en)) {
                //         $serviceDescription = strip_tags($row->service_description_en);
                //         $words = explode(' ', $serviceDescription);
                //         if (count($words) > 4) {
                //             $serviceDescription = implode(' ', array_slice($words, 0, 4)) . '...';
                //         }
                //     }
                //     return $serviceDescription;
                // })
                
                

                // ->addColumn('service_description_mr', function ($row) {
                //     $serviceDescriptionMr = '';
                //     if (!empty($row->service_description_mr)) {
                //         $serviceDescriptionMr = strip_tags($row->service_description_mr);
                //         $words = explode(' ', $serviceDescriptionMr);
                //         if (count($words) > 4) {
                //             $serviceDescriptionMr = implode(' ', array_slice($words, 0, 4)) . '...';
                //         }
                //     }
                //     return $serviceDescriptionMr;
                // })


                ->addColumn('service_description_en', function ($row) {
                    $serviceDescriptionEn = '';
                    if (!empty($row->service_description_en)) {
                        $serviceDescriptionEn = html_entity_decode($row->service_description_en);
                        $serviceDescriptionEn = strip_tags($serviceDescriptionEn);
                        $words = explode(' ', $serviceDescriptionEn);
                        if (count($words) > 4) {
                            $serviceDescriptionEn = implode(' ', array_slice($words, 0, 4)) . '...';
                        }
                    }
                    return $serviceDescriptionEn;
                })
                ->addColumn('service_description_mr', function ($row) {
                    $serviceDescriptionMr = '';
                    if (!empty($row->service_description_mr)) {
                        $serviceDescriptionMr = html_entity_decode($row->service_description_mr);
                        $serviceDescriptionMr = strip_tags($serviceDescriptionMr);
                        $words = explode(' ', $serviceDescriptionMr);
                        if (count($words) > 4) {
                            $serviceDescriptionMr = implode(' ', array_slice($words, 0, 4)) . '...';
                        }
                    }
                    return $serviceDescriptionMr;
                })
                
                

             

                ->addColumn('service_image_path', function ($row) {
                    if (!empty($row->service_image_path) && Storage::exists($row->service_image_path)) {
                        $image_path = url('/') . Storage::url($row->service_image_path);
                        $image_name = $row->image_name;
                        return '<img src="' . $image_path . '" alt="' . $image_name . '" width="50" class="review-image" style="cursor:pointer;">';
                    } else {
                        return '-';
                    }
                })
                




                ->addColumn('status', function ($row){
                    if ($row->status == 'active') {
                        $statusActiveBtn = '<a href="javascript:void(0);"  data-id="' . $row->id . '" data-table="services" data-flash="Status Changed Successfully!" class="change-status"  ><i class="fa fa-toggle-on tgle-on  status_button" aria-hidden="true" title="Active"></i></a>';
                        return $statusActiveBtn;
                    } else {
                        $statusBlockBtn = '<a href="javascript:void(0);"  data-id="' . $row->id . '" data-table="services" data-flash="Status Changed Successfully!" class="change-status" ><i class="fa fa-toggle-off tgle-off  status_button" aria-hidden="true" title="Inactive"></i></a>';
                        return $statusBlockBtn;
                    }
                })



                ->addColumn('action', function ($row) {
                    $actionBtn = '';
                
                    $actionBtn .= '<a href="' . url('admin/service/edit/' . $row->id ) . '"> <button type="button" data-id="' . $row->id . '" class="tabledit-edit-button btn bg-warning text-white" title="Edit"><i class="mdi mdi-pencil"></i></button></a>';
                
                    $actionBtn .=  ' <a href="javascript:void(0);" data-id="' . $row->id . '" data-table="services" data-flash="Banner Deleted Successfully!" class="tabledit-delete-button btn btn-danger delete" title="Delete"><i class="mdi mdi-trash-can"></i></a>';
                    
                    return $actionBtn;
                })
                
            
                ->rawColumns([ 'action', 'status', 'service_image_path'])
                ->make(true);
    
               
        }
    }



    public function edit($id){

        $service = Service::where('id', $id)->first();

        return view('Admin.Services.services',compact('service'));
    }
    




}

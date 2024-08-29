<?php

namespace App\Http\Controllers\Admin\ContactUs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use App\Models\ContactDetails;
use App\Models\ContactUsQuery;

class ContactUsController extends Controller
{

    public function index(){

        $contact=ContactDetails::where('status','active')->first();
        
        return view('Admin.ContactUs.contactus',Compact('contact'));
    }


    public function store(Request $request){


          // Prepare input data
          $input = [
            'map_url' => $request->map_url,
            'first_mobile' => $request->first_mobile,
            'second_mobile' => $request->second_mobile,
            'first_email' => $request->first_email,
            'second_email' => $request->second_email,
            'address_en' => $request->address_en,
            'address_mr' => $request->address_mr,

        ];
    
        // Create or update branch
        if (!empty($request->id)){
            $id = $request->id;
            $input['modified_by'] = auth()->guard('master_admins')->user()->id;
            $input['modified_ip_address'] = $request->ip();
            ContactDetails::findOrFail($request->id)->update($input);
            return redirect('admin/contact-us')->with('success', 'Contact Details Updated Successfully!');
        } else {
            $input['created_by'] = auth()->guard('master_admins')->user()->id;
            $input['created_ip_address'] = $request->ip();
            ContactDetails::create($input);
            return redirect('admin/contact-us')->with('success', 'Contact Details Added Successfully!');
        }
    }


    public function contactQueries(){
        
        return view('Admin.ContactUs.contactQueries');
    }




    public function data_table(Request $request){

        $queries= ContactUsQuery::where('status', '!=', 'delete')->orderBy('id','DESC')->get();
        
        if ($request->ajax()){
            return DataTables::of($queries)
                ->addIndexColumn()


                ->addColumn('name', function ($row){
                    return !empty($row->name) ? $row->name : '';
                })

                ->addColumn('email', function ($row){
                    return !empty($row->email) ? $row->email : '';
                })


                ->addColumn('mobile', function ($row){
                    return !empty($row->mobile) ? $row->mobile : '';
                })


                ->addColumn('subject', function ($row){
                    return !empty($row->subject) ? $row->subject : '';
                })


                
                ->addColumn('message', function ($row){
                    return !empty($row->message) ? $row->message : '';
                })


                ->addColumn('action', function ($row) {
                    $actionBtn = '';
                    $actionBtn .=  ' <a href="javascript:void(0);" data-id="' . $row->id . '" data-table="contact_us_queries" data-flash="Deleted Successfully!" class="tabledit-delete-button btn btn-danger delete" title="Delete"><i class="mdi mdi-trash-can"></i></a>';
                    
                    return $actionBtn;
                })
                
            
                ->rawColumns([ 'action'])
                ->make(true);
    
               
        }
    }




    
}

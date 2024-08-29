<?php

namespace App\Http\Controllers\Admin\UnclaimedDeposite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\UnclaimedDeposite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class UnclaimedDepositeController extends Controller
{

    public function index(){

        //$terms=TermsAndCondition::where('status','active')->first();
        return view('Admin.UnclaimedDeposite.unclaimed_deposite');
    }


    // public function store(Request $request){

       
    
    //         $input['customer_name_en'] = $request->customer_name_en;
    //         $input['customer_name_mr'] = $request->customer_name_mr;


    //         $input['address_en'] = $request->address_en;
    //         $input['address_mr'] = $request->address_mr;

    //         $input['udrn'] = $request->udrn;
    
          
    
    //         if (!empty($request->id)){
    //             $input['modified_by'] = auth()->guard('master_admins')->user()->id;
    //             $input['modified_ip_address'] = $request->ip();
    //             UnclaimedDeposite::find($request->id)->update($input);
    //             return redirect('admin/unclaimed-deposite')->with('success', 'Unclaimed Deposite Updated Successfully!');
    //         } else {
    //             $input['created_by'] = auth()->guard('master_admins')->user()->id;
    //             $input['created_ip_address'] = $request->ip();
              
    //             UnclaimedDeposite::create($input);
    //             return redirect('admin/unclaimed-deposite')->with('success', 'Unclaimed Deposite Added Successfully!');
    //         }
        

    // }


    public function store(Request $request)
    {
      
        $rules = [
            'customer_name_en' => 'required|string',
            'customer_name_mr' => 'required|string',
            'address_en' => 'required|string',
            'address_mr' => 'required|string',
            'udrn' => 'required|string|max:20|unique:unclaimed_deposites,udrn,' . $request->id,
        ];

     
        $messages = [
            'customer_name_en.required' => 'The customer name in English is required.',
            'customer_name_en.max' => 'The customer name in English may not be greater than 255 characters.',
            'customer_name_mr.required' => 'The customer name in Marathi is required.',
            'customer_name_mr.max' => 'The customer name in Marathi may not be greater than 255 characters.',
            'address_en.required' => 'The address in English is required.',
            'address_en.max' => 'The address in English may not be greater than 500 characters.',
            'address_mr.required' => 'The address in Marathi is required.',
            'address_mr.max' => 'The address in Marathi may not be greater than 500 characters.',
            'udrn.required' => 'The UDRN is required.',
            'udrn.unique' => 'The UDRN has already been taken.',
            'udrn.max' => 'The UDRN may not be greater than 20 characters.',
        ];


        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
        }

        // Proceed with storing or updating the data
        $input['customer_name_en'] = $request->customer_name_en;
        $input['customer_name_mr'] = $request->customer_name_mr;
        $input['address_en'] = $request->address_en;
        $input['address_mr'] = $request->address_mr;
        $input['udrn'] = $request->udrn;

        if (!empty($request->id)) {
            $input['modified_by'] = auth()->guard('master_admins')->user()->id;
            $input['modified_ip_address'] = $request->ip();
            UnclaimedDeposite::find($request->id)->update($input);
            return redirect('admin/unclaimed-deposite')->with('success', 'Unclaimed Deposite Updated Successfully!');
        } else {
            $input['created_by'] = auth()->guard('master_admins')->user()->id;
            $input['created_ip_address'] = $request->ip();
            UnclaimedDeposite::create($input);
            return redirect('admin/unclaimed-deposite')->with('success', 'Unclaimed Deposite Added Successfully!');
        }
    }



    public function data_table(Request $request){

        $customer = UnclaimedDeposite::where('status', '!=', 'delete')->orderBy('id','DESC')->get();
        
        if ($request->ajax()){
            return DataTables::of($customer)
                ->addIndexColumn()

              
                

                ->addColumn('customer_name_en', function ($row){
                    return !empty($row->customer_name_en) ? $row->customer_name_en : '';
                })

                ->addColumn('customer_name_mr', function ($row){
                    return !empty($row->customer_name_mr) ? $row->customer_name_mr : '';
                })

                ->addColumn('address_en', function ($row){
                    return !empty($row->address_en) ? $row->address_en : '';
                })

                ->addColumn('address_mr', function ($row){
                    return !empty($row->address_mr) ? $row->address_mr : '';
                })

                ->addColumn('udrn', function ($row){
                    return !empty($row->udrn) ? $row->udrn: '';
                })

            

                ->addColumn('status', function ($row){
                    if ($row->status == 'active') {
                        $statusActiveBtn = '<a href="javascript:void(0);"  data-id="' . $row->id . '" data-table="unclaimed_deposites" data-flash="Status Changed Successfully!" class="change-status"  ><i class="fa fa-toggle-on tgle-on  status_button" aria-hidden="true" title="Active"></i></a>';
                        return $statusActiveBtn;
                    } else {
                        $statusBlockBtn = '<a href="javascript:void(0);"  data-id="' . $row->id . '" data-table="unclaimed_deposites" data-flash="Status Changed Successfully!" class="change-status" ><i class="fa fa-toggle-off tgle-off  status_button" aria-hidden="true" title="Inactive"></i></a>';
                        return $statusBlockBtn;
                    }
                })



                ->addColumn('action', function ($row) {
                    $actionBtn = '';
                
                 
                    $actionBtn .= '<a href="' . url('admin/unclaimed-deposite/edit/' . $row->id ) . '"> <button type="button" data-id="' . $row->id . '" class="tabledit-edit-button btn bg-warning text-white" title="Edit"><i class="mdi mdi-pencil"></i></button></a>';
                
                    $actionBtn .=  ' <a href="javascript:void(0);" data-id="' . $row->id . '" data-table="unclaimed_deposites" data-flash="Deleted Successfully!" class="tabledit-delete-button btn btn-danger delete" title="Delete"><i class="mdi mdi-trash-can"></i></a>';
                    
                    return $actionBtn;
                })
                
            
                ->rawColumns([ 'action', 'status','address_mr','address_en' ])
                ->make(true);
    
               
        }
    }


   public function edit($id){

    $customer = UnclaimedDeposite::where('id',$id)->where('status','!=','delete')->first();

    return view('Admin.UnclaimedDeposite.unclaimed_deposite',compact('customer'));


   }
    
}

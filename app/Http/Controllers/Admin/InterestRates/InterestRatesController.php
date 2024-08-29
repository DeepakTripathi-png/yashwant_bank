<?php

namespace App\Http\Controllers\Admin\InterestRates;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\InterestRates;
use Illuminate\Support\Facades\Validator;
use App\Traits\MediaTrait;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use App\Models\DepositInterestRatesTable1;
use App\Models\DepositInterestRatesTable2;

class InterestRatesController extends Controller
{
    use MediaTrait;

    public function index(){

        $interest=InterestRates::where('status','active')->first();
        return view('Admin.InterestRates.interest_rates',compact('interest'));

    }


    public function store(Request $request)
    {

        if ($request->has('main_banner_section')) {

          
            $rules = [
                'main_banner_en' => 'image|mimes:jpeg,png,jpg,gif,svg',
                'main_banner_mr' => 'image|mimes:jpeg,png,jpg,gif,svg',
            ];

            
            if (empty($request->id)) {
                $rules['main_banner_en'] .= '|required';
                $rules['main_banner_mr'] .= '|required';
            }

        
            $messages = [
                'main_banner_en.required' => 'The English banner image is required.',
                'main_banner_en.image' => 'The English banner image must be an image file.',
                'main_banner_en.mimes' => 'The English banner image must be a file of type: jpeg, png, jpg, gif, svg.',
                'main_banner_en.max' => 'The English banner image may not be greater than 2048 kilobytes.',

                'main_banner_mr.required' => 'The Marathi banner image is required.',
                'main_banner_mr.image' => 'The Marathi banner image must be an image file.',
                'main_banner_mr.mimes' => 'The Marathi banner image must be a file of type: jpeg, png, jpg, gif, svg.',
                'main_banner_mr.max' => 'The Marathi banner image may not be greater than 2048 kilobytes.',
            ];

       
            $validator = Validator::make($request->all(), $rules, $messages);

            // Check if validation fails
            if ($validator->fails()) {
                return redirect('admin/interest-rates')
                    ->withErrors($validator)
                    ->withInput();
            }

            // If validation passes, proceed with the rest of the logic
            if ($request->hasFile('main_banner_en')) {
                $input['main_banner_en_path'] = $this->verifyAndUpload($request, 'main_banner_en', 'banner_image_path');
                $input['main_banner_en_name'] = $request->file('main_banner_en')->getClientOriginalName();
            }

            if ($request->hasFile('main_banner_mr')) {
                $input['main_banner_mr_path'] = $this->verifyAndUpload($request, 'main_banner_mr', 'banner_image_path');
                $input['main_banner_mr_name'] = $request->file('main_banner_mr')->getClientOriginalName();
            }

            if (!empty($request->id)) {
                $id = $request->id;
                $input['modified_by'] = auth()->guard('master_admins')->user()->id;
                $input['modified_ip_address'] = $request->ip();
                InterestRates::findOrFail($id)->update($input);
                return redirect('admin/interest-rates')->with('success', 'Interest Rates Main Banner Updated Successfully!');
            } else {
                $input['created_by'] = auth()->guard('master_admins')->user()->id;
                $input['created_ip_address'] = $request->ip();
                InterestRates::create($input);
                return redirect('admin/interest-rates')->with('success', 'Interest Rates Main Banner Added Successfully!');
            }
        }

      


        if ($request->has('section_1')) {
            // Define validation rules
            $rules = [
                'section_1_heading_en' => 'required',
                'section_1_sub_heading_en' => 'required',
                'section_1_decision_date_heading_en' => 'required',
                'section_1_heading_mr' => 'required',
                'section_1_sub_heading_mr' => 'required',
                'section_1_decision_date_heading_mr' => 'required',
                'section_1_content_below_first_table_mr' => 'required',
            ];
    
            // Define custom validation messages
            $messages = [
                'section_1_heading_en.required' => 'The heading in English is required.',
                'section_1_sub_heading_en.required' => 'The sub-heading in English is required.',
                'section_1_decision_date_heading_en.required' => 'The  decision date heading in English is required.',
                'section_1_heading_mr.required' => 'The  heading in Marathi is required.',
                'section_1_sub_heading_mr.required' => 'The  sub-heading in Marathi is required.',
                'section_1_decision_date_heading_mr.required' => 'The  decision date heading in Marathi is required.',
                'section_1_content_below_first_table_mr.required' => 'The  content below the first table in Marathi is required.',
            ];
    
            // Validate the request data
            $validator = Validator::make($request->all(), $rules, $messages);
    
            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }
    
            // If validation passes, proceed with processing
            $input['section_1_heading_en'] = $request->section_1_heading_en;
            $input['section_1_sub_heading_en'] = $request->section_1_sub_heading_en;
            $input['section_1_decision_date_heading_en'] = $request->section_1_decision_date_heading_en;
            $input['section_1_content_below_first_table_en'] = $request->section_1_content_below_first_table_en;

           
            $input['section_1_heading_mr'] = $request->section_1_heading_mr;
            $input['section_1_sub_heading_mr'] = $request->section_1_sub_heading_mr;
            $input['section_1_decision_date_heading_mr'] = $request->section_1_decision_date_heading_mr;
            $input['section_1_content_below_first_table_mr'] = $request->section_1_content_below_first_table_mr;
    
            if (!empty($request->id)) {
                $id = $request->id;
                $input['modified_by'] = auth()->guard('master_admins')->user()->id;
                $input['modified_ip_address'] = $request->ip();
                InterestRates::findOrFail($id)->update($input);
                return redirect('admin/interest-rates')->with('success', 'Interest Rates Main Banner Updated Successfully!');
            } else {
                $input['created_by'] = auth()->guard('master_admins')->user()->id;
                $input['created_ip_address'] = $request->ip();
                InterestRates::create($input);
                return redirect('admin/interest-rates')->with('success', 'Interest Rates Main Banner Added Successfully!');
            }
        }


        
       

        if ($request->has('section_2')) {
            // Define validation rules
            $rules = [
                'section_2_heading_en' => 'required',
                'section_2_heading_mr' => 'required',
                'section_2_content_below_first_table_en' => 'required',
                'section_2_content_below_first_table_mr' => 'required',
            ];
    
            // Define custom validation messages
            $messages = [
                'section_2_heading_en.required' => 'The heading in English is required.',
                'section_2_heading_mr.required' => 'The heading in Marathi is required.',
                'section_2_content_below_first_table_en.required' => 'The content below the first table in English is required.',
                'section_2_content_below_first_table_mr.required' => 'The content below the first table in Marathi is required.',
            ];
    
            // Validate the request data
            $validator = Validator::make($request->all(), $rules, $messages);
    
            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }
    
            // If validation passes, proceed with processing
            $input['section_2_heading_en'] = $request->section_2_heading_en;
            $input['section_2_heading_mr'] = $request->section_2_heading_mr;
            $input['section_2_content_below_first_table_en'] = $request->section_2_content_below_first_table_en;
            $input['section_2_content_below_first_table_mr'] = $request->section_2_content_below_first_table_mr;
    
            if (!empty($request->id)) {
                $id = $request->id;
                $input['modified_by'] = auth()->guard('master_admins')->user()->id;
                $input['modified_ip_address'] = $request->ip();
                InterestRates::findOrFail($id)->update($input);
                return redirect('admin/interest-rates')->with('success', 'Interest Rates Main Banner Updated Successfully!');
            } else {
                $input['created_by'] = auth()->guard('master_admins')->user()->id;
                $input['created_ip_address'] = $request->ip();
                InterestRates::create($input);
                return redirect('admin/interest-rates')->with('success', 'Interest Rates Main Banner Added Successfully!');
            }
        }

    }



  


    public function storeDepositInterestRatesTable1(Request $request)
   {
    
        $rules = [
            'period_en' => 'required',
            'period_mr' => 'required',
            'general_interest_rate_en' => 'required',
            'general_interest_rate_mr' => 'required',
            'senior_citizens_interest_rate_en' => 'required',
            'senior_citizens_interest_rate_mr' => 'required',
        ];

 
        $messages = [
            'period_en.required' => 'The period (English) field is required.',
            'period_mr.required' => 'The period (Marathi) field is required.',
            'general_interest_rate_en.required' => 'The general interest rate (English) field is required.',
            'general_interest_rate_mr.required' => 'The general interest rate (Marathi) field is required.',
            'senior_citizens_interest_rate_en.required' => 'The senior citizens interest rate (English) field is required.',
            'senior_citizens_interest_rate_mr.required' => 'The senior citizens interest rate (Marathi) field is required.',
        ];

 
            $validatedData = $request->validate($rules, $messages);

        
            $input['period_en'] = $request->period_en;
            $input['period_mr'] = $request->period_mr;
            $input['general_interest_rate_en'] = $request->general_interest_rate_en;
            $input['general_interest_rate_mr'] = $request->general_interest_rate_mr;
            $input['senior_citizens_interest_rate_en'] = $request->senior_citizens_interest_rate_en;
            $input['senior_citizens_interest_rate_mr'] = $request->senior_citizens_interest_rate_mr;

            if (!empty($request->id)) {
                $id = $request->id;
                $input['modified_by'] = auth()->guard('master_admins')->user()->id;
                $input['modified_ip_address'] = $request->ip();
                DepositInterestRatesTable1::findOrFail($id)->update($input);
                return redirect('admin/interest-rates')->with('success', 'Interest Rates Updated Successfully!');
            } else {
                $input['created_by'] = auth()->guard('master_admins')->user()->id;
                $input['created_ip_address'] = $request->ip();
                DepositInterestRatesTable1::create($input);
                return redirect('admin/interest-rates')->with('success', 'Interest Rates Added Successfully!');
            }
}




public function data_table1(Request $request){

    $banner = DepositInterestRatesTable1::where('status', '!=', 'delete')->get();
    
    if ($request->ajax()){
        return DataTables::of($banner)
            ->addIndexColumn()

           

            ->addColumn('period_en', function ($row){
                return !empty($row->period_en) ? $row->period_en : '';
            })


            ->addColumn('period_mr', function ($row){
                return !empty($row->period_mr) ? $row->period_mr : '';
            })

            ->addColumn('general_interest_rate_en', function ($row){
                return !empty($row->general_interest_rate_en) ? $row->general_interest_rate_en : '';
            })


            ->addColumn('general_interest_rate_mr', function ($row){
                return !empty($row->general_interest_rate_mr) ? $row->general_interest_rate_mr: '';
            })


            ->addColumn('senior_citizens_interest_rate_en', function ($row){
                return !empty($row->senior_citizens_interest_rate_en) ? $row->senior_citizens_interest_rate_en: '';
            })


            ->addColumn('senior_citizens_interest_rate_mr', function ($row){
                return !empty($row->senior_citizens_interest_rate_mr) ? $row->senior_citizens_interest_rate_mr: '';
            })



            ->addColumn('status', function ($row){
                if ($row->status == 'active') {
                    $statusActiveBtn = '<a href="javascript:void(0);"  data-id="' . $row->id . '" data-table="deposit_interest_rates_table1s" data-flash="Status Changed Successfully!" class="change-status"  ><i class="fa fa-toggle-on tgle-on  status_button" aria-hidden="true" title="Active"></i></a>';
                    return $statusActiveBtn;
                } else {
                    $statusBlockBtn = '<a href="javascript:void(0);"  data-id="' . $row->id . '" data-table="deposit_interest_rates_table1s" data-flash="Status Changed Successfully!" class="change-status" ><i class="fa fa-toggle-off tgle-off  status_button" aria-hidden="true" title="Inactive"></i></a>';
                    return $statusBlockBtn;
                }
            })



            ->addColumn('action', function ($row) {
                $actionBtn = '';
            
             
                $actionBtn .= '<a href="' . url('admin/deposit_interest_rates_table1/edit/' . $row->id ) . '"> <button type="button" data-id="' . $row->id . '" class="tabledit-edit-button btn bg-warning text-white" title="Edit"><i class="mdi mdi-pencil"></i></button></a>';
            
                $actionBtn .=  ' <a href="javascript:void(0);" data-id="' . $row->id . '" data-table="deposit_interest_rates_table1s" data-flash="Deleted Successfully!" class="tabledit-delete-button btn btn-danger delete" title="Delete"><i class="mdi mdi-trash-can"></i></a>';
                
                return $actionBtn;
            })
            
        
            ->rawColumns([ 'action', 'status', 'image'])
            ->make(true);

           
    }
}


public function deposit_interest_rates_table1_edit($id){

    $table1 = DepositInterestRatesTable1::where('id',$id)->first();

    $interest=InterestRates::where('status','active')->first();

    return view('Admin.InterestRates.interest_rates',compact('interest','table1'));
}







public function storeDepositInterestRatesTable2(Request $request)
{
    // Define validation rules
    $rules = [
        'loan_type_en' => 'required',
        'loan_type_mr' => 'required',
        'interest_rate_en' => 'required',
        'interest_rate_mr' => 'required',
    ];

    // Define custom messages
    $messages = [
        'loan_type_en.required' => 'The loan type (English) field is required.',
        'loan_type_mr.required' => 'The loan type (Marathi) field is required.',
        'interest_rate_en.required' => 'The interest rate (English) field is required.',
        'interest_rate_mr.required' => 'The interest rate (Marathi) field is required.',
    ];

    // Validate the request
    $validatedData = $request->validate($rules, $messages);

    // If validation passes, proceed with processing
    $input['loan_type_en'] = $request->loan_type_en;
    $input['loan_type_mr'] = $request->loan_type_mr;
    $input['interest_rate_en'] = $request->interest_rate_en;
    $input['interest_rate_mr'] = $request->interest_rate_mr;

    if (!empty($request->id)) {
        $id = $request->id;
        $input['modified_by'] = auth()->guard('master_admins')->user()->id;
        $input['modified_ip_address'] = $request->ip();
        DepositInterestRatesTable2::findOrFail($id)->update($input);
        return redirect('admin/interest-rates')->with('success', 'Interest Rates Updated Successfully!');
    } else {
        $input['created_by'] = auth()->guard('master_admins')->user()->id;
        $input['created_ip_address'] = $request->ip();
        DepositInterestRatesTable2::create($input);
        return redirect('admin/interest-rates')->with('success', 'Interest Rates Added Successfully!');
    }
}




public function data_table2(Request $request){ 

    $banner = DepositInterestRatesTable2::where('status', '!=', 'delete')->get();
    
    if ($request->ajax()){
        return DataTables::of($banner)
            ->addIndexColumn()

           

            ->addColumn('loan_type_en', function ($row){
                return !empty($row->loan_type_en) ? $row->loan_type_en : '';
            })


            ->addColumn('loan_type_mr', function ($row){
                return !empty($row->loan_type_mr) ? $row->loan_type_mr : '';
            })

      

            ->addColumn('interest_rate_en', function ($row){
                return !empty($row->interest_rate_en) ? $row->interest_rate_en: '';
            })


            ->addColumn('interest_rate_mr', function ($row){
                return !empty($row->interest_rate_mr) ? $row->interest_rate_mr: '';
            })


        
            ->addColumn('status', function ($row){
                if ($row->status == 'active') {
                    $statusActiveBtn = '<a href="javascript:void(0);"  data-id="' . $row->id . '" data-table="deposit_interest_rates_table2s" data-flash="Status Changed Successfully!" class="change-status"  ><i class="fa fa-toggle-on tgle-on  status_button" aria-hidden="true" title="Active"></i></a>';
                    return $statusActiveBtn;
                } else {
                    $statusBlockBtn = '<a href="javascript:void(0);"  data-id="' . $row->id . '" data-table="deposit_interest_rates_table2s" data-flash="Status Changed Successfully!" class="change-status" ><i class="fa fa-toggle-off tgle-off  status_button" aria-hidden="true" title="Inactive"></i></a>';
                    return $statusBlockBtn;
                }
            })



            ->addColumn('action', function ($row) {
                $actionBtn = '';
            
             
                $actionBtn .= '<a href="' . url('admin/deposit_interest_rates_table2/edit/' . $row->id ) . '"> <button type="button" data-id="' . $row->id . '" class="tabledit-edit-button btn bg-warning text-white" title="Edit"><i class="mdi mdi-pencil"></i></button></a>';
            
                $actionBtn .=  ' <a href="javascript:void(0);" data-id="' . $row->id . '" data-table="deposit_interest_rates_table2s" data-flash="Deleted Successfully!" class="tabledit-delete-button btn btn-danger delete" title="Delete"><i class="mdi mdi-trash-can"></i></a>';
                
                return $actionBtn;
            })
            
        
            ->rawColumns([ 'action', 'status', 'image'])
            ->make(true);

           
    }
}



public function deposit_interest_rates_table2_edit($id){

    $table2 = DepositInterestRatesTable2::where('id',$id)->first();

    $interest=InterestRates::where('status','active')->first();

    return view('Admin.InterestRates.interest_rates',compact('interest','table2'));
}







 
    

}

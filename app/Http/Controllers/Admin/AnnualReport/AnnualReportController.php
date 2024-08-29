<?php

namespace App\Http\Controllers\Admin\AnnualReport;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\MediaTrait;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use App\Models\AnnualReport;




class AnnualReportController extends Controller
{
    use MediaTrait;
    public function index(){
        return view('Admin.AnnualReport.annual_report');
    }



    public function store(Request $request)
    {

       

         // Base validation rules
        $rules = [
            'report_name_en' => 'required|string',
            'report_name_mr' => 'required|string',
            // Conditionally apply rules based on ID presence
            'report_pdf_en' => $request->id ? 'nullable|file|mimes:pdf' : 'required|file|mimes:pdf',
            'report_pdf_mr' => $request->id ? 'nullable|file|mimes:pdf' : 'required|file|mimes:pdf',
        ];

        // Custom validation messages
        $messages = [
            'report_pdf_en.required' => 'The English report PDF is required.',
            'report_pdf_en.file' => 'The English report must be a file.',
            'report_pdf_en.mimes' => 'Only PDF files are allowed for the English report.',
            'report_pdf_en.max' => 'The English report PDF size must not exceed 2MB.',
            'report_pdf_mr.required' => 'The Marathi report PDF is required.',
            'report_pdf_mr.file' => 'The Marathi report must be a file.',
            'report_pdf_mr.mimes' => 'Only PDF files are allowed for the Marathi report.',
            'report_pdf_mr.max' => 'The Marathi report PDF size must not exceed 2MB.',
        ];

        // Validate the request
        $validated = $request->validate($rules, $messages);

            
        $input = $validated;
        $input['page_name'] = $request->page_name;
        $input['banner_heading_heading_en'] = $request->banner_heading_heading_en;
        $input['banner_heading_heading_mr'] = $request->banner_heading_heading_mr;

        // Handle file uploads
        if ($request->hasFile('report_pdf_en')) {
            $input['report_pdf_en_path'] = $this->verifyAndUpload($request, 'report_pdf_en', 'report/pdf');
            $input['report_pdf_en_name'] = $request->file('report_pdf_en')->getClientOriginalName();
        }

           // Handle file uploads
           if ($request->hasFile('report_pdf_mr')) {
            $input['report_pdf_mr_path'] = $this->verifyAndUpload($request, 'report_pdf_mr', 'report/pdf');
            $input['report_pdf_mr_name'] = $request->file('report_pdf_mr')->getClientOriginalName();
        }

        // Create or update banner
        if (!empty($request->id)){
            $id = $request->id;
            $input['modified_by'] = auth()->guard('master_admins')->user()->id;
            $input['modified_ip_address'] = $request->ip();
            AnnualReport::findOrFail($request->id)->update($input);
            return redirect('admin/annual-report')->with('success', 'Report Updated Successfully!');
        } else {
            $input['created_by'] = auth()->guard('master_admins')->user()->id;
            $input['created_ip_address'] = $request->ip();
            AnnualReport::create($input);
            return redirect('admin/annual-report')->with('success', 'Report Added Successfully!');
        }
    }



     public function data_table(Request $request){

        $report = AnnualReport::where('status', '!=', 'delete')->orderBy('id','DESC')->get();
        
        if ($request->ajax()){
            return DataTables::of($report)
                ->addIndexColumn()

                ->addColumn('report_name_en', function ($row) {
                    return !empty($row->report_name_en) ? $row->report_name_en : '';
                })


                ->addColumn('report_name_mr', function ($row) {
                    return !empty($row->report_name_mr) ? $row->report_name_mr : '';
                })
                



                ->addColumn('report_pdf_en_path', function ($row) {
                    $pdf_path = '';
                    $pdf_icon = '<i class="mdi mdi-file-pdf" data-name="mdi-file-pdf" style="font-size: 30px; width: 30px; height: 24px;"></i>';
                    if (!empty($row->report_pdf_en_path)) {
                        $pdf_path = Storage::exists($row->report_pdf_en_path) ? url('/') . Storage::url($row->report_pdf_en_path) : URL::asset('admin_panel/images/default/default_profile.jpg');
                    }
                    return '<a href="' . $pdf_path . '" target="_blank">' . $pdf_icon . '</a>';
                })


                ->addColumn('report_pdf_mr_path', function ($row) {
                    $pdf_path = '';
                    $pdf_icon = '<i class="mdi mdi-file-pdf" data-name="mdi-file-pdf" style="font-size: 30px; width: 30px; height: 24px;"></i>';
                    if (!empty($row->report_pdf_mr_path)) {
                        $pdf_path = Storage::exists($row->report_pdf_mr_path) ? url('/') . Storage::url($row->report_pdf_mr_path) : URL::asset('admin_panel/images/default/default_profile.jpg');
                    }
                    return '<a href="' . $pdf_path . '" target="_blank">' . $pdf_icon . '</a>';
                })
                




                ->addColumn('status', function ($row){
                    if ($row->status == 'active') {
                        $statusActiveBtn = '<a href="javascript:void(0);"  data-id="' . $row->id . '" data-table="annual_reports" data-flash="Status Changed Successfully!" class="change-status"  ><i class="fa fa-toggle-on tgle-on  status_button" aria-hidden="true" title="Active"></i></a>';
                        return $statusActiveBtn;
                    } else {
                        $statusBlockBtn = '<a href="javascript:void(0);"  data-id="' . $row->id . '" data-table="annual_reports" data-flash="Status Changed Successfully!" class="change-status" ><i class="fa fa-toggle-off tgle-off  status_button" aria-hidden="true" title="Inactive"></i></a>';
                        return $statusBlockBtn;
                    }
                })



                ->addColumn('action', function ($row) {
                    $actionBtn = '';
                
                 
                    $actionBtn .= '<a href="' . url('admin/annual-report/edit/' . $row->id ) . '"> <button type="button" data-id="' . $row->id . '" class="tabledit-edit-button btn bg-warning text-white" title="Edit"><i class="mdi mdi-pencil"></i></button></a>';
                
                    $actionBtn .=  ' <a href="javascript:void(0);" data-id="' . $row->id . '" data-table="annual_reports" data-flash="Report Deleted Successfully!" class="tabledit-delete-button btn btn-danger delete" title="Delete"><i class="mdi mdi-trash-can"></i></a>';
                    
                    return $actionBtn;
                })
                
            
                ->rawColumns([ 'action', 'status', 'report_pdf_en_path','report_pdf_mr_path'])
                ->make(true);
    
               
        }
    }



    public function edit($id){

        $annualReport= AnnualReport::where('id',$id)->first();

        return view('Admin.AnnualReport.annual_report',compact('annualReport'));
    }









}

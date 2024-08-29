<?php

namespace App\Http\Controllers\Admin\Branch;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use App\Models\Branch;

class BranchController extends Controller
{
    public function index(){
        return view('Admin.Branch.branch');
    }



    public function store(Request $request)
    {
        // Base validation rules
        $rules = [
            'branch_name_en' => 'required|string',
            'branch_name_mr' => 'required|string',
            'address_en' => 'required|string',
            'address_mr' => 'required|string',
        ];
    
        // Custom validation messages
        $messages = [
            'branch_name_en.required' => 'The English branch name is required.',
            'branch_name_en.string' => 'The English branch name must be a string.',
            'branch_name_mr.required' => 'The Marathi branch name is required.',
            'branch_name_mr.string' => 'The Marathi branch name must be a string.',
            'address_en.required' => 'The English address is required.',
            'address_en.string' => 'The English address must be a string.',
            'address_mr.required' => 'The Marathi address is required.',
            'address_mr.string' => 'The Marathi address must be a string.',
        ];
    
        // Validate the request
        $validated = $request->validate($rules, $messages);
    
        // Prepare input data
        $input = [
            'branch_name_en' => $request->branch_name_en,
            'branch_name_mr' => $request->branch_name_mr,
            'address_en' => $request->address_en,
            'address_mr' => $request->address_mr,
        ];
    
        // Create or update branch
        if (!empty($request->id)) {
            $id = $request->id;
            $input['modified_by'] = auth()->guard('master_admins')->user()->id;
            $input['modified_ip_address'] = $request->ip();
            Branch::findOrFail($request->id)->update($input);
            return redirect('admin/branch')->with('success', 'Branch Updated Successfully!');
        } else {
            $input['created_by'] = auth()->guard('master_admins')->user()->id;
            $input['created_ip_address'] = $request->ip();
            Branch::create($input);
            return redirect('admin/branch')->with('success', 'Branch Added Successfully!');
        }
        
    }



    // public function data_table(Request $request){

    //     $branch = Branch::where('status', '!=', 'delete')->orderBy('id','DESC')->get();
        
    //     if ($request->ajax()){
    //         return DataTables::of($branch)
    //             ->addIndexColumn()

    //             ->addColumn('branch_name_en', function ($row) {
    //                 return !empty($row->branch_name_en) ? $row->branch_name_en : '';
    //             })

    //             ->addColumn('branch_name_mr', function ($row) {
    //                 return !empty($row->branch_name_mr) ? $row->branch_name_mr : '';
    //             })
                

    //             ->addColumn('address_en', function ($row) {
    //                 return !empty($row->address_en) ? trim(html_entity_decode(strip_tags($row->address_en))) : '';
    //             })
                
    //             ->addColumn('address_mr', function ($row) {
    //                 return !empty($row->address_mr) ? trim(html_entity_decode(strip_tags($row->address_mr))) : '';
    //             })
                


            

    //             ->addColumn('status', function ($row){
    //                 if ($row->status == 'active') {
    //                     $statusActiveBtn = '<a href="javascript:void(0);"  data-id="' . $row->id . '" data-table="branches" data-flash="Status Changed Successfully!" class="change-status"  ><i class="fa fa-toggle-on tgle-on  status_button" aria-hidden="true" title="Active"></i></a>';
    //                     return $statusActiveBtn;
    //                 } else {
    //                     $statusBlockBtn = '<a href="javascript:void(0);"  data-id="' . $row->id . '" data-table="branches" data-flash="Status Changed Successfully!" class="change-status" ><i class="fa fa-toggle-off tgle-off  status_button" aria-hidden="true" title="Inactive"></i></a>';
    //                     return $statusBlockBtn;
    //                 }
    //             })



    //             ->addColumn('action', function ($row) {
    //                 $actionBtn = '';

    //                 $actionBtn .= '<a href="' . url('admin/branch/edit/' . $row->id ) . '"> <button type="button" data-id="' . $row->id . '" class="tabledit-edit-button btn bg-warning text-white" title="Edit"><i class="mdi mdi-pencil"></i></button></a>';
                
    //                 $actionBtn .=  ' <a href="javascript:void(0);" data-id="' . $row->id . '" data-table="branches" data-flash="Deleted Successfully!" class="tabledit-delete-button btn btn-danger delete" title="Delete"><i class="mdi mdi-trash-can"></i></a>';
                    
    //                 return $actionBtn;
    //             })
                
            
    //             ->rawColumns([ 'action', 'status'])
    //             ->make(true);
    
               
    //     }
    // }


    public function data_table(Request $request) {
        $branch = Branch::where('status', '!=', 'delete')->get();
    
        if ($request->ajax()){
            return DataTables::of($branch)
                ->addIndexColumn()
    
                ->addColumn('branch_name_en', function ($row) {
                    return !empty($row->branch_name_en) ? $row->branch_name_en : '';
                })
    
                ->addColumn('branch_name_mr', function ($row) {
                    return !empty($row->branch_name_mr) ? $row->branch_name_mr : '';
                })
                
                ->addColumn('address_en', function ($row) {
                    return !empty($row->address_en) ? '<div class="wrap-text address-col">' . trim(html_entity_decode(strip_tags($row->address_en))) . '</div>' : '';
                })
                
                ->addColumn('address_mr', function ($row) {
                    return !empty($row->address_mr) ? '<div class="wrap-text address-col">' . trim(html_entity_decode(strip_tags($row->address_mr))) . '</div>' : '';
                })
    
                ->addColumn('status', function ($row){
                    if ($row->status == 'active') {
                        $statusActiveBtn = '<a href="javascript:void(0);"  data-id="' . $row->id . '" data-table="branches" data-flash="Status Changed Successfully!" class="change-status"  ><i class="fa fa-toggle-on tgle-on  status_button" aria-hidden="true" title="Active"></i></a>';
                        return $statusActiveBtn;
                    } else {
                        $statusBlockBtn = '<a href="javascript:void(0);"  data-id="' . $row->id . '" data-table="branches" data-flash="Status Changed Successfully!" class="change-status" ><i class="fa fa-toggle-off tgle-off  status_button" aria-hidden="true" title="Inactive"></i></a>';
                        return $statusBlockBtn;
                    }
                })
    
                ->addColumn('action', function ($row) {
                    $actionBtn = '';
                    $actionBtn .= '<a href="' . url('admin/branch/edit/' . $row->id ) . '"> <button type="button" data-id="' . $row->id . '" class="tabledit-edit-button btn bg-warning text-white" title="Edit"><i class="mdi mdi-pencil"></i></button></a>';
                    $actionBtn .=  ' <a href="javascript:void(0);" data-id="' . $row->id . '" data-table="branches" data-flash="Deleted Successfully!" class="tabledit-delete-button btn btn-danger delete" title="Delete"><i class="mdi mdi-trash-can"></i></a>';
                    return $actionBtn;
                })
                
                ->rawColumns([ 'action', 'status', 'address_en', 'address_mr'])
                ->make(true);
        }
    }
    



    public function edit($id){
    
        $branch = Branch::where('id', $id)->first();

        return view('Admin.Branch.branch',compact('branch'));
    }
    



}

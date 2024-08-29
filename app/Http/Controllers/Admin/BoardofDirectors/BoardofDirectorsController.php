<?php

namespace App\Http\Controllers\Admin\BoardofDirectors;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BoardofDirectors;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class BoardofDirectorsController extends Controller
{

    public function index(){
        return view('Admin.BoardofDirectors.board_of_directors');
    }


    // public function store(Request $request){
       

    //      // Validation rules
    //      $rules = [
    //         'designation_en' => 'required|string',
    //         'designation_mr' => 'required|string',
    //         'name_en' => 'required|string', 
    //         'name_mr' => 'required|string', 
    //     ];
    
    //     // Custom validation messages
    //     $messages = [
    //         'designation_en.required' => 'The English heading is required.',
    //         'designation_en.string' => 'The English heading must be a string.',
    //         'designation_mr.max' => 'The English heading cannot exceed 255 characters.',
    //         'designation_mr.required' => 'The Marathi heading is required.',
    //         'name_en.string' => 'The Marathi heading must be a string.',
    //         'name_en.max' => 'The Marathi heading cannot exceed 255 characters.',
    //         'name_mr.required' => 'The English description is required.',
    //         'name_mr.string' => 'The English description must be a string.',
    //     ];
    
    //     // Validate the request
    //     $validated = $request->validate($rules, $messages);



    //     $input['designation_en'] = $request->designation_en;
    //     $input['designation_mr'] = $request->designation_mr;

    //     $input['name_en'] = $request->description_en;
    //     $input['name_mr'] = $request->description_mr;


  

    //     if (!empty($request->id)) {
    //         $input['modified_by'] = auth()->guard('master_admins')->user()->id;
    //         $input['modified_ip_address'] = $request->ip();
    //         BoardofDirectors::find($id)->update($input);
    //         return redirect('admin/board-of-directors')->with('success', 'About Us Updated Successfully!');
    //     } else {
    //         $input['created_by'] = auth()->guard('master_admins')->user()->id;
    //         $input['created_ip_address'] = $request->ip();
          
    //         BoardofDirectors::create($input);
    //         return redirect('admin/board-of-directors')->with('success', 'About Us Added Successfully!');
    //     }
    // }


    public function store(Request $request){

        // dd($request->all());
       
        $rules = [
            'designation_en' => 'required|string|max:255',
            'designation_mr' => 'required|string|max:255',
            'name_en' => 'required|string|max:255', 
            'name_mr' => 'required|string|max:255', 
        ];
    
        $messages = [
            'designation_en.required' => 'The English designation is required.',
            'designation_en.string' => 'The English designation must be a string.',
            'designation_en.max' => 'The English designation cannot exceed 255 characters.',
            'designation_mr.required' => 'The Marathi designation is required.',
            'designation_mr.string' => 'The Marathi designation must be a string.',
            'designation_mr.max' => 'The Marathi designation cannot exceed 255 characters.',
            'name_en.required' => 'The English name is required.',
            'name_en.string' => 'The English name must be a string.',
            'name_en.max' => 'The English name cannot exceed 255 characters.',
            'name_mr.required' => 'The Marathi name is required.',
            'name_mr.string' => 'The Marathi name must be a string.',
            'name_mr.max' => 'The Marathi name cannot exceed 255 characters.',
        ];
    
     
        $validated = $request->validate($rules, $messages);
    
        $input['designation_en'] = $request->designation_en;
        $input['designation_mr'] = $request->designation_mr;
        $input['name_en'] = $request->name_en;
        $input['name_mr'] = $request->name_mr;
    
        if (!empty($request->id)) {
            $input['modified_by'] = auth()->guard('master_admins')->user()->id;
            $input['modified_ip_address'] = $request->ip();
            BoardofDirectors::find($request->id)->update($input);
            return redirect('admin/board-of-directors')->with('success', 'About Us Updated Successfully!');
        } else {
            $input['created_by'] = auth()->guard('master_admins')->user()->id;
            $input['created_ip_address'] = $request->ip();
            BoardofDirectors::create($input);
            return redirect('admin/board-of-directors')->with('success', 'About Us Added Successfully!');
        }
    }




    public function data_table(Request $request){

        $banner = BoardofDirectors::where('status', '!=', 'delete')->orderBy('id','DESC')->get();
        
        if ($request->ajax()){
            return DataTables::of($banner)
                ->addIndexColumn()

                ->addColumn('designation_en', function ($row) {
                    return !empty($row->designation_en) ? $row->designation_en : '';
                })

                ->addColumn('designation_mr', function ($row) {
                    return !empty($row->designation_mr) ? $row->designation_mr : '';
                })
                

                ->addColumn('name_en', function ($row){
                    return !empty($row->name_en) ? $row->name_en : '';
                })

                ->addColumn('name_mr', function ($row){
                    return !empty($row->name_mr) ? $row->name_mr : '';
                })

            

                ->addColumn('status', function ($row){
                    if ($row->status == 'active') {
                        $statusActiveBtn = '<a href="javascript:void(0);"  data-id="' . $row->id . '" data-table="boardof_directors" data-flash="Status Changed Successfully!" class="change-status"  ><i class="fa fa-toggle-on tgle-on  status_button" aria-hidden="true" title="Active"></i></a>';
                        return $statusActiveBtn;
                    } else {
                        $statusBlockBtn = '<a href="javascript:void(0);"  data-id="' . $row->id . '" data-table="boardof_directors" data-flash="Status Changed Successfully!" class="change-status" ><i class="fa fa-toggle-off tgle-off  status_button" aria-hidden="true" title="Inactive"></i></a>';
                        return $statusBlockBtn;
                    }
                })



                ->addColumn('action', function ($row) {
                    $actionBtn = '';

                    $actionBtn .= '<a href="' . url('admin/board-of-directors/edit/' . $row->id ) . '"> <button type="button" data-id="' . $row->id . '" class="tabledit-edit-button btn bg-warning text-white" title="Edit"><i class="mdi mdi-pencil"></i></button></a>';
                
                    $actionBtn .=  ' <a href="javascript:void(0);" data-id="' . $row->id . '" data-table="boardof_directors" data-flash="Deleted Successfully!" class="tabledit-delete-button btn btn-danger delete" title="Delete"><i class="mdi mdi-trash-can"></i></a>';
                    
                    return $actionBtn;
                })
                
            
                ->rawColumns([ 'action', 'status'])
                ->make(true);
    
               
        }
    }



    public function edit($id){

        $director = BoardofDirectors::where('id',$id)->first();

        return view('Admin.BoardofDirectors.board_of_directors',compact('director'));
    }




    
    
}

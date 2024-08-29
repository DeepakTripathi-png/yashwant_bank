<?php

namespace App\Http\Controllers\Admin\ServiceCharge;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServiceCharges;
use App\Models\ServiceChargesTariff;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;


class ServiceChargesController extends Controller
{
    public function index(){
        return view('Admin.ServiceCharges.service-charges');
    }


 
    public function storeServiceCharges(Request $request)
    {
        // Validate the request
        $request->validate([
            'particular_en' => 'required|string',
            'particular_mr' => 'required|string',
            'sr_no_en' => 'nullable|string',
            'sr_no_mr' => 'nullable|string',
            'commission_with_gst_en' => 'nullable|string',
            'commission_with_gst_mr' => 'nullable|string',
        ]);

        // Prepare input data
        $input = $request->only([
            'sr_no_en',
            'sr_no_mr',
            'particular_en',
            'particular_mr',
            'commission_with_gst_en',
            'commission_with_gst_mr',
        ]);

        if (!empty($request->id)) {
            $id = $request->id;
            $input['modified_by'] = auth()->guard('master_admins')->user()->id;
            $input['modified_ip_address'] = $request->ip();
            ServiceCharges::findOrFail($id)->update($input);
            return redirect('admin/service-charges')->with('success', 'Service Charges Updated Successfully!');
        } else {
            $input['created_by'] = auth()->guard('master_admins')->user()->id;
            $input['created_ip_address'] = $request->ip();
            ServiceCharges::create($input);
            return redirect('admin/service-charges')->with('success', 'Service Charges Added Successfully!');
        }
    }



 

    public function storeServiceChargesTariff(Request $request)
   {
        // Validate the request
        $request->validate([
            'charges_en' => 'required|string',
            'charges_mr' => 'required|string',
            'amount_en' => 'nullable|string',
            'amount_mr' => 'nullable|string',
            'sr_no_en' => 'nullable|string',
            'sr_no_mr' => 'nullable|string',
            'remarks_en' => 'nullable|string',
            'remarks_mr' => 'nullable|string',
        ]);

        // Prepare input data
        $input = $request->only([
            'sr_no_en',
            'sr_no_mr',
            'charges_en',
            'charges_mr',
            'amount_en',
            'amount_mr',
            'remarks_en',
            'remarks_mr',
        ]);

        if (!empty($request->id)) {
            $id = $request->id;
            $input['modified_by'] = auth()->guard('master_admins')->user()->id;
            $input['modified_ip_address'] = $request->ip();
            ServiceChargesTariff::findOrFail($id)->update($input);
            return redirect('admin/service-charges')->with('success', 'Tariff Sheet Updated Successfully!');
        } else {
            $input['created_by'] = auth()->guard('master_admins')->user()->id;
            $input['created_ip_address'] = $request->ip();
            ServiceChargesTariff::create($input);
            return redirect('admin/service-charges')->with('success', 'Tariff Sheet Added Successfully!');
        }
    }



    public function data_table(Request $request){

        $charges= ServiceCharges::where('status', '!=', 'delete')->get();
        
        if ($request->ajax()){
            return DataTables::of($charges)

                 ->addIndexColumn()

                ->addColumn('sr_no_en', function ($row){
                    return !empty($row->sr_no_en) ? $row->sr_no_en : '';
                })

                ->addColumn('sr_no_mr', function ($row){
                    return !empty($row->sr_no_mr) ? $row->sr_no_mr : '';
                })


                // ->addColumn('particular_en', function ($row){
                //     return !empty($row->particular_en) ? $row->particular_en : '';
                // })

                // ->addColumn('particular_mr', function ($row){
                //     return !empty($row->particular_mr) ? $row->particular_mr : '';
                // })



                // ->addColumn('commission_with_gst_en', function ($row){
                //     return !empty($row->commission_with_gst_en) ? $row->commission_with_gst_en : '';
                // })

                
                // ->addColumn('commission_with_gst_mr', function ($row){
                //     return !empty($row->commission_with_gst_mr) ? $row->commission_with_gst_mr : '';
                // })


                ->addColumn('particular_en', function ($row){
                    return !empty($row->particular_en) ? implode(' ', array_slice(explode(' ', $row->particular_en), 0, 2)) : '';
                })
                
                ->addColumn('particular_mr', function ($row){
                    return !empty($row->particular_mr) ? implode(' ', array_slice(explode(' ', $row->particular_mr), 0, 2)) : '';
                })
                
                ->addColumn('commission_with_gst_en', function ($row){
                    return !empty($row->commission_with_gst_en) ? implode(' ', array_slice(explode(' ', $row->commission_with_gst_en), 0, 2)) : '';
                })
                
                ->addColumn('commission_with_gst_mr', function ($row){
                    return !empty($row->commission_with_gst_mr) ? implode(' ', array_slice(explode(' ', $row->commission_with_gst_mr), 0, 2)) : '';
                })
                


        

                ->addColumn('status', function ($row){
                    if ($row->status == 'active') {
                        $statusActiveBtn = '<a href="javascript:void(0);"  data-id="' . $row->id . '" data-table="service_charges" data-flash="Status Changed Successfully!" class="change-status"  ><i class="fa fa-toggle-on tgle-on  status_button" aria-hidden="true" title="Active"></i></a>';
                        return $statusActiveBtn;
                    } else {
                        $statusBlockBtn = '<a href="javascript:void(0);"  data-id="' . $row->id . '" data-table="service_charges" data-flash="Status Changed Successfully!" class="change-status" ><i class="fa fa-toggle-off tgle-off  status_button" aria-hidden="true" title="Inactive"></i></a>';
                        return $statusBlockBtn;
                    }
                })



                ->addColumn('action', function ($row) {
                    $actionBtn = '';
                
                 
                    $actionBtn .= '<a href="' . url('admin/service_charges/edit/' . $row->id ) . '"> <button type="button" data-id="' . $row->id . '" class="tabledit-edit-button btn bg-warning text-white" title="Edit"><i class="mdi mdi-pencil"></i></button></a>';
                
                    $actionBtn .=  ' <a href="javascript:void(0);" data-id="' . $row->id . '" data-table="service_charges" data-flash="Deleted Successfully!" class="tabledit-delete-button btn btn-danger delete" title="Delete"><i class="mdi mdi-trash-can"></i></a>';
                    
                    return $actionBtn;
                })
                
            
                ->rawColumns([ 'action', 'status'])
                ->make(true);
    
               
        }
    }


    public function editServiceCharges($id){
        $table1= ServiceCharges::where('id',$id)->first();

        return view('Admin.ServiceCharges.service-charges',compact('table1'));

    }




    public function data_table1(Request $request){

        $teriff= ServiceChargesTariff::where('status', '!=', 'delete')->get();
        
        if ($request->ajax()){
            return DataTables::of($teriff)

                 ->addIndexColumn()
               

                ->addColumn('sr_no_en', function ($row){
                    return !empty($row->sr_no_en) ? $row->sr_no_en : '';
                })

                ->addColumn('sr_no_mr', function ($row){
                    return !empty($row->sr_no_mr) ? $row->sr_no_mr : '';
                })


                ->addColumn('charges_en', function ($row){
                    return !empty($row->charges_en) ? $row->charges_en : '';
                })

                ->addColumn('charges_mr', function ($row){
                    return !empty($row->charges_mr) ? $row->charges_mr : '';
                })



                ->addColumn('amount_en', function ($row){
                    return !empty($row->amount_en) ? $row->amount_en : '';
                })

                
                ->addColumn('amount_mr', function ($row){
                    return !empty($row->amount_mr) ? $row->amount_mr : '';
                })

                ->addColumn('remarks_en', function ($row){
                    return !empty($row->remarks_en) ? $row->remarks_en : '';
                })


                ->addColumn('remarks_mr', function ($row){
                    return !empty($row->remarks_mr) ? $row->remarks_mr: '';
                })


                ->addColumn('status', function ($row){
                    if ($row->status == 'active') {
                        $statusActiveBtn = '<a href="javascript:void(0);"  data-id="' . $row->id . '" data-table="service_charges_tariffs" data-flash="Status Changed Successfully!" class="change-status"  ><i class="fa fa-toggle-on tgle-on  status_button" aria-hidden="true" title="Active"></i></a>';
                        return $statusActiveBtn;
                    } else {
                        $statusBlockBtn = '<a href="javascript:void(0);"  data-id="' . $row->id . '" data-table="service_charges_tariffs" data-flash="Status Changed Successfully!" class="change-status" ><i class="fa fa-toggle-off tgle-off  status_button" aria-hidden="true" title="Inactive"></i></a>';
                        return $statusBlockBtn;
                    }
                })



                ->addColumn('action', function ($row) {
                    $actionBtn = '';
                
                 
                    $actionBtn .= '<a href="' . url('admin/service-charges-tarrif/edit/' . $row->id ) . '"> <button type="button" data-id="' . $row->id . '" class="tabledit-edit-button btn bg-warning text-white" title="Edit"><i class="mdi mdi-pencil"></i></button></a>';
                
                    $actionBtn .=  ' <a href="javascript:void(0);" data-id="' . $row->id . '" data-table="service_charges_tariffs" data-flash="Deleted Successfully!" class="tabledit-delete-button btn btn-danger delete" title="Delete"><i class="mdi mdi-trash-can"></i></a>';
                    
                    return $actionBtn;
                })
                
            
                ->rawColumns([ 'action', 'status','remarks_en','remarks_mr'])
                ->make(true);
    
               
        }
    }


    public function editServiceChargesTerrif($id){

        $table2= ServiceChargesTariff::where('id',$id)->first();

        return view('Admin.ServiceCharges.service-charges',compact('table2'));

    }


    


}

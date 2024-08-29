<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MasterBanner;
use Illuminate\Support\Facades\App;
use App\Models\ServiceCharges;
use App\Models\ServiceChargesTariff;

class FrontServiceChargesController extends Controller
{


    public function index(){

        $locale = App::getLocale();

        $banner = MasterBanner::where('status','active')->where('page_name','service_charges')->first();


        $table1=ServiceCharges::where('status','active')->get();

        $table2=ServiceChargesTariff::where('status','active')->get();

     
        
        return view('front.service_charges',compact('banner','locale','table1','table2'));
    }
    
}

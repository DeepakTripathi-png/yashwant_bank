<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MasterBanner;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use App\Models\Service;

class FrontServiceController extends Controller
{

    // public function coreBanking(Request $request){

    //     $locale = App::getLocale();

    //     $banner = MasterBanner::where('status','active')->where('page_name','core_banking')->first();

    //     $service= Service::where('status','active')->where('service_page_name','core_banking')->first();


    //     return view('front.core_banking',compact('locale','banner','service'));
    // }



    // public function smsAlert(Request $request){

    //     $locale = App::getLocale();

    //     $banner = MasterBanner::where('status','active')->where('page_name','sms_alert')->first();

    //     $service= Service::where('status','active')->where('service_page_name','sms_alert')->first();


    //     return view('front.sms_alert',compact('locale','banner','service'));
    // }


    // public function rtgs(Request $request){

    //     $locale = App::getLocale();

    //     $banner = MasterBanner::where('status','active')->where('page_name','rtgs')->first();

    //     $service= Service::where('status','active')->where('service_page_name','rgts_neft')->first();


    //     return view('front.rtgs',compact('locale','banner','service'));
    // }



    
    // public function lockerFacility(Request $request){

    //     $locale = App::getLocale();

    //     $banner = MasterBanner::where('status','active')->where('page_name','locker')->first();

    //     $service= Service::where('status','active')->where('service_page_name','locker_facility')->first();


    //     return view('front.locker_suvidha',compact('locale','banner','service'));
    // }



    // public function goldLoan(Request $request){

    //     $locale = App::getLocale();

    //     $banner = MasterBanner::where('status','active')->where('page_name','gold_loan')->first();

    //     $service= Service::where('status','active')->where('service_page_name','gold_loan')->first();


    //     return view('front.sone_taran',compact('locale','banner','service'));
    // }


    // public function electricBill(Request $request){

    //     $locale = App::getLocale();

    //     $banner = MasterBanner::where('status','active')->where('page_name','electricity_bill')->first();

    //     $service= Service::where('status','active')->where('service_page_name','electricity_bill')->first();


    //     return view('front.lightbill_barana_kendra',compact('locale','banner','service'));
    // }



    // public function pigmyDeposit(Request $request){

    //     $locale = App::getLocale();

    //     $banner = MasterBanner::where('status','active')->where('page_name','pigmy_deposit')->first();

    //     $service= Service::where('status','active')->where('service_page_name','pigmy_deposit_scheme')->first();


    //     return view('front.pigmi_deposit_scheme',compact('locale','banner','service'));
    // }



    public function serviceView(Request $request){

        //dd($request->slug);

        $locale = App::getLocale();

        $banner = MasterBanner::where('status','active')->where('page_name',$request->slug)->first();

        $service= Service::where('status','active')->where('service_slug_url',$request->slug)->first();


        return view('front.service_view',compact('locale','banner','service'));
    }



    

}

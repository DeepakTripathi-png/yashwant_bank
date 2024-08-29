<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MasterBanner;
use Illuminate\Support\Facades\App;
use App\Models\InterestRates;
use App\Models\DepositInterestRatesTable1;
use App\Models\DepositInterestRatesTable2;



class FrontInterestRateController extends Controller
{


    public function index(){

        $locale = App::getLocale();

        $banner = MasterBanner::where('status','active')->where('page_name','interest_rates')->first();

        $interest=InterestRates::where('status','active')->first();

        $table1=DepositInterestRatesTable1::where('status','active')->get();

        $table2=DepositInterestRatesTable2::where('status','active')->get();

        
        return view('front.vyajdar',compact('banner','locale','interest','table1','table2'));
    }

    
}

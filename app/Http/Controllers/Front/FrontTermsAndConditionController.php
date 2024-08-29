<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use App\Models\TermsAndCondition;
use App\Models\MasterBanner;

class FrontTermsAndConditionController extends Controller
{
    public function index(){

        $locale = App::getLocale();

        $banner = MasterBanner::where('status','active')->where('page_name','terms_and_condition')->first();

        $terms=TermsAndCondition::where('status','active')->first();
    

        return view('front.terms_and_conditions_for_mobile_banking',compact('locale','banner','terms'));
    }
}

<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use App\Models\UnclaimedDeposite;
use App\Models\MasterBanner;


class FrontUnclaimedDepositeController extends Controller
{
    public function index(){

        $locale = App::getLocale();

        $banner = MasterBanner::where('status','active')->where('page_name','unclaimed_deposite')->first();

        $customers=UnclaimedDeposite::where('status','active')->get();
    

        return view('front.unclaimed_deposite',compact('locale','banner','customers'));
    }
}

<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use App\Models\PrivacyPolicy;
use App\Models\MasterBanner;

class FrontPrivacyPolicyController extends Controller
{


    public function index(){

        $locale = App::getLocale();

        $banner = MasterBanner::where('status','active')->where('page_name','privacy_policy')->first();

        $privacy=PrivacyPolicy::where('status','active')->first();
        



        return view('front.data_protection_privacy_policy',compact('locale','banner','privacy'));
    }

}

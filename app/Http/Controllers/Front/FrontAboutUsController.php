<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MasterBanner;
use App\Models\AboutUs;

class FrontAboutUsController extends Controller
{

    public function index(){

        $banner = MasterBanner::where('status','active')->where('page_name','about_us')->first();
        $about=AboutUs::first();


        return view('front.amchya_vishai',compact('banner','about'));
    }
      
}

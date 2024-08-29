<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeSliderImages;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use App\Models\HomeServiceSection;
use App\Models\Service;
use App\Models\HomeChairManSection;
use App\Models\HomeVariousSchemeSection;

class FrontHomeController extends Controller
{

    public function index(){

        $locale = App::getLocale();

     


    $langImages = HomeSliderImages::where('status', 'active')
                    ->where('lang', $locale)
                    ->orderBy('id', 'asc')
                    ->get();




    $independentImages =HomeSliderImages::where('status', 'active')
                           ->whereNull('lang')
                           ->orderBy('id', 'asc')
                           ->get();

    $slider = $langImages->merge($independentImages);


        // Fetch the active service section
        $serviceSection = HomeServiceSection::where('status', 'active')
        ->first();

        $services=Service::where('status','active')->get();

        $chairMan=HomeChairManSection::where('status','active')->first();

        $schemes=HomeVariousSchemeSection::where('status','active')->get();
 
       return view('front.index',compact('slider','serviceSection','locale','services','chairMan','schemes'));
    }
    
}

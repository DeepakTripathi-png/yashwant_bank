<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MasterBanner;
use Illuminate\Support\Facades\App;
use App\Models\Branch;

use App\Models\BoardofDirectors;

class FrontBranchesController extends Controller
{
    
    public function index(){

        $locale = App::getLocale();

        $banner = MasterBanner::where('status','active')->where('page_name','our_branches')->first();

        $branches=Branch::where('status','active')->get();
        
        return view('front.amchya_shakha',compact('banner','locale','branches'));
    }
}

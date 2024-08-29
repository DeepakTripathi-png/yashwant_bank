<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MasterBanner;
use App\Models\BoardofDirectors;

class FrontBoardofDirectorsController extends Controller
{
    public function index(){

        $banner = MasterBanner::where('status','active')->where('page_name','board_of_directors')->first();
        $members=BoardofDirectors::where('status','active')->get();


        return view('front.sanchalak_mandal',compact('banner','members'));
    }
}

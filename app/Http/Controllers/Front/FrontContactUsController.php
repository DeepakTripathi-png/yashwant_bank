<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MasterBanner;
use Illuminate\Support\Facades\App;
use App\Models\ContactDetails;
use App\Models\ContactUsQuery;
use App\Mail\ContactUsQueryMail;
use Illuminate\Support\Facades\Mail;


class FrontContactUsController extends Controller
{
    public function index(){

        $locale = App::getLocale();

        $banner = MasterBanner::where('status','active')->where('page_name','contact')->first();

        $contact=ContactDetails::where('status','active')->first();
        
        return view('front.contact',compact('banner','locale','contact'));
    }


    

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mobile' => 'required|string|max:15',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        // Save the query to the database
        ContactUsQuery::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        // Send email to admin
        $adminEmail = 'deepakmegreat@gmail.com'; // Replace with the admin's email address
        Mail::to($adminEmail)->send(new ContactUsQueryMail($request->all()));

        return redirect()->back()->with('success', 'Thank you for contacting us!');
    }


}

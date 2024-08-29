
@extends('front.layouts.app')

@section('content')

<style>
	.google_map{
		width:100%;
		height:500px;
	}
	.mail_link{
		color:#6A6A6A;
	}
	.mail_link:after,.mail_link:hover {
		color:#EE3C25;
		/* border-bottom:1px solid #6A6A6A!important;
		width:55%; */
	}
	.container-contact100 {
    min-height: 70vh!important;
 
    }
	input.input100 {
    height:40px!important;
    }
	.label-input100 {
		height:40px!important;
     }
	.container-contact100 {
    flex-wrap: wrap;
	justify-content:left!important;
    align-items: left!important;
   
    }
	textarea.input100 {
    min-height:0px!important;
    }
	.contact-info p {
    line-height: 35px!important;
    }
	@media only screen and (max-width: 723px){
	section {
    padding: 0px 0px!important;
    }
	.google_map{
	width:100%;
	height:250px;
	}
	/* #banner-area{
		display:none!important;
	}
	.section1{
		padding:280px 0px 35px 0px!important;
	} */
	.contact_title{
		display:block;
	}
   }

   /* Hide on screens smaller than 720px */
@media only screen and (max-width: 720px) {
    .hide-on-mobile {
        display: none;
    }
}

</style>

<!-- Contact Form -->
 <link rel="stylesheet" type="text/css" href="{{ asset('front/contactform/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('front/contactform/vendor/css-hamburgers/hamburgers.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('front/contactform/vendor/animsition/css/animsition.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('front/contactform/vendor/select2/select2.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('front/contactform/vendor/daterangepicker/daterangepicker.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('front/contactform/css/util.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('front/contactform/css/main.css') }}">


<!-- .........................contact form links.......................................	 -->

<div id="banner-area" class="hide-on-mobile">
        <img style="padding-top: 4%;" src="{{!empty($banner->banner_image_path)?url('/').Storage::url($banner->banner_image_path):asset('front/images/banner/contact.jpg')}}" width="100%" alt="" />
        <div class="parallax-overlay"></div>
        <div class="banner-title-content">
            <div class="text-center">
                <h2>
                @if($locale == 'mr')
                    {{ !empty($banner->banner_heading_heading_mr)?$banner->banner_heading_heading_mr:'' }}
                @else
                    {{ !empty($banner->banner_heading_heading_en)?$banner->banner_heading_heading_en:'' }}
                 @endif
                </h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="#">@lang('contactUs.home')</a></li>
                        <li class="breadcrumb-item text-white" aria-current="page">
                            @if($locale == 'mr')
                              {{ !empty($banner->banner_heading_heading_mr)?$banner->banner_heading_heading_mr:'' }}
                            @else
                              {{ !empty($banner->banner_heading_heading_en)?$banner->banner_heading_heading_en:'' }}
                            @endif
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section1" id="main-container " style="padding-top:0px;">
            <div class="row contact_title"  style="display:none;">
                <div class="col-md-2 heading text-center">
                </div>
                <div class="col-md-8 heading text-center">
                    <h1 class="title-border">
                        @if($locale == 'mr')
                          {{ !empty($banner->banner_heading_heading_mr)?$banner->banner_heading_heading_mr:'' }}
                        @else
                          {{ !empty($banner->banner_heading_heading_en)?$banner->banner_heading_heading_en:'' }}
                      @endif
                    </h1>
                </div>
                <div class="col-md-2 heading text-center">
                </div>
            </div>

       

            @if(!empty($contact->map_url))
            <div class=""style="padding:20px 20px  0px 20px ;">
                <div id="map-container-google-1" class="z-depth-1-half map-container ">
                    <iframe class="google_map" src="{{!empty($contact->map_url)?$contact->map_url:''}}" frameborder="0"
                    style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            @endif

           

            {{-- {{dd($contact)}} --}}

            <div class="contact-section" style="padding: 20px;">
                <div class="container-contact100">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8">
                                <div style="padding-right: 20px;">

                                    {{-- <form class="validate-form" id="save-contact-form" class="comment-form validate" action="save-contact-form" method="post" role="form">
                                        <span class="contact100-form-title" style="font-size: 24px; font-weight: bold; font-family: Arial, sans-serif; color: #333;">
                                            @lang('contactUs.heading_2')
                                        </span>
                                        <div class="wrap-input100 validate-input" data-validate="Name is required">
                                            <input class="input100" id="name" type="text" name="name" placeholder="@lang('contactUs.name')*" style="font-family: Arial, sans-serif; color: #333;">
                                            <label class="label-input100" for="name">
                                                <span class="lnr lnr-user"></span>
                                            </label>
                                        </div>
                                        <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                                            <input class="input100" id="email" type="text" name="email" placeholder="@lang('contactUs.email')*" style="font-family: Arial, sans-serif; color: #333;">
                                            <label class="label-input100" for="email">
                                                <span class="lnr lnr-envelope"></span>
                                            </label>
                                        </div>
                                        <div class="wrap-input100 validate-input" data-validate="Phone is required">
                                            <input class="input100" id="mobile" type="text" name="mobile" placeholder="@lang('contactUs.phone')*" style="font-family: Arial, sans-serif; color: #333;">
                                            <label class="label-input100" for="phone">
                                                <span class="lnr lnr-phone-handset"></span>
                                            </label>
                                        </div>
                                        <div class="wrap-input100">
                                            <input class="input100" id="subject" type="text" name="subject" placeholder="@lang('contactUs.subject')" style="font-family: Arial, sans-serif; color: #333;">
                                            <label class="label-input100" for="subject">
                                                <span class="fa fa-book"></span>
                                            </label>
                                        </div>
                                        <div class="wrap-input100">
                                            <textarea class="input100" rows="5" name="message" placeholder="@lang('contactUs.message')" style="font-family: Arial, sans-serif; color: #333;"></textarea>
                                        </div>
                                        <button class="btn btn-primary solid blank common_save" type="submit" style="font-family: Arial, sans-serif; color: #fff;">@lang('contactUs.send_message')</button>
                                    </form> --}}

                                    <form class="validate-form" id="save-contact-form" action="{{ route('contact.store') }}" method="post" role="form">
                                        @csrf
                                        <span class="contact100-form-title" style="font-size: 24px; font-weight: bold; font-family: Arial, sans-serif; color: #333;">
                                            @lang('contactUs.heading_2')
                                        </span>
                                        <div class="wrap-input100 validate-input" data-validate="Name is required">
                                            <input class="input100" id="name" type="text" name="name" placeholder="@lang('contactUs.name')*" style="font-family: Arial, sans-serif; color: #333;">
                                            <label class="label-input100" for="name">
                                                <span class="lnr lnr-user"></span>
                                            </label>
                                        </div>
                                        <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                                            <input class="input100" id="email" type="text" name="email" placeholder="@lang('contactUs.email')*" style="font-family: Arial, sans-serif; color: #333;">
                                            <label class="label-input100" for="email">
                                                <span class="lnr lnr-envelope"></span>
                                            </label>
                                        </div>
                                        <div class="wrap-input100 validate-input" data-validate="Phone is required">
                                            <input class="input100" id="mobile" type="text" name="mobile" placeholder="@lang('contactUs.phone')*" style="font-family: Arial, sans-serif; color: #333;">
                                            <label class="label-input100" for="phone">
                                                <span class="lnr lnr-phone-handset"></span>
                                            </label>
                                        </div>
                                        <div class="wrap-input100">
                                            <input class="input100" id="subject" type="text" name="subject" placeholder="@lang('contactUs.subject')" style="font-family: Arial, sans-serif; color: #333;">
                                            <label class="label-input100" for="subject">
                                                <span class="fa fa-book"></span>
                                            </label>
                                        </div>
                                        <div class="wrap-input100">
                                            <textarea class="input100" rows="5" name="message" placeholder="@lang('contactUs.message')" style="font-family: Arial, sans-serif; color: #333;"></textarea>
                                        </div>
                                        <button class="btn btn-primary solid blank common_save" type="submit" style="font-family: Arial, sans-serif; color: #fff;">@lang('contactUs.send_message')</button>
                                    </form>
                                    

                                    <br>
                                    
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="wrap-contact100" style="padding: 0px!important;">
                                    <div class="contact-info" style="font-family: Arial, sans-serif; color: #333;">
                                        <span class="contact100-form-title" style="font-size: 24px; font-weight: bold;">
                                            @lang('contactUs.heading_3')
                                        </span>
                                        <p style="margin-top: 10px;"><i style="color:#EE3C25;" class="fa fa-home"></i> 
                                            @if($locale == 'mr')
                                              {!! !empty($contact->address_mr)?$contact->address_mr:'' !!}
                                            @else
                                              {!! !empty($contact->address_en)?$contact->address_en:'' !!}
                                            @endif

                                            {{-- @lang('contactUs.address_1'),<br> @lang('contactUs.address_2') --}}
                                        </p>
                                        <p style="margin-top: 10px;"><i style="color:#EE3C25;" class="fa fa-phone"></i> {{!empty($contact->first_mobile)?$contact->first_mobile:''}}</p>
                                        <p style="margin-top: 10px;"><i style="color:#EE3C25;font-size:140%;" class="fa fa-mobile"></i> {{!empty($contact->second_mobile)?$contact->second_mobile:''}}</p>
                                        <a href="mailto:{{!empty($contact->first_email)?$contact->first_email:''}}" style="text-decoration: none;">
                                            <p class="mail_link" style="margin-top: 10px;"><i style="color:#EE3C25;" class="fa fa-envelope-o"></i> {{!empty($contact->first_email)?$contact->first_email:''}}</p>
                                        </a>
                                        <a href="mailto:{{!empty($contact->second_email)?$contact->second_email:''}}" style="text-decoration: none;">
                                            <p class="mail_link" style="margin-top: 10px;"> {{!empty($contact->second_email)?$contact->second_email:''}}</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><br><br>
@endsection
 
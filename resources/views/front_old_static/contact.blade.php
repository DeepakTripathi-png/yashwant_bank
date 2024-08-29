
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

<div id="banner-area">
        <img style="padding-top: 4%;" src="{{asset('front/images/banner/contact.jpg')}}" width="100%" alt="" />
        <div class="parallax-overlay"></div>
        <div class="banner-title-content">
            <div class="text-center">
                <h2>@lang('contactUs.heading')</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="#">@lang('contactUs.home')</a></li>
                        <li class="breadcrumb-item text-white" aria-current="page">@lang('contactUs.heading')</li>
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
                    <h1 class="title-border">@lang('contactUs.heading')</h1>
                </div>
                <div class="col-md-2 heading text-center">
                </div>
            </div>
            <div class=""style="padding:20px 20px  0px 20px ;">
                <!--Google map-->
                <div id="map-container-google-1" class="z-depth-1-half map-container ">
                    <iframe class="google_map" src="https://maps.google.com/maps?q=yashwant%20nagri%20sahkari%20bank%2C%20Maharashtra%20State%20Highway%2077%2C%20Prakash%20Nagar%2C%20Arvi%2C%20Maharashtra%20413512&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                    style="border:0" allowfullscreen></iframe>
                </div>
            </div>

            {{-- <div style="padding:20px 20px  0px 20px ;">
                <div class="container-contact100">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="" style="padding-right:20px;">
                                    <form class=" validate-form"form id="save-contact-form"  class="comment-form validate" action="save-contact-form" method="post" role="form">
                                        <span class="contact100-form-title">
                                            @lang('contactUs.heading_2')
                                        </span>
                                        <div class="wrap-input100 validate-input" data-validate="Name is required">
                                            <input class="input100" id="name" type="text" name="name" placeholder="Name*">
                                            <label class="label-input100" for="name">
                                                <span class="lnr lnr-user"></span>
                                            </label>
                                        </div>

                                        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                                            <input class="input100" id="email" type="text" name="email" placeholder="Email*">
                                            <label class="label-input100" for="email">
                                                <span class="lnr lnr-envelope"></span>
                                            </label>
                                        </div>

                                        <div class="wrap-input100 validate-input" data-validate = "Phone is required">
                                            <input class="input100" id="mobile" type="text" name="mobile" placeholder="Phone*">
                                            <label class="label-input100" for="phone">
                                                <span class="lnr lnr-phone-handset"></span>
                                            </label>
                                        </div>
                                        <div class="wrap-input100 ">
                                            <input class="input100" id="subject" type="text" name="subject" placeholder="subject">
                                            <label class="label-input100" for="subject">
                                                <span class="fa fa-book"></span>
                                            </label>
                                        </div>

                                        <div class="wrap-input100">
                                            <textarea class="input100" rows="5"name="message" placeholder="Your message..."></textarea>
                                        </div>
                                        <button class="btn btn-primary solid blank common_save" type="submit">Send Message</button>	
                                    </form><br>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="wrap-contact100" style="padding:0px!important;">
                                    <form class="contact100-form validate-form">
                                        <div class="contact-info">
                                            <span class="contact100-form-title">
                                                @lang('contactUs.heading_3')
                                            </span>
                                            <p><i style="color:#EE3C25;" class="fa fa-home "></i>यशवंत नागरी सहकारी बँक लि. लातूर ,<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; उषाकिरण कॉम्प्लेक्स ,बार्शी रोड, लातूर</p>
                                            <p><i style="color:#EE3C25;" class="fa fa-phone "></i> (02382) - 222142/222144</p>
                                            <p>	<i  style="color:#EE3C25;font-size:140%;" class="fa fa-mobile"></i> &nbsp;&nbsp;9881364572 </p>
                                            <a  href="mailto:info@yashwantbanklatur.com"><p class="mail_link"><i style="color:#EE3C25;" class="fa fa-envelope-o "></i>info@yashwantbanklatur.com <br></p></a>
                                            <a  href="mailto:yashwantbanklatur@yahoo.com"><p class="mail_link">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;yashwantbanklatur@yahoo.com <br></p></a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            {{-- <div style="padding:20px 20px 0px 20px;">
                <div class="container-contact100">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8">
                                <div style="padding-right:20px;">
                                    <form class="validate-form" id="save-contact-form" class="comment-form validate" action="save-contact-form" method="post" role="form">
                                        <span class="contact100-form-title">
                                            @lang('contactUs.heading_2')
                                        </span>
                                        <div class="wrap-input100 validate-input" data-validate="Name is required">
                                            <input class="input100" id="name" type="text" name="name" placeholder="Name*">
                                            <label class="label-input100" for="name">
                                                <span class="lnr lnr-user"></span>
                                            </label>
                                        </div>
                                        <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                                            <input class="input100" id="email" type="text" name="email" placeholder="Email*">
                                            <label class="label-input100" for="email">
                                                <span class="lnr lnr-envelope"></span>
                                            </label>
                                        </div>
                                        <div class="wrap-input100 validate-input" data-validate="Phone is required">
                                            <input class="input100" id="mobile" type="text" name="mobile" placeholder="Phone*">
                                            <label class="label-input100" for="phone">
                                                <span class="lnr lnr-phone-handset"></span>
                                            </label>
                                        </div>
                                        <div class="wrap-input100">
                                            <input class="input100" id="subject" type="text" name="subject" placeholder="Subject">
                                            <label class="label-input100" for="subject">
                                                <span class="fa fa-book"></span>
                                            </label>
                                        </div>
                                        <div class="wrap-input100">
                                            <textarea class="input100" rows="5" name="message" placeholder="Your message..."></textarea>
                                        </div>
                                        <button class="btn btn-primary solid blank common_save" type="submit">SEND MESSAGE</button>
                                    </form><br>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="wrap-contact100" style="padding:0px!important;">
                                    <div class="contact-info">
                                        <span class="contact100-form-title">
                                            @lang('contactUs.heading_3')
                                        </span>
                                        <p><i style="color:#EE3C25;" class="fa fa-home"></i> यशवंत नागरी सहकारी बँक लि. लातूर,<br> उषाकिरण कॉम्प्लेक्स, बार्शी रोड, लातूर</p>
                                        <p><i style="color:#EE3C25;" class="fa fa-phone"></i> (02382) - 222142/222144</p>
                                        <p><i style="color:#EE3C25;font-size:140%;" class="fa fa-mobile"></i> 9881364572</p>
                                        <a href="mailto:info@yashwantbanklatur.com">
                                            <p class="mail_link"><i style="color:#EE3C25;" class="fa fa-envelope-o"></i>info@yashwantbanklatur.com</p>
                                        </a>
                                        <a href="mailto:yashwantbanklatur@yahoo.com">
                                            <p class="mail_link">yashwantbanklatur@yahoo.com</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            {{-- <div class="contact-section" style="padding:20px 20px 0px 20px;">
                <div class="container-contact100">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8">
                                <div style="padding-right:20px;">
                                    <form class="validate-form" id="save-contact-form" class="comment-form validate" action="save-contact-form" method="post" role="form">
                                        <span class="contact100-form-title">
                                            @lang('contactUs.heading_2')
                                        </span>
                                        <div class="wrap-input100 validate-input" data-validate="Name is required">
                                            <input class="input100" id="name" type="text" name="name" placeholder="@lang('contactUs.name')*">
                                            <label class="label-input100" for="name">
                                                <span class="lnr lnr-user"></span>
                                            </label>
                                        </div>
                                        <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                                            <input class="input100" id="email" type="text" name="email" placeholder="@lang('contactUs.email')*">
                                            <label class="label-input100" for="email">
                                                <span class="lnr lnr-envelope"></span>
                                            </label>
                                        </div>
                                        <div class="wrap-input100 validate-input" data-validate="Phone is required">
                                            <input class="input100" id="mobile" type="text" name="mobile" placeholder="@lang('contactUs.phone')*">
                                            <label class="label-input100" for="phone">
                                                <span class="lnr lnr-phone-handset"></span>
                                            </label>
                                        </div>
                                        <div class="wrap-input100">
                                            <input class="input100" id="subject" type="text" name="subject" placeholder="@lang('contactUs.subject')">
                                            <label class="label-input100" for="subject">
                                                <span class="fa fa-book"></span>
                                            </label>
                                        </div>
                                        <div class="wrap-input100">
                                            <textarea class="input100" rows="5" name="message" placeholder="@lang('contactUs.message')"></textarea>
                                        </div>
                                        <button class="btn btn-primary solid blank common_save" type="submit">"@lang('contactUs.send_message')</button>
                                    </form><br>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="wrap-contact100" style="padding:0px!important;">
                                    <div class="contact-info">
                                        <span class="contact100-form-title">
                                            @lang('contactUs.heading_3')
                                        </span>
                                        <p><i style="color:#EE3C25;" class="fa fa-home"></i> @lang('contactUs.address_1'),<br> @lang('contactUs.address_2')</p>
                                        <p><i style="color:#EE3C25;" class="fa fa-phone"></i> (02382) - 222142/222144</p>
                                        <p><i style="color:#EE3C25;font-size:140%;" class="fa fa-mobile"></i> 9881364572</p>
                                        <a href="mailto:info@yashwantbanklatur.com">
                                            <p class="mail_link"><i style="color:#EE3C25;" class="fa fa-envelope-o"></i>info@yashwantbanklatur.com</p>
                                        </a>
                                        <a href="mailto:yashwantbanklatur@yahoo.com">
                                            <p class="mail_link">yashwantbanklatur@yahoo.com</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            {{-- <div class="contact-section" style="padding: 20px 20px 0px 20px;">
                <div class="container-contact100">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8">
                                <div style="padding-right:20px;">
                                    <form class="validate-form" id="save-contact-form" class="comment-form validate" action="save-contact-form" method="post" role="form">
                                        <span class="contact100-form-title">
                                            @lang('contactUs.heading_2')
                                        </span>
                                        <div class="wrap-input100 validate-input" data-validate="Name is required">
                                            <input class="input100" id="name" type="text" name="name" placeholder="@lang('contactUs.name')*">
                                            <label class="label-input100" for="name">
                                                <span class="lnr lnr-user"></span>
                                            </label>
                                        </div>
                                        <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                                            <input class="input100" id="email" type="text" name="email" placeholder="@lang('contactUs.email')*">
                                            <label class="label-input100" for="email">
                                                <span class="lnr lnr-envelope"></span>
                                            </label>
                                        </div>
                                        <div class="wrap-input100 validate-input" data-validate="Phone is required">
                                            <input class="input100" id="mobile" type="text" name="mobile" placeholder="@lang('contactUs.phone')*">
                                            <label class="label-input100" for="phone">
                                                <span class="lnr lnr-phone-handset"></span>
                                            </label>
                                        </div>
                                        <div class="wrap-input100">
                                            <input class="input100" id="subject" type="text" name="subject" placeholder="@lang('contactUs.subject')">
                                            <label class="label-input100" for="subject">
                                                <span class="fa fa-book"></span>
                                            </label>
                                        </div>
                                        <div class="wrap-input100">
                                            <textarea class="input100" rows="5" name="message" placeholder="@lang('contactUs.message')"></textarea>
                                        </div>
                                        <button class="btn btn-primary solid blank common_save" type="submit">@lang('contactUs.send_message')</button>
                                    </form><br>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="wrap-contact100" style="padding:0px!important;">
                                    <div class="contact-info">
                                        <span class="contact100-form-title">
                                            @lang('contactUs.heading_3')
                                        </span>
                                        <p><i style="color:#EE3C25;" class="fa fa-home"></i> @lang('contactUs.address_1'),<br> @lang('contactUs.address_2')</p>
                                        <p><i style="color:#EE3C25;" class="fa fa-phone"></i> (02382) - 222142/222144</p>
                                        <p><i style="color:#EE3C25;font-size:140%;" class="fa fa-mobile"></i> 9881364572</p>
                                        <a href="mailto:info@yashwantbanklatur.com">
                                            <p class="mail_link"><i style="color:#EE3C25;" class="fa fa-envelope-o"></i>info@yashwantbanklatur.com</p>
                                        </a>
                                        <a href="mailto:yashwantbanklatur@yahoo.com">
                                            <p class="mail_link">yashwantbanklatur@yahoo.com</p>
                                        </a>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div> --}}

            {{-- <div class="contact-section" style="padding:20px 20px 0px 20px;">
                <div class="container-contact100">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8">
                                <div style="padding-right:20px;">
                                    <form class="validate-form" id="save-contact-form" class="comment-form validate" action="save-contact-form" method="post" role="form">
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
                                        <button class="btn btn-primary solid blank common_save" type="submit" style="font-family: Arial, sans-serif; color: #333;">@lang('contactUs.send_message')</button>
                                    </form><br>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="wrap-contact100" style="padding:0px!important;">
                                    <div class="contact-info" style="font-family: Arial, sans-serif; color: #333;">
                                        <span class="contact100-form-title" style="font-size: 24px; font-weight: bold;">
                                            @lang('contactUs.heading_3')
                                        </span>
                                        <p style="margin-top: 10px;"><i style="color:#EE3C25;" class="fa fa-home"></i> @lang('contactUs.address_1'),<br> @lang('contactUs.address_2')</p>
                                        <p style="margin-top: 10px;"><i style="color:#EE3C25;" class="fa fa-phone"></i> (02382) - 222142/222144</p>
                                        <p style="margin-top: 10px;"><i style="color:#EE3C25;font-size:140%;" class="fa fa-mobile"></i> 9881364572</p>
                                        <a href="mailto:info@yashwantbanklatur.com" style="text-decoration: none;">
                                            <p class="mail_link" style="margin-top: 10px;"><i style="color:#EE3C25;" class="fa fa-envelope-o"></i>info@yashwantbanklatur.com</p>
                                        </a>
                                        <a href="mailto:yashwantbanklatur@yahoo.com" style="text-decoration: none;">
                                            <p class="mail_link" style="margin-top: 10px;">yashwantbanklatur@yahoo.com</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            <div class="contact-section" style="padding: 20px;">
                <div class="container-contact100">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8">
                                <div style="padding-right: 20px;">
                                    <form class="validate-form" id="save-contact-form" class="comment-form validate" action="save-contact-form" method="post" role="form">
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
                                    </form><br>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="wrap-contact100" style="padding: 0px!important;">
                                    <div class="contact-info" style="font-family: Arial, sans-serif; color: #333;">
                                        <span class="contact100-form-title" style="font-size: 24px; font-weight: bold;">
                                            @lang('contactUs.heading_3')
                                        </span>
                                        <p style="margin-top: 10px;"><i style="color:#EE3C25;" class="fa fa-home"></i> @lang('contactUs.address_1'),<br> @lang('contactUs.address_2')</p>
                                        <p style="margin-top: 10px;"><i style="color:#EE3C25;" class="fa fa-phone"></i> (02382) - 222142/222144</p>
                                        <p style="margin-top: 10px;"><i style="color:#EE3C25;font-size:140%;" class="fa fa-mobile"></i> 9881364572</p>
                                        <a href="mailto:info@yashwantbanklatur.com" style="text-decoration: none;">
                                            <p class="mail_link" style="margin-top: 10px;"><i style="color:#EE3C25;" class="fa fa-envelope-o"></i> info@yashwantbanklatur.com</p>
                                        </a>
                                        <a href="mailto:yashwantbanklatur@yahoo.com" style="text-decoration: none;">
                                            <p class="mail_link" style="margin-top: 10px;">yashwantbanklatur@yahoo.com</p>
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
 
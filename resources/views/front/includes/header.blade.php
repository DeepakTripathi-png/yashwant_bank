<!-- resources/views/front/includes/header.blade.php -->
<style>
    .dropdown-menu {
    position: absolute;
    top: 100%;
    left: 0;
    z-index: 1000;
    display: none; /* Ensure it is not hidden by default */
}

.dropdown-menu.show {
    display: block; /* Show the dropdown when the 'show' class is added */
}

.navbar-nav .nav-item .nav-link {
    padding: 15px 20px; /* Adjust padding as needed */
}

.wrap-text {
    white-space: normal; /* Allow text wrapping */
    word-wrap: break-word; /* Break long words if necessary */
}

    .header_logo {
        height: 70px !important;
        width: 70px !important;
    }
    .cont_padding {
        padding: 0px 50px;
    }
    .header_title {
        margin-bottom: -10px;
    }
    @media only screen and (max-width: 720px) {
        .header_logo {
            height: 50px !important;
            width: 50px !important;
            margin-left: 10px;
        }
        .header_title {
            font-size: 18px !important;
            margin-right: 10px !important;
            margin-left: -3px !important;
        }
        .cont_padding {
            padding: 0px 0px !important;
        }
    }

    .wrap-text {
        white-space: normal; 
        word-wrap: break-word; 
        overflow-wrap: break-word; 
   }

   .navbar ul:before {
    content: "";
    background: #000000;
    width: 10%;
    height: 0% !important;
    position: absolute;
    display: block;
    left: -7%;
}

.navbar-nav {
    background-color: #141b62;
}



.top-contact i.fa {
    color: #141b62;
    font-size: 3em;
    padding-right: 15px;
    vertical-align: middle;
}
.copyright.angle:before {
     background:white!important;
    height: 50px;
    top: -25px;
    -webkit-transform: skew(0deg, -2deg);
    transform: skew(0deg, -2deg);
}
#copyright {
    background-color: #191919!important;
}
</style>


<link rel='stylesheet' id='rs-plugin-settings-css'
href='https://www.lucbank.in/wp-content/plugins/revslider/public/assets/css/rs6.css?ver=6.3.3' type='text/css'
media='all' />

<link rel='stylesheet' id='bootstrap-css'
href='https://www.lucbank.in/wp-content/themes/terrifico/css/bootstrap.css?ver=6.4.5' type='text/css'
media='all' />


<link rel='stylesheet' id='terrifico-css'
href='https://www.lucbank.in/wp-content/themes/terrifico/style.css?ver=6.4.5' type='text/css' media='all' />


<script type="text/javascript" src="https://www.lucbank.in/wp-includes/js/jquery/jquery.min.js?ver=3.7.1"
id="jquery-core-js"></script>

<script type="text/javascript"
src="https://www.lucbank.in/wp-content/plugins/revslider/public/assets/js/rbtools.min.js?ver=6.3.3"
id="tp-tools-js"></script>

<script type="text/javascript"
src="https://www.lucbank.in/wp-content/plugins/revslider/public/assets/js/rs6.min.js?ver=6.3.3"
id="revmin-js"></script>

<script type="text/javascript"
src="https://www.lucbank.in/wp-content/plugins/wonderplugin-carousel/engine/wonderplugincarouselskins.js?ver=14.3"
id="wonderplugin-carousel-skins-script-js"></script>


<script type="text/javascript"
src="https://www.lucbank.in/wp-content/plugins/wonderplugin-carousel/engine/wonderplugincarousel.js?ver=14.3"
id="wonderplugin-carousel-script-js"></script>
<script type="text/javascript" src="https://www.lucbank.in/wp-content/themes/terrifico/js/bootstrap.js?ver=6.4.5"
id="bootstrap-js"></script>
<script type="text/javascript"
src="https://www.lucbank.in/wp-content/themes/terrifico/js/jquery.smartmenus.js?ver=6.4.5"
id="jquery-smartmenus-js"></script>
<script type="text/javascript"
src="https://www.lucbank.in/wp-content/themes/terrifico/js/jquery.smartmenus.bootstrap.js?ver=6.4.5"
id="jquery-smartmenus-bootstrap-js"></script>
<script type="text/javascript" src="https://www.lucbank.in/wp-content/themes/terrifico/js/imgLiquid.js?ver=6.4.5"
id="imgLiquid-js"></script>
<script type="text/javascript" src="https://www.lucbank.in/wp-content/themes/terrifico/js/modernizr.js?ver=6.4.5"
id="modernizr-js"></script>

<script type="text/javascript"
src="https://www.lucbank.in/wp-content/plugins/Ultimate_VC_Addons/assets/min-js/ultimate.min.js?ver=3.13.7"
id="ultimate-script-js"></script>
<link rel="https://api.w.org/" href="https://www.lucbank.in/wp-json/" />
<link rel="alternate" type="application/json" href="https://www.lucbank.in/wp-json/wp/v2/pages/5" />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://www.lucbank.in/xmlrpc.php?rsd" />

<link rel='shortlink' href='https://www.lucbank.in/' />
<link rel="alternate" type="application/json+oembed"
href="https://www.lucbank.in/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.lucbank.in%2F" />
<link rel="alternate" type="text/xml+oembed"
href="https://www.lucbank.in/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.lucbank.in%2F&#038;format=xml" />

<link rel="icon" href="https://www.lucbank.in/wp-content/uploads/2019/08/logo-83x80.png" sizes="32x32" />
<link rel="icon" href="https://www.lucbank.in/wp-content/uploads/2019/08/logo.png" sizes="192x192" />
<link rel="apple-touch-icon" href="https://www.lucbank.in/wp-content/uploads/2019/08/logo.png" />
<meta name="msapplication-TileImage" content="https://www.lucbank.in/wp-content/uploads/2019/08/logo.png" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



@php
use App\Models\Master\Visual_setting;

$logo = Visual_setting::where('status', 'active')->first();
@endphp



{{-- <header id="header" class="fixed-top header4" role="banner">
    <div class="container-fluid cont_padding">
        <nav class="navbar navbar-expand-lg navbar-light py-2">
            <a class="navbar-brand" href="{{ url('/') }}"><img class="img-fluid float-left header_logo" src="{{!empty($logo->logo_image_path)?url('/').Storage::url($logo->logo_image_path): asset('front/images/logo/yash_latur.jpg') }}" alt="logo"></a>
            <a href="#"><h2 class="header_title"><span style="color:#EE3C25">@lang('header.yashwant_bank_1')</span>&nbsp;<span style="color:#0267b0">@lang('header.yashwant_bank_2')&nbsp;@lang('header.yashwant_bank_3')</span></h2></a>
            <button class="navbar-toggler ml-auto border-0 rounded-0 text-dark" type="button" data-toggle="collapse"
                data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse text-center" id="navigation">

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">@lang('header.home')</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            @lang('header.about_us')
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ url('amchya-vishai') }}"> @lang('header.about_us')</a>

                            <a class="dropdown-item" href="{{ url('sanchalak-mandal') }}">@lang('header.sanchalak_mandal')</a>

                            @php
                                use App\Models\AnnualReport;
                            
                                $reports = AnnualReport::where('status', 'active')->orderBy('id', 'DESC')->get();
                            @endphp

                            @if(!empty($reports))
                            @foreach ($reports as $report )

                            @if(App::getLocale() == 'mr')
                                <a class="dropdown-item wrap-text" href="{{ !empty($report->report_pdf_mr_path) ? url('/').Storage::url($report->report_pdf_mr_path) : url('/') }}" download>
                                    {{ !empty($report->report_name_mr) ? $report->report_name_mr : '' }}
                                </a>
                            @else
                                <a class="dropdown-item wrap-text" href="{{ !empty($report->report_pdf_en_path) ? url('/').Storage::url($report->report_pdf_en_path) : url('/') }}" download>
                                    {{ !empty($report->report_name_en) ? $report->report_name_en : '' }}
                                </a>
                            @endif
                            @endforeach
                             
                            @endif

                            <a class="dropdown-item" href="{{ url('service-charges') }}">@lang('header.service_charges')</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            @lang('header.our_services')
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ url('core-banking') }}"> @lang('header.core_banking')</a>
                            <a class="dropdown-item" href="{{ url('sms-alert') }}">@lang('header.sms_alert')</a>
                            <a class="dropdown-item" href="{{ url('rtgs') }}">@lang('header.rtgs')</a>
                            <a class="dropdown-item" href="{{ url('locker-suvidha') }}">@lang('header.locker')</a>
                            <a class="dropdown-item" href="{{ url('sone-taran') }}">@lang('header.gold_loan')</a>

                            <a class="dropdown-item wrap-text" href="{{ url('lightbill-barana-kendra') }}">@lang('header.electricity_bill')</a>
                            <a class="dropdown-item" href="{{ url('pigmi-deposit-scheme') }}">@lang('header.pigmy_deposit')</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('amchya-shakha') }}">@lang('header.our_branches')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('vyajdar') }}">@lang('header.interest_rates')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('contact') }}">@lang('header.contact')</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @lang('header.language')
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item changeLang" data-lang="mr" href="#">मराठी</a>
                            <a class="dropdown-item changeLang" data-lang="en" href="#">English</a>
                        </div>
                    </li>
                    


                </ul>
            </div>
        </nav>
    </div>
</header> --}}

<style>
#menu-main-menu {
    display: flex;
    flex-wrap: nowrap;
    list-style: none;
    padding: 0;
    margin: 0;
}

#menu-main-menu li {
    margin: 0;
    padding: 0;
    display: inline-block;
}

#menu-main-menu li a {
    display: block;
    padding: 10px 15px; /* Adjust as needed */
    text-decoration: none;
}

.navbar-nav {
    display: flex;
    flex-direction: row;
    justify-content: space-around; 
    position:absolute;
}


@media (max-width: 768px) {
    #menu-main-menu {
        flex-direction: column; /* Stack vertically on smaller screens */
    }
}

/* Ensure dropdown menu is properly positioned */
.dropdown-menu {
    position: absolute;
    top: 100%; /* Adjust if needed */
    left: 0;
    margin: 0;
    padding: 0;
    background-color: #fff; /* Match your navbar's background color */
    border: 1px solid rgba(0, 0, 0, 0.15);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    z-index: 1000; /* Ensure it appears above other elements */
}

/* Ensure the parent navbar has relative positioning */
.navbar {
    position: relative;
}


.dropdown-menu {
    background-color: #010101; /* Or any color you want */
    position: absolute;
}

.dropdown-menu.show {
    display: block;
    position: absolute;
}
.copyright.angle:before {
    background: white !important;
    height: 34px;
    top: 25px;
    -webkit-transform: skew(0deg, -2deg);
    transform: skew(1deg, -2deg);
}


@media (max-width: 400px){

    .carousel-inner {
        position: relative;
        width: 100%;
        overflow: hidden;
        margin-top: -96px !important;
    }
}


</style>  

<style>
/* Ensure proper width allocation between left and right sides */
#header-top .top-left {
    width: 50%;
    float: left;
    overflow: hidden;
}

#header-top .top-right-side {
    width: 50%;
    float: right;
    overflow: hidden;
}

/* Set a fixed height for the header carousel */
#header-carousel-container #headerTextCarousel {
    max-height: 60px; /* Adjust as needed */
    overflow: hidden;
}

/* Limit the height of the text within the header carousel */
#header-carousel-container .carousel-inner {
    max-height: 60px; /* Match this to the carousel height */
}

#header-carousel-container .header-carousel-text {
    font-size: 14px; /* Reduce font size to fit content */
    line-height: 1.2; /* Adjust line height for better spacing */
    margin: 0;
}

/* Adjust layout for smaller screens */
@media (max-width: 720px) {
    #header-top .top-left,
    #header-top .top-right-side {
        width: 100%;
        float: none;
        text-align: center;
    }

    #social-bar-header ul {
        padding: 0;
        margin: 0;
        list-style: none;
    }

    #social-bar-header ul li {
        display: inline-block;
        margin-right: 10px;
    }
}

/* Additional styling for the header carousel */
#headerTextCarousel {
    margin-right: 10px;
}

/* Adjust the social icons and language switcher */
#social-bar-header ul {
    display: flex;
    justify-content: flex-end;
    align-items: center;
    padding: 0;
    margin: 0;
    list-style: none;
}

#social-bar-header ul li {
    margin-left: 10px;
}

.language-dropdown select {
    border: 1px solid #ccc;
    border-radius: 4px;
    padding: 5px;
}

.active a {
    color: #232322 !important;
}
</style>

<style>
    #header-holder {
        padding: 10px 0;
    }

    #logo img {
        max-width: 100%;
        height: auto;
    }

    .top-contact {
        display: flex;
        justify-content: flex-end;
        align-items: center;
    }

    @media (max-width: 768px) {

        .navbar-default .navbar-header {
            margin: 0;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* .navbar-toggle {
            margin-right: 15px;
            
        } */

        .navbar-toggle {
          margin-left: 306px;
        }

        .navbar-collapse {
            background-color: #f8f8f8;
        }

        .top-contact {
            display: none;
        }

        .navbar-nav {
            display: flex;
            flex-direction: column;
            width: 100%;
        }

        .nav-item {
            width: 100%;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        .nav-link {
            display: block;
            padding: 10px;
        }

        .dropdown-menu {
            position: static;
            float: none;
            width: 100%;
            box-shadow: none;
        }

        .dropdown-item {
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }
    }
</style>




<div id="header-top">
    <div class="pagetop-inner clearfix">
        <!-- Left Side with Carousel -->
        <div class="top-left left mt-3">
            <div class="wondercarousellightbox_options" data-skinsfoldername=""
                data-jsfolder="https://www.lucbank.in/wp-content/plugins/wonderplugin-carousel/engine/"
                style="display:none;"></div>

            <div class="wonderplugincarousel-container" id="header-carousel-container">
                <div id="headerTextCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">

                        @php
                        use App\Models\TopSlider;
            
                        $topSlider = TopSlider::where('status', 'active')->get();
                        @endphp

                         @if(!empty($topSlider))
                         @foreach ( $topSlider as $slider)
                             
                        
                        <div class="carousel-item active">
                            <div class="d-block w-100">
                                <h5 class="text-center header-carousel-text">
                                    <a href="#" target="_blank">
                                        @if(App::getLocale() == 'mr')
                                         {{$slider->slider_text_mr}}
                                        @else
                                        {{$slider->slider_text_en}}
                                        @endif
                                       
                                    </a>
                                </h5>
                            </div>
                        </div>
                         @endforeach
                        @endif

                        {{-- <div class="carousel-item">
                            <div class="d-block w-100">
                                <h5 class="text-center header-carousel-text">
                                    <a href="#" target="_blank">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    </a>
                                </h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="d-block w-100">
                                <h5 class="text-center header-carousel-text">
                                    <a href="#" target="_blank">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    </a>
                                </h5>
                            </div>
                        </div> --}}

                    </div>
                </div>
            </div>
        </div>

        <!-- Right Side with Social Icons and Language Switcher -->
        <div class="top-right-side">
            @php
            use App\Models\Master\General_setting;

            $social = General_setting::where('status', 'active')->first();
            @endphp

            <div class="top-right right">
                <div id="social-bar-header">
                    <ul>
                        @if(!empty($social->facebook_url))
                        <li>
                            <a href="{{!empty($social->facebook_url)?$social->facebook_url:''}}" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a>
                        </li>
                        @endif

                        @if(!empty($social->twitter_url))
                        <li>
                            <a href="{{!empty($social->twitter_url)?$social->twitter_url:''}}" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a>
                        </li>
                        @endif

                        @if(!empty($social->linkedin_url))
                        <li>
                            <a href="{{!empty($social->linkedin_url)?$social->linkedin_url:''}}" target="_blank" title="LinkedIn"><i class="fa fa-linkedin"></i></a>
                        </li>
                        @endif

                        @if(!empty($social->instagram_url))
                        <li>
                            <a href="{{!empty($social->instagram_url)?$social->instagram_url:''}}" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a>
                        </li>
                        @endif

                        <li>
                            <div class="language-dropdown">
                                <select id="language-switcher" class="form-control">
                                    <option value="">Change language</option>
                                    <option value="en">English</option>
                                    <option value="mr">मराठी</option>
                                </select>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>







{{-- <div id="header-top">
    <div class="pagetop-inner clearfix">
        <div class="top-left left">


            <div class="wondercarousellightbox_options" data-skinsfoldername=""
                data-jsfolder="https://www.lucbank.in/wp-content/plugins/wonderplugin-carousel/engine/"
                style="display:none;"></div>

            <div class="wonderplugincarousel-container" id="wonderplugincarousel-container-1">

                <div class="wonderplugincarousel" id="wonderplugincarousel-1" data-carouselid="1" data-width="700"
                    data-height="20" data-skin="readmorebutton" data-showimgtitle="false" data-sameheight="false"
                    data-sameheightresponsive="false" data-fullwidth="false" data-centerimage="true"
                    data-fitimage="false" data-fitcenterimage="false" data-fixaspectratio="true"
                    data-autoplay="true" data-random="false" data-circular="true" data-pauseonmouseover="true"
                    data-continuous="false" data-responsive="true" data-showhoveroverlay="false"
                    data-showhoveroverlayalways="false" data-hidehoveroverlayontouch="false"
                    data-lightboxresponsive="true" data-lightboxshownavigation="false" data-lightboxnogroup="false"
                    data-lightboxshowtitle="true" data-lightboxshowdescription="false"
                    data-lightboxaddsocialmedia="false" data-usescreenquery="false" data-donotinit="false"
                    data-addinitscript="false" data-doshortcodeontext="false" data-lightboxshowsocial="false"
                    data-lightboxshowfacebook="true" data-lightboxshowtwitter="true"
                    data-lightboxshowpinterest="true" data-lightboxsocialrotateeffect="true"
                    data-donotcircularforless="false" data-deferloading="false"
                    data-hidecontainerbeforeloaded="false" data-hidecontaineroninit="true"
                    data-lightboximagekeepratio="true" data-showplayvideo="true" data-triggerresize="false"
                    data-lightboxfullscreenmode="false" data-lightboxcloseonoverlay="true"
                    data-lightboxvideohidecontrols="false" data-lightboxautoslide="false"
                    data-lightboxshowtimer="true" data-lightboxshowplaybutton="true"
                    data-lightboxalwaysshownavarrows="false" data-lightboxshowtitleprefix="true" data-spacing="4"
                    data-rownumber="1" data-visibleitems="1" data-arrowstyle="mouseover"
                    data-arrowimage="arrows-32-32-0.png" data-arrowwidth="32" data-arrowheight="32"
                    data-navstyle="none" data-navimage="bullet-16-16-0.png" data-navwidth="16" data-navheight="16"
                    data-navspacing="8" data-hoveroverlayimage="hoveroverlay-64-64-6.png"
                    data-lightboxthumbwidth="90" data-lightboxthumbheight="60" data-lightboxthumbtopmargin="12"
                    data-lightboxthumbbottommargin="4" data-lightboxbarheight="64"
                    data-lightboxtitlebottomcss="{color:#333; font-size:14px; font-family:Armata,sans-serif,Arial; overflow:hidden; text-align:left;}"
                    data-lightboxdescriptionbottomcss="{color:#333; font-size:12px; font-family:Arial,Helvetica,sans-serif; overflow:hidden; text-align:left; margin:4px 0px 0px; padding: 0px;}"
                    data-continuousduration="2500" data-autoplaydir="left" data-scrollmode="page"
                    data-interval="3000" data-transitionduration="1000" data-lightboxtitlestyle="bottom"
                    data-lightboximagepercentage="75" data-lightboxdefaultvideovolume="1"
                    data-lightboxoverlaybgcolor="#000" data-lightboxoverlayopacity="0.9" data-lightboxbgcolor="#fff"
                    data-lightboxtitleprefix="%NUM / %TOTAL"
                    data-lightboxtitleinsidecss="color:#fff; font-size:16px; font-family:Arial,Helvetica,sans-serif; overflow:hidden; text-align:left;"
                    data-lightboxdescriptioninsidecss="color:#fff; font-size:12px; font-family:Arial,Helvetica,sans-serif; overflow:hidden; text-align:left; margin:4px 0px 0px; padding: 0px;"
                    data-playvideoimage="playvideo-64-64-0.png" data-playvideoimagepos="center"
                    data-imgtitle="title" data-circularlimit="3" data-deferloadingdelay="0"
                    data-lightboxsocialposition="position:absolute;top:100%;right:0;"
                    data-lightboxsocialpositionsmallscreen="position:absolute;top:100%;right:0;left:0;"
                    data-lightboxsocialdirection="horizontal" data-lightboxsocialbuttonsize="32"
                    data-lightboxsocialbuttonfontsize="18" data-sameheightmediumscreen="769"
                    data-sameheightmediumheight="200" data-sameheightsmallscreen="415"
                    data-sameheightsmallheight="150" data-triggerresizedelay="100" data-lightboxslideinterval="5000"
                    data-lightboxtimerposition="bottom" data-lightboxtimercolor="#dc572e"
                    data-lightboxtimeropacity="1" data-lightboxbordersize="8" data-lightboxborderradius="0"
                    data-screenquery='{ "tablet": { "screenwidth": 800, "visibleitems": 2 }, "mobile": { "screenwidth": 480, "visibleitems": 1 } }'
                    data-jsfolder="https://www.lucbank.in/wp-content/plugins/wonderplugin-carousel/engine/"
                    style="display:none;position:relative;margin:0 auto;width:100%;max-width:700px;">
                    <div class="amazingcarousel-list-container" style="overflow:hidden;">
                        <ul class="amazingcarousel-list">
                            <li class="amazingcarousel-item">
                                <div class="amazingcarousel-item-container">
                                    <div class="amazingcarousel-title"><a
                                            href="https://www.lucbank.in/dear-customer-never-ever-share-your-card-number-expiry-date-cvv-pin-otp-password-with-anyone-this-can-be-misused-laxmi-bank-never-asks-for-such-details-if-you-receive-such-sms-call-report-to/"
                                            target="_blank">Dear Customer, Never ever share your card number,
                                            expiry date, CVV, PIN, OTP, Password with anyone. This can be
                                            misused. Laxmi Bank never asks for such details. If you receive such
                                            SMS/Call, report to cyber-crime cell immediately-
                                            https://cybercrime.gov.in</a></div>
                                </div>
                            </li>
                            <li class="amazingcarousel-item">
                                <div class="amazingcarousel-item-container">
                                    <div class="amazingcarousel-title"><a
                                            href="https://www.lucbank.in/special-mention-account-sma-and-non-performing-account-npa/"
                                            target="_blank">Special Mention Account (SMA) And Non Performing
                                            Account (NPA)</a></div>
                                </div>
                            </li>
                            <li class="amazingcarousel-item">
                                <div class="amazingcarousel-item-container">
                                    <div class="amazingcarousel-title"><a
                                            href="https://www.lucbank.in/%e0%a4%86%e0%a4%ae%e0%a4%9a%e0%a5%8d%e0%a4%af%e0%a4%be-%e0%a4%ac%e0%a4%81%e0%a4%95%e0%a5%87%e0%a4%9a%e0%a5%87-%e0%a4%a4%e0%a4%95%e0%a5%8d%e0%a4%b0%e0%a4%be%e0%a4%b0-%e0%a4%a8%e0%a4%bf%e0%a4%b5/"
                                            target="_blank">आमच्या बँकेचे तक्रार निवारण अधिकारी यांचा संपर्क:
                                            क्रमांक मो.नं ७७७००१४९००, ०२३८२-२५१७५३</a></div>
                                </div>
                            </li>
                        </ul>
                        <div class="amazingcarousel-prev"></div>
                        <div class="amazingcarousel-next"></div>
                    </div>
                    <div class="amazingcarousel-nav"></div>
                    <div class="wonderplugin-engine"><a href="http://www.wonderplugin.com/wordpress-carousel/"
                            title="Responsive WordPress Image Scroller">Responsive WordPress Image Scroller</a>
                    </div>
                </div>

            </div>
            
        </div>

        <div class="top-right-side">

            @php
            use App\Models\Master\General_setting;

            $social = General_setting::where('status', 'active')->first();

        
            @endphp

            <div class="top-right right">
                <div id="social-bar-header">
                    
                    <ul>
                        @if(!empty($social->facebook_url))
                        <li>
                            <a href="{{!empty($social->facebook_url)?$social->facebook_url:''}}" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a>
                        </li>
                        @endif

                        @if(!empty($social->twitter_url))
                        <li>
                            <a href="{{!empty($social->twitter_url)?$social->twitter_url:''}}" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a>
                        </li>
                        @endif
                       
                        @if(!empty($social->linkedin_url))
                        <li>
                            <a href="{{!empty($social->linkedin_url)?$social->linkedin_url:''}}" target="_blank" title="LinkedIn"><i class="fa fa-linkedin"></i></a>
                        </li>
                        @endif


                        @if(!empty($social->instagram_url))

                        <li>
                            <a href="{{!empty($social->instagram_url)?$social->instagram_url:''}}" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a>
                        </li>
                        @endif

                        <li>

                            
                            <div class="language-dropdown">
                                <select id="language-switcher" class="form-control">
                                    <option value="">Change language</option>
                                    <option value="en">English</option>
                                    <option value="mr">मराठी</option>
                                </select>
                            </div>

                        

                        </li>
                    </ul>
                </div>
            </div>
        </div>


    </div>
</div> --}}


{{-- <div id="header-holder">
    <div id="header-wrap">
        <nav class="navbar navbar-default">
            <div class="row">
                <div id="logo" class="col-md-5 left pr-4">
                    <a href="{{url('/')}}" class="custom-logo-link" rel="home" aria-current="page">
                        <img width="368" height="91"
                             src="{{ !empty($logo->logo_image_path) ? url('/') . Storage::url($logo->logo_image_path) : asset('front/images/logo/yash_latur.jpg') }}"
                             sizes="(max-width: 368px) 100vw, 368px"/>
                    </a>
                </div>
                <div class="col-md-7 top-contact">
                    <span class="top-time"><i class="fa fa-clock-o"></i> Mon To Sat 10:30am - 5:30pm</span>
                    <span class="top-email"><i class="fa fa-envelope"></i><a href="mailto:hr@lucbank.in">hr@lucbank.in</a></span>
                </div>
            </div>

            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse text-center" id="navigation">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">@lang('header.home')</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @lang('header.about_us')
                        </a>

                        <div class="dropdown-menu show">
                            <a class="dropdown-item" href="{{ url('amchya-vishai') }}">@lang('header.about_us')</a>
                            <a class="dropdown-item" href="{{ url('sanchalak-mandal') }}">@lang('header.sanchalak_mandal')</a>

                            @php
                                use App\Models\AnnualReport;
                                $reports = AnnualReport::where('status', 'active')->orderBy('id', 'DESC')->get();
                            @endphp

                            @if(!empty($reports))
                                @foreach ($reports as $report)
                                    @if(App::getLocale() == 'mr')
                                        <a class="dropdown-item wrap-text" href="{{ !empty($report->report_pdf_mr_path) ? url('/').Storage::url($report->report_pdf_mr_path) : url('/') }}" download>
                                            {{ !empty($report->report_name_mr) ? $report->report_name_mr : '' }}
                                        </a>
                                    @else
                                        <a class="dropdown-item wrap-text" href="{{ !empty($report->report_pdf_en_path) ? url('/').Storage::url($report->report_pdf_en_path) : url('/') }}" download>
                                            {{ !empty($report->report_name_en) ? $report->report_name_en : '' }}
                                        </a>
                                    @endif
                                @endforeach
                            @endif

                            <a class="dropdown-item" href="{{ url('service-charges') }}">@lang('header.service_charges')</a>
                        </div>

                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @lang('header.our_services')
                        </a>

                        @php
                        use App\Models\Service;
                        use Illuminate\Support\Facades\App;

                        $locale = App::getLocale();
                    
                        $services = Service::where('status', 'active')->get();
                        @endphp

                        <div class="dropdown-menu show">

                            @if(!empty($services))
                            @foreach ($services as $service)
                            <a class="dropdown-item" href="{{ url('service/'.$service->service_slug_url) }}">
                               @if( $locale =='mr')
                               {{$service->service_name_mr}}
                               @else
                               {{$service->service_name_en}}
                               @endif
                            </a>
                            @endforeach

                            @endif

                       
                        </div>

                    </li>

                    <li class="nav-item"><a class="nav-link" href="{{ url('amchya-shakha') }}">@lang('header.our_branches')</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('vyajdar') }}">@lang('header.interest_rates')</a></li>

                    <li class="nav-item"><a class="nav-link" href="{{ url('unclaimed-deposite') }}">@lang('header.unclaimed_deposit')</a></li>

                    <li class="nav-item"><a class="nav-link" href="{{ url('contact') }}">@lang('header.contact')</a></li>


                 
                </ul>
            </div>
        </nav>
    </div>
</div> --}}

{{-- <div id="header-holder">
    <div id="header-wrap">
        <nav class="navbar navbar-default">
            <div class="row align-items-center">
                <div id="logo" class="col-md-5 col-sm-8 col-xs-8">
                    <a href="{{ url('/') }}" class="custom-logo-link" rel="home" aria-current="page">
                        <img width="368" height="91"
                            src="{{ !empty($logo->logo_image_path) ? url('/') . Storage::url($logo->logo_image_path) : asset('front/images/logo/yash_latur.jpg') }}"
                            alt="Logo" class="img-responsive" />
                    </a>
                </div>
                <div class="col-md-7 col-sm-4 col-xs-4 text-right d-none d-md-block top-contact">
                    <span class="top-time"><i class="fa fa-clock-o"></i> Mon To Sat 10:30am - 5:30pm</span>
                    <span class="top-email"><i class="fa fa-envelope"></i><a href="mailto:hr@lucbank.in">hr@lucbank.in</a></span>
                </div>
                <div class="navbar-header col-md-12 col-sm-12 col-xs-12">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
            </div>

            <div class="collapse navbar-collapse text-center" id="navbar">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">@lang('header.home')</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @lang('header.about_us')
                        </a>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ url('amchya-vishai') }}">@lang('header.about_us')</a>
                            <a class="dropdown-item" href="{{ url('sanchalak-mandal') }}">@lang('header.sanchalak_mandal')</a>

                            @php
                                use App\Models\AnnualReport;
                                $reports = AnnualReport::where('status', 'active')->orderBy('id', 'DESC')->get();
                            @endphp

                            @if(!empty($reports))
                                @foreach ($reports as $report)
                                    @if(App::getLocale() == 'mr')
                                        <a class="dropdown-item wrap-text" href="{{ !empty($report->report_pdf_mr_path) ? url('/').Storage::url($report->report_pdf_mr_path) : url('/') }}" download>
                                            {{ !empty($report->report_name_mr) ? $report->report_name_mr : '' }}
                                        </a>
                                    @else
                                        <a class="dropdown-item wrap-text" href="{{ !empty($report->report_pdf_en_path) ? url('/').Storage::url($report->report_pdf_en_path) : url('/') }}" download>
                                            {{ !empty($report->report_name_en) ? $report->report_name_en : '' }}
                                        </a>
                                    @endif
                                @endforeach
                            @endif

                            <a class="dropdown-item" href="{{ url('service-charges') }}">@lang('header.service_charges')</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @lang('header.our_services')
                        </a>

                        @php
                        use App\Models\Service;
                        use Illuminate\Support\Facades\App;

                        $locale = App::getLocale();
                    
                        $services = Service::where('status', 'active')->get();
                        @endphp

                        <div class="dropdown-menu">
                            @if(!empty($services))
                                @foreach ($services as $service)
                                    <a class="dropdown-item" href="{{ url('service/'.$service->service_slug_url) }}">
                                        @if( $locale =='mr')
                                            {{$service->service_name_mr}}
                                        @else
                                            {{$service->service_name_en}}
                                        @endif
                                    </a>
                                @endforeach
                            @endif
                        </div>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="{{ url('amchya-shakha') }}">@lang('header.our_branches')</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('vyajdar') }}">@lang('header.interest_rates')</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('unclaimed-deposite') }}">@lang('header.unclaimed_deposit')</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('contact') }}">@lang('header.contact')</a></li>
                </ul>
            </div>
        </nav>
    </div>
</div> --}}

<div id="header-holder">
    <div id="header-wrap">
        <nav class="navbar navbar-default">
            <div class="row align-items-center">
                <div id="logo" class="col-md-4 col-sm-8 col-xs-8">
                    <a href="{{ url('/') }}" class="custom-logo-link" rel="home" aria-current="page">
                        <img width="368" height="91"
                            src="{{ !empty($logo->logo_image_path) ? url('/') . Storage::url($logo->logo_image_path) : asset('front/images/logo/yash_latur.jpg') }}"
                            alt="Logo" class="img-responsive" />
                    </a>
                </div>
                <div class="col-md-8 col-sm-4 col-xs-4 text-right d-none d-md-block top-contact">
                    <span class="top-time"><i class="fa fa-clock-o"></i> {{$social->working_days??''}}</span>
                    @if(!empty($social->header_email))
                       <span class="top-email"><i class="fa fa-envelope"></i><a href="mailto:{{$social->header_email}}">{{$social->header_email}}</a></span>
                    @endif
                </div>
                <div class="navbar-header col-md-12 col-sm-12 col-xs-12">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
            </div>

            <div class="collapse navbar-collapse text-center" id="navbar">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">@lang('header.home')</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @lang('header.about_us')
                        </a>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ url('amchya-vishai') }}">@lang('header.about_us')</a>
                            <a class="dropdown-item" href="{{ url('sanchalak-mandal') }}">@lang('header.sanchalak_mandal')</a>

                            @php
                                use App\Models\AnnualReport;
                                $reports = AnnualReport::where('status', 'active')->orderBy('id', 'DESC')->get();
                            @endphp

                            @if(!empty($reports))
                                @foreach ($reports as $report)
                                    @if(App::getLocale() == 'mr')
                                        <a class="dropdown-item wrap-text" href="{{ !empty($report->report_pdf_mr_path) ? url('/').Storage::url($report->report_pdf_mr_path) : url('/') }}" download>
                                            {{ !empty($report->report_name_mr) ? $report->report_name_mr : '' }}
                                        </a>
                                    @else
                                        <a class="dropdown-item wrap-text" href="{{ !empty($report->report_pdf_en_path) ? url('/').Storage::url($report->report_pdf_en_path) : url('/') }}" download>
                                            {{ !empty($report->report_name_en) ? $report->report_name_en : '' }}
                                        </a>
                                    @endif
                                @endforeach
                            @endif

                            <a class="dropdown-item" href="{{ url('service-charges') }}">@lang('header.service_charges')</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @lang('header.our_services')
                        </a>

                        @php
                        use App\Models\Service;
                        use Illuminate\Support\Facades\App;

                        $locale = App::getLocale();
                    
                        $services = Service::where('status', 'active')->get();
                        @endphp

                        <div class="dropdown-menu">
                            @if(!empty($services))
                                @foreach ($services as $service)
                                    <a class="dropdown-item" href="{{ url('service/'.$service->service_slug_url) }}">
                                        @if( $locale =='mr')
                                            {{$service->service_name_mr}}
                                        @else
                                            {{$service->service_name_en}}
                                        @endif
                                    </a>
                                @endforeach
                            @endif
                        </div>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="{{ url('amchya-shakha') }}">@lang('header.our_branches')</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('vyajdar') }}">@lang('header.interest_rates')</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('unclaimed-deposite') }}">@lang('header.unclaimed_deposit')</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('contact') }}">@lang('header.contact')</a></li>
                </ul>
            </div>
        </nav>
    </div>
</div>


{{-- 
            <div id="navbar" class="navbar-collapse collapse">
                
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">@lang('header.home')</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            @lang('header.about_us')
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ url('amchya-vishai') }}"> @lang('header.about_us')</a>

                            <a class="dropdown-item" href="{{ url('sanchalak-mandal') }}">@lang('header.sanchalak_mandal')</a>

                            @php
                                use App\Models\AnnualReport;
                            
                                $reports = AnnualReport::where('status', 'active')->orderBy('id', 'DESC')->get();
                            @endphp

                            @if(!empty($reports))
                            @foreach ($reports as $report )

                            @if(App::getLocale() == 'mr')
                                <a class="dropdown-item wrap-text" href="{{ !empty($report->report_pdf_mr_path) ? url('/').Storage::url($report->report_pdf_mr_path) : url('/') }}" download>
                                    {{ !empty($report->report_name_mr) ? $report->report_name_mr : '' }}
                                </a>
                            @else
                                <a class="dropdown-item wrap-text" href="{{ !empty($report->report_pdf_en_path) ? url('/').Storage::url($report->report_pdf_en_path) : url('/') }}" download>
                                    {{ !empty($report->report_name_en) ? $report->report_name_en : '' }}
                                </a>
                            @endif
                            @endforeach
                             
                            @endif

                            <a class="dropdown-item" href="{{ url('service-charges') }}">@lang('header.service_charges')</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            @lang('header.our_services')
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ url('core-banking') }}"> @lang('header.core_banking')</a>
                            <a class="dropdown-item" href="{{ url('sms-alert') }}">@lang('header.sms_alert')</a>
                            <a class="dropdown-item" href="{{ url('rtgs') }}">@lang('header.rtgs')</a>
                            <a class="dropdown-item" href="{{ url('locker-suvidha') }}">@lang('header.locker')</a>
                            <a class="dropdown-item" href="{{ url('sone-taran') }}">@lang('header.gold_loan')</a>

                            <a class="dropdown-item wrap-text" href="{{ url('lightbill-barana-kendra') }}">@lang('header.electricity_bill')</a>
                            <a class="dropdown-item" href="{{ url('pigmi-deposit-scheme') }}">@lang('header.pigmy_deposit')</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('amchya-shakha') }}">@lang('header.our_branches')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('vyajdar') }}">@lang('header.interest_rates')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('contact') }}">@lang('header.contact')</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @lang('header.language')
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item changeLang" data-lang="mr" href="#">मराठी</a>
                            <a class="dropdown-item changeLang" data-lang="en" href="#">English</a>
                        </div>
                    </li>
                    


                </ul>
            </div> --}}
            
            <!--/.nav-collapse -->

        {{-- </nav> --}}
    {{-- </div><!--header-wrap--> --}}
{{-- </div> --}}
<script>
    $(document).ready(function() {
    $('.dropdown-toggle').on('click', function() {
        $(this).next('.dropdown-menu').toggleClass('show');
    });
});

</script>

<script type="text/javascript" id="gt_widget_script_34090433-js-before">
    /* <![CDATA[ */
    window.gtranslateSettings = /* document.write */ window.gtranslateSettings || {}; window.gtranslateSettings['34090433'] = { "default_language": "en", "languages": ["en", "hi", "mr"], "url_structure": "none", "flag_style": "2d", "flag_size": 24, "wrapper_selector": "#gt-wrapper-34090433", "alt_flags": [], "switcher_open_direction": "top", "switcher_horizontal_position": "inline", "switcher_text_color": "#666", "switcher_arrow_color": "#666", "switcher_border_color": "#ccc", "switcher_background_color": "#fff", "switcher_background_shadow_color": "#efefef", "switcher_background_hover_color": "#fff", "dropdown_text_color": "#000", "dropdown_hover_color": "#fff", "dropdown_background_color": "#eee", "flags_location": "\/wp-content\/plugins\/gtranslate\/flags\/" };
    /* ]]> */
    </script>
    <script src="https://www.lucbank.in/wp-content/plugins/gtranslate/js/dwf.js?ver=6.4.5" data-no-optimize="1"
    data-no-minify="1" data-gt-orig-url="/" data-gt-orig-domain="www.lucbank.in" data-gt-widget-id="34090433"
    defer></script>



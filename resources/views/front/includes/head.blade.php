<!doctype html>
{{-- <html lang="en"> --}}
    <html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="description" content="CharityFund - Charity & Crowdfunding HTML Template" />
    <meta name="keywords" content="building,business,construction,cleaning,transport,workshop" />
    <meta name="author" content="ThemeMascot" />
    <title>@lang('header.title')</title>
    <base href="{{ url('/') }}">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('front/plugins/bootstrap/bootstrap.min.css') }}">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{ asset('front/plugins/fontawesome/font-awesome.min.css') }}">
    <!-- Animation -->
    <link rel="stylesheet" href="{{ asset('front/plugins/animate.css') }}">
    <!-- PrettyPhoto -->
    <link rel="stylesheet" href="{{ asset('front/plugins/prettyPhoto.css') }}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('front/plugins/owl/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('front/plugins/owl/owl.theme.css') }}">
    <!-- Flexslider -->
    <link rel="stylesheet" href="{{ asset('front/plugins/flex-slider/flexslider.css') }}">
    <!-- CD Hero -->
    <link rel="stylesheet" href="{{ asset('front/plugins/cd-hero/cd-hero.css') }}">
    <!-- Style Switcher -->
    <link id="style-switch" href="{{ asset('front/css/presets/preset3.css') }}" media="screen" rel="stylesheet" type="text/css">
    <!-- Main Stylesheet -->
    <link href="{{ asset('front/css/style.css') }}" rel="stylesheet">
    @php
    use App\Models\Master\Visual_setting;

    $favicon = Visual_setting::where('status', 'active')->first();
    @endphp
    <link rel="icon" type="image/png" href="{{!empty($favicon->favicon_image_path)?url('/').Storage::url($favicon->favicon_image_path):asset('front/images/logo/yash_latur.jpg') }}" />
    
    <style>
        .facility_tab:hover{
            color:#EE3C25
        }
        .carousel-indicators li {
            border-radius: 12px!important;
            width: 14px!important;
            height: 14px!important;
            background-color:#EE3C25!important;
        }
        .seva_title{
            color:#EE3C25;
            padding-top:10px;
        }
        .seva_title:hover{
            font-size:17px;
            padding-top:10px;
        }
        #main-slide .carousel-control i {
            background: none;
            color: #100f0f;
            line-height: 56px;
            width: 56px;
            height: 56px;
            border: 1px solid #000;
            border-radius: 100%;
            font-size: 36px;
            transition: all 500ms ease;
        }
        @media only screen and (max-width:400px){
            .slider_margin{
                margin-top:105px;
            }
        }
        @media only screen and (max-width: 723px){
            .slider_margin{
                margin-top:70px;
            }
            .heading{
                /* margin-top:50px; */
            }
            section {
                padding: 0px 0px!important;
            }
            .quotes{
                margin-bottom:40px;
            }
        }

        .parallax-overlay {
            position: absolute;
            left: 0;
            top: 21%;
            width: 100%;
            height: 78%;
            background: url(../images/overaly.png);
        }

        #banner-area {
        position: relative;
        z-index: -1;
        margin-top: -38px;
       }
    </style>
</head>

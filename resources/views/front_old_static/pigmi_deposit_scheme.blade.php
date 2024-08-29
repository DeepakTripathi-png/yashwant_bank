
@extends('front.layouts.app')

@section('content')

<style>
    .facility_tab:hover{
        color:#EE3C25
    }
    .border-bottom{
        border-bottom:1px solid gray;
        width: 50%!important;
    }
    .pigmy_image{
        position:absolute;
        left: 674px;
        top: -20px;
        height:250px;
        width:400px;
    }
    .pigmy_img{
    margin-top: -57px;
    padding:0px 0px 0px 0px!important;
    }
    @media only screen and (max-width: 723px){
    section {
    padding: 0px 0px!important;}
        .heading {
    padding-bottom: 0px!important;
    }
    .pigmy_img{
        margin-top:0px!important;
        padding:0px 0px 0px 0px!important;
    }
    .ts-padding{
        padding:20px!important;
    }
        }
</style>

<div id="banner-area">
    <img style="padding-top: 4%;"   src="{{asset('front/images/banner/pigmi.jpg')}}" width="100%" alt="" />
    <div class="parallax-overlay"></div>
    <div class="banner-title-content">
        <div class="text-center">
            <h2>@lang('services.pigmi_heading')</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">@lang('services.home')</a></li>
                    <li class="breadcrumb-item text-white" aria-current="page">@lang('services.pigmi_heading')</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<section class="section1" id="main-container">
    <div class="container">
        <div class="row">
            <div class="col-md-2 heading text-center">
            </div>
            <div class="col-md-8 heading text-center">
                <h1 class="title-border">@lang('services.pigmi_heading')</h1>
            </div>
            <div class="col-md-2 heading text-center">
            </div>
        </div>
        <div class="row about-wrapper-top">
            <div class="container ">
                <div class="row">
                    <div class="col-md-12 text-justify">
                        <h2 class="border-bottom">@lang('services.pigmi_sub_heading')&nbsp;:</h2>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8" style="padding:0px 0px 0px 0px!important;">
                                    <div>
                                <p style="font-size:17px;line-height:35px;"> ●&nbsp;&nbsp; @lang('services.rule_1') </p> 
                                <p style="font-size:17px;line-height:35px;"class="text-justify">●&nbsp;&nbsp; @lang('services.rule_2_1') <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@lang('services.rule_2_2')  </p>
                                <p style="font-size:17px;line-height:35px;">●&nbsp;&nbsp;@lang('services.rule_3') </p>
                                
                                </div>
                                </div>
                                <div  class="col-md-4 pigmy_img"style="margin-top: -65px;padding:0px 0px 0px 0px!important;">
                                    <img class="img-fluid   " style=" height:100%;width:100%;"  class="img-fluid"  src="{{asset('front/images/facility/pigmy1.jpg')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <table>   
                            <tr>
                                <td style="display: flex;padding-top:5px;">●&nbsp;&nbsp;</td>
                                <td>
                                     <p style="font-size:17px;line-height:35px;"class="text-justify">@lang('services.rule_4') </p>
                                </td>
                            </tr>
                            <tr>
                                <td  style="display: flex;padding-top:5px;">●&nbsp;&nbsp;</td>
                                <td>
                                    <p style="font-size:17px;line-height:35px;">@lang('services.rule_5') </p>
                                </td>
                            </tr>
                            <tr>
                                <td  style="display: flex;padding-top:5px;">●&nbsp;&nbsp;</td>
                                <td>
                                    <p style="font-size:17px;line-height:35px;"> @lang('services.rule_6') </p>
                                </td>
                            </tr>
                            <tr>
                                <td  style="display: flex;padding-top:5px;">●&nbsp;&nbsp;</td>
                                <td>
                                     <p style="font-size:17px;line-height:35px;">@lang('services.rule_7') </p>
                                </td>
                            </tr>
                            <tr>
                                <td  style="display: flex;padding-top:5px;">●&nbsp;&nbsp;</td>
                                <td>
                                    <p style="font-size:17px;line-height:35px;"> @lang('services.rule_8') </p>
                                </td>
                            </tr>
                            <tr>
                                <td  style="display: flex;padding-top:5px;">●&nbsp;&nbsp;</td>
                                <td>
                                    <p style="font-size:17px;line-height:35px;"> @lang('services.rule_9') </p>
                                </td>
                            </tr>
                            <tr>
                                <td  style="display: flex;padding-top:5px;">●&nbsp;&nbsp;</td>
                                <td>
                                    <p style="font-size:17px;line-height:35px;"> @lang('services.rule_10') </p>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</section><br><br>

@endsection
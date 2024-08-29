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
            <h2>@lang('privacyPolicy.heading')</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">@lang('privacyPolicy.home')</a></li>
                    <li class="breadcrumb-item text-white" aria-current="page">@lang('privacyPolicy.heading')</li>
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
                <h1 class="title-border">@lang('privacyPolicy.heading')</h1>
            </div>
            <div class="col-md-2 heading text-center">
            </div>
        </div>
        <div class="row about-wrapper-top">
            <div class="container ">
                <div class="row">
                    <div class="col-md-12 text-justify">
                        
                        <table>   
                            <tr>
                                <td style="display: flex;padding-top:5px;">&nbsp;&nbsp;</td>
                                <td>
                                     <p style="font-size:17px;line-height:35px;"class="text-justify">@lang('privacyPolicy.section1') </p>
                                </td>
                            </tr>
                            <tr>
                                <td  style="display: flex;padding-top:5px;">&nbsp;&nbsp;</td>
                                <td>
                                    <p style="font-size:17px;line-height:35px;">@lang('privacyPolicy.section2')</p>
                                </td>
                            </tr>
                            <tr>
                                <td  style="display: flex;padding-top:5px;">&nbsp;&nbsp;</td>
                                <td>
                                    <p style="font-size:17px;line-height:35px;"> @lang('privacyPolicy.policy')</p>
                                </td>
                            </tr>
                            <tr>
                                <td  style="display: flex;padding-top:5px;">&nbsp;&nbsp;</td>
                                <td>
                                     <p style="font-size:17px;line-height:35px;">@lang('privacyPolicy.section3')</p>
                                </td>
                            </tr>
                            <tr>
                                <td  style="display: flex;padding-top:5px;">&nbsp;&nbsp;</td>
                                <td>
                                     <p style="font-size:17px;line-height:35px;">@lang('privacyPolicy.point_a')</p>
                                </td>
                            </tr>
                            <tr>
                                <td  style="display: flex;padding-top:5px;">&nbsp;&nbsp;</td>
                                <td>
                                     <p style="font-size:17px;line-height:35px;">@lang('privacyPolicy.point_b')</p>
                                </td>
                            </tr>
                            <tr>
                                <td  style="display: flex;padding-top:5px;">&nbsp;&nbsp;</td>
                                <td>
                                     <p style="font-size:17px;line-height:35px;">@lang('privacyPolicy.point_c')</p>
                                </td>
                            </tr>
                            <tr>
                                <td  style="display: flex;padding-top:5px;">&nbsp;&nbsp;</td>
                                <td>
                                    <p style="font-size:17px;line-height:35px;"> @lang('privacyPolicy.bank_shall')</p>
                                </td>
                            </tr>
                            <tr>
                                <td  style="display: flex;padding-top:5px;">&nbsp;&nbsp;</td>
                                <td>
                                    <p style="font-size:17px;line-height:35px;"> @lang('privacyPolicy.point_d') </p>
                                </td>
                            </tr>
                            <tr>
                                <td  style="display: flex;padding-top:5px;">&nbsp;&nbsp;</td>
                                <td>
                                    <p style="font-size:17px;line-height:35px;">@lang('privacyPolicy.point_e')</p>
                                </td>
                            </tr>
                            <tr>
                                <td  style="display: flex;padding-top:5px;">&nbsp;&nbsp;</td>
                                <td>
                                    <p style="font-size:17px;line-height:35px;">@lang('privacyPolicy.point_f')</p>
                                </td>
                            </tr>
                            <tr>
                                <td  style="display: flex;padding-top:5px;">&nbsp;&nbsp;</td>
                                <td>
                                    <p style="font-size:17px;line-height:35px;">@lang('privacyPolicy.point_g') </p>
                                </td>
                            </tr>
                            <tr>
                                <td  style="display: flex;padding-top:5px;">&nbsp;&nbsp;</td>
                                <td>
                                    <p style="font-size:17px;line-height:35px;">@lang('privacyPolicy.point_h')</p>
                                </td>
                            </tr>
                            <tr>
                                <td  style="display: flex;padding-top:5px;">&nbsp;&nbsp;</td>
                                <td>
                                    <p style="font-size:17px;line-height:35px;"> @lang('privacyPolicy.security')</p>
                                </td>
                            </tr>
                            <tr>
                                <td  style="display: flex;padding-top:5px;">&nbsp;&nbsp;</td>
                                <td>
                                    <p style="font-size:17px;line-height:35px;"> @lang('privacyPolicy.security_a') </p>
                                </td>
                            </tr>
                            <tr>
                                <td  style="display: flex;padding-top:5px;">&nbsp;&nbsp;</td>
                                <td>
                                    <p style="font-size:17px;line-height:35px;"> @lang('privacyPolicy.security_b')</p>
                                </td>
                            </tr>
                            <tr>
                                <td  style="display: flex;padding-top:5px;">&nbsp;&nbsp;</td>
                                <td>
                                    <p style="font-size:17px;line-height:35px;"> @lang('privacyPolicy.security_c') </p>
                                </td>
                            </tr>
                            <tr>
                                <td  style="display: flex;padding-top:5px;">&nbsp;&nbsp;</td>
                                <td>
                                    <p style="font-size:17px;line-height:35px;"> @lang('privacyPolicy.section4') </p>
                                </td>
                            </tr>
                            <tr>
                                <td  style="display: flex;padding-top:5px;">&nbsp;&nbsp;</td>
                                <td>
                                    <p style="font-size:17px;line-height:35px;"> @lang('privacyPolicy.section5') </p>
                                </td>
                            </tr>
                            <tr>
                                <td  style="display: flex;padding-top:5px;">&nbsp;&nbsp;</td>
                                <td>
                                    <p style="font-size:17px;line-height:35px;"> @lang('privacyPolicy.password_tip') </p>
                                </td>
                            </tr>
                            <tr>
                                <td  style="display: flex;padding-top:5px;">&nbsp;&nbsp;</td>
                                <td>
                                    <p style="font-size:17px;line-height:35px;"> @lang('privacyPolicy.section6') </p>
                                </td>
                            </tr>
                            <tr>
                                <td  style="display: flex;padding-top:5px;">&nbsp;&nbsp;</td>
                                <td>
                                    <p style="font-size:17px;line-height:35px;"> @lang('privacyPolicy.section6_a') </p>
                                </td>
                            </tr>
                            <tr>
                                <td  style="display: flex;padding-top:5px;">&nbsp;&nbsp;</td>
                                <td>
                                    <p style="font-size:17px;line-height:35px;"> @lang('privacyPolicy.section6_b')</p>
                                </td>
                            </tr>
                            <tr>
                                <td  style="display: flex;padding-top:5px;">&nbsp;&nbsp;</td>
                                <td>
                                    <p style="font-size:17px;line-height:35px;"> @lang('privacyPolicy.section6_c')</p>
                                </td>
                            </tr>
                            <tr>
                                <td  style="display: flex;padding-top:5px;">&nbsp;&nbsp;</td>
                                <td>
                                    <p style="font-size:17px;line-height:35px;">  @lang('privacyPolicy.section6_d') </p>
                                </td>
                            </tr>
                            <tr>
                                <td  style="display: flex;padding-top:5px;">&nbsp;&nbsp;</td>
                                <td>
                                    <p style="font-size:17px;line-height:35px;"> @lang('privacyPolicy.data_modification') </p>
                                </td>
                            </tr>
                            <tr>
                                <td  style="display: flex;padding-top:5px;">&nbsp;&nbsp;</td>
                                <td>
                                    <p style="font-size:17px;line-height:35px;"> @lang('privacyPolicy.data_modification_a') </p>
                                </td>
                            </tr>
                            <tr>
                                <td  style="display: flex;padding-top:5px;">&nbsp;&nbsp;</td>
                                <td>
                                    <p style="font-size:17px;line-height:35px;"> @lang('privacyPolicy.data_retention') </p>
                                </td>
                            </tr>
                            <tr>
                                <td  style="display: flex;padding-top:5px;">&nbsp;&nbsp;</td>
                                <td>
                                    <p style="font-size:17px;line-height:35px;"> @lang('privacyPolicy.data_retention_a') </p>
                                </td>
                            </tr>
                            <tr>
                                <td  style="display: flex;padding-top:5px;">&nbsp;&nbsp;</td>
                                <td>
                                    <p style="font-size:17px;line-height:35px;">  @lang('privacyPolicy.security_awareness') </p>
                                </td>
                            </tr>
                            <tr>
                                <td  style="display: flex;padding-top:5px;">&nbsp;&nbsp;</td>
                                <td>
                                    <p style="font-size:17px;line-height:35px;">  @lang('privacyPolicy.security_awareness_a') </p>
                                </td>
                            </tr>
                            <tr>
                                <td  style="display: flex;padding-top:5px;">&nbsp;&nbsp;</td>
                                <td>
                                    <p style="font-size:17px;line-height:35px;"> @lang('privacyPolicy.record_of_revisions') </p>
                                </td>
                            </tr>
                            <tr>
                                <td  style="display: flex;padding-top:5px;">&nbsp;&nbsp;</td>
                                <td>
                                    <p style="font-size:17px;line-height:35px;"> @lang('privacyPolicy.record_of_revisions_details')</p>
                                </td>
                            </tr>
                            <tr>
                                <td  style="display: flex;padding-top:5px;">&nbsp;&nbsp;</td>
                                <td>
                                    <p style="font-size:17px;line-height:35px;"> @lang('privacyPolicy.revision_1')</p>
                                </td>
                            </tr>
                            <tr>
                                <td  style="display: flex;padding-top:5px;">&nbsp;&nbsp;</td>
                                <td>
                                    <p style="font-size:17px;line-height:35px;"> @lang('privacyPolicy.record_of_approval') </p>
                                </td>
                            </tr>
                            <tr>
                                <td  style="display: flex;padding-top:5px;">&nbsp;&nbsp;</td>
                                <td>
                                    <p style="font-size:17px;line-height:35px;"> @lang('privacyPolicy.approval_details') </p>
                                </td>
                            </tr>
                            <tr>
                                <td  style="display: flex;padding-top:5px;">&nbsp;&nbsp;</td>
                                <td>
                                    <p style="font-size:17px;line-height:35px;"> @lang('privacyPolicy.approval_names')</p>
                                </td>
                            </tr>
                            <tr>
                                <td  style="display: flex;padding-top:5px;">&nbsp;&nbsp;</td>
                                <td>
                                    <p style="font-size:17px;line-height:35px;"> @lang('privacyPolicy.approval_designation') </p>
                                </td>
                            </tr>
                            <tr>
                                <td  style="display: flex;padding-top:5px;">&nbsp;&nbsp;</td>
                                <td>
                                    <p style="font-size:17px;line-height:35px;"> @lang('privacyPolicy.approval_date')</p>
                                </td>
                            </tr>
                        </table>

                    </div>
                </div>
            </div>
        </div>
</section><br><br>

@endsection
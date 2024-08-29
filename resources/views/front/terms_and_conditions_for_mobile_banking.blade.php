
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
    /* Hide on screens smaller than 720px */
@media only screen and (max-width: 720px) {
    .hide-on-mobile {
        display: none;
    }
}

</style>


<div id="banner-area" class="hide-on-mobile">
    <img style="padding-top: 4%;"   src="{{!empty($banner->banner_image_path)?url('/').Storage::url($banner->banner_image_path):url('front/images/banner/pigmi.jpg')}}" width="100%" alt="" />
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
                    <li class="breadcrumb-item"><a href="{{url('/')}}">@lang('terms.home')</a></li>
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


<section class="section1" id="main-container">
    <div class="container">
        <div class="row">
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
        <div class="row about-wrapper-top">
            <div class="container ">
                <div class="row">
                    <div class="col-md-12 text-justify">

                    @if($locale == 'mr')
                        {!! !empty($terms->description_mr)? $terms->description_mr:'' !!}
                    @else
                       {!! !empty( $terms->description_en)? $terms->description_en:'' !!}
                    @endif

{{--                         
<p><span style="font-weight: 400;">@lang('terms.title')</span></p>
<p>&nbsp;</p>


<table>
<tbody>
<tr>
<td><span style="font-weight: 400;">{{ __('terms.bank.label') }}</span></td>
<td><span style="font-weight: 400;">{{ __('terms.bank.description_1') }} </span><b>​</b><b>{{ __('terms.bank.description_2') }}</b></td>
</tr>
<tr>
<td><span style="font-weight: 400;">{{ __('terms.account.label') }}</span></td>
<td><span style="font-weight: 400;">{{ __('terms.account.description') }}</span></td>
</tr>
<tr>
<td><span style="font-weight: 400;">{{ __('terms.customer.label') }}</span></td>
<td><span style="font-weight: 400;">{{ __('terms.customer.description_1') }} </span><b>​</b><b>{{ __('terms.customer.description_2') }}</b></td>
</tr>
<tr>
<td><span style="font-weight: 400;">{{ __('terms.mbs.label') }}</span></td>
<td><span style="font-weight: 400;">{{ __('terms.mbs.description') }}</span></td>
</tr>
<tr>
<td><span style="font-weight: 400;">{{ __('terms.mobile_phone_number.label') }}</span></td>
<td><span style="font-weight: 400;">{{ __('terms.mobile_phone_number.description') }}</span></td>
</tr>
<tr>
<td><span style="font-weight: 400;">{{ __('terms.banks_website.label') }}</span></td>
<td><span style="font-weight: 400;">{{ __('terms.banks_website.description') }}</span></td>
</tr>
<tr>
<td><span style="font-weight: 400;">{{ __('terms.application.label') }}</span></td>
<td><span style="font-weight: 400;">{{ __('terms.application.description') }}</span></td>
</tr>
<tr>
<td><span style="font-weight: 400;">{{ __('terms.mpin.label') }}</span></td>
<td><span style="font-weight: 400;">{{ __('terms.mpin.description') }}</span></td>
</tr>
<tr>
<td><span style="font-weight: 400;">{{ __('terms.registration.label') }}</span></td>
<td><span style="font-weight: 400;">{{ __('terms.registration.description') }}</span></td>
</tr>
<tr>
<td><span style="font-weight: 400;">{{ __('terms.otp.label') }}</span></td>
<td><span style="font-weight: 400;">{{ __('terms.otp.description') }}</span></td>
</tr>
<tr>
<td><span style="font-weight: 400;">{{ __('terms.parties.label') }}</span></td>
<td><span style="font-weight: 400;">{{ __('terms.parties.description') }}</span></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
</tbody>
</table>

<p>&nbsp;</p>
<p><b> {{ __('terms.document') }}</b></p>
<p><span style="font-weight: 400;"> </span><b> {{ __('terms.applicability_heading') }} </b></p>
<p><span style="font-weight: 400;"> {{ __('terms.applicability') }}</span></p>
<p>&nbsp;</p>
<p><b>{{ __('terms.general_rules_heading') }}</b></p>
<p><span style="font-weight: 400;">{{ __('terms.general_rules_desc') }}</span></p>
<ol start="1">
<li><span style="font-weight: 400;"> {{ __('terms.general_rules_1') }}</span></li>
<li><span style="font-weight: 400;"> {{ __('terms.general_rules_2') }}</span></li>
<li><span style="font-weight: 400;"> {{ __('terms.general_rules_3') }}</span></li>
<li><span style="font-weight: 400;"> {{ __('terms.general_rules_4') }}</span></li>
<li><span style="font-weight: 400;"> {{ __('terms.general_rules_5') }}</span></li>
<li><span style="font-weight: 400;"> {{ __('terms.general_rules_6') }}</span></li>
</ol>

<p>&nbsp;</p>
<p><b>{{ __('terms.usage_of_facility_heading') }}</b></p>
<p><span style="font-weight: 400;"> {{ __('terms.usage_of_facility_desc') }} </span></p>
<ol>
<li><span style="font-weight: 400;"> {{ __('terms.usage_of_facility_1') }} </span></li>
<li><span style="font-weight: 400;"> {{ __('terms.usage_of_facility_2') }} </span></li>
<li><span style="font-weight: 400;">  {{ __('terms.usage_of_facility_3') }} </span></li>
<li><span style="font-weight: 400;"> {{ __('terms.usage_of_facility_4') }}</span></li>
<li><span style="font-weight: 400;"> {{ __('terms.usage_of_facility_5') }} </span></li>
<li><span style="font-weight: 400;"> {{ __('terms.usage_of_facility_6') }}</span></li>
<li><span style="font-weight: 400;"> {{ __('terms.usage_of_facility_7') }}</span></li>
</ol>
<p><b>{{ __('terms.others_heading') }}</b></p>
<ol>
<li><span style="font-weight: 400;"> {{ __('terms.others_content_1') }} </span></li>
<li><span style="font-weight: 400;"> {{ __('terms.others_content_2') }}</span></li>
<li><span style="font-weight: 400;"> {{ __('terms.others_content_3') }}</span></li>
<li><span style="font-weight: 400;">{{ __('terms.others_content_4') }}</span></li>
<li><span style="font-weight: 400;"> {{ __('terms.others_content_5') }} </span></li>
<li><span style="font-weight: 400;"> {{ __('terms.others_content_6') }} </span></li>
<li><span style="font-weight: 400;"> {{ __('terms.others_content_7') }}</span></li>
<li><span style="font-weight: 400;"> {{ __('terms.others_content_8') }}</span></li>
<li><span style="font-weight: 400;"> {{ __('terms.others_content_9') }} </span></li>
<li><span style="font-weight: 400;"> {{ __('terms.others_content_10') }} </span></li>
<li><span style="font-weight: 400;"> {{ __('terms.others_content_11') }} </span></li>
<li><span style="font-weight: 400;"> {{ __('terms.others_content_12') }} </span></li>
<li><span style="font-weight: 400;"> {{ __('terms.others_content_13') }}</span></li>
</ol>
<p><b>{{ __('terms.fee_structure_heading') }}</b></p>
<p><span style="font-weight: 400;"> {{ __('terms.fee_structure_desc') }}</span></p>
<p><b>{{ __('terms.accuracy_info_heading') }}</b></p>
<ol>
<li><span style="font-weight: 400;"> {{ __('terms.accuracy_info_content_1') }}</span></li>
<li><span style="font-weight: 400;"> {{ __('terms.accuracy_info_content_2') }} </span></li>
<li><span style="font-weight: 400;"> {{ __('terms.accuracy_info_content_3') }}</span></li>
</ol>
<p>&nbsp;</p>
<p><b>{{ __('terms.responsibilities_heading') }} </b></p>
<ol>
<li><span style="font-weight: 400;"> {{ __('terms.responsibilities_content_1') }} </span></li>
<li><span style="font-weight: 400;"> {{ __('terms.responsibilities_content_2') }}</span></li>
<li><span style="font-weight: 400;"> {{ __('terms.responsibilities_content_3') }} </span></li>
<li><span style="font-weight: 400;"> {{ __('terms.responsibilities_content_4') }} </span></li>
<li><span style="font-weight: 400;"> {{ __('terms.responsibilities_content_5') }} </span></li>
<li><span style="font-weight: 400;"> {{ __('terms.responsibilities_content_6') }}</span></li>
<li><span style="font-weight: 400;"> {{ __('terms.responsibilities_content_7') }} </span></li>
<li><span style="font-weight: 400;"> {{ __('terms.responsibilities_content_8') }}</span></li>
<li><span style="font-weight: 400;"> {{ __('terms.responsibilities_content_9') }} </span></li>
<li><span style="font-weight: 400;"> {{ __('terms.responsibilities_content_10') }}</span></li>
</ol>
<p><b>{{ __('terms.disclaimer_heading') }} </b></p>
<p><b>{{ __('terms.disclaimer_heading_desc') }} </b></p>
<ol>
<li><span style="font-weight: 400;"> {{ __('terms.disclaimer_content_1') }}</span></li>
<li><span style="font-weight: 400;"> {{ __('terms.disclaimer_content_2') }} </span></li>
<li><span style="font-weight: 400;"> {{ __('terms.disclaimer_content_3') }} </span></li>
<li><span style="font-weight: 400;"> {{ __('terms.disclaimer_content_4') }} </span></li>
<li><span style="font-weight: 400;"> {{ __('terms.disclaimer_content_5') }} </span></li>
<li><span style="font-weight: 400;"> {{ __('terms.disclaimer_content_6') }}</span></li>
<li><span style="font-weight: 400;"> {{ __('terms.disclaimer_content_7') }} </span></li>
<li><span style="font-weight: 400;"> {{ __('terms.disclaimer_content_8') }}</span></li>
</ol>
<p>&nbsp;</p>
<p><b>{{ __('terms.authority_bank_name_heading') }} </b></p>
<p><span style="font-weight: 400;">{{ __('terms.authority_bank_name_desc') }}</span></p>
<p>&nbsp;</p>
<p><b>{{ __('terms.records_heading') }}</b></p>
<p><span style="font-weight: 400;"> {{ __('terms.records_desc') }}</span></p>
<p><b>{{ __('terms.indemnity_heading') }}</b></p>
<p><span style="font-weight: 400;"> {{ __('terms.indemnity_desc') }}</span></p>
<p><b>{{ __('terms.termination') }} </b></p>
<ul>
<li><span style="font-weight: 400;"> {{ __('terms.termination_content_1') }} </span></li>
<li><span style="font-weight: 400;"> {{ __('terms.termination_content_2') }}</span></li>
<li><span style="font-weight: 400;">  {{ __('terms.termination_content_3') }}</span></li>
</ul>
<p>&nbsp;</p>
<p><b> {{ __('terms.grievance_officer') }} </b></p>
<p><span style="font-weight: 400;">
    {{ __('terms.grievance_content_1') }}
  </span><b>{{ __('terms.grievance_content_2') }}</b>
  <span style="font-weight: 400;"> {{ __('terms.grievance_content_3') }}</span> 
  <a href="mailto:info@yashwantbanklatur.com"><b>{{ __('terms.grievance_content_4') }}</b></a></p>
<p><b>{{ __('terms.waiver') }}</b></p>
<p><span style="font-weight: 400;"> {{ __('terms.waiver_desc') }}</span></p>
<p><b>{{ __('terms.severability') }}</b></p>
<p><span style="font-weight: 400;"> {{ __('terms.severability_desc') }}</span></p>
<p><b>{{ __('terms.notices') }} </b></p>
<p><span style="font-weight: 400;">
    {{ __('terms.notices_desc_1') }}
</span><b>​</b><b> {{ __('terms.notices_desc_2') }} </b>
<span style="font-weight: 400;"> {{ __('terms.notices_desc_3') }}</span></p>
<p><b>{{ __('terms.amendment') }}</b></p>
<p><span style="font-weight: 400;"> {{ __('terms.amendment_desc') }}</span></p>
<p>&nbsp;</p>
<p><b>{{ __('terms.governing_law') }}</b></p>
<p><span style="font-weight: 400;"> {{ __('terms.governing_desc') }}</span></p> --}}
                    </div>
                </div>
            </div>
        </div>
</section><br><br>

@endsection
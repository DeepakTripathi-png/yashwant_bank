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
    <img style="padding-top: 4%;"   src="{{!empty($banner->banner_image_path)?url('/').Storage::url($banner->banner_image_path):asset('front/images/banner/pigmi.jpg')}}" width="100%" alt="" />
    <div class="parallax-overlay"></div>
    <div class="banner-title-content">
        <div class="text-center">
            <h2>  @if($locale == 'mr')
                {{ !empty($banner->banner_heading_heading_mr)?$banner->banner_heading_heading_mr:'' }}
              @else
                {{ !empty($banner->banner_heading_heading_en)?$banner->banner_heading_heading_en:'' }}
              @endif
            </h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">@lang('privacyPolicy.home')</a></li>
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
                          {!! !empty($privacy->description_mr)? $privacy->description_mr:'' !!}
                        @else
                         {!! !empty( $privacy->description_en)? $privacy->description_en:'' !!}
                       @endif
                        
                     

                    </div>
                </div>
            </div>
        </div>
</section><br><br>

@endsection
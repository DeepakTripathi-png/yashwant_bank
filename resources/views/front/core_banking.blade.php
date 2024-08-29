@extends('front.layouts.app')

@section('content')

<style>
	.facility_tab:hover{
		color:#EE3C25
	}
	@media only screen and (max-width: 723px){
	section {
    padding: 0px 0px!important;
	}
	.heading {
		padding-bottom: 0px!important;
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
    <img style="padding-top: 4%;" src="{{!empty($banner->banner_image_path)?url('/').Storage::url($banner->banner_image_path):asset('front/images/banner/core_banking.jpg')}}" width="100%" alt="" />
    <!-- <div class="parallax-overlay"></div> -->
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
                    <li class="breadcrumb-item"><a href="{{url('/')}}">@lang('services.home')</a></li>
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
{{-- {{dd($service)}} --}}

<section class="section1" id="main-container">
    <div class="container">
        <div class="row">
            <div class="col-md-2 heading text-center">
            </div>
            <div class="col-md-8 heading text-center">
                <h1 class="title-border">

                    @if($locale == 'mr')
                        {{ !empty($service->service_name_mr)?$service->service_name_mr:'' }}
                      @else
                        {{ !empty($service->service_name_en)?$service->service_name_en:'' }}
                      @endif
                </h1>
            </div>
            <div class="col-md-2 heading text-center">
            </div>
        </div>
        <div class="row about-wrapper-top">
            <div class=" ">
                <div class="row">
                    <div class="col-md-4">
                        <img style="height:200px;width:400px;" class="img-fluid" src="{{!empty($service->service_image_path)?url('/').Storage::url($service->service_image_path):asset('front/images/facility/corebanking.jpg')}}" alt=""> <br><br>
                    </div>
                    <div class="col-md-7 text-justify">
                        <p style="font-size:17px;line-height:35px;"><i  style="color:#EE3C25;" class="fa fa-quote-left mr-1"></i>
                        @if($locale == 'mr')
                            {!! !empty($service->service_description_mr)?$service->service_description_mr:'' !!}
                          @else
                            {!! !empty($service->service_description_en)?$service->service_description_en:'' !!}
                          @endif
                        <i style="color:#EE3C25;" class="fa fa-quote-right   ml-1"></i> </p>
                    </div>
                </div>
            </div>
        </div>
</section><br><br>
@endsection

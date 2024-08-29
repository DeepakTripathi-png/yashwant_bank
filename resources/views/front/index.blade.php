@extends('front.layouts.app')

@section('content')

{{-- <style>
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

.slider_margin{
		margin-top:30px;
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

  /* #main-slide .carousel-inner img {
    height: 80vh; 
    object-fit: cover;
 } */
  
</style> --}}

<style>

.facility_tab:hover{
    color:#EE3C25;
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

.slider_margin {
    margin-top: 30px;
}

@media only screen and (max-width: 400px) {
    .slider_margin {
        margin-top: 105px;
    }
    .carousel-inner img {
        margin-top: 200px; 
    }


    .carousel-inner {
    position: relative;
    width: 100%;
    overflow: hidden;
    margin-top: 35%;
    }

    .header_title {
        font-size: 12px !important;
        margin-right: 10px !important;
        margin-left: 3px !important;
    }
}

@media only screen and (max-width: 723px) {
    .slider_margin {
        margin-top: 70px;
    }
    .heading {
        /* margin-top:50px; */
    }
    section {
        padding: 0px 0px!important;
    }
    .quotes {
        margin-bottom: 40px;
    }
    .carousel-inner img {
        margin-top: 20px; /* Add this line to give margin-top to images */
    }
}

.service-item {
    flex: 0 0 14.2857%; 
    max-width: 14.2857%;
    box-sizing: border-box;
}

.service-image img {
    height: 120px;
    width: 100%;
}
</style>    

<style>
    .service-item {
        flex: 0 0 14.2857%; 
        max-width: 14.2857%;
        box-sizing: border-box;
    }

   
    .service-image img {
        height: 120px;
        width: 100%; 
    }

    @media (max-width: 400px) {
        .col-lg-2 {
            flex: 0 0 50%; /* 2 cards per row */
            max-width: 50%;
        }
        
        .col-md-3 {
            flex: 0 0 50%; /* 2 cards per row */
            max-width: 50%;
        }
        
        .col-sm-4 {
            flex: 0 0 33.3333%; /* 3 cards per row */
            max-width: 33.3333%;
        }
        
        .col-6 {
            flex: 0 0 50%; /* 2 cards per row */
            max-width: 50%;
        }
    }

    @media (min-width: 401px) {
        .col-lg-2 {
            flex: 0 0 20%; /* 5 cards per row */
            max-width: 20%;
        }
    }


    /* Custom CSS for responsiveness */
@media (max-width: 767.98px) { /* For screens smaller than 768px (mobile devices) */
    .col-sm-6 {
        flex: 0 0 50%; /* 2 cards per row */
        max-width: 50%;
    }
}

@media (min-width: 768px) and (max-width: 991.98px) { /* For screens between 768px and 992px (tablets) */
    .col-md-4 {
        flex: 0 0 33.3333%; /* 3 cards per row */
        max-width: 33.3333%;
    }
}

@media (min-width: 992px) { /* For screens larger than 992px (desktops) */
    .col-lg-3 {
        flex: 0 0 25%; /* 4 cards per row */
        max-width: 25%;
    }
}


/* Custom CSS for responsiveness */
@media (max-width: 400px) { /* For screens smaller than 400px (mobile devices) */
    .col-12 {
        flex: 0 0 100%; /* 1 card per row */
        max-width: 100%;
    }
}

@media (min-width: 401px) and (max-width: 767.98px) { /* For screens between 401px and 768px (tablets) */
    .col-sm-6 {
        flex: 0 0 50%; /* 2 cards per row */
        max-width: 50%;
    }
}

@media (min-width: 768px) { /* For screens larger than 768px (desktops) */
    .col-md-4 {
        flex: 0 0 33.3333%; /* 3 cards per row */
        max-width: 33.3333%;
    }
}



</style>



<div id="home" class="p-0  slider_margin">

  
    <div id="main-slide" class="carousel slide" data-ride="carousel">
        
        <ol class="carousel-indicators">
            @if(!empty($slider))
            @foreach($slider as $key => $data)
                <li data-target="#main-slide" data-slide-to="{{$key}}" class="{{ $key == 0 ? 'active' : '' }}"></li>
            @endforeach
            @endif
        </ol>

        <div class="carousel-inner">
            @if(!empty($slider))
            @foreach($slider as $key => $data)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                    <img class="img-fluid" src="{{!empty($data->image_path)?url('/').Storage::url($data->image_path):'' }}" alt="{{ $data->image_name }}">
                </div>
            @endforeach
            @endif
        </div>

        <a class="left carousel-control carousel-control-prev" href="#main-slide" data-slide="prev">
            <span><i class="fa fa-angle-left"></i></span>
        </a>
        <a class="right carousel-control carousel-control-next" href="#main-slide" data-slide="next">
            <span><i class="fa fa-angle-right"></i></span>
        </a>
    </div>
    


</div>






<section style="padding:0px;" >
    <div class="container"style="padding:60px 0px 0px 0px">
        <div class="row">
            <div class="col-md-12 heading">
                <span class="title-icon classic float-left"><i class="fa fa-bank"></i></span>
                <h2 class="title classic">  <span style="color:#EE3C25";>
                    @if($locale == 'mr')
                    {{!empty($serviceSection->heading_1_mr)?$serviceSection->heading_1_mr:''}}
                    @else
                    {{!empty($serviceSection->heading_1_en)?$serviceSection->heading_1_en:''}}
                    @endif
                </span> 

                    @if($locale == 'mr')
                    {{$serviceSection->heading_2_mr??''}}
                    @else
                    {{$serviceSection->heading_2_en??''}}
                    @endif
              </h2>  
                
               
            </div>
        </div>
        <div class="row about-wrapper-top  ">
            <div class=""style="padding:0px 25px;">
                <div class="row">
                    <div class="col-md-12">
                        <p style="font-size:17px;line-height:35px;margin-bottom:0px;" class="text-justify"><i  style="color:#EE3C25;" class="fa fa-quote-left mr-1"></i>
                            @if($locale == 'mr')
                            {!! !empty($serviceSection->description_mr)?$serviceSection->description_mr:''!!}
                            @else
                            {!! !empty($serviceSection->description_en)?$serviceSection->description_en:''!!}
                            @endif
                        <i  style="color:#EE3C25;" class="fa fa-quote-right ml-1"></i></p>
                    </div>
                </div>
            </div>
        </div><br>

        {{-- <div class="container">
            <div class="row">
                @if(!empty($services))
                    @foreach ($services as $service)
                        <div class="col-md-2 col-sm-4 service-item wow fadeInDown" data-wow-delay=".3s">
                            <a href="@if($service->service_page_name == 'core_banking')
                                        {{ url('/core-banking') }}
                                    @elseif($service->service_page_name == 'sms_alert')
                                        {{ url('/sms-alert') }}
                                    @elseif($service->service_page_name == 'rgts_neft')
                                        {{ url('/rtgs') }}
                                    @elseif($service->service_page_name == 'locker_facility')
                                        {{ url('/locker-suvidha') }}
                                    @elseif($service->service_page_name == 'gold_loan')
                                        {{ url('/sone-taran') }}
                                    @elseif($service->service_page_name == 'electricity_bill')
                                        {{ url('/lightbill-barana-kendra') }}
                                    @elseif($service->service_page_name == 'pigmy_deposit_scheme')
                                        {{ url('/pigmi-deposit-scheme') }}
                                    @else
                                        {{ url('/') }}
                                    @endif
                            ">
                                <div class="service-content">
                                    <figure class="m-0 effect-oscar">
                                        <span class="service-image">
                                            <img src="{{ !empty($service->service_image_path) ? url('/').Storage::url($service->service_image_path) : asset('front/images/facility/corebanking.jpg') }}" alt="" />
                                        </span>
                                    </figure>
                                    <h3 class="text-center seva_title"><b>
                                        @if($locale == 'mr')
                                            {{ $service->service_name_mr }}
                                        @else
                                            {{ $service->service_name_en }}
                                        @endif
                                    </b></h3>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endif
            </div>
        </div> --}}

        {{-- <div class="container">
            <div class="row">
                @if(!empty($services))
                    @foreach ($services as $service)
                        <div class="col-md-2 col-sm-4 col-6 service-item wow fadeInDown" data-wow-delay=".3s">
                            
                            <a href="{{ url('service/' . $service->service_slug_url) }}">
                     
                                <div class="service-content">
                                    <figure class="m-0 effect-oscar">
                                        <span class="service-image">
                                            <img src="{{ !empty($service->service_image_path) ? url('/').Storage::url($service->service_image_path) : asset('front/images/facility/corebanking.jpg') }}" alt="" />
                                        </span>
                                    </figure>
                                    <h3 class="text-center seva_title"><b>
                                        @if($locale == 'mr')
                                            {{ $service->service_name_mr }}
                                        @else
                                            {{ $service->service_name_en }}
                                        @endif
                                    </b></h3>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endif
            </div>
        </div> --}}

        {{-- <div class="container">
            <div class="row">
                @if(!empty($services))
                    @foreach ($services as $service)
                        <div class="col-lg-2 col-md-3 col-sm-4 col-6 service-item wow fadeInDown" data-wow-delay=".3s">
                            <a href="{{ url('service/' . $service->service_slug_url) }}">
                                <div class="service-content">
                                    <figure class="m-0 effect-oscar">
                                        <span class="service-image">
                                            <img src="{{ !empty($service->service_image_path) ? url('/').Storage::url($service->service_image_path) : asset('front/images/facility/corebanking.jpg') }}" alt="" class="img-fluid" />
                                        </span>
                                    </figure>
                                    <h3 class="text-center seva_title">
                                        <b>
                                            @if($locale == 'mr')
                                                {{ $service->service_name_mr }}
                                            @else
                                                {{ $service->service_name_en }}
                                            @endif
                                        </b>
                                    </h3>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endif
            </div>
        </div> --}}

        <div class="container">
            <div class="row">
                @if(!empty($services))
                    @foreach ($services as $service)
                        <div class="col-lg-2 col-md-3 col-sm-4 col-6 service-item wow fadeInDown" data-wow-delay=".3s">
                            <a href="{{ url('service/' . $service->service_slug_url) }}">
                                <div class="service-content">
                                    <figure class="m-0 effect-oscar">
                                        <span class="service-image">
                                            <img src="{{ !empty($service->service_image_path) ? url('/').Storage::url($service->service_image_path) : asset('front/images/facility/corebanking.jpg') }}" alt="" class="img-fluid" />
                                        </span>
                                    </figure>
                                    <h3 class="text-center seva_title">
                                        <b>
                                            @if($locale == 'mr')
                                                {{ $service->service_name_mr }}
                                            @else
                                                {{ $service->service_name_en }}
                                            @endif
                                        </b>
                                    </h3>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>    
    </div>
    <div class="container" style="padding:60px 0px 0px 0px">
        <div class="row">
            <div class="col-md-12 heading">
                <span class="title-icon classic float-left"><i class="fa  fa-user"></i></span>

               

                       <h2 class="title classic"> <span style="color:#EE3C25">
                        @if($locale == 'mr')
                        {{ !empty($chairMan->chair_man_heading_1_mr)?$chairMan->chair_man_heading_1_mr:'' }}
                        @else
                        {{ !empty($chairMan->chair_man_heading_1_en)?$chairMan->chair_man_heading_1_en:''}}
                        @endif
                    </span>
                        @if($locale == 'mr')
                        {{ !empty($chairMan->chair_man_heading_2_mr)?$chairMan->chair_man_heading_2_mr:'' }}
                        @else
                        {{ !empty($chairMan->chair_man_heading_2_en)?$chairMan->chair_man_heading_2_en:'' }}
                        @endif
                    </h2>
                    
                
            </div>
        </div>
        <div class="row about-wrapper-top">
            <div class="  "style="padding:0px 25px;">
                <div class="row">
                    <div class="col-md-8">
                        <p style="font-size:17px;line-height:35px;" class="text-justify"><i  style="color:#EE3C25;" class="fa fa-quote-left mr-1"></i> 
                      
                            @if($locale == 'mr')
                              {!! !empty($chairMan->chair_man_description_mr)?$chairMan->chair_man_description_mr:''!!}
                            @else
                              {!! !empty($chairMan->chair_man_description_en)?$chairMan->chair_man_description_en:''!!}
                            @endif

                        <i style="color:#EE3C25;" class="fa fa-quote-right   ml-1"></i></p>
                    </div>
                    <div class="col-md-4">
                        <img class="img-fluid" style="width:100%;height:100%;" src="{{!empty($chairMan->chair_man_image_path)?url('/').Storage::url($chairMan->chair_man_image_path):asset('front/images/members/Chairman012.jpg')}}" alt="">
                        <h4 style="padding: 0.5rem;font-weight: 600;text-align: center;">
                            @if($locale == 'mr')
                             {{ !empty($chairMan->chair_man_name_mr)?$chairMan->chair_man_name_mr:'' }}
                            @else
                             {{ !empty($chairMan->chair_man_name_en)?$chairMan->chair_man_name_en:'' }}
                            @endif
                        </h4>
                    </div>
                     <p style="font-size:17px;line-height:35px; padding:20px 15px 0px 15px;margin-top:0px;" class="text-justify">
                    
                     </p>
                </div>
            </div>
        </div>
    </div>
</section>



{{-- <section style="padding:60px 0px 50px 0px ; ">
    <div class="container"style="padding-bottom:0px;">

        <div class="row">
            <div class="col-md-12 heading" style="padding-bottom:50px; ">
                <span class="title-icon classic float-left"><img style="height:45px;width:50px; color:red;" src="{{asset('front/images/icon/icon8.jpg')}}" alt=""></span>
                <h2 class="title classic"> <span style="color:#EE3C25">@lang('home.our_various_schemes_1')</span>@lang('home.our_various_schemes_2')</h2>
            </div>
        </div>

        <div class="row">
            @if($schemes)
            @foreach ($schemes as $data)
                <div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay=".3s">
                    <div class="service-content">
                        <figure class="m-0 effect-oscar">
                            <span class="service-image"><img style="height:200px;" class="img-fluid" src="{{!empty($data->scheme_image_path)?url('/').Storage::url($data->scheme_image_path):asset('front/images/facility/home_loan1.jpg')}}" alt="" /></span>
                        </figure>
                        <h3 style="background-color:#EE3C25;color:white;" class="text-center">
                            @if($locale == 'mr')
                            {{ !empty($data->scheme_name_mr)?$data->scheme_name_mr:'' }}
                        @else
                            {{ !empty($data->scheme_name_en)?$data->scheme_name_en:'' }}
                        @endif
                        
                        </h3>
                    </div>
                </div>
            @endforeach
            @endif
        </div><br>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 wow fadeInUp"data-wow-delay="0.9s">
                <h1 class=" text-center quotes " style="min-height:100px;color:#EE3C25; padding-top:30px;background-color:rgb(200, 217, 244);">
            <b> @lang('home.bank_quote')</b>
                </h1>
            </div>
        </div>
    </div>
</section>   --}}


<section style="padding:60px 0px 50px 0px;">
    <div class="container" style="padding-bottom:0px;">

        <div class="row">
            <div class="col-md-12 heading" style="padding-bottom:50px;">
                <span class="title-icon classic float-left"><img style="height:45px;width:50px;" src="{{asset('front/images/icon/icon8.jpg')}}" alt=""></span>
                <h2 class="title classic">
                    <span style="color:#EE3C25">@lang('home.our_various_schemes_1')</span>@lang('home.our_various_schemes_2')</h2>
            </div>
        </div>

        <div class="row">
            @if($schemes)
                @foreach ($schemes as $data)
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 wow fadeInDown" data-wow-delay=".3s">
                        <div class="service-content">
                            <figure class="m-0 effect-oscar">
                                <span class="service-image">
                                    <img style="height:200px;" class="img-fluid" src="{{ !empty($data->scheme_image_path) ? url('/').Storage::url($data->scheme_image_path) : asset('front/images/facility/home_loan1.jpg') }}" alt="" />
                                </span>
                            </figure>
                            <h3 style="background-color:#EE3C25;color:white;" class="text-center">
                                @if($locale == 'mr')
                                    {{ !empty($data->scheme_name_mr) ? $data->scheme_name_mr : '' }}
                                @else
                                    {{ !empty($data->scheme_name_en) ? $data->scheme_name_en : '' }}
                                @endif
                            </h3>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
        <br>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 wow fadeInUp" data-wow-delay="0.9s">
                <h1 class="text-center quotes" style="min-height:100px;color:#EE3C25; padding-top:30px;background-color:rgb(200, 217, 244);">
                    <b>@lang('home.bank_quote')</b>
                </h1>
            </div>
        </div>
    </div>
</section>




@endsection

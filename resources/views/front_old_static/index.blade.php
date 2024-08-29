@extends('front.layouts.app')

@section('content')

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
</style>
<style>
.schemes-section {
    padding: 60px 0 50px;
}

.schemes-container {
    padding-bottom: 0;
}

.heading {
    padding-bottom: 50px;
}

.title-icon img {
    height: 45px;
    width: 50px;
    color: red;
}

.title .highlighted-text {
    color: #EE3C25;
}

.service-content {
    text-align: center;
}

.service-img {
    height: 200px;
    width: 100%;
}

.service-title {
    background-color: #EE3C25;
    color: white;
    padding: 10px 0;
    margin-top: 10px;
}

.quotes {
    min-height: 100px;
    color: #EE3C25;
    padding-top: 30px;
    background-color: rgb(200, 217, 244);
}

@media (max-width: 720px) {
    .heading .title-icon img {
        height: 30px;
        width: 35px;
    }
    .service-img {
        height: 150px;
    }
    .service-title {
        font-size: 16px;
    }
    .quotes {
        font-size: 20px;
        padding: 20px 0;
    }
}

#main-slide .carousel-item img {
    width: 100%;
    -webkit-backface-visibility: hidden;
    margin-top: 30px;
}

</style>    



<div id="home" class="p-0  slider_margin">
    <div id="main-slide" class="carousel slide" data-ride="carousel">
        <!-- <div class="overlay"></div> -->
        <ol class="carousel-indicators">
            <li data-target="#main-slide" data-slide-to="0" class="active"></li>
            <li data-target="#main-slide" data-slide-to="1"></li>
            <li data-target="#main-slide" data-slide-to="2"></li>
            <li data-target="#main-slide" data-slide-to="3"></li>
            <li data-target="#main-slide" data-slide-to="4"></li>
            <li data-target="#main-slide" data-slide-to="5"></li>
            <li data-target="#main-slide" data-slide-to="6"></li>
            <li data-target="#main-slide" data-slide-to="7"></li>
            <li data-target="#main-slide" data-slide-to="8"></li>
        </ol>
        <div class="carousel-inner">
          
            
            <div class="carousel-item active">
                @if(App::getLocale() == 'mr')
                    <img class="img-fluid" src="{{ asset('front/images/slider/homepage3.jpg') }}" alt="slider homepage">
                @else
                    <img class="img-fluid" src="{{ asset('front/images/slider/homepage3en.jpg') }}" alt="slider homepage">
                @endif

            </div>
            <div class="carousel-item">
                <img  class="img-fluid" src="{{asset('front/images/slider/slider23_1.JPG')}}" alt="slider">
            </div>
            <div class="carousel-item">
                <img class="img-fluid"  src="{{asset('front/images/slider/slider23_2.JPG')}}" alt="slider">
            </div>
            <div class="carousel-item">
                <img class="img-fluid"  src="{{asset('front/images/slider/slider23_3.JPG')}}" alt="slider">
            </div>
            <div class="carousel-item">
                <img class="img-fluid"  src="{{asset('front/images/slider/slider23_4.JPG')}}" alt="slider">
            </div>
            <div class="carousel-item">
                <img class="img-fluid"  src="{{asset('front/images/slider/slider23_5.JPG')}}" alt="slider">
            </div>
            <div class="carousel-item">
                <img class="img-fluid"  src="{{asset('front/images/slider/slider23_6.JPG')}}" alt="slider">
            </div>
            <div class="carousel-item">
                <img class="img-fluid"  src="{{asset('front/images/slider/slider23_7.JPG')}}" alt="slider">
            </div>
            <div class="carousel-item">
                <img class="img-fluid"  src="{{asset('front/images/slider/slider23_8.JPG')}}" alt="slider">
            </div>
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
                <h2 class="title classic">  <span style="color:#EE3C25";>@lang('home.bank_name_1')</span> @lang('home.bank_name_2')&nbsp;@lang('home.bank_name_3') </h2>    
            </div>
        </div>
        <div class="row about-wrapper-top  ">
            <div class=""style="padding:0px 25px;">
                <div class="row">
                    <div class="col-md-12">
                        <p style="font-size:17px;line-height:35px;margin-bottom:0px;" class="text-justify"><i  style="color:#EE3C25;" class="fa fa-quote-left mr-1"></i>@lang('home.establishment')
                        <i  style="color:#EE3C25;" class="fa fa-quote-right ml-1"></i></p>
                    </div>
                </div>
            </div>
        </div><br>
        <div class="row " >
            <div class="col-md-2 col-sm-4 wow fadeInDown" data-wow-delay=".3s">
                <a href="core-banking">
                    <div class="service-content">
                        <figure class="m-0 effect-oscar">
                            <span class="service-image"><img style="height:120px;width:300px;" class="img-fluid" src="{{asset('front/images/facility/corebanking.jpg')}}" alt="" /></span>
                        </figure>
                        <h3  class="text-center seva_title"><b>@lang('home.core_banking')</b></h3>
                    </div>
                </a>
            </div>
            
            <div class="col-md-2 col-sm-4 wow fadeInDown" data-wow-delay=".4s">
                <a href="sms-alert">
                    <div class="service-content">
                    <figure class="m-0 effect-oscar">
                        <span class="service-image"><img style="height:120px;width:300px;" class="img-fluid" src="{{asset('front/images/facility/sms_alert.jpg')}}" alt="" /></span>
                    </figure>
                    <h3  class="text-center seva_title"> <b>@lang('home.sms_alert') </b>  </h3>	
                    </div>
                </a>
            </div>
        
            <div class="col-md-2 col-sm-4 wow fadeInDown" data-wow-delay=".6s">
                <a href="locker-suvidha">
                <div class="service-content">
                    <figure class="m-0 effect-oscar">
                        <span class="service-image"><img style="height:120px;width:300px;" class="img-fluid" src="{{asset('front/images/facility/locker.jpg')}}" alt="" /></span>
                    </figure>		
                        <h3  class="text-center seva_title"><b>@lang('home.locker')</b></h3>
                </div>
                </a>
            </div>
            <div class="col-md-2 col-sm-4 wow fadeInDown" data-wow-delay="0.7s">
                <a href="lightbill-barana-kendra">
                <div class="service-content">
                    <figure class="m-0 effect-oscar">
                        <span class="service-image"><img style="height:120px;width:300px;" class="img-fluid" src="{{asset('front/images/facility/electricity_bill1.jpg')}}" alt="" /></span>
                    </figure>
                    <h3  class="text-center seva_title"><b>@lang('home.light_bill')</b></h3>
                </div>
                </a>
            </div>
            <div class="col-md-2 col-sm-4 wow fadeInDown" data-wow-delay="0.7s">
                <a href="pigmi-deposit-scheme">
                    <div class="service-content">
                    <figure class="m-0 effect-oscar">
                        <span class="service-image"><img style="height:120px;width:300px;" class="img-fluid" src="{{asset('front/images/facility/pigmy1.jpg')}}" alt="" /></span>
                    </figure>
                    <h3  class="text-center seva_title"><b>@lang('home.pigmi') </b> </h3>
                    </div> 
                </a>
            </div>

            <div class="col-md-2 col-sm-4 wow fadeInDown" data-wow-delay=".2s">
                <a href="rtgs">
                    <div class="service-content">
                    <figure class="m-0 effect-oscar">
                        <span class="service-image"><img style="height:120px;width:300px;" class="img-fluid" src="{{asset('front/images/facility/neft2.jpg')}}" alt="" /></span>
                    </figure>
                    <h3  class="text-center seva_title"><b>@lang('home.rtgs_neft')</b>  </h3>	
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="container" style="padding:60px 0px 0px 0px">
        <div class="row">
            <div class="col-md-12 heading">
                <span class="title-icon classic float-left"><i class="fa  fa-user"></i></span>
                
               
                    @if (app()->getLocale() == 'mr')
                       <h2 class="title classic"> <span style="color:#EE3C25">@lang('home.chairman_message_1') </span>@lang('home.chairman_message_2'),</h2>
                    @else
                       <h2 class="title classic"> @lang('home.chairman_message_1') <span style="color:#EE3C25">@lang('home.chairman_message_2'),</span></h2>
                    @endif
             
                
            </div>
        </div>
        <div class="row about-wrapper-top">
            <div class="  "style="padding:0px 25px;">
                <div class="row">
                    <div class="col-md-8">
                        <p style="font-size:17px;line-height:35px;" class="text-justify"><i  style="color:#EE3C25;" class="fa fa-quote-left mr-1"></i> @lang('home.chairman_message_p1')</p>
                        <p style="font-size:17px;line-height:35px;" class="text-justify">
                            @lang('home.chairman_message_p2')
                        <i style="color:#EE3C25;" class="fa fa-quote-right   ml-1"></i></p>
                    </div>
                    <div class="col-md-4">
                        <img class="img-fluid" style="width:100%;height:100%;" src="{{asset('front/images/members/Chairman012.jpg')}}" alt="">
                        <h4 style="padding: 0.5rem;font-weight: 600;text-align: center;">@lang('home.chairman_name')</h4>
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
            <div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay=".3s">
                <div class="service-content">
                    <figure class="m-0 effect-oscar">
                        <span class="service-image"><img style="height:200px;" class="img-fluid" src="{{asset('front/images/facility/home_loan1.jpg')}}" alt="" /></span>
                    </figure>
                    <h3 style="background-color:#EE3C25;color:white;" class="text-center">@lang('home.home_loan')</h3>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay=".3s">
                <div class="service-content">
                    <figure class="m-0 effect-oscar">
                        <span class="service-image"><img style="height:200px;" class="img-fluid" src="{{asset('front/images/facility/education_loan1.jpg')}}" alt="" /></span>
                    </figure>
                    <h3 style="background-color:#EE3C25;color:white;" class="text-center">@lang('home.education_loan')</h3>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay=".4s">
                <div class="service-content">
                <figure class="m-0 effect-oscar">
                    <span class="service-image"><img style="height:200px;" class="img-fluid" src="{{asset('front/images/facility/vahan_loan1.jpg')}}" alt="" /></span>
                </figure>
                <h3 style="background-color:#EE3C25;color:white;" class="text-center">@lang('home.vehicle_loan')</h3>	
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay=".5s">
                <div class="service-content">
                <figure class="m-0 effect-oscar">
                    <span class="service-image"><img style="height:200px;" class="img-fluid" src="{{asset('front/images/facility/vyapar_loan1.jpg')}}" alt="" /></span>
                </figure>
                <h3 style="background-color:#EE3C25;color:white;" class="text-center">@lang('home.business_loan')</h3>		
                </div>
            </div>
            <div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay=".6s">
                <div class="service-content">
                <figure class="m-0 effect-oscar">
                    <span class="service-image"><img style="height:200px;" class="img-fluid" src="{{asset('front/images/facility/lughu_udyog1.jpg')}}" alt="" /></span>
                </figure>		
                    <h3 style="background-color:#EE3C25;color:white;" class="text-center">@lang('home.small_industry_loan')</h3>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay="0.7s">
                <div class="service-content">
                <figure class="m-0 effect-oscar">
                    <span class="service-image"><img style="height:200px;" class="img-fluid" src="{{asset('front/images/facility/gold_loan.jpg')}}" alt="" /></span>
                </figure>
                <h3 style="background-color:#EE3C25;color:white;" class="text-center">@lang('home.gold_loan')</h3>
                </div>
            </div>
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

<section class="schemes-section">
    <div class="container schemes-container">
        <div class="row">
            <div class="col-md-12 heading">
                <span class="title-icon classic float-left">
                    <img class="icon-img" src="{{ asset('front/images/icon/icon8.jpg') }}" alt="">
                </span>
                <h2 class="title classic">
                    <span class="highlighted-text">@lang('home.our_various_schemes_1')</span>@lang('home.our_various_schemes_2')
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay=".3s">
                <div class="service-content">
                    <figure class="m-0 effect-oscar">
                        <span class="service-image">
                            <img class="img-fluid service-img" src="{{ asset('front/images/facility/home_loan1.jpg') }}" alt="">
                        </span>
                    </figure>
                    <h3 class="service-title">@lang('home.home_loan')</h3>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay=".3s">
                <div class="service-content">
                    <figure class="m-0 effect-oscar">
                        <span class="service-image">
                            <img class="img-fluid service-img" src="{{ asset('front/images/facility/education_loan1.jpg') }}" alt="">
                        </span>
                    </figure>
                    <h3 class="service-title">@lang('home.education_loan')</h3>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay=".4s">
                <div class="service-content">
                    <figure class="m-0 effect-oscar">
                        <span class="service-image">
                            <img class="img-fluid service-img" src="{{ asset('front/images/facility/vahan_loan1.jpg') }}" alt="">
                        </span>
                    </figure>
                    <h3 class="service-title">@lang('home.vehicle_loan')</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay=".5s">
                <div class="service-content">
                    <figure class="m-0 effect-oscar">
                        <span class="service-image">
                            <img class="img-fluid service-img" src="{{ asset('front/images/facility/vyapar_loan1.jpg') }}" alt="">
                        </span>
                    </figure>
                    <h3 class="service-title">@lang('home.business_loan')</h3>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay=".6s">
                <div class="service-content">
                    <figure class="m-0 effect-oscar">
                        <span class="service-image">
                            <img class="img-fluid service-img" src="{{ asset('front/images/facility/lughu_udyog1.jpg') }}" alt="">
                        </span>
                    </figure>
                    <h3 class="service-title">@lang('home.small_industry_loan')</h3>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay="0.7s">
                <div class="service-content">
                    <figure class="m-0 effect-oscar">
                        <span class="service-image">
                            <img class="img-fluid service-img" src="{{ asset('front/images/facility/gold_loan.jpg') }}" alt="">
                        </span>
                    </figure>
                    <h3 class="service-title">@lang('home.gold_loan')</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 wow fadeInUp" data-wow-delay="0.9s">
                <h1 class="text-center quotes">
                    <b>@lang('home.bank_quote')</b>
                </h1>
            </div>
        </div>
    </div>
</section>



@endsection


@extends('front.layouts.app')

@section('content')
<style>
	.facility_tab:hover{
		color:#262525
	}
	@media only screen and (max-width: 723px){
	section {
    padding: 0px 0px!important;}
	.heading {
    padding-bottom: 0px!important;
    }
}

/* Hide on screens smaller than 720px */
@media only screen and (max-width: 720px) {
    .hide-on-mobile {
        display: none;
    }
}

</style>


{{-- <div id="banner-area">
    <img style="padding-top: 4%;"   src="{{!empty($banner->banner_image_path)?url('/').Storage::url($banner->banner_image_path):''}}" width="100%" alt="" />
    <div class="parallax-overlay"></div>
    <div class="banner-title-content">
        <div class="text-center">

        

            @if(App::getLocale() == 'mr')
             <h2>{{!empty($banner->banner_heading_heading_mr)?$banner->banner_heading_heading_mr:''}}</h2>
            @else
            <h2>{{!empty($banner->banner_heading_heading_en)?$banner->banner_heading_heading_en:''}}</h2>
            @endif

            
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">@lang('aboutus.home')</a></li>
                    <li class="breadcrumb-item text-white" aria-current="page">
                       

                        @if(App::getLocale() == 'mr')
                          {{!empty($banner->banner_heading_heading_mr)?$banner->banner_heading_heading_mr:''}}
                        @else
                          {{!empty($banner->banner_heading_heading_en)?$banner->banner_heading_heading_en:''}}
                        @endif
                    
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div> --}}

<div id="banner-area" class="hide-on-mobile">
    <img style="padding-top: 4%;" src="{{!empty($banner->banner_image_path)?url('/').Storage::url($banner->banner_image_path):''}}" width="100%" alt="" />
    <div class="parallax-overlay"></div>
    <div class="banner-title-content">
        <div class="text-center">
            @if(App::getLocale() == 'mr')
                <h2>{{!empty($banner->banner_heading_heading_mr)?$banner->banner_heading_heading_mr:''}}</h2>
            @else
                <h2>{{!empty($banner->banner_heading_heading_en)?$banner->banner_heading_heading_en:''}}</h2>
            @endif

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">@lang('aboutus.home')</a></li>
                    <li class="breadcrumb-item text-white" aria-current="page">
                        @if(App::getLocale() == 'mr')
                            {{!empty($banner->banner_heading_heading_mr)?$banner->banner_heading_heading_mr:''}}
                        @else
                            {{!empty($banner->banner_heading_heading_en)?$banner->banner_heading_heading_en:''}}
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
                   
                @if(App::getLocale() == 'mr')
                    {{ !empty($about->about_us_heading_mr) ? $about->about_us_heading_mr : '' }}
                @else
                    {{ !empty($about->about_us_heading_en) ? $about->about_us_heading_en : '' }}
                @endif
                
                </h1>
            </div>
            <div class="col-md-2 heading text-center">
            </div>
        </div>
        <div class="row about-wrapper-top">
            <div class="col-md-12 ts-padding  " style="min-height:200px;">
                <!--<p class="text-justify" style="font-size:17px;line-height:35px;" ><i  style="color:#EE3C25;" class="fa fa-quote-left mr-1"></i>सन २००० साली स्व. यशवंतराव चव्हाण साहेबांच्या नावाने बँकेची स्थापना झाली. कालांतराने बँकेस सशक्त करण्याची जबाबदारी सन २०१० साली मा. विष्णुपंत पं. साठे साहेब व तत्कालीन संचालक मंडळाकडे आली. सहकाराचा गाढा अभ्यास, खंबीर उपाययोजना, अफाट जनसंपर्क व जनसहभागाच्या आधारावर मा. विष्णुपंत पं. साठे साहेबांनी बँकेस आज या नावारूपाला आणले आहे. ३१/०३/२०२२ अखेर ८४१० सभासद, २.०४ कोटी भागभांडवल यासह ३४.१० कोटी एकूण व्यवसायासह बँक आज या प्रगतीपथावर आहे.-->
                <!--<i style="color:#EE3C25;" class="fa fa-quote-right   ml-1"></i></p>-->
                <p class="text-justify" style="font-size:17px;line-height:35px;" ><i  style="color:#EE3C25;" class="fa fa-quote-left mr-1"></i>
                    @if(App::getLocale() == 'mr')
                      {!! !empty($about->description_mr)?$about->description_mr:''!!}
                    @else
                      {!! !empty($about->description_en)?$about->description_en:'' !!}
                    @endif
                <i style="color:#EE3C25;" class="fa fa-quote-right   ml-1"></i></p>
            </div>
        </div>
    </div>
</section> <br><br>
@endsection
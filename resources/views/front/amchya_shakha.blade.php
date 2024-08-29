
@extends('front.layouts.app')

@section('content')

<style>
	.facility_tab:hover{
		color:#EE3C25
	}
		.col-sm-6 {
    margin-top: 20px;
}
	@media only screen and (max-width: 723px){
	section {
    padding: 0px 0px!important;}
	.heading {
    padding-bottom: 0px!important;
    }
}

@media only screen and (max-width: 720px) {
    .hide-on-mobile {
        display: none;
    }
}


</style>



<div id="banner-area" class="hide-on-mobile">
    <img style="padding-top: 4%;"   src="{{!empty($banner->banner_image_path)?url('/').Storage::url($banner->banner_image_path):asset('front/images/banner/aamcha_shakha2.jpg')}}" width="100%" alt="" />
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
                    <li class="breadcrumb-item"><a href="./#">@lang('ourbranch.heading')</a></li>
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
            <div class="col-md-12 ts-padding  " style="min-height:200px;">
                
             
                 <main class="page-content">
                      <section">
                        <div class="container-fluid">
                          <div class="row">

                            @if(!empty($branches))
                            @foreach ($branches as $data)
                           
                            <div class="col-sm-6">
                              <div class="card customize" style="background-color: #e629351c;">
                                <div>
                                  <h3 style="text-align:center; margin-top: 12px";> 

                                  @if($locale == 'mr')
                                    {{ !empty($data->branch_name_mr)?$data->branch_name_mr:'' }}
                                  @else
                                    {{ !empty($data->branch_name_en)?$data->branch_name_en:'' }}
                                  @endif
                                  
                                    
                                    </h3>
                                </div>

                                @if($locale == 'mr')
                                 {!! !empty($data->address_mr)?$data->address_mr:'' !!}
                                @else
                                  {!!!empty($data->address_en)?$data->address_en:'' !!}
                                @endif
                               
                              </div>
                            </div>
                            @endforeach
                            @endif


                            {{-- <div class="col-sm-6">
                              <div class="card customize" style="background-color: #e629351c;">
                                <div>
                                  <h3 style="text-align:center; margin-top: 12px";>  {{ __('ourbranch.main_office.title') }}</h3>
                                </div>
                                <p style="font-size: 17px; text-align:center;">{{ __('ourbranch.main_office.address') }}
                                   <br> {{ __('ourbranch.main_office.ceo') }}
                                   <br>{{ __('ourbranch.main_office.mobile') }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                                </p>
                              </div>
                            </div>
                
                            <div class="col-sm-6">
                              <div class="card customize" style="background-color: #e629351c;">
                                <div class="">
                                     <h3  style="text-align:center; margin-top: 12px";>  {{ __('ourbranch.main_branch.title') }} </h3>
                                </div>
                                <p style=" text-align:center; font-size: 17px;">  {{ __('ourbranch.main_branch.address') }}
                                    <br>{{ __('ourbranch.main_branch.complex') }}
                                    <br>{{ __('ourbranch.main_branch.manager') }}
                                    <br> {{ __('ourbranch.main_branch.mobile') }}
                                </p>
                              </div>
                            </div> --}}

                          </div>

                        {{-- <div class="row">
                            <div class="col-sm-6">
                              <div class="card customize" style="background-color: #e629351c;">
                                <div>
                                  <h3  style="text-align:center; margin-top: 12px";> {{ __('ourbranch.latur_branch.title') }}</h3>
                                </div>
                                <p style=" text-align:center; font-size: 17px;"> {{ __('ourbranch.latur_branch.address') }}
                                    <br> {{ __('ourbranch.latur_branch.complex') }}
                                    <br>{{ __('ourbranch.main_branch.manager') }}
                                    <br>{{ __('ourbranch.latur_branch.mobile') }}
                                </p>
                              </div>
                            </div>
                
                            <div class="col-sm-6">
                              <div class="card customize" style="background-color: #e629351c;">
                                <div>
                                     <h3  style="text-align:center; margin-top: 12px";> {{ __('ourbranch.ausa_branch.title') }}</h3>
                                </div>
                                <p style=" text-align:center; font-size: 17px;">
                                       
                                  {{ __('ourbranch.ausa_branch.address') }}
                                       <br>   {{ __('ourbranch.ausa_branch.address_pin') }}  
                                       <br>{{ __('ourbranch.ausa_branch.mobile') }}
                                      <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
                                       
                                </p>
                              </div>
                            </div>
                          </div>
                          
                        </div> --}}

                    </section>
                    </main>
            </div>
        </div>
    </div>
</section> <br><br>

@endsection


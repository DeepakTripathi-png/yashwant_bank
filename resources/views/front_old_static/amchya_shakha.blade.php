
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
</style>

<div id="banner-area">
    <img style="padding-top: 4%;"   src="{{asset('front/images/banner/aamcha_shakha2.jpg')}}" alt="" width="100%" />
    <div class="parallax-overlay"></div>
    <div class="banner-title-content">
        <div class="text-center">
            <h2>@lang('ourbranch.heading')</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="./#">@lang('ourbranch.heading')</a></li>
                    <li class="breadcrumb-item text-white" aria-current="page">@lang('ourbranch.heading')</li>
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
                <h1 class="title-border">@lang('ourbranch.heading')</h1>
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
                            <div class="col-sm-6">
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
                            </div>
                          </div>
                             <div class="row">
                            <div class="col-sm-6">
                              <div class="card customize" style="background-color: #e629351c;">
                                <div>
                                  <h3  style="text-align:center; margin-top: 12px";> {{ __('ourbranch.latur_branch.title') }}</h3>
                                </div>
                                <p style=" text-align:center; font-size: 17px;"> {{ __('ourbranch.latur_branch.address') }}
                                    <br> {{ __('ourbranch.latur_branch.complex') }}
                                    {{-- <br>कव्हा रोड, बसवेश्वर चौक, लातूर - ४१३५१२ --}}
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
                        </div>
                    </section>
                    </main>
            </div>
        </div>
    </div>
</section> <br><br>

@endsection


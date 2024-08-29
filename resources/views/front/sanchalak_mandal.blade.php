
@extends('front.layouts.app')

@section('content')

<style>
    .facility_tab:hover{
        color:#EE3C25
    }
    table th {
    width:100px !important;
    }
    @media only screen and (max-width: 723px){
    section {
    padding: 0px 0px!important;}
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
    <img style="padding-top: 4%;"  src="{{!empty($banner->banner_image_path)?url('/').Storage::url($banner->banner_image_path):asset('front/images/banner/sanchalak_madal.jpg')}}" width="100%" alt="" />
    <!-- <div class="parallax-overlay"></div> -->
    <div class="banner-title-content">
        <div class="text-center">
            
                
                @if(App::getLocale() == 'mr')
                  <h2>{{!empty($banner->banner_heading_heading_mr)?$banner->banner_heading_heading_mr:''}}</h2>
                @else
                 <h2>{{!empty($banner->banner_heading_heading_en)?$banner->banner_heading_heading_en:''}}</h2>
                @endif
            
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">@lang('sanchalakMandal.home')</a></li>
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
                    {{!empty($banner->banner_heading_heading_mr)?$banner->banner_heading_heading_mr:''}}
                   @else
                     {{!empty($banner->banner_heading_heading_en)?$banner->banner_heading_heading_en:''}}
                   @endif
                </h1>
            </div>
            <div class="col-md-2 heading text-center">
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
           

            @php
            $list = __('sanchalakMandal');
            @endphp



            <table class="table table-hover table-bordered">
                <col width="50">
                <col width="650">
                <col width="120">
                <tr>
                    <th style="text-align:center;">{{ $list['table_heading_1'] }}</th>
                    <th style="text-align:center;">{{ $list['table_heading_2'] }}</th>
                    <th style="text-align:center;">{{ $list['table_heading_3'] }}</th>
                </tr>
                {{-- {{dd($members)}} --}}

                @if(!empty($members))
                @foreach ($members as $key=>$member)
                      
                    <tr>
                        <td align="center">{{ $key+1 }}</td>

                        @if(App::getLocale() == 'mr')
                          <td>{{ $member->name_mr}}</td>
                       @else
                         <td>{{ $member->name_en }}</td>
                       @endif

                       @if(App::getLocale() == 'mr')
                        <td>{{ $member->designation_mr}}</td>
                      @else
                         <td>{{ $member->designation_en }}</td>
                       @endif
                       
                       
                    </tr>
                @endforeach
                @endif

        
            


            </table>

            </div>
            <div class="col-md-2"></div>
        </div> 
    </div> 
</section><br><br>
@endsection

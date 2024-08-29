@extends('front.layouts.app')

@section('content')

<style>
	.facility_tab:hover{
		color:#EE3C25
	}
	.td{
		text-align: center!important;
	}
	.table1{
		text-align:center;

	}
    .td_margin{
	padding-left:40px!important;
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
</style>


<div id="banner-area">
    <img style="padding-top: 4%;"  src="{{!empty($banner->banner_image_path)?url('/').Storage::url($banner->banner_image_path):asset('front/images/banner/service_charges.jpg')}}" width="100%" width="100%" alt="" />
    <div class="parallax-overlay"></div>
    <div class="banner-title-content">
        <div class="text-center">
            <h2>
                @if(App::getLocale() == 'mr')
                  <h2>{{!empty($banner->banner_heading_heading_mr)?$banner->banner_heading_heading_mr:''}}</h2>
               @else
                         <h2>{{!empty($banner->banner_heading_heading_en)?$banner->banner_heading_heading_en:''}}</h2>
               @endif
            </h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">@lang('serviceCharges.home')</a></li>
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
                <h1 class="title-border">@lang('serviceCharges.heading')</h1>
           
            </div>
            <div class="col-md-2 heading text-center">
            </div>
        </div>
    </div> 
    <div class="container">

        <table class="table table-hover table-bordered table1">
            <col width="200" style="margin-left:100px!important;">
            <thead>
                <tr>
                    <th rowspan="3" class="text-center">
                        @lang('serviceCharges.table1.header.sr_no')
                    </th>
                    <th class="text-center">
                        @lang('serviceCharges.table1.header.particular')
                    </th>
                    <th class="text-center">
                        @lang('serviceCharges.table1.header.commission_gst')
                    </th>
                </tr>
            </thead>
            <tbody>

                @if(!empty($table1))
                @foreach ($table1 as $data)
                <tr>
                    <td align="left" class="td_margin">
                        @if(App::getLocale() == 'mr')
                           {{!empty($data->sr_no_mr)?$data->sr_no_mr:''}}
                        @else
                           {{!empty($data->sr_no_en)?$data->sr_no_en:''}}
                        @endif
                    </td>
                    <td>
                    @if(App::getLocale() == 'mr')
                        {{!empty($data->particular_mr)?$data->particular_mr:''}}
                     @else
                        {{!empty($data->particular_en)?$data->particular_en:''}}
                     @endif
                    </td>
                    <td>
                    @if(App::getLocale() == 'mr')
                        {{!empty($data->commission_with_gst_mr)?$data->commission_with_gst_mr:''}}
                     @else
                        {{!empty($data->commission_with_gst_en)?$data->commission_with_gst_en:''}}
                     @endif
                    </td>
                </tr>
                @endforeach
                @endif

               
            </tbody>
        </table>
        


        

    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-2 heading text-center">
            </div>
            <div class="col-md-8 heading text-center">
                <h1 class="title-border">@lang('serviceCharges.second_heading')</h1>
            </div>
            <div class="col-md-2 heading text-center">
            </div>
        </div>
    </div>

    <div class="container">

                <table class="table table-hover table-bordered table1">
                    <thead>
                        <tr>
                            <th>@lang('serviceCharges.table.s_no')</th>
                            <th>@lang('serviceCharges.table.fees_charges')</th>
                            <th>@lang('serviceCharges.table.amount')</th>
                            <th>@lang('serviceCharges.table.remarks')</th>
                        </tr>
                    </thead>
                    <tbody>

                        @if(!empty($table2))
                        @foreach($table2 as $data)
                        <tr>
                            <td>
                                @if(App::getLocale() == 'mr')
                                 {{!empty($data->sr_no_mr)?$data->sr_no_mr:''}}
                                @else
                                  {{!empty($data->sr_no_en)?$data->sr_no_en:''}}
                                @endif
                            </td>
                            <td>
                                @if(App::getLocale() == 'mr')
                                {{!empty($data->charges_mr)?$data->charges_mr:''}}
                               @else
                                 {{!empty($data->charges_en)?$data->charges_en:''}}
                               @endif
                            </td>
                            <td>
                               @if(App::getLocale() == 'mr')
                                {{!empty($data->amount_mr)?$data->amount_mr:''}}
                               @else
                                 {{!empty($data->amount_en)?$data->amount_en:''}}
                               @endif
                            </td>
                            <td>
                                @if(App::getLocale() == 'mr')
                                {!! !empty($data->remarks_mr)?$data->remarks_mr:'' !!}
                               @else
                                 {!! !empty($data->remarks_en)?$data->remarks_en:'' !!}
                               @endif
                            </td>
                        </tr>
                        @endforeach
                        @endif

                    </tbody>
                </table>
                
                <p style="text-align:center;font-weight: bold;">@lang('serviceCharges.footer_note')</p>
                

    </div>

</section><br><br>






@endsection
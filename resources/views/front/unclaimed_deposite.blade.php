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

        /* Hide on screens smaller than 720px */
    @media only screen and (max-width: 720px) {
        .hide-on-mobile {
            display: none;
        }
    }

</style>


<div id="banner-area" class="hide-on-mobile">
    <img style="padding-top: 4%;"  src="{{!empty($banner->banner_image_path)?url('/').Storage::url($banner->banner_image_path):url('front/images/banner/pigmi.jpg')}}" width="100%" alt="" />
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
                    <li class="breadcrumb-item"><a href="{{url('/')}}">
                        @lang('unclaimedDeposite.home')
                    </a></li>
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
                {{-- <h1 class="title-border">@lang('unclaimedDeposite.heading')</h1> --}}
           
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
                        @lang('unclaimedDeposite.customer_name')
                    </th>
                    <th class="text-center">
                        @lang('unclaimedDeposite.address')
                    </th>
                    <th class="text-center">
                        @lang('unclaimedDeposite.udrn')
                    </th>
                </tr>
            </thead>
            <tbody>
               
                    @if(!empty($customers))
                    @foreach ($customers as $data )
                    <tr>
                        <td align="left" class="td_margin">
                            @if($locale == 'mr')
                            {{ !empty($data->customer_name_mr)?$data->customer_name_mr:'' }}
                           @else
                            {{ !empty($data->customer_name_en)?$data->customer_name_en:'' }}
                          @endif
                        </td>
                        <td>
                            @if($locale == 'mr')
                             {!! !empty($data->address_mr)?$data->address_mr:'' !!}
                           @else
                             {!! !empty($data->address_en)?$data->address_en:'' !!}
                           @endif
                        </td>
                        <td>
                            {{ !empty($data->udrn)?$data->udrn:'' }}
                      
                        </td>
                    </tr>
                   
                    @endforeach
                    @endif
              
            </tbody>
        </table>
        


        

    </div>


</section><br><br>






@endsection
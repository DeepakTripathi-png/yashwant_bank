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
    <img style="padding-top: 4%;"  src="{{!empty($banner->banner_image_path)?url('/').Storage::url($banner->banner_image_path):asset('front/images/banner/vajdar.jpg')}}"  width="100%" alt="" />
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
                    <li class="breadcrumb-item"><a href="site">@lang('interest.home')</a></li>
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



                @if(App::getLocale() == 'mr')
                <img class="img-fluid" style="width:70%;height:70%;margin-left: auto;
                 margin-right: auto;" src="{{!empty($interest->main_banner_mr_path)?url('/').Storage::url($interest->main_banner_mr_path):asset('front/images/price.jpeg')}}" alt="" >
                @else
                    
                    <img class="img-fluid" style="width:70%;height:70%;margin-left: auto;
                 margin-right: auto;" src="{{!empty($interest->main_banner_en_path)?url('/').Storage::url($interest->main_banner_en_path):asset('front/images/price_en.jpg')}}" alt="" >
                @endif


   
</div>
</section>

<section class="section1" id="main-container">
    <div class="container">
        <div class="row">
            
            <div class="col-md-2 heading text-center">
            </div>

            <div class="col-md-8 heading text-center">
                <h1 class="title-border">
                  
                    @if($locale == 'mr')
                    {{ !empty($interest->section_1_heading_mr)?$interest->section_1_heading_mr:'' }}
                    @else
                        {{ !empty($interest->section_1_heading_en)?$interest->section_1_heading_en:'' }}
                    @endif
                </h1>
                <h2 class="title-border">

                    @if($locale == 'mr')
                      {{ !empty($interest->section_1_sub_heading_mr)?$interest->section_1_sub_heading_mr:'' }}
                    @else
                        {{ !empty($interest->section_1_sub_heading_en)?$interest->section_1_sub_heading_en:'' }}
                    @endif
                   
                </h2>
            </div>
            <div class="col-md-2 heading text-center">
            </div>
        </div>
    </div> 
    <div class="container">

        <table class="table table-hover table-bordered table1">
            <col width="200" style="margin-left:100px!important;">
            <thead>
                <th rowspan="3" class="text-center">
                    @lang('interest.table_1_heading_1')
                </th>
                <th colspan="2" class="text-center">
                    @lang('interest.table_1_heading_2')
                </th>
            </thead>

            <tr>
                <th></th>
                <th>
                    @lang('interest.table_1_sub_heading_1')
                </th>
                <th>
                    @lang('interest.table_1_sub_heading_2')
                </th>
            </tr>


            @if(!empty($table1))
            @foreach ($table1 as $data)
       
                
            
            <tr>
                <td align="left" class="td_margin">
                 @if($locale == 'mr')
                    {{ !empty($data->period_mr)?$data->period_mr:'' }}
                 @else
                      {{ !empty($data->period_en)?$data->period_en:'' }}
                  @endif
                </td>
                <td>
                    @if($locale == 'mr')
                    {{ !empty($data->general_interest_rate_mr)?$data->general_interest_rate_mr:'' }}
                 @else
                      {{ !empty($data->general_interest_rate_en)?$data->general_interest_rate_en:'' }}
                  @endif
                </td>
                <td>
                  @if($locale == 'mr')
                    {{ !empty($data->senior_citizens_interest_rate_mr)?$data->senior_citizens_interest_rate_mr:'' }}
                 @else
                      {{ !empty($data->senior_citizens_interest_rate_en)?$data->senior_citizens_interest_rate_en:'' }}
                  @endif
                </td>
            </tr>
            @endforeach
            @endif

        </table>

     
        
        <p style="text-align:center;font-weight: bold;"> 
            @if($locale == 'mr')
            {{ !empty($interest->section_1_decision_date_heading_mr)?$interest->section_1_decision_date_heading_mr:'' }}
          @else
              {{ !empty($interest->section_1_decision_date_heading_en)?$interest->section_1_decision_date_heading_en:'' }}
          @endif
      
        </p>

        @if($locale == 'mr')
          {!! !empty($interest->section_1_content_below_first_table_mr)?$interest->section_1_content_below_first_table_mr:'' !!}
        @else
           {!! !empty($interest->section_1_content_below_first_table_en)?$interest->section_1_content_below_first_table_en:'' !!}
        @endif

  
    </div>



    <div class="container">
        <div class="row">
            <div class="col-md-2 heading text-center">
            </div>
            <div class="col-md-8 heading text-center">
                <h1 class="title-border"> 

                    @if($locale == 'mr')
                    {!! !empty($interest->section_2_heading_mr)?$interest->section_2_heading_mr:'' !!}
                   @else
                     {!! !empty($interest->section_2_heading_en)?$interest->section_2_heading_en:'' !!}
                  @endif
                 
            </h1>
            </div>
            <div class="col-md-2 heading text-center">
            </div>
        </div>
    </div>

    <div class="container">

        

            <table class="table table-hover table-bordered">
                <col width="850">
                <thead>
                    <th>@lang('interest.loan_type')</th>
                    <th class="text-center">@lang('interest.interest_rate')</th>
                </thead>

                @if(!empty($table2))
                @foreach ($table2 as $data)
              
                <tr>
                    <td>
                       @if($locale == 'mr')
                         {!! !empty($data->loan_type_mr)?$data->loan_type_mr:'' !!}
                       @else
                          {!! !empty($data->loan_type_en)?$data->loan_type_en:'' !!}
                       @endif
                    </td>
                    <td align="center">
                        @if($locale == 'mr')
                        {!! !empty($data->interest_rate_mr)?$data->interest_rate_mr:'' !!}
                      @else
                         {!! !empty($data->interest_rate_en)?$data->interest_rate_en:'' !!}
                      @endif
                    </td>
                </tr>
                @endforeach
                @endif


             


            </table>
            <p style="text-align:center;font-weight: bold;">
                @if($locale == 'mr')
                    {!! !empty($interest->section_2_content_below_first_table_mr)?$interest->section_2_content_below_first_table_mr:'' !!}
                   @else
                     {!! !empty($interest->section_2_content_below_first_table_en)?$interest->section_2_content_below_first_table_en:'' !!}
                  @endif
            </p>
    </div>

</section><br><br>






@endsection
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
    <img style="padding-top: 4%;"  src="{{asset('front/images/banner/vajdar.jpg')}}" width="100%" alt="" />
    <div class="parallax-overlay"></div>
    <div class="banner-title-content">
        <div class="text-center">
            <h2>@lang('interest.heading')</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="site">@lang('interest.home')</a></li>
                    <li class="breadcrumb-item text-white" aria-current="page">@lang('interest.heading')</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<section class="section1" id="main-container">
<div class="container">

                @if(App::getLocale() == 'mr')
                <img class="img-fluid" style="width:70%;height:70%;margin-left: auto;
                 margin-right: auto;" src="{{asset('front/images/price.jpeg')}}" alt="" >
                @else
                    
                    <img class="img-fluid" style="width:70%;height:70%;margin-left: auto;
                 margin-right: auto;" src="{{asset('front/images/price_en.jpg')}}" alt="" >
                @endif


   
</div>
</section>

<section class="section1" id="main-container">
    <div class="container">
        <div class="row">
            
            <div class="col-md-2 heading text-center">
            </div>
            
            <div class="col-md-8 heading text-center">
                <h1 class="title-border">@lang('interest.deposit_interest')</h1>
                <h2 class="title-border">@lang('interest.bank_name')</br>
                    @lang('interest.effective_date')</h2>
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
            <tr>
                <td align="left" class="td_margin">
                    @lang('interest.period_15_45_days')
                </td>
                <td>
                    @lang('interest.rate_15_45_days')
                </td>
                <td>
                    @lang('interest.rate_15_45_days_senior')
                </td>
            </tr>
            <tr>
                <td align="left" class="td_margin">
                    @lang('interest.period_46_90_days')
                </td>
                <td>
                    @lang('interest.rate_46_90_days')
                </td>
                <td>
                    @lang('interest.rate_46_90_days_senior')
                </td>
            </tr>
            <tr>
                <td align="left" class="td_margin">
                    @lang('interest.period_91_180_days')
                </td>
                <td>
                    @lang('interest.rate_91_180_days')
                </td>
                <td>
                    @lang('interest.rate_91_180_days_senior')
                </td>
            </tr>
            <tr>
                <td align="left" class="td_margin">
                    @lang('interest.period_181_364_days')
                </td>
                <td>
                    @lang('interest.rate_181_364_days')
                </td>
                <td>
                    @lang('interest.rate_181_364_days_senior')
                </td>
            </tr>
            <tr>
                <td align="left" class="td_margin">
                    @lang('interest.period_1_2_years')
                </td>
                <td>
                    @lang('interest.rate_1_2_years')
                </td>
                <td>
                    @lang('interest.rate_1_2_years_senior')
                </td>
            </tr>
            <tr>
                <td align="left" class="td_margin">
                    @lang('interest.period_2_3_years')
                </td>
                <td>
                    @lang('interest.rate_2_3_years')
                </td>
                <td>
                    @lang('interest.rate_2_3_years_senior')
                </td>
            </tr>
            <tr>
                <td align="left" class="td_margin">
                    @lang('interest.period_above_3_years')
                </td>
                <td>
                    @lang('interest.rate_above_3_years')
                </td>
                <td>
                    @lang('interest.rate_above_3_years_senior')
                </td>
            </tr>
            <tr>
                <td align="left" class="td_margin">
                    @lang('interest.dam_duppat')
                </td>
                <td>
                    @lang('interest.dam_duppat_months')
                </td>
                <td>
                    @lang('interest.dam_duppat_months')
                </td>
            </tr>
        </table>
        
        <p style="text-align:center;font-weight: bold;"> @lang('interest.decision_date')</p>
        <p>&bull;&nbsp; @lang('interest.deposit_benefit') </p>
        <p>&bull;&nbsp;@lang('interest.senior_citizen_discount') </p>
        <p>&bull;&nbsp;@lang('interest.reinvestment_period')</p>	
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-2 heading text-center">
            </div>
            <div class="col-md-8 heading text-center">
                <h1 class="title-border"> @lang('interest.bank_name')</br>
                @lang('interest.loan_effective_date')</h1>
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
                <tr>
                    <td>@lang('interest.home_loan')</td>
                    <td align="center">@lang('interest.home_loan_rate')</td>
                </tr>
                <tr>
                    <td>@lang('interest.business_loan')</td>
                    <td align="center">@lang('interest.business_loan_rate')</td>
                </tr>
                <tr>
                    <td>@lang('interest.cash_credit')</td>
                    <td align="center">@lang('interest.cash_credit_rate')</td>
                </tr>
                <tr>
                    <td>@lang('interest.vehicle_loan')</td>
                    <td align="center">@lang('interest.vehicle_loan_rate')</td>
                </tr>
                <tr>
                    <td>@lang('interest.personal_loan')</td>
                    <td align="center">@lang('interest.personal_loan_rate')</td>
                </tr>
                <tr>
                    <td>@lang('interest.salary_loan')</td>
                    <td align="center">@lang('interest.salary_loan_rate')</td>
                </tr>
                <tr>
                    <td>@lang('interest.gold_loan')</td>
                    <td align="center">@lang('interest.gold_loan_rate')</td>
                </tr>
            </table>
            <p style="text-align:center;font-weight: bold;">@lang('interest.decision_date_2')</p>
    </div>

</section><br><br>






@endsection

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
</style>




<div id="banner-area">
    <img style="padding-top: 4%;"  src="{{asset('front/images/banner/sanchalak_madal.jpg')}}"  width="100%"  />
    <!-- <div class="parallax-overlay"></div> -->
    <div class="banner-title-content">
        <div class="text-center">
            <h2>@lang('sanchalakMandal.heading')</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="./#">@lang('sanchalakMandal.home')</a></li>
                    <li class="breadcrumb-item text-white" aria-current="page">@lang('sanchalakMandal.heading')</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

{{-- <div id="banner-area">
    <img src="{{ asset('front/images/banner/sanchalak_madal.jpg') }}" alt="" />
    <div class="parallax-overlay"></div>
    <div class="banner-title-content">
        <div class="text-center">
            <h2>@lang('sanchalakMandal.heading')</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="./#">@lang('sanchalakMandal.home')</a></li>
                    <li class="breadcrumb-item text-white" aria-current="page">@lang('sanchalakMandal.heading')</li>
                </ol>
            </nav>
        </div>
    </div>
</div> --}}

<section class="section1" id="main-container">
    <div class="container">
        <div class="row">
            <div class="col-md-2 heading text-center">
            </div>
            <div class="col-md-8 heading text-center">
                <h1 class="title-border">@lang('sanchalakMandal.heading')</h1>
            </div>
            <div class="col-md-2 heading text-center">
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
            {{-- <table class="table table-hover table-bordered">
                <col width="50">
                <col width="650">
                <col width="120">
                    <tr >
                        <th style="text-align:center;">
                        अ.क्र.
                        <th style="text-align:center;">
                        नाव
                        </th>
                        <th style="text-align:center;"  >
                        पद
                        </th>
                    </tr>

                    <tr>
                        <td align="center">
                        १
                        </td>
                        <td>
                        श्री. पाचपुते सुहास बापूराव.
                        </td>
                        <td>
                        चेअरमन
                        </td>
                    </tr>
                    <tr>
                        <td  align="center">
                        २
                        </td>
                        <td>
                        श्री. पाटील सूर्यभान गणपतराव.
                        </td>
                        <td>
                        व्हा. चेअरमन
                        </td>
                    </tr>
                    <tr>
                        <td  align="center">
                        ३
                        </td>
                        <td>
                        श्री. कोळगे राजेंद्र कृष्णाथ.
                        </td>
                        <td>
                        संचालक 
                        </td>
                    </tr>
                    <tr>
                        <td  align="center">
                        ४
                        </td>
                        <td>
                        श्री. पाटील वसंतराव गुणवंतराव.
                        </td>
                        <td>
                        संचालक 
                        </td>
                    </tr>
                    <tr>
                        <td  align="center">
                        ५
                        </td>
                        <td>
                        श्री. जाधव राजकुमार भाऊराव.
                        </td>
                        <td>
                        संचालक 
                        </td>
                    </tr>
                    <tr>
                        <td  align="center">
                        ६
                        </td>
                        <td>
                        श्री. तांदुळजेकर (कांबळे) धर्मराज बाबुराव.
                        </td>
                        <td>
                        संचालक 
                        </td>
                    </tr>
                    <tr>
                        <td  align="center">
                        ७
                        </td>
                        <td>
                        श्री. साठे विष्णुपंत पंढरीनाथ.
                        </td>
                        <td>
                        संचालक 
                        </td>
                    </tr>
                    <tr>
                        <td  align="center">
                        ८
                        </td>
                        <td>
                        श्री. शिंदे सुनील नारायणराव.
                        </td>
                        <td>
                        संचालक 
                        </td>
                    </tr>
                    <tr>
                        <td  align="center">
                        ९
                        </td >
                        <td>
                        श्री. विहीरे राहुल राजेंद्र.
                        </td>
                        <td>
                        संचालक 
                        </td>
                    </tr>
                    <tr>
                        <td  align="center">
                        १०
                        </td>
                        <td>
                        श्री. साळुंके चंद्रकांत प्रभू.
                        </td>
                        <td>
                        संचालक 
                        </td>
                    </tr>
                    <tr>
                        <td  align="center">
                        ११
                        </td>
                        <td>
                        श्री. राठोड सुरेश मारुती.
                        </td>
                        <td>
                        संचालक 
                        </td>
                    </tr>
                    <tr>
                        <td  align="center">
                        १२
                        </td>
                        <td>
                        सौ. गवारे आदिमाया उदय.
                        </td>
                        <td>
                        संचालिका
                        </td>
                    </tr>
                    <tr>
                        <td  align="center">
                        १३
                        </td>
                        <td>
                        सौ. कदम सुजाता भालचंद्र.
                        </td>
                        <td>
                        संचालिका
                        </td>
                    </tr>
                     <tr>
                        <td  align="center">
                        १४
                        </td>
                        <td>
                        श्री. माने सुनील बाबुराव.
                        </td>
                        <td>
                        तज्ञ संचालक
                        </td>
                    </tr>
                    <tr>
                        <td  align="center">
                        १५
                        </td>
                        <td>
                        श्री. मुंदडा राजगोपाल रंगलालजी.
                        </td>
                        <td>
                        तज्ञ संचालक
                        </td>
                    </tr>
            </table> --}}

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

                @foreach ($list['members'] as $member)
                    <tr>
                        <td align="center">{{ $member['serial'] }}</td>
                        <td>{{ $member['name'] }}</td>
                        <td>{{ $member['position'] }}</td>
                    </tr>
                @endforeach
            </table>

            </div>
            <div class="col-md-2"></div>
        </div> 
    </div> 
</section><br><br>
@endsection

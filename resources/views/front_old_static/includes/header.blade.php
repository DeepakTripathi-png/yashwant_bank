<!-- resources/views/front/includes/header.blade.php -->
<style>
    .header_logo {
        height: 70px !important;
        width: 70px !important;
    }
    .cont_padding {
        padding: 0px 50px;
    }
    .header_title {
        margin-bottom: -10px;
    }
    @media only screen and (max-width: 720px) {
        .header_logo {
            height: 50px !important;
            width: 50px !important;
            margin-left: 10px;
        }
        .header_title {
            font-size: 18px !important;
            margin-right: 10px !important;
            margin-left: -3px !important;
        }
        .cont_padding {
            padding: 0px 0px !important;
        }
    }
</style>

{{-- <style>
    .header_logo {
        height: 70px !important;
        width: 70px !important;
    }
    .cont_padding {
        padding: 0px 50px;
    }
    .header_title {
        margin-bottom: -10px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    @media only screen and (max-width: 720px) {
        .header_logo {
            height: 50px !important;
            width: 50px !important;
            margin-left: 10px;
        }
        .header_title {
            font-size: 18px !important;
            margin-right: 10px !important;
            margin-left: -3px !important;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .cont_padding {
            padding: 0px 0px !important;
        }
    }
</style> --}}


{{-- <header id="header" class="fixed-top header4" role="banner">
    <div class="container-fluid cont_padding">
        <nav class="navbar navbar-expand-lg navbar-light py-2">
            <a class="navbar-brand" href="{{ url('/') }}"><img class="img-fluid float-left header_logo" src="{{ asset('front/images/logo/yash_latur.jpg') }}" alt="logo"></a>
            <a href="#"><h2 class="header_title"><span style="color:#EE3C25">यशवंत नागरी</span>&nbsp;सहकारी बँक लि.&nbsp;लातूर</h2></a>
            <button class="navbar-toggler ml-auto border-0 rounded-0 text-dark" type="button" data-toggle="collapse"
                data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse text-center" id="navigation">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">मुखपृष्ठ</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            आमच्या विषयी
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ url('amchya-vishai') }}">आमच्या विषयी</a>
                            <a class="dropdown-item" href="{{ url('sanchalak-mandal') }}">संचालक मंडळ</a>
                            <a class="dropdown-item" href="{{ asset('front/pdf/ahval24.pdf') }}" download>२४ वा वार्षिक अहवाल<br>(२०२२-२०२३)</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            आमच्या सेवा
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ url('core-banking') }}">कोअर बँकिंग</a>
                            <a class="dropdown-item" href="{{ url('sms-alert') }}">एसएमएस अलर्ट</a>
                            <a class="dropdown-item" href="{{ url('rtgs') }}">आरटीजिएस/एनईफटी</a>
                            <a class="dropdown-item" href="{{ url('locker-suvidha') }}">लॉकर सुविधा</a>
                            <a class="dropdown-item" href="{{ url('sone-taran') }}">सोने तारण</a>
                            <a class="dropdown-item" href="{{ url('lightbill-barana-kendra') }}">लाईट बील भरणा केंद्र</a>
                            <a class="dropdown-item" href="{{ url('pigmi-deposit-scheme') }}">पिग्मी डिपॉझिट स्कीम</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('amchya-shakha') }}">आमच्या शाखा</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('vyajdar') }}">व्याजदर</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('contact') }}">संपर्क</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header> --}}

<header id="header" class="fixed-top header4" role="banner">
    <div class="container-fluid cont_padding">
        <nav class="navbar navbar-expand-lg navbar-light py-2">
            <a class="navbar-brand" href="{{ url('/') }}"><img class="img-fluid float-left header_logo" src="{{ asset('front/images/logo/yash_latur.jpg') }}" alt="logo"></a>
            <a href="#"><h2 class="header_title"><span style="color:#EE3C25">@lang('header.yashwant_bank_1')</span>&nbsp;<span style="color:#2474ae">@lang('header.yashwant_bank_2')&nbsp;@lang('header.yashwant_bank_3')<span></h2></a>
            <button class="navbar-toggler ml-auto border-0 rounded-0 text-dark" type="button" data-toggle="collapse"
                data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse text-center" id="navigation">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">@lang('header.home')</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            @lang('header.about_us')
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ url('amchya-vishai') }}"> @lang('header.about_us')</a>

                            <a class="dropdown-item" href="{{ url('sanchalak-mandal') }}">@lang('header.sanchalak_mandal')</a>
                            <a class="dropdown-item" href="{{ asset('front/pdf/ahval24.pdf') }}" download>@lang('header.annual_report_1')<br>@lang('header.annual_report_2')</a>

                            <a class="dropdown-item" href="{{ url('service-charges') }}">@lang('header.service_charges')</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            @lang('header.our_services')
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ url('core-banking') }}"> @lang('header.core_banking')</a>
                            <a class="dropdown-item" href="{{ url('sms-alert') }}">@lang('header.sms_alert')</a>
                            <a class="dropdown-item" href="{{ url('rtgs') }}">@lang('header.rtgs')</a>
                            <a class="dropdown-item" href="{{ url('locker-suvidha') }}">@lang('header.locker')</a>
                            <a class="dropdown-item" href="{{ url('sone-taran') }}">@lang('header.gold_loan')</a>

                            <a class="dropdown-item" href="{{ url('lightbill-barana-kendra') }}">@lang('header.electricity_bill')</a>
                            <a class="dropdown-item" href="{{ url('pigmi-deposit-scheme') }}">@lang('header.pigmy_deposit')</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('amchya-shakha') }}">@lang('header.our_branches')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('vyajdar') }}">@lang('header.interest_rates')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('contact') }}">@lang('header.contact')</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @lang('header.language')
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item changeLang" data-lang="mr" href="#">मराठी</a>
                            <a class="dropdown-item changeLang" data-lang="en" href="#">English</a>
                        </div>
                    </li>
                    


                </ul>
            </div>
        </nav>
    </div>
</header>



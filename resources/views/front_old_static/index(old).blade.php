@extends('front.layouts.app')

@section('content')

<style>
	.facility_tab:hover{
		color:#EE3C25
	}
	.carousel-indicators li {
    border-radius: 12px!important;
    width: 14px!important;
    height: 14px!important;
    background-color:#EE3C25!important;
    }
	.seva_title{
		color:#EE3C25;
		padding-top:10px;
	}
	.seva_title:hover{
		font-size:17px;
		padding-top:10px;
	}

	#main-slide .carousel-control i {
    background: none;
    color: #100f0f;
    line-height: 56px;
    width: 56px;
    height: 56px;
    border: 1px solid #000;
    border-radius: 100%;
    font-size: 36px;
    transition: all 500ms ease;
}
	@media only screen and (max-width:400px){
		.slider_margin{
		margin-top:105px;
	}
	}
	@media only screen and (max-width: 723px){
		.slider_margin{
		margin-top:70px;
	}
	.heading{
		/* margin-top:50px; */
	}
	section {
    padding: 0px 0px!important;
   }
   .quotes{
	   margin-bottom:40px;
   }
  }
</style>



<div id="home" class="p-0  slider_margin">
    <div id="main-slide" class="carousel slide" data-ride="carousel">
        <!-- <div class="overlay"></div> -->
        <ol class="carousel-indicators">
            <li data-target="#main-slide" data-slide-to="0" class="active"></li>
            <li data-target="#main-slide" data-slide-to="1"></li>
            <li data-target="#main-slide" data-slide-to="2"></li>
            <li data-target="#main-slide" data-slide-to="3"></li>
            <li data-target="#main-slide" data-slide-to="4"></li>
            <li data-target="#main-slide" data-slide-to="5"></li>
            <li data-target="#main-slide" data-slide-to="6"></li>
            <li data-target="#main-slide" data-slide-to="7"></li>
            <li data-target="#main-slide" data-slide-to="8"></li>
        </ol>
        <div class="carousel-inner">
          
            
            <div class="carousel-item active">
                <img  class="img-fluid" src="{{asset('front/images/slider/homepage3.jpg')}}" alt="slider homepage">
            </div>
            <div class="carousel-item">
                <img  class="img-fluid" src="{{asset('front/images/slider/slider23_1.JPG')}}" alt="slider">
            </div>
            <div class="carousel-item">
                <img class="img-fluid"  src="{{asset('front/images/slider/slider23_2.JPG')}}" alt="slider">
            </div>
            <div class="carousel-item">
                <img class="img-fluid"  src="{{asset('front/images/slider/slider23_3.JPG')}}" alt="slider">
            </div>
            <div class="carousel-item">
                <img class="img-fluid"  src="{{asset('front/images/slider/slider23_4.JPG')}}" alt="slider">
            </div>
            <div class="carousel-item">
                <img class="img-fluid"  src="{{asset('front/images/slider/slider23_5.JPG')}}" alt="slider">
            </div>
            <div class="carousel-item">
                <img class="img-fluid"  src="{{asset('front/images/slider/slider23_6.JPG')}}" alt="slider">
            </div>
            <div class="carousel-item">
                <img class="img-fluid"  src="{{asset('front/images/slider/slider23_7.JPG')}}" alt="slider">
            </div>
            <div class="carousel-item">
                <img class="img-fluid"  src="{{asset('front/images/slider/slider23_8.JPG')}}" alt="slider">
            </div>
        </div>
        <a class="left carousel-control carousel-control-prev" href="#main-slide" data-slide="prev">
            <span><i class="fa fa-angle-left"></i></span>
        </a>
        <a class="right carousel-control carousel-control-next" href="#main-slide" data-slide="next">
            <span><i class="fa fa-angle-right"></i></span>
        </a>
    </div>
</div>

<section style="padding:0px;" >
    <div class="container"style="padding:60px 0px 0px 0px">
        <div class="row">
            <div class="col-md-12 heading">
                <span class="title-icon classic float-left"><i class="fa fa-bank"></i></span>
                <h2 class="title classic">  <span style="color:#EE3C25";>यशवंत नागरी </span>  सहकारी बँक लि.&nbsp;लातूर </h2>
            </div>
        </div>
        <div class="row about-wrapper-top  ">
            <div class=""style="padding:0px 25px;">
                <div class="row">
                    <div class="col-md-12">
                        <p style="font-size:17px;line-height:35px;margin-bottom:0px;" class="text-justify"><i  style="color:#EE3C25;" class="fa fa-quote-left mr-1"></i>सन २००० साली स्व.यशवंतराव चव्हाण साहेबांच्या नावाने बँकेची स्थापना झाली. कालांतराने बँकेस सशक्त करण्याची जबाबदारी सन 2023 साली मा. सुहास बा .पाचपुते साहेब व तत्कालीन संचालक मंडळाकडे आली. सहकाराचा गाढा अभ्यास, खंबीर उपाययोजना, अफाट जनसंपर्क व जनसहभागाच्या आधारावर मा. सुहास बा .पाचपुते  साहेबांनी बँकेस आज या नावारूपाला आणले आहे. ३१/०३/२०२३ अखेर ८६६३ सभासद, २.१५ कोटी भागभांडवल यासह ३८.८१ कोटी एकूण व्यवसायासह बँक आज या प्रगतीपथावर आहे.
                        <i  style="color:#EE3C25;" class="fa fa-quote-right ml-1"></i></p>
                    </div>
                </div>
            </div>
        </div><br>
        <div class="row " >
            <div class="col-md-2 col-sm-4 wow fadeInDown" data-wow-delay=".3s">
                <a href="core-banking">
                    <div class="service-content">
                        <figure class="m-0 effect-oscar">
                            <span class="service-image"><img style="height:120px;width:300px;" class="img-fluid" src="{{asset('front/images/facility/corebanking.jpg')}}" alt="" /></span>
                        </figure>
                        <h3  class="text-center seva_title"><b>कोअर बँकिंग</b></h3>
                    </div>
                </a>
            </div>
            <div class="col-md-2 col-sm-4 wow fadeInDown" data-wow-delay=".2s">
                <a href="rtgs">
                    <div class="service-content">
                    <figure class="m-0 effect-oscar">
                        <span class="service-image"><img style="height:120px;width:300px;" class="img-fluid" src="{{asset('front/images/facility/neft2.jpg')}}" alt="" /></span>
                    </figure>
                    <h3  class="text-center seva_title"> RTGS & NEFT   </h3>	
                    </div>
                </a>
            </div>
            <div class="col-md-2 col-sm-4 wow fadeInDown" data-wow-delay=".4s">
                <a href="sms-alert">
                    <div class="service-content">
                    <figure class="m-0 effect-oscar">
                        <span class="service-image"><img style="height:120px;width:300px;" class="img-fluid" src="{{asset('front/images/facility/sms_alert.jpg')}}" alt="" /></span>
                    </figure>
                    <h3  class="text-center seva_title"> <b> एसएमएस अलर्ट </b>  </h3>	
                    </div>
                </a>
            </div>
        
            <div class="col-md-2 col-sm-4 wow fadeInDown" data-wow-delay=".6s">
                <a href="locker-suvidha">
                <div class="service-content">
                    <figure class="m-0 effect-oscar">
                        <span class="service-image"><img style="height:120px;width:300px;" class="img-fluid" src="{{asset('front/images/facility/locker.jpg')}}" alt="" /></span>
                    </figure>		
                        <h3  class="text-center seva_title"><b>लॉकर</b></h3>
                </div>
                </a>
            </div>
            <div class="col-md-2 col-sm-4 wow fadeInDown" data-wow-delay="0.7s">
                <a href="lightbill-barana-kendra">
                <div class="service-content">
                    <figure class="m-0 effect-oscar">
                        <span class="service-image"><img style="height:120px;width:300px;" class="img-fluid" src="{{asset('front/images/facility/electricity_bill1.jpg')}}" alt="" /></span>
                    </figure>
                    <h3  class="text-center seva_title"><b>लाईट बील भरणा केंद्र</b></h3>
                </div>
                </a>
            </div>
            <div class="col-md-2 col-sm-4 wow fadeInDown" data-wow-delay="0.7s">
                <a href="pigmi-deposit-scheme">
                    <div class="service-content">
                    <figure class="m-0 effect-oscar">
                        <span class="service-image"><img style="height:120px;width:300px;" class="img-fluid" src="{{asset('front/images/facility/pigmy1.jpg')}}" alt="" /></span>
                    </figure>
                    <h3  class="text-center seva_title"><b>पिग्मी डिपॉझिट स्कीम </b> </h3>
                    </div> 
                </a>
            </div>
        </div>
    </div>
    <div class="container" style="padding:60px 0px 0px 0px">
        <div class="row">
            <div class="col-md-12 heading">
                <span class="title-icon classic float-left"><i class="fa  fa-user"></i></span>
                <h2 class="title classic"> <span style="color:#EE3C25">मा. चेअरमन </span>यांचे मनोगत,</h2>
            </div>
        </div>
        <div class="row about-wrapper-top">
            <div class="  "style="padding:0px 25px;">
                <div class="row">
                    <div class="col-md-8">
                        <p style="font-size:17px;line-height:35px;" class="text-justify"><i  style="color:#EE3C25;" class="fa fa-quote-left mr-1"></i>सहकार हा मानवाचा स्वयंप्रेरित,ऐच्छिक व स्वयंपुर्ण उपक्रम आहे. सहकारच्या माध्यमातून सामाजिक कार्यासाठी यशवंत नागरी सह.बँक लि.लातूर ची भूमिका अत्यंत महत्वाची आहे. या माध्यमातून समाजातील लहानात-लहान घटकाला उपजिवीकेचे साधन आपणा सर्वांच्या सहकार्यामुळेच मिळवून देऊ शकलो. समाजातील गरजु व्यक्तींना त्यांच्या आर्थिक उन्नतीसाठी हातभार लावणे हे मुळ उद्दिष्ट ठेवून तळागाळातील घटकांना आर्थिक सक्षम करणे आणि त्यांना स्वावलंबी बनवण्यात बँकेने सातत्याने पुढाकार घेतलेला आहे. बँकींग पासून वंचित घटकांना निराधार अपंग अंध यांचे जवळ पास २९०० खाते उघडून त्यांना बँकींग प्रवाहात आणण्याचे राष्ट्रीय कार्य आपली बँक सातत्याने करीत असल्याने सहकारातील आदर्श संस्था म्हणून आपली बँक जनमाणसात नावलौकीक टिकवून आहे.</p>
                        <p style="font-size:17px;line-height:35px;" class="text-justify">
                        आपल्या बँकेने बँकींग व्यवसायात पारदर्शकता ठेवून मा. सभासद, ग्राहक यांचे हिताची जपणुक करुन गुणात्मक आणि दर्जात्मक प्रगतीवर भर दिलेला आहे.सामान्य माणसाला यशवंत नागरी सहकारी बँक लि.लातूर ही आपली बँक वाटत असल्यामुळे या बँकेवरचा विश्वास वाढला आहे. त्यामुळे ३१/०३/२०२३ अखेर ८६६३ सभासद, २.१५ कोटी भागभांडवल, ३१.२६ कोटी ठेवी, १६.२१ कोटी कर्ज वाटप, एकूण नफा ३६.७२ लाख यासह ३८.८१ कोटी एकूण व्यवसायासह बँक आज या प्रगतीपथावर आहे.
                        <i style="color:#EE3C25;" class="fa fa-quote-right   ml-1"></i></p>
                    </div>
                    <div class="col-md-4">
                        <img class="img-fluid" style="width:100%;height:100%;" src="{{asset('front/images/members/Chairman012.jpg')}}" alt="">
                        <h4 style="padding: 0.5rem;font-weight: 600;text-align: center;">श्री. पाचपुते सुहास बापूराव.</h4>
                    </div>
                     <p style="font-size:17px;line-height:35px; padding:20px 15px 0px 15px;margin-top:0px;" class="text-justify">
                    
                     </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section style="padding:60px 0px 50px 0px ; ">
    <div class="container"style="padding-bottom:0px;">
        <div class="row">
            <div class="col-md-12 heading" style="padding-bottom:50px; ">
                <span class="title-icon classic float-left"><img style="height:45px;width:50px; color:red;" src="{{asset('front/images/icon/icon8.jpg')}}" alt=""></span>
                <h2 class="title classic"> <span style="color:#EE3C25">आमच्या </span>विविध योजना</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay=".3s">
                <div class="service-content">
                    <figure class="m-0 effect-oscar">
                        <span class="service-image"><img style="height:200px;" class="img-fluid" src="{{asset('front/images/facility/home_loan1.jpg')}}" alt="" /></span>
                    </figure>
                    <h3 style="background-color:#EE3C25;color:white;" class="text-center">गृह कर</h3>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay=".3s">
                <div class="service-content">
                    <figure class="m-0 effect-oscar">
                        <span class="service-image"><img style="height:200px;" class="img-fluid" src="{{asset('front/images/facility/education_loan1.jpg')}}" alt="" /></span>
                    </figure>
                    <h3 style="background-color:#EE3C25;color:white;" class="text-center">शिक्षण कर्ज</h3>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay=".4s">
                <div class="service-content">
                <figure class="m-0 effect-oscar">
                    <span class="service-image"><img style="height:200px;" class="img-fluid" src="{{asset('front/images/facility/vahan_loan1.jpg')}}" alt="" /></span>
                </figure>
                <h3 style="background-color:#EE3C25;color:white;" class="text-center">वाहन कर्ज </h3>	
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay=".5s">
                <div class="service-content">
                <figure class="m-0 effect-oscar">
                    <span class="service-image"><img style="height:200px;" class="img-fluid" src="{{asset('front/images/facility/vyapar_loan1.jpg')}}" alt="" /></span>
                </figure>
                <h3 style="background-color:#EE3C25;color:white;" class="text-center">व्यापार कर्ज</h3>		
                </div>
            </div>
            <div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay=".6s">
                <div class="service-content">
                <figure class="m-0 effect-oscar">
                    <span class="service-image"><img style="height:200px;" class="img-fluid" src="{{asset('front/images/facility/lughu_udyog1.jpg')}}" alt="" /></span>
                </figure>		
                    <h3 style="background-color:#EE3C25;color:white;" class="text-center">लघु उद्योग कर्ज</h3>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay="0.7s">
                <div class="service-content">
                <figure class="m-0 effect-oscar">
                    <span class="service-image"><img style="height:200px;" class="img-fluid" src="{{asset('front/images/facility/gold_loan.jpg')}}" alt="" /></span>
                </figure>
                <h3 style="background-color:#EE3C25;color:white;" class="text-center">सोने तारण कर्ज</h3>
                </div>
            </div>
        </div><br>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 wow fadeInUp"data-wow-delay="0.9s">
                <h1 class=" text-center quotes " style="min-height:100px;color:#EE3C25; padding-top:30px;background-color:rgb(200, 217, 244);">
            <b> आपली बँक, यशवंत बँक.</b>
                </h1>
            </div>
        </div>
    </div>
</section>  

@endsection

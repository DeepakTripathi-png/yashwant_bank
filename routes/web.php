<?php

// Start Common Controllers Needed For All Projects
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\Admin\Login\LoginController;
use App\Http\Controllers\Admin\Login\ForgotPasswordController;
use App\Http\Controllers\Admin\Settings\GeneralSettings;
use App\Http\Controllers\Admin\Settings\VisualSettings;
use App\Http\Controllers\Admin\SystemUsers\RolesPrivilegesController;
use App\Http\Controllers\Admin\SystemUsers\SystemUserController;
use App\Http\Controllers\Admin\NotFoundController\NotFoundController;
use App\Http\Controllers\Admin\Dashboard\DashboardController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\AboutUs\AboutUsController;
use App\Http\Controllers\Admin\BoardofDirectors\BoardofDirectorsController;
use App\Http\Controllers\Admin\AnnualReport\AnnualReportController;
use App\Http\Controllers\Admin\Services\ServicesController;
use App\Http\Controllers\Admin\InterestRates\InterestRatesController;
use App\Http\Controllers\Admin\ContactUs\ContactUsController;
use App\Http\Controllers\Admin\PrivacyPolicy\PrivacyPolicyController;
use App\Http\Controllers\Admin\TermsAndCondition\TermsAndConditionController;
use App\Http\Controllers\Admin\Banner\BannerMasterController;
use App\Http\Controllers\Admin\Branch\BranchController;
use App\Http\Controllers\Admin\ServiceCharge\ServiceChargesController;
use App\Http\Controllers\Admin\UnclaimedDeposite\UnclaimedDepositeController;
use App\Http\Controllers\Front\FrontAboutUsController;
use App\Http\Controllers\Front\FrontBoardofDirectorsController;
use App\Http\Controllers\Front\FrontPrivacyPolicyController;
use App\Http\Controllers\Front\FrontHomeController;
use App\Http\Controllers\Front\FrontBranchesController;
use App\Http\Controllers\Front\FrontContactUsController;
use App\Http\Controllers\Front\FrontServiceController;
use App\Http\Controllers\Front\FrontInterestRateController;
use App\Http\Controllers\Front\FrontServiceChargesController;
use App\Http\Controllers\Front\FrontTermsAndConditionController;
use App\Http\Controllers\Front\FrontUnclaimedDepositeController;
use App\Http\Controllers\LanguageController;




// End Common Controllers Needed For All Project

// Project Controller Start Here

// Project Controller Ends Here

// Start Common Routes For The Projects
Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
    return 'storage linked';
});

Route::get('clear', function () {
    \Artisan::call('route:clear');
    \Artisan::call('cache:clear');
    \Artisan::call('view:clear');
    \Artisan::call('config:clear');
    return 'clear';
});




// //front Routes  start


// Route::view('/','front.index');


Route::get('/', [FrontHomeController::class,'index']);


Route::get('amchya-vishai', [FrontAboutUsController::class,'index']);
Route::get('sanchalak-mandal', [FrontBoardofDirectorsController::class,'index']);

// Route::view('core-banking','front.core_banking');

Route::get('service/{slug}', [FrontServiceController::class, 'serviceView']);




// Route::get('core-banking', [FrontServiceController::class,'coreBanking']);


// Route::get('sms-alert', [FrontServiceController::class,'smsAlert']);


// Route::get('rtgs', [FrontServiceController::class,'rtgs']);

// Route::get('locker-suvidha', [FrontServiceController::class,'lockerFacility']);

// Route::get('sone-taran', [FrontServiceController::class,'goldLoan']);

// Route::get('lightbill-barana-kendra', [FrontServiceController::class,'electricBill']);

// Route::get('pigmi-deposit-scheme', [FrontServiceController::class,'pigmyDeposit']);

Route::get('vyajdar', [FrontInterestRateController::class,'index']);

Route::get('service-charges', [FrontServiceChargesController::class,'index']);





Route::get('unclaimed-deposite', [FrontUnclaimedDepositeController::class,'index']);



// Route::view('unclaimed-deposite','front.unclaimed_deposite');





// Route::view('vyajdar','front.vyajdar');

// Route::view('pigmi-deposit-scheme','front.pigmi_deposit_scheme');


// Route::view('lightbill-barana-kendra','front.lightbill_barana_kendra');


// Route::view('sone-taran','front.sone_taran');


// Route::view('locker-suvidha','front.locker_suvidha');





// Route::view('sms-alert','front.sms_alert');


// Route::view('rtgs','front.rtgs');

// Route::view('service-charges','front.service_charges');












// Route::view('amchya-shakha','front.amchya_shakha');

Route::get('amchya-shakha', [FrontBranchesController::class,'index']);





// Route::view('contact','front.contact');

Route::get('contact', [FrontContactUsController::class,'index']);

Route::post('save-contact-form', [FrontContactUsController::class, 'store'])->name('contact.store');

// Route::view('data-protection-privacy-policy','front.data_protection_privacy_policy');

Route::get('data-protection-privacy-policy', [FrontPrivacyPolicyController::class, 'index']);

Route::get('terms-and-conditions-for-mobile-banking', [FrontTermsAndConditionController::class, 'index']);


// Route::view('terms-and-conditions-for-mobile-banking','front.terms_and_conditions_for_mobile_banking');

Route::get('lang/change', [LanguageController::class, 'change'])->name('changeLang');




//front Routes end




//front Routes  start

    // Route::view('/','front.index');

    // Route::view('amchya-vishai','front.amchya_vishai');

    // Route::view('sanchalak-mandal','front.sanchalak_mandal');

    // Route::view('core-banking','front.core_banking');

    // Route::view('sms-alert','front.sms_alert');

    // Route::view('rtgs','front.rtgs');


    // Route::view('locker-suvidha','front.locker_suvidha');

    // Route::view('sone-taran','front.sone_taran');

    // Route::view('lightbill-barana-kendra','front.lightbill_barana_kendra');

    // Route::view('pigmi-deposit-scheme','front.pigmi_deposit_scheme');

    // Route::view('amchya-shakha','front.amchya_shakha');

    // Route::view('vyajdar','front.vyajdar');

    // Route::view('contact','front.contact');

    // Route::view('data-protection-privacy-policy','front.data_protection_privacy_policy');

    // Route::view('terms-and-conditions-for-mobile-banking','front.terms_and_conditions_for_mobile_banking');

    // Route::view('service-charges','front.service_charges');

    // Route::get('lang/change', [LanguageController::class, 'change'])->name('changeLang');

//front Routes end







Route::group(['middleware' => 'prevent-back-history'], function () {
    Route::get('/admin', [LoginController::class, 'index']);
});
Route::post('login-action', [LoginController::class, 'admin_login'])->name('login');

Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');
Route::get('reset-password', function(){ return abort(404); });
// End Common Routes For The Projects


// Start FrontEnd Routes

// Route::get('/', function () {
//     return redirect('/admin');
// });

// *
// *----------- CODE HERE  -------------
// *

// End Frontend Routes


// Start Backend Routes
Route::group(['prefix' => 'admin', 'middleware' => ['prevent-back-history', 'is_admin']], function (){

    // Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


    //Master Banner

        Route::controller(BannerMasterController::class)->group(function (){    
            Route::get('/banner-image-master', 'index')->name('banner-image-master');
            Route::post('/store-banner','store')->name('store-banner');
            Route::get('/banner-master/data-table','data_table');
            Route::get('banner/edit/{id}', 'edit');
        });

    //Master Banner

    //Home

    
    // Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::controller(HomeController::class)->group(function (){    

        Route::get('/home', 'index')->name('home');

        Route::post('/home-store-slider-img','storeSlierImages')->name('home-store-slider-img');

        Route::get('/home-slider/data-table','slider_data_table');

        Route::get('home-slider/edit/{id}', 'editSlider');

        Route::post('/home-service-section','storeServiceSection')->name('home-service-section');


        Route::post('/home-chairman-section','storeChairManSection')->name('home-chairman-section');

        Route::post('/home-store-scheme','storeSchemes')->name('home-store-scheme');

        Route::get('/home-scheme/data-table','scheme_data_table');

        Route::get('/home-scheme/edit/{id}', 'editScheme');
    });

    //Home

    //Board of Directors

    Route::controller(BoardofDirectorsController::class)->group(function (){
        Route::get('/board-of-directors', 'index')->name('board-of-directors');
        Route::post('/board-of-directors-store','store')->name('board-of-directors-store');
        Route::get('/board-of-directors/data-table','data_table');
        Route::get('board-of-directors/edit/{id}', 'edit');
    });

    //Board of Directors


    //Annual Report

    Route::controller(AnnualReportController::class)->group(function (){
        Route::get('/annual-report','index')->name('annual-report');
        Route::post('/annual-report-store','store')->name('annual-report-store');
        Route::get('/annual-report/data-table','data_table');
        Route::get('/annual-report/edit/{id}', 'edit');
     });

    

    //Annual Report

    //Service Charges
        Route::controller(ServiceChargesController::class)->group(function (){
            Route::get('/service-charges','index')->name('service-charges');

            Route::post('/service-charges-store','storeServiceCharges')->name('service-charges-store');

            Route::get('/service-charges/data-table','data_table');

            Route::get('/service_charges/edit/{id}', 'editServiceCharges');

            Route::post('/service-charges-tariff-store','storeServiceChargesTariff')->name('service-charges-tariff-store');

            Route::get('/service-charges-tariff/data-table','data_table1');

            Route::get('/service-charges-tarrif/edit/{id}', 'editServiceChargesTerrif');


            
            // Route::get('/annual-report/data-table','data_table');
            // Route::get('/annual-report/edit/{id}', 'edit');
        });
    //Service Charges

    //Services

    Route::controller(ServicesController::class)->group(function (){
         Route::get('/services','index')->name('services');
         Route::post('/services-store','store')->name('services-store');
         Route::get('/service/data-table','data_table');
         Route::get('/service/edit/{id}', 'edit');
    });


    //Services

    //Branch

  

    Route::controller(BranchController::class)->group(function (){

        Route::get('/branch','index')->name('branch');

        Route::post('/branch-store','store')->name('branch-store');
        Route::get('/branch/data-table','data_table');
        Route::get('/branch/edit/{id}', 'edit');


        // Route::get('/services','index')->name('services');
        // Route::post('/services-store','store')->name('services-store');
        // Route::get('/service/data-table','data_table');
        // Route::get('/service/edit/{id}', 'edit');
   });

    //Branch

    //About
    Route::controller(AboutUsController::class)->group(function (){
        Route::get('/about-us', 'index')->name('about-us');
        Route::post('/about-store', 'store')->name('about-store');
    });

    //About

    //Interest Rate

    

    Route::controller(InterestRatesController::class)->group(function (){

        Route::get('/interest-rates','index')->name('interest-rates');
        Route::post('/interest-rates-store', 'store')->name('interest-rates-store');
        Route::post('/store-deposit-interest-rates-table1', 'storeDepositInterestRatesTable1')->name('store-deposit-interest-rates-table1');
        Route::get('/store-deposit-interest-rates-table1/data-table','data_table1');
        Route::get('/deposit_interest_rates_table1/edit/{id}', 'deposit_interest_rates_table1_edit');
        Route::post('/store-deposit-interest-rates-table2', 'storeDepositInterestRatesTable2')->name('store-deposit-interest-rates-table2');
        Route::get('/store-deposit-interest-rates-table2/data-table','data_table2');
        Route::get('/deposit_interest_rates_table2/edit/{id}', 'deposit_interest_rates_table2_edit');
    });


    //Interest Rate


    //Unclaimed Deposite


    Route::controller(UnclaimedDepositeController::class)->group(function (){

        Route::get('/unclaimed-deposite','index')->name('unclaimed-deposite');

        Route::post('/unclaimed-deposite-store', 'store')->name('unclaimed-deposite-store');

        Route::get('/unclaimed-deposite/edit/{id}', 'edit');

        Route::get('/unclaimed/data-table','data_table');

        // Route::post('/store-deposit-interest-rates-table1', 'storeDepositInterestRatesTable1')->name('store-deposit-interest-rates-table1');
        // Route::get('/store-deposit-interest-rates-table1/data-table','data_table1');
        // Route::get('/deposit_interest_rates_table1/edit/{id}', 'deposit_interest_rates_table1_edit');
        // Route::post('/store-deposit-interest-rates-table2', 'storeDepositInterestRatesTable2')->name('store-deposit-interest-rates-table2');
        // Route::get('/store-deposit-interest-rates-table2/data-table','data_table2');
        // Route::get('/deposit_interest_rates_table2/edit/{id}', 'deposit_interest_rates_table2_edit');
    });



    //Unclaimed Deposite



    
  

    //Contact

    Route::controller(ContactUsController::class)->group(function (){
        Route::get('/contact-us','index')->name('contact-us');
        Route::post('/contact-store','store')->name('contact-store');

        Route::get('/contact-us-queries','contactQueries')->name('contact-us-queries');
        Route::get('/contact-us-queries/data-table','data_table');
    });


    //Contact

    //Privacy

    Route::controller(PrivacyPolicyController::class)->group(function (){

        Route::get('/privacy-policy','index')->name('privacy-policy');

        // Route::get('/contact-us','index')->name('contact-us');

        Route::post('/privacy-policy-store','store')->name('privacy-policy-store');
    });

    
  

    //Privacy

    //Terms and Condition


    
    Route::controller(TermsAndConditionController::class)->group(function (){

        Route::get('/terms-and-condition', 'index')->name('terms-and-condition');

        // Route::get('/privacy-policy','index')->name('privacy-policy');

        // Route::get('/contact-us','index')->name('contact-us');

        Route::post('/terms-and-condition-store','store')->name('terms-and-condition-store');
    });


    //Terms and Condition






  




   

 

   

    Route::get('/branch', [BranchController::class, 'index'])->name('branch');

  

 


    







    // Start Backend Common Routes For The Projects

    Route::controller(GeneralSettings::class)->group(function () {
        Route::get('general-setting', 'index');
        Route::post('general-settings-store', 'store')->name('geraral.settings.store');

        Route::post('top-slider-store', 'storeTopSlider')->name('top.slider.store');

        Route::get('top-slider/data-table','data_table');
    });

    Route::controller(VisualSettings::class)->group(function () {
        Route::get('visual-setting', 'index');
        Route::post('visual-settings-store', 'store')->name('visual.settings.store');
    });

    Route::controller(RolesPrivilegesController::class)->group(function () {
        Route::get('roles-privileges','index');
        Route::get('roles-privileges/add','create');
        Route::post('roles-privileges/store','store')->name('roles-previllages.store');
        Route::get('roles-privileges/data-table','data_table');
        Route::get('roles-privileges/edit/{id}','edit');
        Route::get('roles-privileges/check-role-exist','check_role_exist');
    });

    Route::controller(SystemUserController::class)->group(function () {
        Route::get('system-user','index');
        Route::get('system-user/add','create');
        Route::post('system-user/store','store')->name('system-user.store');
        Route::get('system-user/data-table','data_table');
        Route::get('system-user/edit/{id}','edit');
        Route::get('system-user/check-user-exist','check_user_exist');
    });

    Route::controller(LoginController::class)->group(function () {
        Route::get('change-password', 'view_change_password');
        Route::post('change-password', 'change_password');
        Route::get('logout', 'logout');
    });

    Route::controller(BaseController::class)->group(function () {
        Route::get('sub-category-list', 'subCategoryList');
        Route::get('common-delete', 'delete');
        Route::post('change-status', 'status')->name('change-status');
    });
    // End Backend Common Routes For The Projects

    route::get('/404', [NotFoundController::class, 'index']);
});
//End Backend Routes

// Route::fallback(function () {
//     return redirect('admin/404');
// });

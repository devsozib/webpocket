<?php

use App\Models\HomeSlider;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\backend\FaqController;
use App\Http\Controllers\backend\LogoController;
use App\Http\Controllers\backend\MenuController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\backend\OfferController;
use App\Http\Controllers\backend\AppUrlController;
use App\Http\Controllers\backend\SubMenuController;
use App\Http\Controllers\frontend\FrontendController;
use App\Http\Controllers\backend\BrandColorController;
use App\Http\Controllers\backend\BreadCrumbController;
use App\Http\Controllers\backend\HomeSliderController;
use App\Http\Controllers\backend\SocialIconController;
use App\Http\Controllers\backend\ServiceIconController;
use App\Http\Controllers\backend\WebsiteContentController;
use App\Http\Controllers\backend\ServiceTutorialController;
use App\Http\Controllers\backend\WebsiteSettingsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//axios routes
Route::get('/service/get-tutorials', [ServiceTutorialController::class, 'getTutorial']);
//Frontend routes
Route::get('/', [FrontendController::class, 'index'])->name("index");
Route::get('offers', [FrontendController::class, 'getOffers'])->name("offers");
Route::get('offers/{id}', [FrontendController::class, 'getOffersDetails'])->name("offers.details");
Route::get('contact', [FrontendController::class, 'getContact'])->name("contact");
Route::get('about', [FrontendController::class, 'getAbout'])->name("about");
// Route::get('help')
Route::get('privacy-policy', [FrontendController::class, 'pageDetails'])->name("privacy-policy");
Route::get('app-privacy', [FrontendController::class, 'getPrivacyPolicyApp'])->name("app-privacy");
Route::get('terms-conditions', [FrontendController::class, 'pageDetails'])->name("web-terms");
Route::get('app-terms', [FrontendController::class, 'getTermsConditionsApp'])->name("app-terms");
Route::get('card-terms', [FrontendController::class, 'getCardTermsWeb'])->name("card-terms");
Route::get('service/{id}', [FrontendController::class, 'getServices'])->name("services");
Route::get('services', [FrontendController::class, 'services'])->name("all.services");
Route::get('business', [FrontendController::class, 'business'])->name("business");
Route::get('use', [FrontendController::class, 'howTOUse'])->name("use");
Route::get('faq', [FrontendController::class, 'index'])->name("faq");
Route::get('faq/{id}', [FrontendController::class, 'faq'])->name("faq");
Route::get('blog', [FrontendController::class, 'index'])->name("blog");
Route::get('my-pocket', [FrontendController::class, 'getAbout'])->name("my-pocket");
Route::get('career', [FrontendController::class, 'career'])->name("career");
Route::get('news', [FrontendController::class, 'news'])->name("news");
Route::get('security-tips/{id}', [FrontendController::class, 'securityTips'])->name("security-tips");
Route::post('send-message',[FrontendController::class,'sendMessage'])->name('send-message');
Route::get('isms-policy',[FrontendController::class,'ItandSecurity'])->name('ItandSecurity');

Route::get('bill-pay', [FrontendController::class, 'comingsoon'])->name("bill-pay");
Route::get('remittance', [FrontendController::class, 'comingsoon'])->name("remittance");
Route::get('credit-card-bill', [FrontendController::class, 'comingsoon'])->name("credit-card-bill");
Route::get('add-money-from-bank', [FrontendController::class, 'comingsoon'])->name("add-money-from-bank");
Route::get('add-money-from-card', [FrontendController::class, 'comingsoon'])->name("add-money-from-card");
Route::get('pocket-to-bank', [FrontendController::class, 'comingsoon'])->name("pocket-to-bank");
Route::get('schedule-payment', [FrontendController::class, 'comingsoon'])->name("schedule-payment");
Route::get('savings', [FrontendController::class, 'comingsoon'])->name("savings");
Route::get('restaurants', [FrontendController::class, 'comingsoon'])->name("restaurants");
Route::get('shopping', [FrontendController::class, 'comingsoon'])->name("shopping");
Route::get('tours&travel', [FrontendController::class, 'comingsoon'])->name("tours&travel");
Route::get('healthcare', [FrontendController::class, 'comingsoon'])->name("healthcare");
Route::get('fooddelivery', [FrontendController::class, 'comingsoon'])->name("fooddelivery");
Route::get('estivalclebration', [FrontendController::class, 'comingsoon'])->name("estivalclebration");
Route::get('billpay', [FrontendController::class, 'comingsoon'])->name("billpay");
Route::get('merchantpayment', [FrontendController::class, 'comingsoon'])->name("merchantpayment");
Route::get('biography-of-pocket', [FrontendController::class, 'getAbout'])->name("biography-of-pocket");
Route::get('corporate-social-responsibility-of-pocket', [FrontendController::class, 'index'])->name("corporate-social-responsibility-of-pocket");
Route::get('limit-and-charges', [FrontendController::class, 'comingsoon'])->name("limit-and-charges");
Route::get('help',[FrontendController::class,'index'])->name('help');
Route::get('tariff-calculator', [FrontendController::class, 'comingsoon'])->name("tariff-calculator");
Route::get('compliant-cell', [FrontendController::class, 'comingsoon'])->name("compliant-cell");
Route::get('live-chat', [FrontendController::class, 'comingsoon'])->name("live-chat");
Route::get('help-line-16800', [FrontendController::class, 'helps'])->name("help-line-16800");
Route::get('e-appointment', [FrontendController::class, 'comingsoon'])->name("e-appointment");
Route::get('online-business-solution', [FrontendController::class, 'businessDetails'])->name("online-business-solution");
Route::get('merchant-services', [FrontendController::class, 'businessDetails'])->name("merchant-services");
Route::get('educational-institutions', [FrontendController::class, 'businessDetails'])->name("educational-institutions");
Route::get('payroll-excellence', [FrontendController::class, 'businessDetails'])->name("payroll-excellence");
Route::get('corporate-enterprise-solutions', [FrontendController::class, 'businessDetails'])->name("corporate-enterprise-solutions");
Route::get('microfinance-transformation', [FrontendController::class, 'businessDetails'])->name("microfinance-transformation");
Route::get('discontinued-distributors', [FrontendController::class, 'businessDetails'])->name("discontinued-distributors");
Route::get('pocket-services', [FrontendController::class, 'pageDetails'])->name("pocket-services");
Route::get('media-partner', [FrontendController::class, 'businessDetails'])->name("media-partner");
Route::get('supplier-collaboration', [FrontendController::class, 'businessDetails'])->name("supplier-collaboration");
Route::get('csr', [FrontendController::class, 'comingsoon'])->name("csr");
Route::get('partners', [FrontendController::class, 'comingsoon'])->name("partners");
Route::get('career-at-pocket', [FrontendController::class, 'pageDetails'])->name("career-at-pocket");
Route::get('go-along-with-pocket-career-on-social-media', [FrontendController::class, 'pageDetails'])->name("go-along-with-pocket-career-on-social-media");
Route::get('how-to-open-pocket-account', [FrontendController::class, 'pageDetails'])->name("how-to-open-pocket-account");
Route::get('how-to-open-a-merchant-account', [FrontendController::class, 'howToOpenMar'])->name("how-to-open-a-merchant-account");
Route::get('how-to-use-pocket', [FrontendController::class, 'pageDetails'])->name("how-to-use-pocket");
Route::get('download-pocket-app', [FrontendController::class, 'downloadPocket'])->name("download-pocket-app");
Route::get('keep-safe-money', [FrontendController::class, 'pageDetails'])->name("keep-safe-money");

//Comming soon 

Route::get('coming-soon',[FrontendController::class,'comingsoon'])->name('coming-soon');




//admin routes
Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
]);
//Backend routes
Route::middleware(['auth'])->group(function () {
    //Ajax routes
    Route::get('getSubmenu', [BreadCrumbController::class, 'getSubmenu']);
    //Other routes
    Route::resource('users', UserController::class);
    Route::resource('menus', MenuController::class);
    Route::resource('sub_menus', SubMenuController::class);
    Route::resource('breadcrumbs', BreadCrumbController::class);
    Route::resource('tutorials', ServiceTutorialController::class);
    Route::resource('service-icons', ServiceIconController::class);
    Route::resource('offer', OfferController::class);
    Route::resource('slider', HomeSliderController::class);
    Route::resource('faqs', FaqController::class);
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    //Webiste Settings rotues
    Route::resource('appsurl', AppUrlController::class);
    Route::resource('socialicon', SocialIconController::class);
    Route::resource('logo', LogoController::class);
    Route::resource('brand-color',BrandColorController::class);
    Route::get('website-content',[HomeController::class,'websiteContent'])->name('website.content');
    Route::patch('website-content',[WebsiteContentController::class,'websiteContentUpdate'])->name('website.content.update');
      
});

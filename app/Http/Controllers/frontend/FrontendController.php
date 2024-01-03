<?php

namespace App\Http\Controllers\frontend;

use App\Models\Menu;
use App\Models\SubMenu;
use App\Models\HomeSlider;
use App\Models\Backend\Faq;
use App\Models\ServiceIcon;
use Illuminate\Http\Request;
use App\Models\backend\Offer;
use App\Models\backend\SocialIcon;
use App\Models\Frontend\Breadcrumb;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use App\Models\backend\ServiceTutorial;

class FrontendController extends Controller
{
    public function index()
    {
        
        // testMail();
        // return $menu = Menu::orderBy('sequence', 'ASC')
        // ->get()
        // ->load('submenu');
        $menuIcons = ServiceIcon::where('status', '1')->orderBy('sequence', 'ASC')->get();
        $offers = Offer::where('status', '1')->get();
        $sliders = HomeSlider::where('status', '1')->orderBy('sequence', 'DESC')->get();
        
       
        return view('frontend.pages.index', compact('menuIcons', 'offers', 'sliders'));
    }

    public function getOffers()
    {
        $offers = Offer::where('status', '1')->get();
        return view('frontend.pages.offers', compact('offers'));
    }

    public function getContact()
    {
        return view('frontend.pages.contact');
    }

    public function getAbout()
    {
        return view('frontend.pages.about');
    }

    public function getServices(Request $request, $id)
    {
        $smenu = SubMenu::findOrFail($id);
        $breadcrumb = Breadcrumb::where('menu_id', $request->menu_id)->where('sub_menu_id', $id)->where('status', '1')->first();
        $tutorials = ServiceTutorial::where('menu_id', $request->menu_id)->where('submenu_id', $id)->where('status', '1')->count();
        return view('frontend.pages.services', compact('smenu', 'breadcrumb', 'tutorials'));
    }

    public function getPrivacyPolicyApp()
    {
        return view('frontend.pages.privacy_policy-app');
    }

    public function getPrivacyPolicy(){
        return view('frontend.pages.privacy_policy-web');
    }


    public function getOffersDetails($id)
    {
        $offer = Offer::find($id);
        return view('frontend.pages.offer_details', compact('offer'));
    }

    public function faq(Request $request, $id){
        $menu_id =  $request->menu_id;
        $smenu = SubMenu::findOrFail($id);
        $faqs = \App\Models\backend\Faq::where('menu_id',$menu_id)->where('submenu_id',$id)->where('status','1')->orderBy('sequence','asc')->get();
        return view('frontend.pages.faq',compact('smenu','faqs'));
    }

    public function services(Request $request){
         $services = SubMenu::where('menu_id','1')->where('status','1')->get();
         $menuIcons = ServiceIcon::where('status', '1')->orderBy('sequence', 'ASC')->get();
        return view('frontend.pages.allservices',compact('services','menuIcons'));
    }

    public function business(Request $request){   
        return view('frontend.pages.business');
    }

    public function howTOUse(){
        return view('frontend.pages.howtouse');
    }

    public function career(Request $request){    
        return view('frontend.pages.career');
    }

    public function goAlongwithPocket(){
        return view('frontend.pages.goalongpocket');
    }


    public function news(){
        return view('frontend.pages.news');
    }

    public function securityTips(Request $request, $id){
        $smenu = SubMenu::findOrFail($id);
        $breadcrumb = Breadcrumb::where('menu_id', $request->menu_id)->where('sub_menu_id', $id)->where('status', '1')->first();
        return view('frontend.pages.securitytips',compact('smenu','breadcrumb'));
    }

    public function sendMessage(Request $request){
        // Extract the relevant data from the request
        $data = [
            '_token' => $request->input('_token'),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'msg_subject' => $request->input('msg_subject'),
            'message' => $request->input('message'),
        ];
    
        // Call the testMail function to send the email
        testMail($data);
    
        // Redirect to a valid route after sending the email
        return redirect()->route('index'); // Replace 'your_route_name' with the actual route name
    }

    public function ItandSecurity(){
        return view('frontend.pages.itandsecurity');
    }

    public function businessDetails(){
      
        return view('frontend.pages.business-details');
    }

    public function helps(){
        return view('frontend.pages.helps');
    }

    public function pageDetails(Request $request){
        $route =  $request->path();
        $subMenu = SubMenu::where('url',$route)->first();
        $breadcrumb = Breadcrumb::where('menu_id',$subMenu->menu_id)->where('sub_menu_id',$subMenu->id)->first();
        return view('frontend.pages.pageDetails',compact('breadcrumb'));
    }

    public function howToOpenMar(){
        return view('frontend.pages.howtoopenmar');
    }

    public function downloadPocket(){
        return view('frontend.pages.downloadpocket');
    }

    public function keepSafe(){
        return view('frontend.pages.keepsafe');
    }
    public function getTermsConditionsWeb(){
        return view('frontend.pages.terms-condition-web');
    }
    public function getTermsConditionsApp(){
        return view('frontend.pages.terms-condition-app');
    }

    public function getCardTermsWeb(){
        return view('frontend.pages.terms_card-web');
    }

    public function comingsoon(){
        return view('frontend.pages.commingsoon');
    }
}

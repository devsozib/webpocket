@extends('frontend.layouts.main')
@section('content')
<style>
   p{
     text-align: justify!important;
    }
</style>
    <div class="content-wrapper">
        <div class="breadcrumb-wrap bg-spring">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="text-center ">
                           <h1>{{ $breadcrumb->title }}</h1>
                        </div>
                    </div>                  
                </div>
            </div>
        </div>
    
        {{-- @if ($breadcrumb) --}}
            {{-- @if ($breadcrumb->description != null) --}}
                <div data-v-b6d51246="" class="textCard container mb-3">
                    {{-- <div data-v-b6d51246="">                       
                        <strong>a.Sign up</strong>
                        <p>1. Open the App</p>
                        <p>2. Select the "Sign Up" option from the Login Screen.</p>
                        <p>3. Enter your mobile number and select Mobile Network Operator.</p>
                        <p>4. Tap the "Verify Your Number" button.</p>
                        <p>5. Enter the OTP received via SMS into the OTP input box and select “Enter Code”. For Android, the application might read the OTP automatically. For iOS, the customer will have to enter the OTP manually. The OTP will expire after a set time.</p>
                        <p>6. Read “Terms & Conditions”, select the “I Agree” option, and tap on “Proceed”.</p>
                        <p>7. Enter PIN (which he or she will have to enter again).</p>
                        <p>8. Select “Proceed”</p>
                        
                                   
                        <strong>The customer will be registered as a limited profile user.</strong><br>
                          <strong>b.Customer Log In</strong>
                          <p class="step">1. Open the app on your mobile device.</p>
                          <p class="step">2. Enter your mobile number.</p>
                          <p class="step">3. Tap the "Login" button.</p>
                          <p class="step">4. Agree to bind the device (for the first-time login only).</p>
                          <p class="step">5. Enter the OTP received via SMS into the OTP input box and select “Enter Code”. For Android, the application might read the OTP automatically. For iOS, the customer will have to enter the OTP manually. The OTP will expire after a set time.
                              The customer is taken to the POCKET home screen.</p>
                          <p class="step">E-KYC</p>
                          <p class="step">1. Open the app on your mobile device and log in.</p>
                          <p class="step">2. Tap on “Register Now”.</p>
                          <p class="step">3. The E-KYC screen will appear, and then tap on “Start”.</p>
                          <p class="step">4. You need to take a picture of both the front and back of your NID.</p>
                          <p class="step">5. Verify the NID information and click “Next”.</p>
                          <p class="step">6. Provide the necessary information that is shown on the screen and click “Next”.</p>
                          <p class="step">7. Take a selfie at different angles and blink your eyes 5 times as per instruction.</p>
                          <p class="step">8. Sign your name digitally.</p>
                          <p class="step">9. Tap on “Submit”.</p>
                        
                          <p> The customer’s e-KYC verification will be completed. Application Download link <a style="color: #015328" href="https://apps.apple.com/us/app/pocket-ewallet/id6445982158">IOS APP</a> and  <a style="color:#015328" href="https://play.google.com/store/apps/details?id=com.abg.pocket&hl=en&gl=US">Android</a></p>
                        

                    </div> --}}
                    {!! $breadcrumb->description !!}
                </div>
            {{-- @endif
        @endif --}}
    </div>
    </div>
@endsection
@vite('resources/js/app.js')

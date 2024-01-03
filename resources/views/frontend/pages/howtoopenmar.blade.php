@extends('frontend.layouts.main')
@section('content')
<div class="content-wrapper">
    <div class="breadcrumb-wrap bg-spring">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="text-center ">
                       <h1>How to open Merchant Account</h1>
                    </div>
                </div>
              
            </div>
        </div>
    </div>
        {{-- @if ($breadcrumb) --}}
            {{-- @if ($breadcrumb->description != null) --}}
                <div data-v-b6d51246="" class="textCard container mb-3">
                    <div data-v-b6d51246="">                                            
                        <p class="step">To Create a Merchant Wallet:</p>                    
                        <p class="step">1. Name of The Business</p>
                        <p class="step">2. Nominated Wallet Number (Official Mobile Number)</p>
                        <p class="step">3. A Smart Mobile Phone</p>
                        <p class="step">4. Nominated Person's NID (Physical & Photo Copy)</p>
                        <p class="step">5. Company Trade License (Photocopy)</p>
                        <p class "step">6. Company TIN (Photocopy)</p>
                        <p class="step">7. Company VAT Certificate</p>
                        <p class="step">8. Bank Account Information</p>                    
                        <p class="step">&nbsp;&nbsp;&nbsp;a. Account Number</p>
                        <p class="step">&nbsp;&nbsp;&nbsp;b. Account Name</p>
                        <p class="step">&nbsp;&nbsp;&nbsp;c. Bank Name</p>
                        <p class="step">&nbsp;&nbsp;&nbsp;d. Branch Name</p>                        
                    </div>
                </div>
            {{-- @endif
        @endif --}}
    </div>
    </div>
@endsection
@vite('resources/js/app.js')

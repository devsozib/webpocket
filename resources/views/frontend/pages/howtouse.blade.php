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
                           <h1>How to use Pocket</h1>
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>
        
        {{-- <div id="app">
            <tutorial-component :menu_id="{{ json_encode($smenu->menu_id) }}" :sub_menu_id="{{ json_encode($smenu->id) }}">
            </tutorial-component>
        </div> --}}
        {{-- @if ($breadcrumb) --}}
            {{-- @if ($breadcrumb->description != null) --}}
                <div data-v-b6d51246="" class="textCard container mb-3">
                    <div data-v-b6d51246="">                                           
                        <p>One can easily download the POCKET Customer app from the App Store & Google Play Store and sign up for POCKET by himself. You’ll need an Android or iOS device with an internet connection to use the Application. </p>                  
                    </div>
                </div>
            {{-- @endif --}}
        {{-- @endif --}}
    </div>
    </div>
@endsection
@vite('resources/js/app.js')

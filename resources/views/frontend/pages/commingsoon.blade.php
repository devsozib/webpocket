@extends('frontend.layouts.main')
@section('content')
    <style>
        @keyframes fadeIn {
        from {top: 20%; opacity: 0;}
        to {top: 100; opacity: 1;}
        
        }

        @-webkit-keyframes fadeIn {
        from {top: 20%; opacity: 0;}
        to {top: 100; opacity: 1;}
        
        }

        .wrapper {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        -webkit-transform: translate(-50%, -50%);
        animation: fadeIn 1000ms ease;
        -webkit-animation: fadeIn 1000ms ease;
        
        }

        h1 {
        font-size: 50px;
        font-family: 'Poppins', sans-serif;
        margin-bottom: 0;
        line-height: 1;
        font-weight: 700;
        }

        .dot {
        color: #0d5d25;
        }

        p {
        text-align: center;
        margin: 18px;
        font-family: 'Muli', sans-serif;
        font-weight: normal;
        
        }

        .icons {
        text-align: center;
        
        }
    </style>
    <div class="content-wrapper">
        <div class="breadcrumb-wrap bg-spring" style="padding: 200px 0px">
            <div class="container">
                <div class="">
                    <h1 style="text-align: center">coming soon<span class="dot">.</span></h1>                                        
                   </div>
            </div>    
        </div>
    </div>
    </div>
@endsection

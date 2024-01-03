@extends('frontend.layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="breadcrumb-wrap bg-spring">
            <div class="container">
                <div class="row align-items-center">
                    <div class="text-center ">
                        <strong class="border-bottom" style="font-size:20px">Securtiy Tips</strong> <br> <p>A little attention can save us from many unwanted incidents.  <br>Here are some tips to ensure the safety of your POCKET Account and Transactions.</p>
                    </div>
                </div>
            </div>
        </div>
        
        {{-- <div id="app">
            <tutorial-component :menu_id="{{ json_encode($smenu->menu_id) }}" :sub_menu_id="{{ json_encode($smenu->id) }}">
            </tutorial-component>
        </div> --}}
        @if ($breadcrumb)
            @if ($breadcrumb->description != null)
                <div data-v-b6d51246="" class="textCard container mb-3">
                    <div data-v-b6d51246="">
                        {!! $breadcrumb->description !!}
                    </div>
                </div>
            @endif
        @endif
    </div>
    </div>
@endsection


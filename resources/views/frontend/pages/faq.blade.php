@extends('frontend.layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="breadcrumb-wrap bg-spring">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-8 col-sm-8">
                        {{-- <div class="breadcrumb-title">
                            <h2>{{ $smenu->display_name }}</h2>
                            <ul class="breadcrumb-menu list-style">
                                <li>
                                    <a href="{{ url('/') }}">Home</a>
                                </li>
                                <li>{{ $smenu->display_name }} page</li>
                            </ul>
                        </div> --}}
                    </div>
                    <div class="col-lg-5 col-md-4 col-sm-4 xs-none">
                        <div class="breadcrumb-img">
                            {{-- @if ($breadcrumb)
                                @if ($breadcrumb->image != null)
                                    <img src="{{ url('frontend/assets/img/breadcrumb/', $breadcrumb->image) }}"
                                        alt="Image">
                                @endif
                            @endif --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="textCard-inner">
            <div class="section-heading">
                <h2 class="text-center">{{ $smenu->display_name }}</h2>
            </div>
        </div>
        {{-- <div id="app">
            <tutorial-component :menu_id="{{ json_encode($smenu->menu_id) }}" :sub_menu_id="{{ json_encode($smenu->id) }}">
            </tutorial-component>
        </div> --}}
        {{-- @if ($breadcrumb)
            @if ($breadcrumb->description != null)
                <div data-v-b6d51246="" class="textCard container mb-3">
                    <div data-v-b6d51246="">
                        {!! $breadcrumb->description !!}
                    </div>
                </div>
            @endif
        @endif --}}

        <section class="faq-wrap ptb-100 mb-5">
            <div class="container">
              <div class="row gx-5 align-items-center">
                <div class="col-lg-2">
                    
                </div>
                <div class="col-lg-8">
                  <div class="accordion style2" id="accordionExample">
                    <div class="accordion" id="accordionExample">
                      @foreach ($faqs as $faq)
                         <div class="accordion-item">
                              <h2 class="accordion-header" id="heading{{ $faq->id }}">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $faq->id }}" aria-expanded="false" aria-controls="collapse{{ $faq->id }}">
                                      <span>
                                          <i class="ri-arrow-down-s-line plus"></i>
                                          <i class="ri-arrow-up-s-line minus"></i>
                                      </span>{{ $faq->question }}
                                  </button>
                              </h2>
                              <div id="collapse{{ $faq->id }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $faq->id }}" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                      <div class="single-product-text">
                                          <p>{!! $faq->answer !!}</p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      @endforeach
                  </div>                                      
                </div>
                <div class="col-lg-2">
                </div>
              </div>
            </div>
          </section>
    </div>
    </div>
@endsection


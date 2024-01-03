<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('frontend.layouts.head')
    <style>
        .bg-rock {
        background-color:  {{ getColor()->primary_color }}!important;
        
        }  
        .btn.style1 {
            background: linear-gradient(180deg, #F5DFA6 0%,  {{ getColor()->secondary_color }} 100%);
        }
        .header-wrap.style1 .header-bottom {
            margin-top: 29px;
            background: linear-gradient(90.25deg,hsl(121.85deg 100% 7.09%) 5.68%,hsl(99.69deg 56.76% 11.05% / 48%) 143.91%)!important;
        }

        .back-to-top {

            background-color:  {{ getColor()->primary_color }}!important;
        
        }
        .security-wrap .security-content .feature-item-wrap .feature-icon {
            background: linear-gradient(180deg, {{ getColor()->secondary_color }}  0%, #d3af65 100%)!important;
        }
        .btn.style6 {
            background-color: {{ getColor()->primary_color }};
            color:#fff;
        }
        .header-wrap.style1 .header-bottom {
            margin-top: 22px;
            background: linear-gradient(90.25deg,hsl(121.85deg 100% 7.09%) 5.68%,hsl(99.69deg 56.76% 11.05% / 48%) 143.91%) !important;
            height: 69px;
            }
    </style>
    <link rel="stylesheet" href="assets/css/chat-widget.css">
<body>
    <div class="loader js-preloader">
        <img width="200" class="logo-light" src="{{ asset('frontend') }}/assets/img/p.gif" alt="logo" />
    </div>

    {{-- <div class="switch-theme-mode">
        <label id="switch" class="switch">
            <input type="checkbox" onchange="toggleTheme()" id="slider" />
            <span class="slider round"></span>
        </label>
    </div> --}}
    <div class="page-wrapper">
        @include('frontend.layouts.header')
        @yield('content')
        <div id="chat-widget-chat-main-div"></div>
        @include('frontend.layouts.footer')
    </div>
    {{-- <a href="javascript:void(0)" class="back-to-top bounce"><i class="ri-arrow-up-s-line"></i></a> --}}
    @include('frontend.layouts.srcript')
    <script type="text/javascript">
        $(document).ready(function() {
            $('.slick-slider').slick({
                centerPadding: '60px',
                slidesToShow: 5,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                responsive: [{
                        breakpoint: 768,
                        settings: {
                            arrows: false,
                            centerPadding: '40px',
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            arrows: false,
                            centerPadding: '40px',
                            slidesToShow: 3
                        }
                    }
                ]
            });
        });

        function expandCollapse() {
            if ($(".submenu").css('display') == 'none') {
                $("#expand-collapse").html(
                    '<a href="javascript:void(0)" class="btn btn-xsm btn-primary"><i class="fa-solid fa-minus"></i></a>'
                );
                $(".submenu").show("slow");
            } else {
                $("#expand-collapse").html(
                    '<a href="javascript:void(0)" class="btn btn-xsm btn-primary"><i class="fa-solid fa-plus"></i></a>'
                );
                $(".submenu").hide("slow");
            }
        }

        var owlone = $('.owl-one');
        owlone.owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,          

        });

        var owltwo = $('.owl-two');
        owltwo.owlCarousel({
            center: true,
            items: 2,
            loop: true,
            margin: 10,
            dots: false,
            autoplay: false,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 3
                }
            }


        });

        var owlcenter = $('.card.align-items-center.text-center.bg-transparent');
        if (owlcenter) {

        }
    </script>
    <script src="https://js.pusher.com/5.0/pusher.min.js"></script>
    <script>
        let time = new Date().getTime();
        let myScript = document.createElement("script");
        myScript.setAttribute("src", `assets/js/chat-widget-i.js?t=${time}`);
        document.body.appendChild(myScript);
    </script>
</body>

</html>

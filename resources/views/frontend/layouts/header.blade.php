<header class="header-wrap style1">
    <style>
        ::placeholder {
            color:#E9D298;
        }
    </style>
    {{-- <div class="header-top">
        <button type="button" class="close-sidebar">
            <i class="ri-close-fill"></i>
        </button>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-12">
                    <div class="header-top-left">
                        <ul class="contact-info list-style">
                            <li>
                                <i class="flaticon-call"></i>
                                <a href="tel:02459271449">+8801xxxxxxxxx</a>
                            </li>
                            <li>
                                <i class="flaticon-email-1"></i>
                                <a
                                    href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#e68e838a8a89a694879e87c885898b"><span
                                        class="__cf_email__"
                                        data-cfemail="19717c757576596b786178377a7674">info@pocket.com</span></a>
                            </li>
                            <li>
                                <i class="flaticon-pin"></i>
                                <p>Dhaka</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="header-top-right">
                        <ul class="header-top-menu list-style">
                            <li><a href="contact.html">Support</a></li>
                            <li><a href="contact.html">Help</a></li>
                        </ul>
                        <div class="select-lang">
                            <i class="ri-global-line"></i>
                            <div class="navbar-option-item navbar-language dropdown language-option">
                                <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <span class="lang-name"></span>
                                </button>
                                <div class="dropdown-menu language-dropdown-menu">
                                    <a class="dropdown-item" href="#">
                                        <img src="{{ asset('frontend') }}/assets/img/uk.png" alt="flag" />
                                        English
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="header-bottom">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{-- <img style="width: 150px" class="logo-light"
                        src="{{ asset('frontend') }}/assets/img/POCKET-Logo-Gold.png" alt="logo" /> --}}
                    <img style="width: 150px" class="logo-dark"
                        src="{{ asset('frontend') }}/assets/img/logo/{{ logo()->dark_logo }}" alt="logo" />
                    {{-- <span style="font-weight:bold">Pocket</span> --}}
                </a>
                <div class="collapse navbar-collapse main-menu-wrap" id="navbarSupportedContent">
                    <div class="menu-close xl-none">
                        <a href="javascript:void(0)">
                            <i class="ri-close-line"></i></a>
                    </div>
                    {{-- <ul>
                        @foreach ($menu as $item)
                            <li>
                                <a href="{{ $item->url }}">{{ $item->menu_name }}</a>
                                @if ($item->submenu->count())
                                    <ul>
                                        @foreach ($item->submenu as $subitem)
                                            <li><a href="{{ $subitem->url }}">{{ $subitem->sub_menu_name }}</a></li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endforeach
                    </ul> --}}
                    @php
                        $menu = App\Models\Menu::orderBy('sequence', 'ASC')
                            ->where('status','1')
                            ->get()
                            ->load('submenu');                      
                    @endphp
                    <ul class="navbar-nav ms-auto">
                        @foreach ($menu as $item)
                            <li class="nav-item has-dropdown">
                                @if ($item->childable == '1')
                                    <a href="{{ url( $item->url ) }}" class="nav-link">
                                        {{ $item->display_name }}
                                    </a>
                                    @if ($item->submenu->count())
                                        <ul class="dropdown-menu" >
                                            @foreach ($item->submenu as $subitem)
                                                <li class="nav-item">
                                                    @if ($item->url == 'services' or $item->url == 'faq')
                                                    {{-- {!! $subitem->display_name=='About Us'?URL::route($subitem->url): URL::route($subitem->url, ['id' => $subitem->id, 'menu_id' => $subitem->menu_id]) !!} --}}
                                                        <a href="{!! $subitem->display_name=='About Us'?URL::route($subitem->url): URL::route($subitem->url, ['id' => $subitem->id, 'menu_id' => $subitem->menu_id]) !!}"
                                                            class="nav-link">{{ $subitem->display_name }}</a>
                                                    @else
                                                        <a href="{{ url('/' . $subitem->url) }}"
                                                            class="nav-link">{{ $subitem->display_name }}</a>
                                                    @endif
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                @else
                                    <a href="{{ url('/' . $item->url) }}" class="nav-link">
                                        {{ $item->display_name }}
                                    </a>
                                @endif

                            </li>
                        @endforeach
                        {{-- <li class="nav-item">
                            <a href="about.html" class="nav-link">Offers</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('about') }}" class="nav-link"> About Us </a>
                        </li>
                        <li class="nav-item has-dropdown">
                            <a href="#" class="nav-link">
                                My Pocket
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="service-one.html" class="nav-link">Sample</a>
                                </li>
                                <li class="nav-item">
                                    <a href="service-one.html" class="nav-link">Sample</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('contact') }}" class="nav-link">Contact Us</a>
                                </li>
                            </ul>
                        </li> --}}
                        {{-- <li class="nav-item xl-none">
                            <a href="register.html" class="btn style1">Register Now</a>
                        </li> --}}                      
                       
                    </ul>
                    <div class="others-options lg-none">
                        <div class="searchbox">
                            <input type="search" placeholder="Search" />
                            <button type="button">
                                <i class="flaticon-search"></i>
                            </button>
                        </div>
                        {{-- <div class="header-btn lg-none">
                            <a href="register.html" class="btn style1">Register Now</a>
                        </div> --}}
                    </div>
                    {{-- <div class="select-lang">
                        <i class="ri-global-line"></i>
                        <div class="navbar-option-item navbar-language dropdown language-option">
                          <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="lang-name"></span>
                          </button>
                          <div class="dropdown-menu language-dropdown-menu">
                            <a class="dropdown-item" href="{{ route('index') }}">
                                English </a>
                            <a class="dropdown-item" href="{{ route('index','bn') }}">
                                Bangla </a>                            
                          </div>
                        </div>
                      </div> --}}
                </div>
            </nav>
            <div class="mobile-bar-wrap">
                <div class="mobile-sidebar">
                    <i class="ri-menu-4-line"></i>
                </div>
                <button class="searchbtn xl-none" type="button">
                    <i class="flaticon-search"></i>
                </button>
                <div class="mobile-menu xl-none">
                    <a href="javascript:void(0)"><img style="width: 20px" class="logo-light"
                            src="{{ asset('frontend') }}/assets/img/Menu.png" alt="logo" /></a>
                </div>
            </div>
        </div>
        <div class="search-area">
            <div class="container">
                <form action="#">
                    <div class="form-group">
                        <input type="search" placeholder="Search Here" autofocus />
                    </div>
                </form>
                <button type="button" class="close-searchbox">
                    <i class="ri-close-line"></i>
                </button>
            </div>
        </div>
    </div>
</header>

<style>
    .simplebar-wrapper {
        margin-top: 10px !important;
    }
</style>
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="{{ route('home') }}" class="logo logo-dark mt-4">
            <span class="logo-sm text-white">
                <h4>Pocket</h4>
            </span>
            <span class="logo-lg">
                <h4>Pocket</h4>
            </span>
        </a>
        <!-- Light Logo-->
        <a href="{{ route('home') }}" class="logo logo-light mt-4">
            <span class="logo-sm">
                {{-- <img src="assets/images/logo-sm.png" alt="" height="22"> --}}
                <h4 class="text-white">Pocket</h4>
            </span>
            <span class="logo-lg">
                {{-- <img src="assets/images/logo-light.png" alt="" height="17"> --}}
                <h4 class="text-white">Pocket</h4>
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="ri-account-circle-line"></i> <span data-key="t-dashboards">Users</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarDashboards">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('users.index') }}" class="nav-link" data-key="t-analytics">
                                    User List </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#menus" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="ri-pages-line"></i> <span data-key="t-dashboards">Menus</span>
                    </a>
                    <div class="collapse menu-dropdown" id="menus">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('menus.index') }}" class="nav-link" data-key="t-analytics">
                                    Menus </a>
                                <a href="{{ route('sub_menus.index') }}" class="nav-link" data-key="t-analytics">
                                    Sub Menus </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#homeslider" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="ri-pages-line"></i> <span data-key="t-dashboards">Home Slider</span>
                    </a>
                    <div class="collapse menu-dropdown" id="homeslider">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('slider.index') }}" class="nav-link" data-key="t-analytics">
                                    Slider List </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#BreadCrumbs" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="ri-pages-line"></i> <span data-key="t-dashboards">Page Breadcrumbs</span>
                    </a>
                    <div class="collapse menu-dropdown" id="BreadCrumbs">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('breadcrumbs.index') }}" class="nav-link" data-key="t-analytics">
                                    BreadCrumbs List </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#services" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="ri-pages-line"></i> <span data-key="t-dashboards">Services Page</span>
                    </a>
                    <div class="collapse menu-dropdown" id="services">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('tutorials.index') }}" class="nav-link" data-key="t-analytics">
                                    Tutorial List </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#icons" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="ri-pages-line"></i> <span data-key="t-dashboards">Services Icons</span>
                    </a>
                    <div class="collapse menu-dropdown" id="icons">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('service-icons.index') }}" class="nav-link" data-key="t-analytics">
                                    Service Icons List </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#Offers" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="ri-pages-line"></i> <span data-key="t-dashboards">Offers</span>
                    </a>
                    <div class="collapse menu-dropdown" id="Offers">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('offer.index') }}" class="nav-link" data-key="t-analytics">
                                    Offers List </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#websiteSettings" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="ri-pages-line"></i> <span data-key="t-dashboards">Website Settings</span>
                    </a>
                    <div class="collapse menu-dropdown" id="websiteSettings">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('website.content') }}" class="nav-link" data-key="t-analytics">
                                   Website Content </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('logo.index') }}" class="nav-link" data-key="t-analytics">
                                   Logo </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('brand-color.index') }}" class="nav-link" data-key="t-analytics">
                                   Brand Color </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('appsurl.index') }}" class="nav-link" data-key="t-analytics">
                                    Apps Url </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('socialicon.index') }}" class="nav-link" data-key="t-analytics">
                                   Social Icon </a>
                            </li>
                          
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#FAQ" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="ri-pages-line"></i> <span data-key="t-dashboards">FAQ</span>
                    </a>
                    <div class="collapse menu-dropdown" id="FAQ">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('faqs.index') }}" class="nav-link" data-key="t-analytics">
                                    FAQ List </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>

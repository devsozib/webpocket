<footer class="footer-wrap bg-rock">
    <div class="container">
        <div class="row" style="padding-top: 30px">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="footer-widget">
                    <a href="{{ url('/') }}" class="footer-logo">
                        <img style="width: 150px" class="logo-dark"
                        src="{{ asset('frontend') }}/assets/img/logo/{{ logo()->dark_logo }}" alt="logo" />
                    </a>
                    <p style="text-align: justify;" class="comp-desc">
                        "POCKET continually innovate solutions to simplify people's life which create adoption of cashless transactions. Explore our diverse range of services to enhance your daily experiences."
                    </p>
                    <div class="social-link">
                        <ul class="social-profile list-style style1">
                            @foreach (socialIcons() as $item)
                            <li>
                                <a target="_blank" href="{{ $item->url }}">
                                   {!! $item->icon !!}
                                </a>
                            </li>    
                            @endforeach      
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="footer-widget">                   
                    <h3 class="footer-widget-title">Useful Links</h3>
                    <ul class="footer-menu list-style">
                        <li>
                            <a href="{{ route('all.services') }}">
                                <i class="flaticon-next"></i>
                                Services
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('coming-soon') }}">
                                <i class="flaticon-next"></i>
                                Limit & Charges
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('news') }}">
                                <i class="flaticon-next"></i>
                                News
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/contact') }}">
                                <i class="flaticon-next"></i>
                                Contact Us
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="flaticon-next"></i>
                                Partner
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="footer-widget">
                    <h3 class="footer-widget-title">Company Info</h3>
                    <ul class="footer-menu list-style">
                        <li>
                            <a href="{{ url('/privacy-policy') }}">
                                <i class="flaticon-next"></i>
                                Privacy Policy
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('ItandSecurity') }}">
                                <i class="flaticon-next"></i>
                               It Security Policy
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('terms-conditions') }}">
                                <i class="flaticon-next"></i>
                                Terms and Conditions
                            </a>
                        </li>                        
                        <li>
                            <a href="{{ url('/about') }}">
                                <i class="flaticon-next"></i>
                                Who We Are
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
            {{-- <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="footer-widget">
                    <h3 class="footer-widget-title">Subscribe</h3>
                    <p style="text-align: justify;" class="newsletter-text">
                        If you have any questions, concerns, or requests regarding this Privacy Policy or our privacy practices, please contact us at- feedback@abgpocket.com
                    </p>
                    <form action="#" class="newsletter-form">
                        <input type="email" placeholder="Your Email" />
                        <button type="button">Subscribe</button>
                    </form>
                </div>
            </div> --}}
        </div>
    </div>
    <div class="copyright-text">
        <p>
            <i class="ri-copyright-line"></i>2023 Pocket. All Rights Reserved
        </p>
    </div>
</footer>

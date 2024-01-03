@extends('frontend.layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="breadcrumb-wrap bg-spring">
            <div class="container">
                <div class="row align-items-center">
                    {{-- <div class="col-lg-7 col-md-8 col-sm-8">
                        <div class="breadcrumb-title">
                            <h2>About Us</h2>
                            <ul class="breadcrumb-menu list-style">
                                <li>
                                    <a href="index.html">Home </a>
                                </li>
                                <li>About Us</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-4 col-sm-4 xs-none">
                        <div class="breadcrumb-img">
                            <img src="{{ asset('frontend') }}/assets/img/breadcrumb/breadcrumb-1.png" alt="Image">
                        </div>
                    </div> --}}
                    {{-- <div class="text-center ">
                        <strong class="border-bottom" style="font-size:20px">Career</strong> <br> <h1>Career at POCKET.</h1>
                        <p>POCKET aims to be the premier choice of employees in Bangladesh,<br> dedicated to cultivating and empowering talents from every corner of the nation. <br>Discover thrilling and expedited career prospects with us, as we stand among<br> the world's most rapidly advancing financial service companies.</p>
                    </div>
                       --}}
                    
                </div>
            </div>
        </div>
        <section class="about-wrap style1">
            <div class="container">
                <div class="row gx-5 align-items-center">       
                           
                    <div class="col-lg-12">
                        <div class="about-content" scrolls="" scrolls-anim="fade-right" scrolls-duration="1000">
                            {{-- <img src="{{ asset('frontend') }}/assets/img/about/about--3.png" alt="Image"
                                class="about--three" /> --}}                    
                                @if ( request()->path() == 'go-along-with-pocket-career-on-socila-media')
                                <ul class="content-feature-list style1 list-style">
                                    <li>
                                        <strong>Follow POCKET Career on Social Media</strong><br>
                                        <p style="text-align: justify">Explore POCKET's LinkedIn & Social media profiles to gain insights into our career openings, company culture, leadership team, and our commitment to knowledge development and corporate social responsibility initiatives. </p>
                                    </li>
                                    <li>                                        
                                        <p style="text-align: justify">POCKET aims to be the premier choice of employees in Bangladesh, dedicated to cultivating and empowering talents from every corner of the nation. Discover thrilling and expedited career prospects with us, as we stand among the world's most rapidly advancing financial service companies.</p>
                                    </li>                            
                                </ul> 
                                @else
                                <ul class="content-feature-list style1 list-style">
                                    <li>
                                        <span><i class="flaticon-tick"></i></span><strong>Simplify life</strong><br>
                                        <p style="text-align: justify">Our goal is to ensure that everything we create is straightforward and user-friendly. We must always keep in mind that our aim is to simplify our customers' lives.</p>
                                    </li>
                                    <li>
                                        <span><i class="flaticon-tick"></i></span><strong>Uphold Commitments</strong><br>
                                        <p style="text-align: justify">Every task we undertake should function flawlessly. If it doesn't, we are dedicated to rectifying it. Our focus is on delivering, not making extravagant promises, and our emphasis is on deeds, not mere words.</p>
                                    </li>
                                    <li>
                                        <span><i class="flaticon-tick"></i></span><strong>Spark Inspiration</strong><br>
                                        <p style="text-align: justify">We are innovators. We infuse our work with energy and imagination. Everything we create should exude a fresh and contemporary appeal."</p>
                                    </li>
                                    <li>
                                        <span><i class="flaticon-tick"></i></span><strong>Integrity</strong><br>
                                        <p style="text-align: justify">The values that POCKET abides by are - integrity in business, empowerment, innovation, respectful dealings and customer-centricity. These five pillars are what POCKET stands on and the organization does everything possible to not deviate from them.
     
                                            We, as an organization seamlessly move upward and onward, on the strength of our embedded values.</p>
                                            <p style="text-align: justify">They are so closely inscribed and celebrated here that these values inspire employees to be better as human beings, better at work and better at life. When they contribute to any project, they have the integrity of business in mind, working with no hidden agenda, complying with the laws of the land and never compromising with the code of conduct.
                                                POCKET, being a hub of innovation, always finds ways to innovate and identifies this as a value. The people in this organization work to drive changes as frequently as possible, for the best suitable solutions, all the while encouraging new ideas. Another value is our respectful dealings, which make us listen to all and encourage open communication to the fullest. While being open to communication, we prefer to be courteous, fair and consistent towards everyone and their opinions. From the junior-most colleague to the senior-most team lead, everyone respects each other’s ideas and suggestions.
                                                Through POCKET’s products and services, we always cater to what our customers want, keeping customer-centricity in focus. We serve customers with utmost priority, seeking feedback proactively and delivering solutions according to our customers’ requirements. Last but not least, our value of empowerment is glorified and carried on by setting clear expectations for all, so that everyone knows what is required of them and what they have to do to achieve those goals. We are empowered in this organization through responsibilities and authority, and we constantly gain recognition for the work we do. And with all our hard work and persistence, we do our best to give our customers more power.
                                                The four values that POCKET stands on make the organization grow in the best possible ways and we, the people in this organization, are constantly reminded of these values.</p>
                                    </li>
                                </ul>
                                @endif
                          
                            {{-- <a href="about.html" class="btn style1">More About us</a> --}}
                        </div>
                    </div>
                  
                </div>
            </div>
        </section>

    


    </div>
@endsection

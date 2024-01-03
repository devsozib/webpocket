@extends('frontend.layouts.main')
@section('content')
    <style>
        .offer-card[data-v-0291216d] {
            border-radius: 20px;
            padding: 5px;
            background: linear-gradient(0deg, #FFFFFF 0%, #E9D298 100%);
            border: 1px solid #fff;
            box-shadow: 0 4px 17px #fffaeb 3px 4px 8px;
            -webkit-backdrop-filter: blur(30px);
            backdrop-filter: blur(30px);
        }

        .offer-card-footer[data-v-0291216d] {
            padding: 15px 10px 10px;
            grid-gap: 10px;
            gap: 10px;
        }

        * {
            margin: 0;
            padding: 0;
            text-indent: 0;
        }

        .s1 {
            color: black;
            font-family: 'Open Sans', sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: underline;
            font-size: 12pt;
        }

        .p,
        p {
            color: black;
            font-family: Georgia, serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 12pt;
            margin: 0pt;
        }

        h1 {
            color: black;
            font-family: 'Open Sans', sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 12pt;
        }

        a {
            color: black;
            font-family: 'Open Sans', sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 12pt;
        }

        li {
            display: block;
        }

        #l1 {
            padding-left: 0pt;
            counter-reset: c1 1;
        }

        #l1>li>*:first-child:before {
            counter-increment: c1;
            content: counter(c1, decimal)". ";
            color: black;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
        }

        #l1>li:first-child>*:first-child:before {
            counter-increment: c1 0;
        }

        #l2 {
            padding-left: 0pt;
            counter-reset: c2 1;
        }

        #l2>li>*:first-child:before {
            counter-increment: c2;
            content: counter(c1, decimal)"."counter(c2, decimal)". ";
            color: black;
            font-family: 'Open Sans', sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 12pt;
        }

        #l2>li:first-child>*:first-child:before {
            counter-increment: c2 0;
        }

        #l3 {
            padding-left: 0pt;
            counter-reset: c2 1;
        }

        #l3>li>*:first-child:before {
            counter-increment: c2;
            content: counter(c1, decimal)"."counter(c2, decimal)". ";
            color: black;
            font-family: 'Open Sans', sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 12pt;
        }

        #l3>li:first-child>*:first-child:before {
            counter-increment: c2 0;
        }

        #l4 {
            padding-left: 0pt;
            counter-reset: c2 1;
        }

        #l4>li>*:first-child:before {
            counter-increment: c2;
            content: counter(c1, decimal)"."counter(c2, decimal)". ";
            color: black;
            font-family: 'Open Sans', sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 12pt;
        }

        #l4>li:first-child>*:first-child:before {
            counter-increment: c2 0;
        }

        #l5 {
            padding-left: 0pt;
            counter-reset: c2 1;
        }

        #l5>li>*:first-child:before {
            counter-increment: c2;
            content: counter(c1, decimal)"."counter(c2, decimal)". ";
            color: black;
            font-family: 'Open Sans', sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 12pt;
        }

        #l5>li:first-child>*:first-child:before {
            counter-increment: c2 0;
        }

        #l6 {
            padding-left: 0pt;
            counter-reset: c2 1;
        }

        #l6>li>*:first-child:before {
            counter-increment: c2;
            content: counter(c1, decimal)"."counter(c2, decimal)". ";
            color: black;
            font-family: 'Open Sans', sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 12pt;
        }

        #l6>li:first-child>*:first-child:before {
            counter-increment: c2 0;
        }
        p{
            text-align: justify!important;
        }
    </style>
    <div class="content-wrapper">
        <div class="breadcrumb-wrap bg-spring">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-8 col-sm-8">
                        <div class="breadcrumb-title">
                            <h2>Privacy Policy</h2>
                            <ul class="breadcrumb-menu list-style">
                                <li>
                                    <a href="{{ url('/') }}">Home </a>
                                </li>
                                <li>Privacy Policy</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-4 col-sm-4 xs-none">
                        <div class="breadcrumb-img">
                            {{-- <img src="{{ asset('frontend') }}/assets/img/breadcrumb/breadcrumb-1.png" alt="Image"> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <div class="container">
        <div class="row">
            <div data-v-b6d51246="" class="textCard container mb-3">
                <h1 class="s1" style="text-align: center;">PRIVACY
                    POLICY OF POCKET</h1>
                <p style="text-indent: 0pt;text-align: left;">
                    <br />
                </p>
                <span class="p">
                    Pocket
                    is the Digital Wallet by ABG Technologies Limited (ABGTL) It is a cutting-edge financial solution
                    designed to simplify and enhance your payment experience. With its seamless integration across various
                    platforms and devices, Pocket enables individuals and businesses to effortlessly send, receive, and
                    manage payments with utmost convenience and security. At Pocket, we are committed to protecting the
                    privacy and security of your personal information. This Privacy Policy explains how we collect, use,
                    disclose, and protect the information you provide to us when using our payment services. By using our
                    services, you agree to the terms of this Privacy Policy. Please read the policy carefully to understand
                    our practices regarding your personal information.</span>
                <ol id="l1">
                    <li data-list-text="1.">
                        <span class="s1"
                            style="padding-top: 8pt;text-indent: -12pt;text-align: left;">
                            INFORMATION COLLECTED BY POCKET:</span>
                        <p style="text-indent: 0pt;text-align: left;">
                            <br />
                        </p>
                        <ol id="l2">
                            <li data-list-text="1.1.">
                                <h1
                                    style="padding:1px 20px 8px 39px;text-indent: -31pt;line-height: 156%;text-align: justify;">
                                    Personal Information: <span class="p">We may collect your personal information such
                                        as, without limitation your name, address, email address, telephone number, national
                                        identification number (NID), date of birth, and other similar information necessary
                                        for the provision of our services.</span>
                                </h1>
                            </li>
                            <li data-list-text="1.2.">
                                <h1
                                    style="padding:1px 20px 8px 39px;text-indent: -31pt;line-height: 156%;text-align: justify;">
                                    Financial Information: <span class="p">To facilitate payments, we may collect
                                        financial information,  details of credit/debit cards, bank accounts such as account title, account number, sort
                                        code, bank transaction history, Tax certificates or any other income documents as
                                        necessary by us.</span>
                                </h1>
                                {{-- <span class="p"
                                    style="padding-top: 8pt;padding-left: 68pt;text-indent: 0pt;line-height: 152%;text-align: justify; font-size:14px">
                                   </span> --}}
                            </li>
                            <li data-list-text="1.3.">
                                <h1
                                style="padding:1px 20px 8px 39px;text-indent: -31pt;line-height: 156%;text-align: justify;">
                                    Transaction Information: <span class="p">We may collect information about any
                                        transactions that you carry out through our website or application, including
                                        payment amounts, recipient details, and transaction dates and times.</span>
                                </h1>
                            </li>
                            <li data-list-text="1.4.">
                                <h1
                                style="padding:1px 20px 8px 39px;text-indent: -31pt;line-height: 156%;text-align: justify;">Log
                                    Data: <span class="p">We automatically collect certain information when you access
                                        our website or use our services, including IP addresses, browser type, pages visited, and other usage
                                        statistics.</span>
                                </h1>                                
                            </li>
                            <li data-list-text="1.5.">
                                <h1
                                    style="padding:1px 20px 8px 39px;text-indent: -31pt;line-height: 156%;text-align: justify;">
                                    Cookies and Similar Technologies: <span class="p">We use cookies and similar
                                        technologies to enhance your experience and collect information about your browsing
                                        activities on our website. You can manage your preferences regarding cookies through
                                        your browser settings.</span>
                                </h1>
                            </li>
                            <li data-list-text="1.6.">
                                <h1
                                    style="padding:1px 20px 8px 39px;text-indent: -31pt;line-height: 156%;text-align: justify;">
                                    Surveys and Promotions: <span class="p">We may collect information about Surveys
                                        that you complete through the website or app based on our request. We may also collect information about
                                        you if you participate in any promotion sponsored by us.</span>
                                </h1>                                
                            </li>
                            <li data-list-text="1.7.">
                                <h1
                                style="padding:1px 20px 8px 39px;text-indent: -31pt;line-height: 156%;text-align: justify;">
                                    Communication Information: <span class="p">We may record and collect information
                                        about Calls that we make to you, or you make to us or emails exchanges.</span>
                                </h1>
                                <p style="text-indent: 0pt;text-align: left;">
                                    <br />
                                </p>
                            </li>
                        </ol>
                    </li>
                    <li data-list-text="2.">
                        <span class="s1"
                        style="padding-top: 8pt;text-indent: -12pt;text-align: left;">SHARING AND USE
                            OF
                            YOUR PERSONAL INFORMATION <span class="p">:</span>
                        </span>
                        <br />
                        <span class="p"
                            style="padding-top: 4pt;padding-left: 37pt;text-indent: 0pt;text-align: justify;">We may share
                            your personal information to –</span>
                        <ol id="l3">
                            <li data-list-text="2.1.">
                                <h1
                                style="padding:1px 20px 8px 39px;text-indent: -31pt;line-height: 156%;text-align: justify;">
                                    Independent Merchants: <span class="p">We may share your information with
                                        independent merchants that Pocket might engage to provide certain services and
                                        products related to our website/app. However, access to any of your information by
                                        these merchants is limited to the information reasonably necessary for the merchants
                                        to smoothly perform their limited services for us.</span>
                                </h1>
                            </li>
                            <li data-list-text="2.2.">
                                <h1
                                style="padding:1px 20px 8px 39px;text-indent: -31pt;line-height: 156%;text-align: justify;">
                                    Business Partners: <span class="p">We may share your information with our trusted
                                        business partners to offer you joint products or services.</span>
                                </h1>
                            </li>
                            <li data-list-text="2.3.">
                                <h1
                                style="padding:1px 20px 8px 39px;text-indent: -31pt;line-height: 156%;text-align: justify;">
                                    Legal requirements: <span class="p">We may disclose your information to comply with
                                        legal obligations,</span>
                                </h1>
                                <span class="p"
                                    style="padding-top: 8pt;padding-left: 61pt;text-indent: 0pt;line-height: 153%;text-align: justify;">
                                    respond to legal requests by Government authorities and enforcement agencies to protect
                                    our rights.</span>
                            </li>
                            <li data-list-text="2.4.">
                                <h1
                                style="padding:1px 20px 8px 39px;text-indent: -31pt;line-height: 156%;text-align: justify;">Fraud
                                    Prevention: <span class="p">We may use your information to detect and prevent
                                        fraudulent activities.</span>
                                </h1>
                            </li>
                            <li data-list-text="2.5.">
                                <h1
                                style="padding:1px 20px 8px 39px;text-indent: -31pt;line-height: 156%;text-align: justify;">
                                    Providing Payment Services: <span class="p">Facilitating payment transactions,
                                        processing payments, and verifying your identity.</span>
                                </h1>
                            </li>
                            <li data-list-text="2.6.">
                                <h1
                                style="padding:1px 20px 8px 39px;text-indent: -31pt;line-height: 156%;text-align: justify;">
                                    Customer Support: <span class="p">We may use your information to respond to your
                                        inquiries, resolving issues, and aiding.</span>
                                </h1>                                
                            </li>
                            <li data-list-text="2.7.">
                                <h1
                                style="padding:1px 20px 8px 39px;text-indent: -31pt;line-height: 156%;text-align: justify;">
                                    Service Improvement: <span class="p">We may use your information to analyse usage
                                        patterns, conduct research, and enhance our services.</span>
                                </h1>
                            </li>
                            <li data-list-text="2.8.">
                                <h1
                                style="padding:1px 20px 8px 39px;text-indent: -31pt;line-height: 156%;text-align: justify;">To
                                    contact you <span class="p" style="line-height: 18pt">: To contact you by email,
                                        telephone calls, SMS, or other equivalent forms of electronic communication, such as a mobile
                                        application&#39;s push notifications regarding updates or informative communications related to the functionalities,
                                        products or contracted Services, including the security updates, when necessary or
                                        reasonable for their implementation.</span>
                                </h1>
                            </li>
                            <li data-list-text="2.9.">
                                <h1
                                style="padding:1px 20px 8px 39px;text-indent: -31pt;line-height: 156%;text-align: justify;">
                                    Business Transfers: <span class="p">In the event of a merger, acquisition, or sale
                                        of all or a portion of our business, personal information may be transferred as part
                                        of the transaction. We will notify you or notify on our website of any such change
                                        in ownership or control.</span>
                                </h1>
                                <p style="text-indent: 0pt;text-align: left;">
                                    <br />
                                </p>
                            </li>
                        </ol>
                    </li>
                    <li data-list-text="3.">
                        <span class="s1"
                        style="padding-top: 8pt;text-indent: -12pt;text-align: left;">DATA SECURITY
                            OF
                            POCKET:</span>
                        <ol id="l4">
                            <li data-list-text="3.1.">
                                <h1
                                style="padding:1px 20px 8px 39px;text-indent: -31pt;line-height: 156%;text-align: justify;">
                                    Business Transfers: <span class="p">We have implemented appropriate technical and
                                        organizational measures to protect your
                                        personal information from unauthorized access, disclosure, alteration, and
                                        destruction. At
                                        any point of time, when you change or access your account information, we offer the
                                        use
                                        of a secure server. Once your information is in our possession, we adhere to strict
                                        security guidelines, protecting the information against unauthorized access. To prevent unauthorized access or disclosure, we have put in place suitable
                                        physical,
                                        electronic and managerial procedures to safeguard and secure the information we
                                        collect
                                        online. We
                                        restrict access to personal information to our employees, contractors and agents who
                                        need to know that information to process it for us and those who do have access are
                                        specifically required to observe our confidentiality obligations, including third
                                        parties. We
                                        are not responsible for third party circumvention of any privacy settings or
                                        security
                                        measures on your Pocket app. You can reduce these risks by using security practices
                                        such
                                        as choosing a strong password, using different passwords for different services, and
                                        using up-to-date antivirus software. No
                                        data transmission over the internet or electronic storage method is completely
                                        secure.
                                        While we strive to protect your information, we cannot guarantee its absolute
                                        security.</span>
                                </h1>
                            </li>                          
                        </ol>
                    </li>
                    <li data-list-text="4.">
                        <span class="s1"
                        style="padding-top: 8pt;text-indent: -12pt;text-align: left;">RETENTION OF
                            DATA:</span>
                        <ol id="l5">
                            <li data-list-text="4.1.">
                                <h1
                                style="padding:1px 20px 8px 39px;text-indent: -31pt;line-height: 156%;text-align: justify;">
                                    <span class="p">Pocket is required, under applicable laws, to retain certain
                                        records for a period as
                                        suggested by regulatory authorities even after closure of your Pocket account, which
                                        will include your personal data such as your name, contact details, customer number and
                                        transaction history, (&quot;Retained Data&quot;). Other than Retained Data, we will delete and destroy all personal
                                        information that we hold about you when you or we terminate your Pocket account.Please note that that we do not store your online banking login
                                        PIN, password or your debit/credit card information.We will never ask you to disclose your personal or security details by e-mail. If you
                                        receive any e-mail purportedly from us requesting your personal or security details, please do not respond to it. Please forward any such email to <u>&nbsp;</u> and
                                        thereafter delete the e-mail immediately.
                                    </span>
                                </h1>
                            </li>                           
                        </ol>
                    </li>
                    <li data-list-text="5.">
                        <span class="s1"
                        style="padding-top: 8pt;text-indent: -12pt;text-align: left;">SERVER
                            LOGS:</span>
                        <h1
                            style="padding-top: 8pt;padding-left: 25pt;text-indent: 0pt;line-height: 152%;text-align: justify;">
                            <span class="p"> To ensure easy and comfortable surfing on our website/app, each time you
                                visit our website/app,
                                the computer collects certain statistical information. These statistics are only used to
                                provide
                                us information in relation to the type of user using our website by maintaining history of
                                page
                                requests and at no point they identify the personal details of the user. We may make use of
                                this
                                data to understand as to how our website is being used.
                            </span>
                        </h1>
                        <p style="text-indent: 0pt;text-align: left;">
                            <br />
                        </p>
                    </li>
                    <li data-list-text="6.">
                        <span class="s1"
                        style="padding-top: 8pt;text-indent: -12pt;text-align: left;">LOCATION
                            DATA:
                        </span>
                        <h1
                            style="padding-top: 8pt;padding-left: 25pt;text-indent: 0pt;line-height: 152%;text-align: justify;">
                            <span class="p"> Your information regarding your Live Location and Location Data is
                                collected during operational
                                hours to track your live location and movement and to facilitate business requirement,
                                services,
                                and operation. We also collect information from your Device&#39;s SIM Card such as phone
                                number,
                                pictures and other information from your Device&#39;s camera and photo library. Location
                                Data
                                is collected from Your device only after your conscious consent with prominent disclosure in the
                                app.
                            </span>
                        </h1>
                        <p style="text-indent: 0pt;text-align: left;">
                            <br />
                        </p>                    
                    </li>
                    <li data-list-text="7.">
                        <span class="s1"
                        style="padding-top: 8pt;text-indent: -12pt;text-align: left;">CONSENT:</span>
                        <h1
                            style="padding-top: 8pt;padding-left: 25pt;text-indent: 0pt;line-height: 152%;text-align: justify;">
                            <span class="p"> By using our service, you consent to the collection and use of the
                                information by ABGTL that you
                                disclose in the process of using Pocket in accordance with this Privacy Policy, including
                                but
                                not limited to your consent, for sharing your information as per this Privacy Policy.
                            </span>
                        </h1>
                        <p style="text-indent: 0pt;text-align: left;">
                            <br />
                        </p>
                    </li>
                    <li data-list-text="8.">
                        <span class="s1"
                        style="padding-top: 8pt;text-indent: -12pt;text-align: left;">CHILDREN&#39;S
                            PRIVACY:</span>

                        <h1
                            style="padding-top: 8pt;padding-left: 25pt;text-indent: 0pt;line-height: 152%;text-align: justify;">
                            <span class="p"> Our services are not intended for individuals under the age of 18. We do
                                not knowingly collect
                                or solicit personal information from minors. If we become aware of any personal information
                                collected from a minor without parental consent, we will take steps to delete that
                                information.
                            </span>
                        </h1>
                        <p style="text-indent: 0pt;text-align: left;">
                            <br />
                        </p>
                    </li>
                    <li data-list-text="9.">
                        <span class="s1"
                        style="padding-top: 8pt;text-indent: -12pt;text-align: left;">THIRD-PARTY
                            LINKS:</span>
                        <h1
                            style="padding-top: 8pt;padding-left: 25pt;text-indent: 0pt;line-height: 152%;text-align: justify;">
                            <span class="p"> Our services may contain Advertisements or links to third-party websites
                                or services. We are not
                                responsible for the privacy practices or content of these sites. We encourage you to review
                                their privacy policies before providing any personal information to them.
                            </span>
                        </h1>
                        <p style="text-indent: 0pt;text-align: left;">
                            <br />
                        </p>
                    </li>
                    <li data-list-text="10.">
                        <span class="s1"
                        style="padding-top: 8pt;text-indent: -12pt;text-align: left;">UPDATES TO
                            PRIVACY POLICY:</span>
                        <h1
                            style="padding-top: 8pt;padding-left: 25pt;text-indent: 0pt;line-height: 152%;text-align: justify;">
                            <span class="p"> We may update this Privacy Policy from time to time to reflect changes in
                                our practices or legal
                                obligations. We will notify you of any material changes by posting the updated Privacy
                                Policy on
                                our website or mobile applications. We encourage you to review the Privacy Policy
                                periodically.
                                The updates shall be in effect from the time of the publication.
                            </span>
                        </h1>
                        <p style="text-indent: 0pt;text-align: left;">
                            <br />
                        </p>
                    </li>
                    <li data-list-text="11.">
                        <span class="s1"
                        style="padding-top: 8pt;text-indent: -12pt;text-align: left;">ENFORCEMENT:
                        </span>
                        <h1
                            style="padding-top: 8pt;padding-left: 25pt;text-indent: 0pt;line-height: 152%;text-align: justify;">
                            <span class="p"> We may use the information collected, in connection with your use of
                                Pocket account, including
                                your personal information in order to investigate, enforce, and apply our Terms of Use and
                                Privacy Policy.
                            </span>
                        </h1>
                    </li>
                    <li data-list-text="12.">
                        <span class="s1"
                        style="padding-top: 8pt;text-indent: -12pt;text-align: left;">YOUR RIGHTS:
                        </span>
                        <p style="text-indent: 0pt;text-align: left;">
                            <br />
                        </p>
                        <br />
                        <span class="p" style="text-indent: 0pt;text-align: left;">You have
                            certain rights regarding
                            your personal information, including-</span>
                        <ol id="l6">
                            <li data-list-text="12.1.">
                                <h1
                                style="padding:1px 20px 8px 39px;text-indent: -31pt;line-height: 156%;text-align: justify;">
                                    <span class="p"> The
                                        right to access the personal information we hold about you.
                                    </span>
                                </h1>
                            </li>
                            <li data-list-text="12.2.">
                                <h1
                                style="padding:1px 20px 8px 39px;text-indent: -31pt;line-height: 156%;text-align: justify;">
                                    <span class="p"> You
                                        can request the correction or updating of your inaccurate or incomplete personal
                                        information.
                                    </span>
                                </h1>
                            </li>

                            <li data-list-text="12.3.">
                                <h1
                                style="padding:1px 20px 8px 39px;text-indent: -31pt;line-height: 156%;text-align: justify;">
                                    <span class="p"> You
                                        can request the deletion of your personal information in certain circumstance.
                                    </span>
                                </h1>
                            </li>
                            <li data-list-text="12.4.">
                                <h1
                                style="padding:1px 20px 8px 39px;text-indent: -31pt;line-height: 156%;text-align: justify;">
                                    <span class="p"> You
                                        can request the restriction of processing your personal information under certain
                                        condition.
                                    </span>
                                </h1>
                            </li>
                            <li data-list-text="12.5.">
                                <h1
                                style="padding:1px 20px 8px 39px;text-indent: -31pt;line-height: 156%;text-align: justify;">
                                    <span class="p">You
                                        can object to the processing of your personal information for direct marketing
                                        purposes.
                                    </span>
                                </h1>
                            </li>
                            <li data-list-text="12.6.">
                                <h1
                                style="padding:1px 20px 8px 39px;text-indent: -31pt;line-height: 156%;text-align: justify;">
                                    <span class="p">You
                                        can request the transfer of your personal information.
                                    </span>
                                </h1>
                            </li>
                            <li data-list-text="12.7.">
                                <h1
                                style="padding:1px 20px 8px 39px;text-indent: -31pt;line-height: 156%;text-align: justify;">
                                    <span class="p"> You
                                        may opt-out of receiving promotional communications from us by following the
                                        instructions in the communication or contacting us directly. Please note that even
                                        if
                                        you opt-out of promotional communications, we may still send you non-promotional
                                        messages relating to your account.
                                    </span>
                                </h1>
                                <p style="text-indent: 0pt;text-align: left;">
                                    <br />
                                </p>
                            </li>
                        </ol>
                    </li>
                    <li data-list-text="13.">
                        <span class="s1"
                        style="padding-top: 8pt;text-indent: -12pt;text-align: left;">DISPUTE
                            RESOLUTION <span class="p">:</span>
                        </span>
                        <h1
                        style="padding:1px 20px 8px 39px;text-indent: -31pt;line-height: 156%;text-align: justify;">
                            <span class="p"> If you believe
                                that Pocket has not adhered to this Privacy Policy, please email to us at email:
                            </span>
                        </h1>

                        <h1
                                style="padding:1px 20px 8px 39px;text-indent: -31pt;line-height: 156%;text-align: justify;">
                            <span class="p"> <a href="mailto:support@abgpocket.com">support@abgpocket.comd</a>
                            </span>
                        </h1>
                        <h1
                        style="padding:1px 20px 8px 39px;text-indent: -31pt;line-height: 156%;text-align: justify;">
                            <span class="p"> (In your email, please describe in as much detail as possible ways in
                                which you believe the
                                Privacy Policy has not been complied with. We will investigate your complaint promptly)
                            </span>
                        </h1>
                        <p style="text-indent: 0pt;text-align: left;">
                            <br />
                        </p>
                    </li>
                    <li data-list-text="14.">
                        <span class="s1"
                        style="padding-top: 8pt;text-indent: -12pt;text-align: left;">CONTACT
                            US:</span>
                    </li>
                </ol>
                <p style="text-indent: 0pt;text-align: left;">
                    <br />
                </p>
                <h1 style="padding-top: 5pt;text-indent: 0pt;line-height: 108%;text-align: justify;">
                    <span class="p"> <a href="mailto:feedback@abgpocket.com"
                            style=" color: black; font-family:Georgia, serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 12pt;"
                            target="_blank">If you have any questions, concerns, or requests regarding this Privacy Policy
                            or
                            our privacy practices, please contact us at- </a>
                        <a href="mailto:feedback@abgpocket.com" target="_blank">feedback@abgpocket.com</a>
                    </span>
                </h1>
                <h1 style="padding-top: 9pt;text-indent: 0pt;line-height: 111%;text-align: justify;">
                    <span class="p"> We
                        will make reasonable efforts to address your concerns and respond to your inquiries in a timely
                        manner.
                        Please note that this Privacy Policy applies only to the information collected by Pocket and does
                        not
                        cover the practices of third-party websites or services that we do not control.
                    </span>
                </h1>

                <p style="text-indent: 0pt;text-align: left;">
                    <br />
                </p>

            </div>
        </div>

    </div>
@endsection

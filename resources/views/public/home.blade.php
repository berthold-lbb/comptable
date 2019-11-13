@extends('public.layouts.app')

@section('headSection')
<!-- Custom  css -->
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/style.css') }}" />

@show

@section('main-content')


<main role="main">

    <section class="text-center container-fluid akountingSectionOne" data-parallax="scroll" data-image-src="assets/img/177.jpg">
        <div class="container h-100 sectionOneTextBlock">
            <div class="row h-100 d-flex flex-column justify-content-center text-md-left">
                <h1 class="font-body hero-h1">Free <br> Accounting <br> Software</h1>
                <a href="/start" class="btn button-large button-white btn-light capitalize text-center buttonPerso" style="border-radius: 23px;">Get Started</a>
            </div>
        </div>
        <div class="scrollDownMouse"><a href="#" data-scrollto="#content" data-offset="100" class="dark one-page-arrow"><i class="fa fa-angle-down"></i></a></div>
    </section>

    <section class="container-fluid akauntingServicesBlock">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-12 descOnlineBusiness">
                    <div class="row BlockDesc">
                        <div class="col-12">
                            <h2>ONLINE ACCOUNTING SOFTWARE FOR BUSINESSES</h2>
                        </div>
                        <div class="col-12">
                            <p>From invoicing to expense tracking to accounting, Akaunting has all the tools you need to manage your money online, for free.</p>
                        </div>
                    </div></div>
                <div class="col-md-7 col-12 imageBlockAnimated" style="position: relative; margin-bottom: -60px; height: 426px;">
                    <img src="assets/img/accounting-online.png" style="position: absolute; top: 0; left: 0;" data-animate="fadeInUp" data-delay="100" alt="accounting online" class="fadeInUp animated">
                    <img src="assets/img/accounting-iphone.png" style="position: absolute; top: 0; left: 0;" data-animate="fadeInUp" data-delay="400" alt="accounting iphone" class="fadeInUp animated">
                </div>
            </div>
        </div>
        <div class="noBotToMargin">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-12">
                        <i class="i-plain color i-large fa fa-heart-o inline-block" style="margin-bottom: 15px;"></i>
                        <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                            <span class="before-heading">No strings attached.</span>
                            <h4>Free</h4>
                        </div>
                        <p>That's right, completely free. There is no limited or trial version, only full. No hidden charges or setup fees. No counter. Free means free.</p>
                    </div>
                    <div class="col-md-4 col-12">
                        <i class="i-plain color i-large fa fa-desktop inline-block" style="margin-bottom: 15px;"></i>
                        <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                            <span class="before-heading">Access from any device.</span>
                            <h4>Online</h4>
                        </div>
                        <p>See your financials online anytime, anywhere on your computer, tablet or phone. Run your business from anywhere and know your cash position.</p>
                    </div>
                    <div class="col-md-4 col-12">
                        <i class="i-plain color i-large fa fa-eye inline-block" style="margin-bottom: 15px;"></i>
                        <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                            <span class="before-heading">Under your control.</span>
                            <h4>Open Source</h4>
                        </div>
                        <p>As we talk about your financials, you must be sure that data is in safe and software doesn't abuse them. Open Source software provides you full privacy.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid akauntingSectionTree pb-5">
        <div class="container clearfix">

            <div class="row akauntingInsideTreeS">

                <div class="col-12 heading-block center">
                    <h2>Feature Rich</h2>
                    <span class="divcenter">Everything you need to manage your finances. Keep track of all of your payments, invoices, expenses, etc. in one place with zero fees.</span>
                </div>

                <div class="col-md-4 col-sm-6 bottommargin">

                    <div class="feature-box fbox-right topmargin fadeIn animated" data-animate="fadeIn">
                        <div class="fbox-icon">
                            <i class="icon-line-shuffle"></i>
                        </div>
                        <h3>Cash Flow</h3>
                        <p>Stay on top of your Cashflow and make smarter decisions about your business.</p>
                    </div>

                    <div class="feature-box fbox-right topmargin fadeIn animated" data-animate="fadeIn" data-delay="200">
                        <div class="fbox-icon">
                            <i class="icon-line-paper"></i>
                        </div>
                        <h3>Easy Invoicing</h3>
                        <p>Amaze your clients with professional looking invoices and get paid faster.</p>
                    </div>

                    <div class="feature-box fbox-right topmargin fadeIn animated" data-animate="fadeIn" data-delay="400">
                        <div class="fbox-icon">
                            <i class="icon-cart"></i>
                        </div>
                        <h3>Expense Tracking</h3>
                        <p>Keep track of your mounting bills &amp; expenses and the money flowing out.</p>
                    </div>

                </div>

                <div class="col-md-4 hidden-sm bottommargin center">
                    <img src="./assets/img/pages/accounting-mobile.png" alt="accounting mobile">
                </div>

                <div class="col-md-4 col-sm-6 rightBlock bottommargin">

                    <div class="feature-box topmargin fadeIn animated" data-animate="fadeIn" data-delay="600">
                        <div class="fbox-icon">
                            <i class="icon-chart"></i>
                        </div>
                        <h3>Powerful Reporting</h3>
                        <p>See the financial health of your business, in the form of all encompassing reports.</p>
                    </div>

                    <div class="feature-box topmargin fadeIn animated" data-animate="fadeIn" data-delay="800">
                        <div class="fbox-icon">
                            <i class="icon-line-folder"></i>
                        </div>
                        <h3>Transaction Categories</h3>
                        <p>Create categories for incomes, expenses and items and see the flow at a glance.</p>
                    </div>

                    <div class="feature-box customBlockMargin topmargin fadeIn animated" data-animate="fadeIn" data-delay="1000">
                        <div class="fbox-icon">
                            <i class="icon-line-head"></i>
                        </div>
                        <h3>Client Portal</h3>
                        <p>Share the transactions and invoices with your clients and accept bulk payments.</p>
                    </div>

                </div>

            </div>

        </div>
    </section>

    <section class="container-fluid akauntingSectionFour">
        <div class="row">
            <a href="/features" class="btn col-12 button-full center tright">
                <div class="container clearfix">
                    <strong>See More</strong> built-in features <i class="icon-caret-right" style="top:4px;"></i>
                </div>
            </a>
        </div>
        <div class="row clearfix secondBlockCommunity">
            <div class="col-md-3 col-sm-6 dark center" style="background-color: rgb(81, 88, 117); height: 326px;">
                <div>
                    <a href="/download"><i class="i-plain i-xlarge divcenter icon-download"></i></a>
                    <div class="counter counter-lined"><span data-from="1000" data-to="100000" data-refresh-interval="100" data-speed="2000">100000</span></div>
                    <h5>Download Users</h5>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 dark center" style="background-color: rgb(87, 111, 158); height: 326px;">
                <div>
                    <a href="/cloud"><i class="i-plain i-xlarge divcenter icon-cloud"></i></a>
                    <div class="counter counter-lined"><span data-from="1000" data-to="30000" data-refresh-interval="100" data-speed="2000">30000</span></div>
                    <h5>Cloud Users</h5>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 dark center" style="background-color: rgb(102, 151, 185); height: 326px;">
                <div>
                    <a href="/forum"><i class="i-plain i-xlarge divcenter icon-user"></i></a>
                    <div class="counter counter-lined"><span data-from="500" data-to="5000" data-refresh-interval="100" data-speed="2000">5000</span></div>
                    <h5>Community Contributors</h5>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 dark center" style="background-color: rgb(136, 195, 216); height: 326px;">
                <div>
                    <a href="https://github.com/akaunting/akaunting" target="_blank"><i class="i-plain i-xlarge divcenter icon-star"></i></a>
                    <div class="counter counter-lined"><span data-from="100" data-to="2000" data-refresh-interval="50" data-speed="2000">2000</span></div>
                    <h5>GitHub Stars</h5>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid mt-3 akauntingSectionFive">
        <div class="container topmargin-sm clearfix">
            <div class="row topmargin-lg">
                <div class=" col-12 text-center">
                    <h2>Accounting in 38 languages</h2>
                </div>
                <div class="col-12 content-center home-languages text-center">
                    <img src="./assets/img/flags/gb.png" class="lang-flag" title="English" alt="english accounting software">
                    <img src="./assets/img/flags/al.png" class="lang-flag" title="Albanian" alt="albanian accounting software">
                    <img src="./assets/img/flags/sa.png" class="lang-flag" title="Arabic" alt="arabic accounting software">
                    <img src="./assets/img/flags/bg.png" class="lang-flag" title="Bulgarian" alt="bulgarian accounting software">
                    <img src="./assets/img/flags/br.png" class="lang-flag" title="Brazilian" alt="brazilian accounting software">
                    <img src="./assets/img/flags/cn.png" class="lang-flag" title="Chinese Simplified" alt="chinese simplified accounting software">
                    <img src="./assets/img/flags/tw.png" class="lang-flag" title="Chinese Traditional" alt="chinese traditional accounting software">
                    <img src="./assets/img/flags/hr.png" class="lang-flag" title="Croatian" alt="croatian accounting software">
                    <img src="./assets/img/flags/cz.png" class="lang-flag" title="Czech" alt="czech accounting software">
                    <img src="./assets/img/flags/dk.png" class="lang-flag" title="Danish" alt="danish accounting software">
                    <img src="./assets/img/flags/nl.png" class="lang-flag" title="Dutch" alt="dutch accounting software">
                    <img src="./assets/img/flags/fr.png" class="lang-flag" title="French" alt="french accounting software">
                    <img src="./assets/img/flags/ge.png" class="lang-flag" title="Georgian" alt="georgian accounting software">
                    <img src="./assets/img/flags/de.png" class="lang-flag" title="German" alt="german accounting software">
                    <img src="./assets/img/flags/gr.png" class="lang-flag" title="Greek" alt="greek accounting software">
                    <img src="./assets/img/flags/id.png" class="lang-flag" title="Indonesian " alt="indonesian  accounting software">
                    <img src="./assets/img/flags/it.png" class="lang-flag" title="Italian" alt="italian accounting software">
                    <img src="./assets/img/flags/jp.png" class="lang-flag" title="Japanese" alt="japanese accounting software">
                    <img src="./assets/img/flags/il.png" class="lang-flag" title="Hebrew" alt="hebrew accounting software">
                    <img src="./assets/img/flags/kr.png" class="lang-flag" title="Korean" alt="korean accounting software">
                    <img src="./assets/img/flags/lv.png" class="lang-flag" title="Latvian" alt="latvian accounting software">
                    <img src="./assets/img/flags/lt.png" class="lang-flag" title="Lithuanian" alt="lithuanian accounting software">
                    <img src="./assets/img/flags/mk.png" class="lang-flag" title="Macedonian" alt="macedonian accounting software">
                    <img src="./assets/img/flags/mx.png" class="lang-flag" title="Mexican" alt="mexican accounting software">
                    <img src="./assets/img/flags/nb.png" class="lang-flag" title="Norwegian " alt="norwegian  accounting software">
                    <img src="./assets/img/flags/ir.png" class="lang-flag" title="Persian" alt="persian accounting software">
                    <img src="./assets/img/flags/pt.png" class="lang-flag" title="Portuguese" alt="portuguese accounting software">
                    <img src="./assets/img/flags/ro.png" class="lang-flag" title="Romanian" alt="romanian accounting software">
                    <img src="./assets/img/flags/ru.png" class="lang-flag" title="Russian" alt="russian accounting software">
                    <img src="./assets/img/flags/sr.png" class="lang-flag" title="Serbian" alt="serbian accounting software">
                    <img src="./assets/img/flags/sk.png" class="lang-flag" title="Slovak" alt="slovak accounting software">
                    <img src="./assets/img/flags/es.png" class="lang-flag" title="Spanish" alt="spanish accounting software">
                    <img src="./assets/img/flags/se.png" class="lang-flag" title="Swedish" alt="swedish accounting software">
                    <img src="./assets/img/flags/th.png" class="lang-flag" title="Thai" alt="thai accounting software">
                    <img src="./assets/img/flags/tr.png" class="lang-flag" title="Turkish" alt="turkish accounting software">
                    <img src="./assets/img/flags/ua.png" class="lang-flag" title="Ukrainian" alt="ukrainian accounting software">
                    <img src="./assets/img/flags/pk.png" class="lang-flag" title="Urdu (Pakistan)" alt="urdu pakistan accounting software">
                    <img src="./assets/img/flags/vn.png" class="lang-flag" title="Vietnamese" alt="vietnamese accounting software">

                    <div class="topmargin-sm">
                        <small>Can't find your language? Help us to <a href="https://crowdin.com/project/akaunting" target="_blank">translate</a> it.</small>
                    </div>
                </div>
            </div>
            <div class="row topmargin-lg text-center">
                <div class="col-12">
                    <h2>Get social with Akaunting!</h2>
                </div>
                <div class="content-center home-social">
                    <a href="https://github.com/akaunting" title="GitHub" target="_blank" class="social-icon si-large si-borderless si-github">
                        <i class="icon-github-circled"></i>
                        <i class="icon-github-circled"></i>
                    </a>

                    <a href="https://crowdin.com/project/akaunting" title="Crowdin" target="_blank" class="social-icon si-large si-borderless si-forrst">
                        <i class="icon-line-flag"></i>
                        <i class="icon-line-flag"></i>
                    </a>

                    <a href="https://facebook.com/akaunting" title="Facebook" target="_blank" class="social-icon si-large si-borderless si-facebook">
                        <i class="icon-facebook"></i>
                        <i class="icon-facebook"></i>
                    </a>

                    <a href="https://twitter.com/akaunting" title="Twitter" target="_blank" class="social-icon si-large si-borderless si-twitter">
                        <i class="icon-twitter"></i>
                        <i class="icon-twitter"></i>
                    </a>

                    <a href="https://instagram.com/akaunting" title="Instagram" target="_blank" class="social-icon si-large si-borderless si-instagram">
                        <i class="icon-instagram"></i>
                        <i class="icon-instagram"></i>
                    </a>

                    <a href="https://youtube.com/c/akaunting" title="YouTube" target="_blank" class="social-icon si-large si-borderless si-youtube">
                        <i class="icon-youtube"></i>
                        <i class="icon-youtube"></i>
                    </a>

                    <a href="https://linkedin.com/company/akaunting" title="LinkedIn" target="_blank" class="social-icon si-large si-borderless si-linkedin">
                        <i class="icon-linkedin"></i>
                        <i class="icon-linkedin"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>


</main>


@endsection

@section('footerSection')

@endsection

@extends('public.layouts.appEmpty')

@section('headSection')
<!-- Custom  css -->
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/start-style.css') }}" />

@show

@section('main-content')


<section class="container-fluid startSectionContainer">
    <div class="container clearfix">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <a href="https://akaunting.com"><img src="../assets/img/logo.png"></a>
                <br>
                <br>
                <h2>They're both FREE</h2>
            </div>

            <div class="col-md-6 col-12 pr-2">
                <div class="feature-box fbox-center fbox-bg fbox-light fbox-effect">
                    <div class="fbox-icon">
                        <a href="https://akaunting.com/register"><i class="icon-cloud"></i></a>
                    </div>
                    <h3>
                        Cloud<br>
                        <span class="subtitle">
                        Cloud is Akaunting on <code>our</code> server. You don't have to install and maintain anything, we cover it, for free, forever.
                        <br>
                        <br>
                        <a class="btn button-rounded button-reveal button-large button-green" href="https://akaunting.com/register"><i class="icon-cloud"></i><span>Start</span></a>
                        </span>
                    </h3>
                </div>
            </div>

            <div class="col-md-6 col-12 pl-2">
                <div class="feature-box fbox-center fbox-bg fbox-light fbox-effect">
                    <div class="fbox-icon">
                        <a href="https://akaunting.com/download"><i class="icon-download"></i></a>
                    </div>
                    <h3>
                        Download<br>
                        <span class="subtitle">
                            Download is Akaunting on <code>your</code> server. You can install on your own hosting and is totally free, no restrictions.
                            <br>
                            <br>
                            <a class="btn button-rounded button-reveal button-large button-purple" href="https://akaunting.com/download"><i class="icon-download"></i><span>Get</span></a>
                        </span>
                    </h3>
                </div>
            </div>

            <!--        <div class="clear">&nbsp;</div>-->
        </div>
    </div>
</section>


@endsection

@section('footerSection')
@endsection

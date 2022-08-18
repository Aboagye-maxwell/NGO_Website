@extends('layouts.app')

@section('content')
<div class="container-fluid">
    {{--        image and heading--}}
    <div class="row">
        <div class="col p-0">
            <div class="" style="background-image: url('/storage/girls6.jpg'); background-attachment:fixed; width:auto; height:85vh; background-size:cover; background-repeat:no-repeat">
                <div class="" style="text-align: center; padding-top: 35%; height: 100px; line-height: 100px; text-align: center; color:white">
                <h1 style="text-transform: uppercase; font-weight:bolder">Transforming lives, one girl at a time</h1>
                <h4 style="font-weight:bolder">Dignity!, Protection! Education! Empowerment</h4>
            </div>
            </div>
            <!-- <img class="" width="100%" height="100%" src="/storage/girls6.jpg" alt=""> -->
        </div>
    </div>

    {{--      color cards  --}}
    {{--    various cards--}}
    <div class="row" style="color: white;">
        <div class="col-sm pt-5 pb-5 text-center" style="background-color: #c84869">
            <a href="{{'about'}}" style="text-decoration: none;color: white;">
                <h2>Our Mission</h2>
            </a>
            <p>We believe in menstruation as an avenue for empowerment</p>
        </div>
        <div class="col-sm pt-5 pb-5 text-center" style="background-color: #2a70de">
            <a href="{{'event'}}" style="text-decoration: none;color: white;">
                <h2>Our Vision</h2>
            </a>
            <p>Creating a world where girls appreciate and own their bodies.</p>
        </div>
        <div class="col-sm pt-5 pb-5 text-center" style="background-color: #213e8c;">
            <a href="{{route('about')}}" style="text-decoration: none;color: white;">
                <h2>Get Involved</h2>
            </a>
            <p>Volunteer, Participate, or Donate</p>
        </div>
    </div>

    {{--       latest news --}}

    <h1 class="text-center pt-3" style="margin:70px 0px 20px 0px">Products</h1>

    {{--        new cards--}}
    <div class="container" style="padding:10px;">
        <div class="row d-flex align-items-center justify-content-center pt-2">
            <div class="col-sm">
                <div class="card card-left" id="card-left">
                    <img class="card-img-top" src="/storage/mountani top.jpg" alt="Card image">
                    <div class="card-body">
                        <a href="{{route('news_more')}}" style="text-decoration: none;">
                            <h4 class="card-title">Locally Manufactured reusable menstrual pad</h4>
                        </a>
                        <hr>
                        <div class="row" style="padding:0px 0px 0px 15px">
                            <div class="col p-0">
                                <p class="">Made from soft absorbent organic fabrics carefully,
                                    engineered for high absorption and preventing leakages.<br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card card-middle" id="card-middle">
                    <img class="card-img-top" src="/storage/mountani top.jpg" alt="Card image">
                    <div class="card-body">
                        <a href="{{route('news_more')}}" style="text-decoration: none;">
                            <h4 class="card-title">Panty liners</h4>
                        </a>
                        <hr>
                        <div class="row" style="padding:0px 0px 0px 15px">
                            <div class="col p-0">
                                <p class="">Made of organic fabrics that is skin friendly and safe.
                                    Suitable for daily use. Place and order here</p>
                            </div>

                            <!-- <div class="col p-0 float-right">
                                1<i class="fa fa-heart-o" style="color: crimson;"></i>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card card-right" id="card-right">
                    <img class="card-img-top" src="/storage/girl.jpg" alt="Card image">
                    <div class="card-body">
                        <a href="{{route('news_more')}}" style="text-decoration: none;">
                            <h4 class="card-title">Wet bags/Pouch</h4>
                        </a>
                        <hr>
                        <div class="row" style="padding:0px 0px 0px 15px">
                            <div class="col p-0">
                                <p class="">Water proof beautiful bags designed to carry few single reusable pads for
                                    storage and transport. </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{--        ispirational qoute--}}
    <div class="row color-1 text-center pt-5 pb-5 believe" style="color: white; margin-top:100px;">

        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-3"></div>
                <div class="col-md-5">
                    <ul style="padding-top: 10%; text-align:right; font-size:20px; list-style:none">

                        <strong>We believe in menstruation as an avenue for empowerment. Therefore we:</strong>
                        <hr>
                        <li> <em> Create affordable and environmentally friendly sanitary materials for girls and women
                                to manage their
                                menstruation.</em></li>
                        <hr>

                        <li> <em> Break the stigma and barriers associated with menstruation for women and girls. </em>
                        </li>
                        <hr>
                        <li> <em> Advocate for a supportive environment for menstruating females</em> </li>
                    </ul>
                </div>
            </div>
            <div class="col" style="text-align: right;">


            </div>
        </div>
    </div>

    {{--        upcomming events--}}
    <h1 class="text-center pt-5 pb-3">Upcoming Events</h1>

    {{--        events--}}
    <div class="container p-5">
        {{--        one event list--}}
        <div class="row">
            {{--            first column of row --}}
            <div class="col-sm-3 d-inline-flex">
                <h1 class="pr-1">23</h1>
                <div class="d-inline-block">
                    <h6 id="d_1">sat</h6>
                    <h6 id="d_2">sep</h6>
                </div>
            </div>
            {{--            second column of row--}}
            <div class="col-sm-6">
                <p>10k Against Breast Cancer / San Francisco</p>
            </div>
            {{--            third column of row --}}
            <div class="col-sm-3">
                {{--    donate button --}}
                <a href="#" id="d" class="pb-4 pt-3 d-flex justify-content-center align-items-center">
                    <div class="donate-btn pt-2 pb-2">
                        Register Now
                    </div>
                </a>
            </div>
        </div>
        <hr>
        {{--        one event list--}}
        <div class="row">
            {{--            first column of row --}}
            <div class="col-sm-3 d-inline-flex">
                <h1 class="pr-1">23</h1>
                <div class="d-inline-block">
                    <h6 id="d_1">sat</h6>
                    <h6 id="d_2">sep</h6>
                </div>
            </div>
            {{--            second column of row--}}
            <div class="col-sm-6">
                <p>10k Against Breast Cancer / San Francisco</p>
            </div>
            {{--            third column of row --}}
            <div class="col-sm-3">
                {{--    donate button --}}
                <a href="#" id="d" class="pb-4 pt-3 d-flex justify-content-center align-items-center">
                    <div class="donate-btn pt-2 pb-2">
                        Register Now
                    </div>
                </a>
            </div>
        </div>
        <hr>
        {{--        one event list--}}
        <div class="row">
            {{--            first column of row --}}
            <div class="col-sm-3 d-inline-flex">
                <h1 class="pr-1">23</h1>
                <div class="d-inline-block">
                    <h6 id="d_1">sat</h6>
                    <h6 id="d_2">sep</h6>
                </div>
            </div>
            {{--            second column of row--}}
            <div class="col-sm-6">
                <p>10k Against Breast Cancer / San Francisco</p>
            </div>
            {{--            third column of row --}}
            <div class="col-sm-3">
                {{--    donate button --}}
                <a href="#" id="d" class="pb-4 pt-3 d-flex justify-content-center align-items-center">
                    <div class="donate-btn pt-2 pb-2">
                        Register Now
                    </div>
                </a>
            </div>
        </div>
    </div>

    {{--join us quote with image--}}
    <div class="row">
        <div class="col-sm-5">
            {{--        join us paragraph--}}
            <div class="row color-1 text-center pt-5 pb-5" style="color: white;">
                <div class="col">
                    <h1 style="font-weight: bold;">Join Us</h1>
                    <h5>Empower Our Women And Girls</h5>
                    {{--    donate button --}}
                    <a href="#" id="d" class="pb-4 pt-3 d-flex justify-content-center align-items-center">
                        <div class="donate-btn">
                            Donate
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-sm-7">
            {{--        image of togetherness--}}
            <div class="row">
                <div class="col p-0">
                    <img class="" src="/storage/a.png" width="100%" height="100%" alt="">
                </div>
            </div>
        </div>
    </div>


</div>
@endsection

<style>
.believe {
    background-image: url('storage/girl.jpg');
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size: cover;
    height: 70vh;
}

.believe-head {
    padding: 10px;
    font-weight: bold;
}

@keyframes transitionIn {
    from {
        opacity: 0;
        transform: translateY(70px);

    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}

#motto {
    visibility: hidden;
}

.card-left,
.card-middle,
.card-right {
    visibility: hidden;
}

.card-left,
.card-middle,
.card-right {
    position: relative;
    top: 0;
    transition: 0.3s;
}

.card-left:hover,
.card-middle:hover,
.card-right:hover {
    top: -15px;
}
</style>

<script type="text/javascript">
window.onscroll = function() {
    scrollFunction();
}

function scrollFunction() {
    if (pageYOffset > 700 && pageYOffset < 1000) {
        document.getElementById("card-left").style.animation = "transitionIn 1.5s";
        document.getElementById("card-left").style.visibility = "visible";
    }

    if (pageYOffset > 700 && pageYOffset < 1000) {
        document.getElementById("card-middle").style.animation = "transitionIn 2.5s";
        document.getElementById("card-middle").style.visibility = "visible";
    }

    if (pageYOffset > 700 && pageYOffset < 1000) {
        document.getElementById("card-right").style.animation = "transitionIn 3.5s";
        document.getElementById("card-right").style.visibility = "visible";
    }
}
</script>
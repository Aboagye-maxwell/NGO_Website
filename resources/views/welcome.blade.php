@extends('layouts.app')

@section('content')
    <div class="container-fluid">
{{--        image and heading--}}
        <div class="row">
            <div class="col p-0">
                <img class="" width="100%" height="100%" src="/storage/a.png" alt="">
            </div>
        </div>
{{--        <h1 style="text-align: center;">Empowering Women & Girls Worldwide</h1>--}}
{{--      color cards  --}}
        {{--    various cards--}}
        <div class="row" style="color: white;">
            <div class="col-sm pt-5 pb-5 text-center"
                 style="background-color: #c84869">
                <a href="{{'about'}}" style="text-decoration: none;color: white;">
                    <h2>Our Mission</h2>
                </a>
                <p>Our Goal, Vision & Commitment</p>
            </div>
            <div class="col-sm pt-5 pb-5 text-center"
                 style="background-color: #2a70de">
                <a href="{{'event'}}" style="text-decoration: none;color: white;">
                    <h2>Our Events</h2>
                </a>
                <p>Register & Help Make Change</p>
            </div>
            <div class="col-sm pt-5 pb-5 text-center"
                 style="background-color: #213e8c;">
                <a href="{{route('about')}}" style="text-decoration: none;color: white;">
                    <h2>Get Involved</h2>
                </a>
                <p>Volunteer, Participate, or Donate</p>
            </div>
        </div>

{{--       latest news --}}
        <h1 class="text-center pt-3">Latest News</h1>

{{--        new cards--}}
        <div class="row d-flex align-items-center justify-content-center pt-2">
            <div class="col-sm">
                <div class="card">
                    <img class="card-img-top" src="/storage/a.png" alt="Card image">
                    <div class="card-body">
                        <a href="{{route('news_more')}}" style="text-decoration: none;">
                            <h4 class="card-title">female-robotics-team-wins-major-award</h4>
                        </a>
                        <hr>
                        <div class="row">
                            <div class="col p-0">
                                <p class="">15 views</p>
                            </div>
                            <div class="col p-0">
                                <p>write a comment</p>
                            </div>
                            <div class="col p-0 float-right">
                                1<i class="fa fa-heart-o" style="color: crimson;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card">
                    <img class="card-img-top" src="/storage/a.png" alt="Card image">
                    <div class="card-body">
                        <a href="{{route('news_more')}}" style="text-decoration: none;">
                            <h4 class="card-title">female-robotics-team-wins-major-award</h4>
                        </a>
                        <hr>
                        <div class="row">
                            <div class="col p-0">
                                <p class="">15 views</p>
                            </div>
                            <div class="col p-0">
                                <p>write a comment</p>
                            </div>
                            <div class="col p-0 float-right">
                                1<i class="fa fa-heart-o" style="color: crimson;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card">
                    <img class="card-img-top" src="/storage/a.png" alt="Card image">
                    <div class="card-body">
                        <a href="{{route('news_more')}}" style="text-decoration: none;">
                            <h4 class="card-title">female-robotics-team-wins-major-award</h4>
                        </a>
                        <hr>
                        <div class="row">
                            <div class="col p-0">
                                <p class="">15 views</p>
                            </div>
                            <div class="col p-0">
                                <p>write a comment</p>
                            </div>
                            <div class="col p-0 float-right">
                                1<i class="fa fa-heart-o" style="color: crimson;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

{{--        read more--}}
        <a href="#" id="d" class="pb-4 pt-5 d-flex justify-content-center align-items-center">
            <div class="donate-btn">
                Read More
            </div>
        </a>

        {{--        ispirational qoute--}}
        <div class="row color-1 text-center pt-5 pb-5" style="color: white;">
            <div class="col">
                <h5>I am a bird; and no net shbhsbs dshbdsbdbjsnd d bdjdjbbdjj dd jbaduba </h5>
                <p>Charlotte Bronte, Jane Eyre</p>
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

@extends('layouts.app')

@section('content')
<div class="container-fluid">
{{--    heading of about page --}}
   <div class="row">
       <div class="d-flex justify-content-center align-items-center" id="about-heading">
               <h1>Events</h1>
       </div>
   </div>
{{--list of events --}}
    <div class="container pt-5">
{{--        one event list--}}
        <div class="row" id="eve">
{{--            first column of row --}}
            <div class="col-sm-3 d-inline-flex">
                <h1 class="pr-1">23</h1>
                <div class="d-inline-block">
                    <h6 id="d_1">sat</h6>
                    <h6 id="d_2">sep</h6>
                </div>
            </div>
{{--            second column of row--}}
            <div class="col-sm-6 d-inline-block">
                <div class="d-inline-flex">
                    <p>10k Against Breast Cancer / San Francisco</p>
                    <i class="fa fa-angle-up fa-2x" style="color: crimson;visibility: hidden;" id="up" onclick="up()"></i>
                    <i class="fa fa-angle-down fa-2x" style="color: crimson;" id="down" onclick="down()"></i>
                </div>
                <p id="paragraph" style="visibility: hidden;">Sep 23, 2023, 7:00 PM San Francisco, 500 Terry A Francois Blvd, San Francisco, CA 94158, USA</p>
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
            <hr id="eve_s">
        </div>
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

    {{--    support us--}}
    <div class="pt-4 color-1 row">
        <h3 style="color: white;">We Need Your Support Today!</h3>
        {{--    donate button --}}
        <a href="#" id="d" class="pb-4 pt-3 d-flex justify-content-center align-items-center">
            <div class="donate-btn">
                Donate
            </div>
        </a>
    </div>

</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container-fluid">
{{--    heading of about page --}}
   <div class="row">
       <div class="d-flex justify-content-center align-items-center" id="about-heading">
               <h1>Latest News</h1>
           </div>
   </div>

{{--    all posts--}}
    <div class="container pt-5">
{{--        posts--}}
        <div class="row">
{{--            all post heading--}}
            <div class="col-6">
                <p>All Posts</p>
            </div>
            <div class="col-6">
                <i class="fa fa-search float-right"></i>
            </div>
        </div>
{{--        news cards--}}
        <div id="news" class="row pt-3 pb-2" style="border: 1px solid gray;">
            <div class="col-sm-6 pb-1">
                <img src="/storage/a.png" width="100%" height="100%" alt="">
            </div>
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-6">
                        <div class="d-inline-flex">
                            <i class="fa fa-user-circle-o fa-2x pr-1"></i>
                            <div class="d-inline-block" style="font-weight: lighter;font-size: 1px;">
                                <h6>Admin</h6>
                                <h6>Dec 8,2021 . 1 min</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <i class="fa fa-asterisk float-right"></i>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <a href="{{route('news_more')}}" id="news_h" style="text-decoration: none;">
                            <h4>Female Robotics Team Wins Major Award</h4>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div id="news_p" class="col">
                        <p>Video provides a powerful way to help you prove your point.
                            When you click Online Video, you can paste in the embed code for the video you want to add.
                            You can also
                            type a keyword to search online for the video that best fits your document.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 d-inline-flex">
                        <p class="pr-2">15 views</p>
                        <p>0 comments</p>
                    </div>
                    <div class="col-6">
                        <span class="float-right">
                            1<i class="fa fa-heart-o" style="color: black;"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="pb-5"></div>
        {{--        news cards--}}
        <div class="row pt-3 pb-2" style="border: 1px solid gray;">
            <div class="col-sm-6 pb-1">
                <img src="/storage/a.png" width="100%" height="100%" alt="">
            </div>
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-6">
                        <div class="d-inline-flex">
                            <i class="fa fa-user-circle-o fa-2x pr-1"></i>
                            <div class="d-inline-block" style="font-weight: lighter;font-size: 1px;">
                                <h6>Admin</h6>
                                <h6>Dec 8,2021 . 1 min</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <i class="fa fa-asterisk float-right"></i>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h4>Female Robotics Team Wins Major Award</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>Video provides a powerful way to help you prove your point.
                            When you click Online Video, you can paste in the embed code for the video you want to add.
                            You can also
                            type a keyword to search online for the video that best fits your document.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 d-inline-flex">
                        <p class="pr-2">15 views</p>
                        <p>0 comments</p>
                    </div>
                    <div class="col-6">
                        <span class="float-right">
                            1<i class="fa fa-heart-o"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="pb-5"></div>
        {{--        news cards--}}
        <div class="row pt-3 pb-2" style="border: 1px solid gray;">
            <div class="col-sm-6 pb-1">
                <img src="/storage/a.png" width="100%" height="100%" alt="">
            </div>
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-6">
                        <div class="d-inline-flex">
                            <i class="fa fa-user-circle-o fa-2x pr-1"></i>
                            <div class="d-inline-block" style="font-weight: lighter;font-size: 1px;">
                                <h6>Admin</h6>
                                <h6>Dec 8,2021 . 1 min</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <i class="fa fa-asterisk float-right"></i>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h4>Female Robotics Team Wins Major Award</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>Video provides a powerful way to help you prove your point.
                            When you click Online Video, you can paste in the embed code for the video you want to add.
                            You can also
                            type a keyword to search online for the video that best fits your document.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 d-inline-flex">
                        <p class="pr-2">15 views</p>
                        <p>0 comments</p>
                    </div>
                    <div class="col-6">
                        <span class="float-right">
                            1<i class="fa fa-heart-o"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="pb-5"></div>
        {{--        news cards--}}
        <div class="row pt-3 pb-2" style="border: 1px solid gray;">
            <div class="col-sm-6 pb-1">
                <img src="/storage/a.png" width="100%" height="100%" alt="">
            </div>
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-6">
                        <div class="d-inline-flex">
                            <i class="fa fa-user-circle-o fa-2x pr-1"></i>
                            <div class="d-inline-block" style="font-weight: lighter;font-size: 1px;">
                                <h6>Admin</h6>
                                <h6>Dec 8,2021 . 1 min</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <i class="fa fa-asterisk float-right"></i>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h4>Female Robotics Team Wins Major Award</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>Video provides a powerful way to help you prove your point.
                            When you click Online Video, you can paste in the embed code for the video you want to add.
                            You can also
                            type a keyword to search online for the video that best fits your document.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 d-inline-flex">
                        <p class="pr-2">15 views</p>
                        <p>0 comments</p>
                    </div>
                    <div class="col-6">
                        <span class="float-right">
                            1<i class="fa fa-heart-o"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="pb-5"></div>
        {{--        news cards--}}
        <div class="row pt-3 pb-2" style="border: 1px solid gray;">
            <div class="col-sm-6 pb-1">
                <img src="/storage/a.png" width="100%" height="100%" alt="">
            </div>
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-6">
                        <div class="d-inline-flex">
                            <i class="fa fa-user-circle-o fa-2x pr-1"></i>
                            <div class="d-inline-block" style="font-weight: lighter;font-size: 1px;">
                                <h6>Admin</h6>
                                <h6>Dec 8,2021 . 1 min</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <i class="fa fa-asterisk float-right"></i>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h4>Female Robotics Team Wins Major Award</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>Video provides a powerful way to help you prove your point.
                            When you click Online Video, you can paste in the embed code for the video you want to add.
                            You can also
                            type a keyword to search online for the video that best fits your document.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 d-inline-flex">
                        <p class="pr-2">15 views</p>
                        <p>0 comments</p>
                    </div>
                    <div class="col-6">
                        <span class="float-right">
                            1<i class="fa fa-heart-o"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--    spacing--}}
    <div class="pb-4"></div>
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

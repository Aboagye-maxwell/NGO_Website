@extends('layouts.app')

@section('content')
<div class="container-fluid">
{{--    heading of about page --}}
   <div class="row">
       <div class="d-flex justify-content-center align-items-center" id="about-heading">
               <h1>About</h1>
           </div>
   </div>
{{--    introductory paragraphs of about page--}}
    <div class="paragraph container pt-5">
        <p>I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page. I’m a great place for you to tell a story and let your users know a little more about you.</p>
        <p>This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company. Talk about your team and what services you provide. Tell your visitors the story of how you came up with the idea for your business and what makes you different from your competitors.
            Make your company stand out and show your visitors who you are.</p>
    </div>
{{--    first image card --}}
    <div class="row pt-5">
{{--        column one of image card--}}
        <div class="col-sm">
            <div class="row">
                <div class="col-sm pb-3 pl-0">
                    <img src="/storage/a.png" width="100%" height="100%" alt="">
                </div>
                <div class="col-sm">
                    <img  width="100%" src="/storage/a.png" alt="">
                </div>
            </div>
            <div class="row pt-4">
                <div class="col-sm pb-3 pl-0">
                    <img src="/storage/a.png" width="100%" height="100%" alt="">
                </div>
            </div>
        </div>
{{--        coulumn two of image card--}}
            <div class="col-sm pr-0">
                    <div class="col-sm pr-0">
                        <img src="/storage/a.png" width="100%" height="100%" alt="">
                    </div>
                    <div class="col-sm pt-3 pr-0">
                        <img src="/storage/a.png" width="100%" height="100%" alt="">
                    </div>
            </div>
    </div>
{{--   second image card --}}
    <div class="row pt-5">
        <div class="col-sm p-0">
            <img src="/storage/a.png" width="100%" height="100%" alt="">
        </div>
    </div>
{{--inspiration heading--}}
    <div class="container p-5">
        <h3>
            We believe all women can embrace who they are,
            can define their future, and can change the world.
        </h3>
    </div>

    <div class="">
        {{--    our mission --}}
        <div class="row" id="mission">
            <div class="col-sm-6 p-5">
                    <h3 class="">Our Mission</h3>
                    <p>I'm a paragraph. Click here to add your own text and edit me. I’m a great
                        place for you to tell a story and let your users know a little more about you.</p>
            </div>
            <div class="col-sm-6 pl-0 pr-0">
                <img src="/storage/a.png" width="100%" height="100%" alt="">
            </div>
        </div>
        {{--    our vission --}}
        <div class="row" id="mission">
            <div class="col-sm-6 pl-0 pr-0">
                <img src="/storage/a.png" width="100%" height="100%" alt="">
            </div>
            <div class="col-sm-6 p-5">
                <h3 class="">Our Vision</h3>
                <p>I'm a paragraph. Click here to add your own text and edit me. I’m a great
                    place for you to tell a story and let your users know a little more about you.</p>
            </div>
        </div>
    </div>

{{--    support us--}}
    <div class="pt-4 abt-h">
        <h3>We Need Your Support Today!</h3>
    </div>
{{--    donate button --}}
    <a href="#" id="d" class="pb-4 pt-3 d-flex justify-content-center align-items-center">
        <div class="donate-btn">
            Donate
        </div>
    </a>


</div>
@endsection

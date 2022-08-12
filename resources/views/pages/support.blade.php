@extends('layouts.app')

@section('content')
<div class="container-fluid">
{{--    heading of about page --}}
   <div class="row">
       <div class="d-flex justify-content-center align-items-center" id="about-heading">
               <h1>Support Us</h1>
           </div>
   </div>
{{--    introductory paragraphs of about page--}}
    <div class="paragraph container pt-5">
        <h2 class="bo">Get Involved</h2>
        <p>This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company. Talk about your team and what services you provide. Tell your visitors the story of how you came up with the idea for your business and what makes you different from your competitors.
            Make your company stand out and show your visitors who you are.</p>
    </div>
{{--see our events button--}}
    <a href="#" id="d" class="pb-4 pt-3 d-flex justify-content-center align-items-center">
        <div class="donate-btn">
            See Our Events
        </div>
    </a>
{{--   second image card --}}
    <div class="row pt-5">
        <div class="col-sm p-0">
            <img src="/storage/a.png" width="100%" height="100%" alt="">
        </div>
    </div>
    {{--    slogon--}}
   <div class="pt-5 pb-5 d-grid justify-content-center align-items-center">
       <h2>Let's Make A Change</h2>
       <p>Here are some ways you can donate:</p>
   </div>
{{--    various cards--}}
    <div class="row" style="color: white;">
        <div class="col-sm d-grid justify-content-center align-items-center pt-5 pb-5"
             style="background-color: #c84869">
            <i class="fa fa-user-plus fa-2x fa-align-center" style="color: white"></i>
            <h3>In Person</h3>
            <p>500 Terry Francois Street</p>
            <p>San Francisco, CA 94158</p>
        </div>
        <div class="col-sm d-grid justify-content-center align-items-center pt-5 pb-5"
             style="background-color: #2a70de">
            <i class="fa fa-internet-explorer fa-2x fa-align-center" style="color: white;"></i>
            <h3>Online</h3>
            <p>Make a tax deductible donation‏.</p>
            <a href="#" id="d" class="pb-4 pt-3 d-flex justify-content-center align-items-center">
                <div class="donate-btn pt-2 pb-2" style="background-color: white;color: #2a70de;">
                   Click to Give
                </div>
            </a>
        </div>
        <div class="col-sm d-grid justify-content-center align-items-center pt-5 pb-5"
             style="background-color: #213e8c;">
            <i class="fa fa-phone fa-2x fa-align-center" style="color: white"></i>
            <h3>Over the Phone</h3>
            <p>It's easy to donate offline too.</p>
            <p>Tel: 123-456-7890</p>
        </div>
    </div>

</div>
@endsection

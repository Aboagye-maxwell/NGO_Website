@extends('layouts.app')

@section('content')
<div class="container-fluid">
{{--    heading of about page --}}
   <div class="row">
       <div class="d-flex justify-content-center align-items-center" id="about-heading">
               <h1>Contact</h1>
           </div>
   </div>
{{--    contact form--}}
    <div class="row">
        <div class="col-sm-6 p-5">
            <h3>Get in Touch</h3>
            <p>500 Terry Francisco Street San Francisco, CA 94158 maxonline.com | 123-456-7890</p>
            <form>
                <div class="d-inline-flex">
                    <div class="form-group pr-3">
                        <label for="f_name">First Name*</label>
                        <input type="text" class="form-control" id="f_name" placeholder="eg. Ansah" name="f_name">
                    </div>
                    <div class="form-group">
                        <label for="l_name">Last Name*</label>
                        <input type="text" class="form-control" id="l_name" placeholder="eg. Kofi Junior" name="l_name">
                    </div>
                </div>
                <div class="form-group pr-3">
                    <label for="c_email">Email*</label>
                    <input type="email" class="form-control" id="c_email" placeholder="eg. ansahkofijunior@gmail.com" name="c_email">
                </div>
                <div class="form-group pr-3">
                    <label for="subject">Subject</label>
                    <input type="text" class="form-control" id="subject" placeholder="Graphic Designing" name="subject">
                </div>
                <div class="form-group">
                    <label for="message">Type Your Message Here</label>
                    <textarea class="form-control" rows="5" id="message"></textarea>
                </div>
                <button type="submit" class="btn btn-outline-danger">Submit</button>
            </form>
        </div>
        <div class="col-sm-6 pl-0 pr-0">
            <img src="/storage/a.png" width="100%" height="100%" alt="">
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

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
                <i class="fa fa-search float-right" style="color: black;"></i>
            </div>
        </div>
{{--        news cards--}}
        <div class="row pt-3 pb-2" style="border: 1px solid gray;">
{{--            user info--}}
           <div class="row">
               <div class="col">
                   <div class="row">
                       <div class="col-6">
                           <div class="d-inline-flex">
                               <i class="fa fa-user-circle-o fa-2x pr-1"></i>
                               <div class="d-inline-flex" style="font-weight: lighter;font-size: 1px;">
                                   <i class="fa fa-user-circle-o fa-2x" style="color: black;"></i>
                                   <h6>Admin.</h6>
                                   <h6>Dec 8,2021 . 1 min</h6>
                               </div>
                           </div>
                       </div>
                       <div class="col-6">
                           <i class="fa fa-ellipsis-v float-right" style="color: black;"></i>
                       </div>
                   </div>
               </div>
           </div>
{{--            heading--}}
            <div class="row">
                <div class="col">
                    <h2>Women Overtake Men in College Degrees</h2>
                </div>
            </div>
{{--            description--}}
            <div class="row">
                <div class="col">
                    <p style="font-weight: bold;">Create a blog post subtitle that summarizes your post in a few short, punchy sentences and entices your audience to continue reading.</p>
                </div>
            </div>
{{--            image--}}
            <div class="row">
                <div class="col">
                    <img src="/storage/a.png" width="100%" alt="">
                </div>
            </div>
{{--           paragraph under image --}}
            <div class="row">
                <div class="col">
                    <p>Welcome to your blog post. Use this space to connect with your readers and potential customers in a way that’s current and interesting.
                        Think of it as an ongoing conversation where you can share updates about business, trends, news, and more. </p>
                </div>
            </div>
{{--            inspirational quoate--}}
            <div class="row">
                <div class="col">
                    <h4 style="border-left: 4px solid #c84869;" class="pl-3">Do you have a design in mind for your blog? Whether you prefer a trendy postcard look or you’re
                        going for a more editorial style blog - there’s a stunning layout for everyone.
                    </h4>
                </div>
            </div>
{{--          paragraph after quoate  --}}
            <div class="row">
                <div class="col">
                    <p>You’ll be posting loads of engaging content, so be sure to keep your
                        blog organized with Categories that also allow visitors to explore more of what interests them.</p>
                </div>
            </div>
{{--            relevant content--}}
            <div class="row">
                <div class="col">
                    <h5>Create Relevant Content</h5>
                    <p>Writing a blog is a great way to position yourself as an authority in your field and captivate your readers’ attention.
                        Do you want to improve your site’s SEO ranking? Consider topics that focus on relevant keywords and relate back to your website or business.
                        You can also add hashtags (#vacation #dream #summer)
                        throughout your posts to reach more people, and help visitors search for relevant content. </p>
                </div>
            </div>
{{--            last paragraph--}}
            <div class="row">
                <div class="col">
                    <p>Blogging gives your site a voice, so let your business’ personality shine through. Choose a
                        great image to feature in your post or add a video for extra engagement.
                        Are you ready to get started? Simply create a new post now. </p>
                </div>
            </div>
            <hr>
{{--            social links--}}
            <div class="row pt-3 pb-4">
                <div class="col d-inline-flex">
                    <i class="fa fa-facebook-square pr-3" style="color: black;"></i>
                    <i class="fa fa-twitter-square pr-3" style="color: black;"></i>
                    <i class="fa fa-linkedin-square pr-3" style="color: black;"></i>
                    <i class="fa fa-share-square" style="color: black;"></i>
                </div>
            </div>
            <hr>
{{--            comments--}}
            <div class="row">
                <div class="col-6 d-inline-flex">
                    <p class="pr-2">15 views</p>
                    <p>0 comments</p>
                </div>
                <div class="col-6">
                        <span class="float-right">
                            2<i class="fa fa-heart-o" style="color: crimson;"></i>
                        </span>
                </div>
            </div>
        </div>
</div>
@endsection

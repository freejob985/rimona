<!DOCTYPE html>
<html lang="en">
   <head>
      <!--Start of Google Analytics script-->
      @if ($bs->is_analytics == 1)
      {!! $bs->google_analytics_script !!}
      @endif
      <!--End of Google Analytics script-->

      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <meta name="description" content="@yield('meta-description')">
      <meta name="keywords" content="@yield('meta-keywords')">

      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>{{$bs->website_title}} @yield('pagename')</title>
      <!-- favicon -->
      <link rel="shortcut icon" href="{{asset('assets/front/img/'.$bs->favicon)}}" type="image/x-icon">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{asset('assets/front/css/bootstrap.min.css')}}">
      <!-- plugin css -->
      <link rel="stylesheet" href="{{asset('assets/front/css/plugin.min.css')}}">
      @yield('styles')
      <!--default css-->
      <link rel="stylesheet" href="{{asset('assets/front/css/default.css')}}">
      <!-- main css -->
      <link rel="stylesheet" href="{{asset('assets/front/css/construction-style.css')}}">
      <!-- responsive css -->
      <link rel="stylesheet" href="{{asset('assets/front/css/responsive.css')}}">
      <!-- construction responsive css -->
      <link rel="stylesheet" href="{{asset('assets/front/css/construction-responsive.css')}}">

      @if ($bs->is_tawkto == 1)
      <style>
      #scroll_up {
          bottom: 50px;
      }
      #scroll_up {
          right: 20px;
      }
      </style>
      @endif
      @if (count($langs) == 0)
      <style media="screen">
      .support-bar-area ul.social-links li:last-child {
          margin-right: 0px;
      }
      .support-bar-area ul.social-links::after {
          display: none;
      }
      </style>
      @endif
      @if($bs->feature_section == 0)
      <style media="screen">
      .hero-txt {
          padding-bottom: 160px;
      }
      </style>
      @endif


      <!-- base color change -->
      <link href="{{url('/')}}/assets/front/css/construction-base-color.php?color={{$bs->base_color}}" rel="stylesheet">


      @if ($rtl == 1)
      <!-- RTL css -->
      <link rel="stylesheet" href="{{asset('assets/front/css/rtl.css')}}">
      <link rel="stylesheet" href="{{asset('assets/front/css/construction-rtl.css')}}">
      @endif
      <!-- jquery js -->
      <script src="{{asset('assets/front/js/jquery-3.3.1.min.js')}}"></script>

      @if ($bs->is_appzi == 1)
      <!-- Start of Appzi Feedback Script -->
      <script async src="https://app.appzi.io/bootstrap/bundle.js?token={{$bs->appzi_token}}"></script>
      <!-- End of Appzi Feedback Script -->
      @endif

      <!-- Start of Facebook Pixel Code -->
      @if ($be->is_facebook_pexel == 1)
        {!! $be->facebook_pexel_script !!}
      @endif
      <!-- End of Facebook Pixel Code -->

      <!--Start of Appzi script-->
      @if ($bs->is_appzi == 1)
      {!! $bs->appzi_script !!}
      @endif
      <!--End of Appzi script-->
      <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300&display=swap" rel="stylesheet">

      <style>
@import  url('https://fonts.googleapis.com/css2?family=Tajawal:wght@300&display=swap');
@import  url('https://fonts.googleapis.com/css2?family=Tajawal:wght@300;500&display=swap');
body,h1,h2,h3,h4,h5,h6,p,a,input,span{   font-family: 'Tajawal', sans-serif !important;
}
body{overflow-x:hidden!important;}
.breadcrumb-area{    background-image: none!important;
    background-size: cover;
}ul.breadcumb {
    color: #e6212a;
    display: block;
    margin-top: 35px;
}ul.breadcumb li a {
    display: inline-block;
    color: #000;
    text-decoration: none;
    -webkit-transition: .5s;
    transition: .5s;
}table{border:none!important;text-align:center;}.table-bordered td, .table-bordered th {
    
    border: none;
}table img{text-align:center;margin:auto;}
#tawkchat-minified-wrapper {
    z-index: 999997;
    cursor: pointer;
    height: 100%;
    display: none!important;
    width: 100%;
}.team_slide img {
    width: 100%;
    height: 350px!important;
}.blog-txt {
    background-color: #fff;
    padding: 29px 25px 30px;
    margin-top: -3px;
    position: relative;
}.blog-lists .single-blog {
    margin-bottom: 30px;
    border: 33px solid #fafafa;
    position: relative;
    padding: 44px;
}.blog-txt .date {
    display: none;
    font-size: 16px;
    color: #95959e;
    font-weight: 400;
}.blog-txt {
    background-color: #fff;
    padding: 0;
    margin-top: 0;
    position: relative;
}.blog-txt .blog-title a {
    color: #e6212a;
    position: relative;
    text-decoration: none;
    -webkit-transition: .3s;
    transition: .3s;
}
table img{width:100%;}
.carousel-inner>.item>a>img, .carousel-inner>.item>img, .img-responsive, .thumbnail a>img, .thumbnail>img {
    display: block;
    max-width: 56%!important;
    margin: auto!important;
    height: 400px!important;
}.team_slide{padding:12px 200px;}
   .about_v1 .finlance_box_img .finlance_img:after{display:none;}   
    .hero_slide_v1 .single_slider {
    padding: 270px 0 590px;
}.bg_overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: #fff;
}.hero_slide_v1 .single_slider .bg_overlay {
    opacity: .10!important;
}.finlance_about{background:#6a6b71a6;width:100%;height:300px;position:absolute;top:690px;}
.finlance_about_row{margin-top:-200px;}
.about_v1 .finlance_box_img .finlance_img {margin:0px 55px;}
.hero_slide_v1 .single_slider .banner_content h1 {
    color: #E6212A;}
    .finlance_btn {
    background: #fff;
    color: #E6212A;
}.carousel-control.left ,.carousel-control.right{
    display: none;}
    .breadcrumb-area .breadcrumb-txt {
    padding: 50px 0px 10px;
}.table td, .table th {
    text-align: right;
    background-color: #f3f3f3;
}.blog-lists {
    padding: 44px 0px 120px;
}
.header_v1 .header_navigation {
    background: #fafafa;
    border-radius: 3px;
    padding: 0 60px;
}.finlance_header.header_v1 .container-fluid {
    padding-left: 0;
    padding-right: 0;
}.breadcrumb-txt h1 {
    display: none;
    font-size: 42px;
    font-weight: 600;
    line-height: 1.3;
    color: #fff;
}@media only screen and (max-width: 760px){
.table td {
    padding: 0px;
    display:block
}
}
.table td {
    background-color: #ffffff;
}
.table-bordered>tbody>tr>td, .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>td, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>thead>tr>th {
    border: unset;
}
.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    border-top: unset;
}
.table .table {
    width: 100%;
}
.finlance_btn {
    border-radius: 22px 22px 22px 22px;
    display: inline-block;
    min-width: 280px;
    height: 51px;
    line-height: 53px;
    text-align: center;
    background: #fff;
    color: #000;
    font-weight: 600;
    border:1px dashed #000;
    padding:0px 88px;
    text-transform: uppercase;
    font-size: 22px!important;
    transition: all .5s;
}.header_v1 .top_header {
    display: none;
    padding: 15px 0;
}.main-menu ul > li > a {
    color: #000;
    
}.service_v1 .service_slide .grid_item {
    padding: 0;background:transparent;}
.service_v1 .service_slide .grid_item .grid_inner_item .finlance_icon {
    background:transparent;
    display: block;
    width: 100%;
    height: 240px;
    line-height: 0;
    text-align: center;
    border-radius: 0;
    margin-bottom: 35px;
}.we_do_v1 .finlance_icon_box .icon_list .text h4 {
    margin-bottom: 36px;
    font-size: 32px;
    color: #e6212a;
}.we_do_v1 .finlance_content_box {
 
    margin-top: 57px;
}
.finlance_content{padding:0px;}
.container {
    max-width: 90%;
}.we_do_v1 .finlance_content_box {
    text-align: left;
}.we_do_v1 .finlance_icon_box .icon_list .text p{font-size:21px;line-height:1.8em;}
.service_v1 .service_slide .grid_item .grid_inner_item .finlance_icon img {
    margin: 0 auto;
    max-width: 100%;
    display: inline-block;
    width: 100%;
}.service_v1 .service_slide .grid_item .grid_inner_item .finlance_icon img {
    margin: 0 auto;
    max-width: 100%;
    display: inline-block;
    width: 100%;
}.service_v1 .section_title h2 {
    color: #e6212a;
    max-width: 580px;
}.pt-120 {
    padding-top: 81px;
}.section_title span {
    font-size: 31px;
    display: inline;
}.service_v1 .section_title h2 {
    color: #e6212a;
    display: none;
    max-width: 580px;
}
.pt-100 {
    padding-top: 76px;
}.header_v1 .header_navigation .site_menu .button_box {
    float: left;
    display: none;
}.hero_slide_v1 .single_slider .banner_content h1 {
   
    margin: 0;
    margin-bottom: 30px;
}.slick-slide img {
    display: block;
    height: 250px;
}.slick-initialized .slick-slide {
    display: block;
    border: none;
}.sticky.header_v1{
    position: relative;}
.project_slide .grid_item .finlance_content {
    text-align: right;
    padding: 35px 0 40px;
}
.about_v1 .finlance_content_box .section_title h2 {
    font-size: 21px;
    padding-top: 44px;
    LINE-HEIGHT: 2.2EM;
    position: relative;
    color: #fff;
}
    .project_v1 .section_title h2 {
    max-width: 630px;
    COLOR: #e6212a;
}.breadcrumb-area .breadcrumb-txt {
    padding: 79px 0px 10px;
}.table td {padding:44px;
    text-align: right;
    background-color: #f3f3f3;
}.slick-slide img {
  
    height: 212px;
}.service-details{padding:0px 118px;}.service_v1 .service_slide .grid_item .grid_inner_item .finlance_content p {
    margin-bottom: 35px;
    color: #fff;display:none!important;
}.finlance_content:hover{padding:12px;background:transparent;}
.main-menu ul > li > a:hover{background:transparent;}
.blog-details img.blog-details-img-1 {
    padding: 12px 211px;
    width: 100%;
    height: 400px;
}.form-element label {
    display: none;
    text-align: right;
}.dark_bg {
    margin: auto;
    background: #fafafa;
    text-align: center;
}.footer_v1 .footer_bottom .social_box {
    float: none!important;
}.footer_v1 .footer_bottom .social_box ul li a {
    font-size: 15px;
    display: block;
    width: 34px;
    height: 33px;
    line-height: 33px;
    text-align: center;
    border-radius: 50%;
    background: #e6212a;
    color: #f6f3f3;
    box-shadow: 0px 5px 20px 0px rgba(7, 20, 73, 0.1);
    transition: all .5s;
}
@media (max-width: 768px){
    .blog-details img.blog-details-img-1 {
    padding: 12px 21px;
    width: 100%;
    height: 300px;
}
    .finlance_about {
    background: #6a6b71a6;
    width: 100%;
    height: auto;
    padding: 47px 20px;
    position: relative;
    top:0;
}.hero_slide_v1 .single_slider {
    padding: 170px 0 90px;
}.service-details{padding:0px}
.section_title h2 {
    font-size: 18px;
}.brand {
    text-align: center;
}.we_do_v1 .finlance_icon_box .icon_list .text p {
    font-size: 21px;
    color: #000;
    line-height: 1.8em;
}
.mean-container a.meanmenu-reveal span {
    display: block;
    background: #e6212a;
}.brand a img {
    width: 130px;
    margin: auto;
    text-align: center;
}.finlance_about_row {
    margin-top: 0px;
}.mean-container .mean-nav ul li a {
    display: block;
    float: right;
    width: 100%;
    padding: 1em 5%;
    margin: 0;
    text-align: right;
    color: #fff;
    text-decoration: none;
    text-transform: capitalize;
}.mean-container .mean-nav ul li a.mean-expand {
    margin-top: 1px;
    width: 26px;
    height: 30px;
    padding: 12px!important;
    text-align: center;
    position: absolute;
    left: 0;
    right: auto;
    top: 0;
    z-index: 2;
    font-weight: 700;
    background: #010e2a;
    border: none!important;
}table img{width:100%!important;}
.team_slide {
    padding: 12px 20px;
}.finlance_btn {
    border-radius: 22px 22px 22px 22px;
    display: inline-block;
    min-width: 280px;
    height: 51px;
    line-height: 48px;
    text-align: center;
    background: #fff;
    color: #000;
    font-weight: 600;
    border: 1px dashed #000;
    padding: 0px 8px;
    text-transform: uppercase;
    font-size: 14px!important;
    transition: all .5s;
}.hero_slide_v1 .single_slider .banner_content h1 {
    font-size: 25px !important;
    line-height: 42px !important;
}.hero_slide_v1 .slick-prev {
    display: none!important;
    left: auto;
    right: -100%;
}.about_v1 .finlance_content_box .section_title h2 {
    font-size: 11px;
    padding-top: 4px;
    LINE-HEIGHT: 2.2EM;
    position: relative;
    color: #fff;
}.blogs.breadcrumb-area .breadcrumb-txt {
    padding: 80px 0px 21px 0px!important;
}
.hero_slide_v1 .slick-next {
    display: none!important;
    left: auto;
    right: -100%;
}.carousel-inner>.item>a>img, .carousel-inner>.item>img, .img-responsive, .thumbnail a>img, .thumbnail>img {
    display: block;
    max-width: 100%!important;
    margin: auto!important;
    height: 200px!important;
}.blog-lists .single-blog {
    margin-bottom: 30px;
    border: 13px solid #fafafa!important;
    position: relative;
    padding: 0!important;
}
.we_do_v1 .finlance_content_box {
    text-align: center;
}}

      </style>
   </head>



   <body @if($rtl == 1) dir="rtl" @endif>


    <!-- Start finlance_header area -->
    @includeIf('front.construction.partials.navbar')
    <!-- End finlance_header area -->


    @yield('content')


    <!--    announcement banner section start   -->
    <a class="announcement-banner" href="{{asset('assets/front/img/'.$bs->announcement)}}"></a>
    <!--    announcement banner section end   -->


    <!-- Start finlance_footer section -->
    <footer class="finlance_footer footer_v1 dark_bg">
        @if ($bs->top_footer_section == 1)
        <div class="footer_top pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="widget_box about_widget">
                            <img src="{{asset('assets/front/img/'.$bs->footer_logo)}}" class="img-fluid" alt="">
                            <p>
                                @if (strlen(convertUtf8($bs->footer_text)) > 170)
                                   {{substr(convertUtf8($bs->footer_text), 0, 170)}}<span style="display: none;">{{substr(convertUtf8($bs->footer_text), 170)}}</span>
                                   <a href="#" class="see-more">see more...</a>
                                @else
                                   {{convertUtf8($bs->footer_text)}}
                                @endif
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="widget_box contact_widget">
                            <h4 class="widget_title">{{__('Contact Us')}}</h4>
                            <p>{{convertUtf8($bs->contact_address)}}</p>
                            <p>{{__('Phone')}}: <a href="#">{{convertUtf8($bs->contact_number)}} </a></p>
                            <p>{{__('Email')}}: <a href="#">{{convertUtf8($be->to_mail)}}</a></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="widget_box">
                            <h4 class="widget_title">{{__('Useful Links')}}</h4>
                            <ul class="widget_link">
                                @foreach ($ulinks as $key => $ulink)
                                    <li><a href="{{$ulink->url}}">{{convertUtf8($ulink->name)}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="widget_box newsletter_box">
                            <h4 class="widget_title">{{__('Newsletter')}}</h4>
                            <p>{{convertUtf8($bs->newsletter_text)}}</p>
                            <form id="footerSubscribeForm" action="{{route('front.subscribe')}}" method="post">
                                @csrf
                                <div class="form_group">
                                    <input type="email" class="form_control" placeholder="{{__('Enter Email Address')}}" name="email" required>
                                    <p id="erremail" class="text-danger mb-0 err-email"></p>
                                    <button class="finlance_btn pt-0" type="submit">{{__('Subscribe')}}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        @if ($bs->copyright_section == 1)
        <div class="footer_bottom">
            <div class="container">
                <div class="row align-items-center">
                     <div class="col-lg-12">
                        <div class="social_box text-center">
                            <p style="color:#000;padding-bottom:13px;font-size:21px;font-weight:bold;text-center:center;">تواصل معنا</p>
                            <ul>
                                @foreach ($socials as $key => $social)
                                    <li><a target="_blank" href="{{$social->url}}"><i class="{{$social->icon}}"></i></a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12 ">
                        <div class="copyright_text  text-center">
                            <p style="color:#e6212a;padding-top:15px;font-size:21px;font-weight:bold;text-center:center;">مجموعة المركز الدهبي للمقاولات العامة | 2020 - جميع الحقوق محفوظة </p>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        @endif
    </footer><!-- End finlance_footer section -->



    <!-- preloader section start -->
    <div class="loader-container">
        <span class="loader">
        <span class="loader-inner"></span>
        </span>
    </div>
    <!-- preloader section end -->

    <!--Scroll-up-->
    <a id="scroll_up" ><i class="fas fa-angle-up"></i></a>


    {{-- Cookie alert dialog start --}}
    @if ($be->cookie_alert_status == 1)
    @include('cookieConsent::index')
    @endif
    {{-- Cookie alert dialog end --}}

      @php
        $mainbs = [];
        $mainbs['is_announcement'] = $bs->is_announcement;
        $mainbs['announcement_delay'] = $bs->announcement_delay;
        $mainbs = json_encode($mainbs);
      @endphp
      <script>
        var lat = {{$bs->latitude}};
        var lng = {{$bs->longitude}};
        var mainbs = {!! $mainbs !!};

        var rtl = {{ $rtl }};
      </script>
      <!-- popper js -->
      <script src="{{asset('assets/front/js/popper.min.js')}}"></script>
      <!-- bootstrap js -->
      <script src="{{asset('assets/front/js/bootstrap.min.js')}}"></script>
      <!-- Plugin js -->
      <script src="{{asset('assets/front/js/plugin.min.js')}}"></script>
      @if (request()->path() == 'contact')
      <!-- google map api -->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC7eALQrRUekFNQX71IBNkxUXcz-ALS-MY&callback=initMap" async defer></script>
      <!-- google map activate js -->
      <script src="{{asset('assets/front/js/google-map-activate.min.js')}}"></script>
      @endif
      <!-- main js -->
      @if ($rtl == 1)
      <script src="{{asset('assets/front/js/construction-rtl-main.js')}}"></script>
      @else
      <script src="{{asset('assets/front/js/construction-main.js')}}"></script>
      @endif

      @yield('scripts')

      @if (session()->has('success'))
      <script>
         toastr["success"]("{{__(session('success'))}}");
      </script>
      @endif

      @if (session()->has('error'))
      <script>
         toastr["error"]("{{__(session('error'))}}");
      </script>
      @endif

      <!--Start of subscribe functionality-->
      <script>
        $(document).ready(function() {
          $("#subscribeForm, #footerSubscribeForm").on('submit', function(e) {
            // console.log($(this).attr('id'));

            e.preventDefault();

            let formId = $(this).attr('id');
            let fd = new FormData(document.getElementById(formId));
            let $this = $(this);

            $.ajax({
              url: $(this).attr('action'),
              type: $(this).attr('method'),
              data: fd,
              contentType: false,
              processData: false,
              success: function(data) {
                // console.log(data);
                if ((data.errors)) {
                  $this.find(".err-email").html(data.errors.email[0]);
                } else {
                  toastr["success"]("You are subscribed successfully!");
                  $this.trigger('reset');
                  $this.find(".err-email").html('');
                }
              }
            });
          });
        });
      </script>
      <!--End of subscribe functionality-->

      <!--Start of Tawk.to script-->
      @if ($bs->is_tawkto == 1)
      {!! $bs->tawk_to_script !!}
      @endif
      <!--End of Tawk.to script-->

      <!--Start of AddThis script-->
      @if ($bs->is_addthis == 1)
      {!! $bs->addthis_script !!}
      @endif
      <!--End of AddThis script-->
   </body>
</html>

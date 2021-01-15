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
      <link rel="stylesheet" href="{{asset('assets/front/css/car-style.css')}}">
      <!-- responsive css -->
      <link rel="stylesheet" href="{{asset('assets/front/css/responsive.css')}}">
      <!-- car responsive css -->
      <link rel="stylesheet" href="{{asset('assets/front/css/car-responsive.css')}}">

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
      <link href="{{url('/')}}/assets/front/css/car-base-color.php?color={{$bs->base_color}}" rel="stylesheet">


      @if ($rtl == 1)
      <!-- RTL css -->
      <link rel="stylesheet" href="{{asset('assets/front/css/rtl.css')}}">
      <link rel="stylesheet" href="{{asset('assets/front/css/car-rtl.css')}}">
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
      .pricing_v1 {
    background: url(http://sharaa.digi-gate.tech/assets/front/img/pattern.jpg);
    position: relative;background-repeat:no-repeat;background-size:cover;
}.finlance_project{background:#fafafa;padding-top:88px;}
          .sticky.header_v1 {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 337;
    background: #fdfdfd;
}.finlance_service .grid_item img {
    HEIGHT: 160PX;
    max-width: 100%;
}.project_slide .grid_item .finlance_img img {
    width: auto;
    height: 360px;
    opacity: 1;
    transition: 1s;
}.project_slide .grid_item .finlance_img .project_overlay {
    display: none;
    background: #FABA32;
}.project_slide .grid_item .finlance_img:hover .project_overlay{padding:22px;display:inline;}

          .brand a img{width: 109px;
    padding: 12px;}
    .partner_v1 {background:#fafafa;
    border-bottom: 1px solid #e5e7ea;
    padding: 74px 0;
}.partner_v1 {
    border-bottom: 1px solid #e5e7ea;
    padding-bottom: 74px;
}.slick-initialized .slick-slide {
    padding: 12px;
    display: block;
    border: none;
}.finlance_service .grid_item img {
    HEIGHT: 350px;
    width: 100%;
}.hero_slide_v1 .single_slider .banner_content h3 {
    font-weight: 500;    width: 70%;
    color: #333;
    line-height: 1.1em;
}
.finlance_icon img {
    HEIGHT:160px!important;
    max-width:auto!important;
    width:auto!important;
}.footer_v1 .widget_box.about_widget img {
    margin-bottom: 10px;
    width: 120px;
}.pb-120 {
    padding-bottom: 80px;
}.breadcrumb-area .breadcrumb-txt {
    padding: 40px 0px 40px;
}
.footer_v1 .widget_box h4.widget_title {
    color: #faba32;
    margin-bottom: 35px;
}
.pt-120 {
    padding-top: 80px;
}
.project_slide .grid_item .finlance_img img {
    width: auto;
    height: 350px;
    opacity: 1;
    transition: 1s;
}
    .header_v1 .top_header {
   
    padding: 7px 0;
    border-bottom: 1px solid #dfdfdf;
}.bg_overlay{opacity:0!important;}.hero_slide_v1 .single_slider {
    position: relative;
    padding: 120px 0 200px;
}.hero_slide_v1 .single_slider .banner_content h1 {
    color: #007bff;
    text-transform: uppercase;
    margin-bottom: 15px;
}.hero_slide_v1 .single_slider .banner_content h3 {
    font-weight: 500;
    color: #333;}
    .header_v1 {
    background: #fdfdfd;
    position: relative;
}.button_box,.about_v1 .section_title {
    padding-left: 195px;padding-right:80px;
}.section_title span {
    font-size: 42px;
    color: #007bff;
}.finlance_btn {
    background: #007bff;
}.finlance_header.header_v1 .container-fluid {
    padding-left: 0;
    padding-right: 0;
}.partner_v1 .partner_slide .single_partner img {
    margin: 0 auto;
    width: 120px;
}
.header_v1 .top_header {
    padding: 7px 0;
    border-bottom: 1px solid #dfdfdf;
    padding: 5px 72px;
    color: #000;
    background: #faba32;
}.header_v1 .top_header .top_left span a {
    color: #000;
    opacity: 1;
}.header_v1 .top_header .top_left span i {
    margin-right: 10px;
    opacity: .8;
    color: #007bff;
}.header_v1 .top_header .top_right .social li a {
    color: #212529;
}.blog_v1 .grid_item .finlance_content h3.post_title a {
    color: #007bff;
}.header_v1 .header_navigation {
    background: transparent;
    padding: 0px 54px;
}.cta_v1 .section_title h2 {
    font-weight: 600;
    color: #ffc107;
}.finlance_fun_v1 .counter_box .icon::after {
    position: absolute;
    content: '';
    top: 0;
    left: 0px;
    width: 80px;
    height: 80px;
    border-radius: 50%;
    background: #fff;
    z-index: -1;
}.finlance_fun_v1 .counter_box .icon i {
    display: block;
    margin-top: 19px;
    font-size: 40px;
    margin-left: 20px;}
    .loader-container{display:none;}
    .finlance_fun_v1 .counter_box h2 {
    
    color: #fff;
    margin-bottom: 5px;
}.blog_v1 .grid_item .finlance_img img {
    width: 100%;
    height: 423px;
}.finlance_fun_v1 .counter_box h4 {
    letter-spacing: .50px;
    font-weight: 600;
    color: #ffc107;
}.project_slide .grid_item .finlance_img:hover .project_overlay{display:block;}
    
@media only screen and (max-width: 991px){.button_box, .about_v1 .section_title {
    padding-left: unset;
    padding-right: unset;
}
.counter_box {
    text-align: center;
}
#comp-jx1eg6cr{
	
    left: unset !important;
    width:100%;
   
}.hero_slide_v1 .single_slider {
    position: relative;
    padding: 36px 0px;
}
.mean-container a.meanmenu-reveal {
    top: -56px;
    padding: 0;
}

.header_v1 .site_menu {
    padding:0;}
    
      </style>
   </head>



   <body @if($rtl == 1) dir="rtl" @endif>


    <!-- Start finlance_header area -->
    @includeIf('front.car.partials.navbar')
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
                            <img src="{{asset('assets/front/img/'.$bs->footer_logo)}}" alt="">
                            <p>
                                @if (strlen(convertUtf8($bs->footer_text)) > 140)
                                   {{substr(convertUtf8($bs->footer_text), 0, 140)}}<span style="display: none;">{{substr(convertUtf8($bs->footer_text), 140)}}</span>
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
                    <div class="col-lg-6">
                        <div class="copyright_text">
                            <p>{!! replaceBaseUrl(convertUtf8($bs->copyright_text)) !!}</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="social_box">
                            <ul>
                                @foreach ($socials as $key => $social)
                                    <li><a target="_blank" href="{{$social->url}}"><i class="{{$social->icon}}"></i></a></li>
                                @endforeach
                            </ul>
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
      <script src="{{asset('assets/front/js/car-rtl-main.js')}}"></script>
      @else
      <script src="{{asset('assets/front/js/car-main.js')}}"></script>
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

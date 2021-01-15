@extends("front.$version.layout")

@section('pagename')
 - {{convertUtf8($page->name)}}
@endsection

@section('meta-keywords', "$page->meta_keywords")
@section('meta-description', "$page->meta_description")

@section('content')
  <!--   breadcrumb area start   -->
  <div class="breadcrumb-area" style="background-image: url('{{asset('assets/front/img/' . $bs->breadcrumb)}}');background-size:cover;">
     <div class="container">
        <div class="breadcrumb-txt">
           <div class="row">
              <div class="col-xl-7 col-lg-8 col-sm-10">
                 <span>{{convertUtf8($page->title)}}</span>
                 <h1>{{convertUtf8($page->subtitle)}}</h1>
                 <ul class="breadcumb">
                    <li><a href="{{route('front.index')}}">{{__('Home')}}</a></li>
                    <li>{{convertUtf8($page->name)}}</li>
                 </ul>
              </div>
           </div>
        </div>
     </div>
     <div class="breadcrumb-area-overlay" style="background-color: #{{$be->breadcrumb_overlay_color}};opacity: {{$be->breadcrumb_overlay_opacity}};"></div>
  </div>
  <!--   breadcrumb area end    -->


  <!--   about company section start   -->
  <div class="about-company-section pt-115 pb-80">
     <div class="container">
        <div class="row">
           <div class="col-lg-12">
             {!! replaceBaseUrl(convertUtf8($page->body)) !!}
           </div>
        </div>
     </div>
  </div>
  <!--   about company section end   -->
  

    <section  class="finlance_testimonial testimonial_v1 pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center">
                        <span>{{convertUtf8($bs->testimonial_title)}}</span>
                        <h2>{{convertUtf8($bs->testimonial_subtitle)}}</h2>
                    </div>
                </div>
            </div>
            <div class="testimonial_slide">
                @foreach ($testimonials as $key => $testimonial)
                    <div class="testimonial_box d-flex align-items-center">
                        <div class="finlance_img">
                            <img src="{{asset('assets/front/img/testimonials/'.$testimonial->image)}}" class="img-fluid" alt="">
                        </div>
                        <div class="finlance_content">
                            <h4>{{convertUtf8($testimonial->name)}}</h4>
                            <h6>{{convertUtf8($testimonial->rank)}}</h6>
                            <p>{{convertUtf8($testimonial->comment)}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <br>
    <br>
    <!-- End finlance_testimonial section -->
    
    
    
@endsection

@extends("front.$version.layout")

@section('pagename')
- {{__('Service')}} - {{convertUtf8($service->title)}}
@endsection

@section('meta-keywords', "$service->meta_keywords")
@section('meta-description', "$service->meta_description")
<style>
  
  @media screen and (min-width: 768px)
  .carousel-caption {
      right: 25%;
      left: 25%;
      padding-bottom: 30px;
  }
  .carousel-inner>.item>a>img, .carousel-inner>.item>img, .img-responsive, .thumbnail a>img, .thumbnail>img {
       height: 490px!important;
  }
  .carousel-caption {
     color: #403f3f;
      text-align: center;
      text-shadow: unset;
  }
</style>
@section('content')
<!--   breadcrumb area start   -->
<div class="breadcrumb-area"
    style="background-image: url('{{asset('assets/front/img/' . $bs->breadcrumb)}}');background-size:cover;">
    <div class="container">
        <div class="breadcrumb-txt">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-sm-12">
                    <span>{{convertUtf8($bs->service_details_title)}}</span>
                    <h1>{{convertUtf8($service->title)}}</h1>
                    <ul class="breadcumb">
                        <li><a href="{{route('front.index')}}">{{__('Home')}}</a></li>
                        <li>{{__('Service Details')}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb-area-overlay"
        style="background-color: #{{$be->breadcrumb_overlay_color}};opacity: {{$be->breadcrumb_overlay_opacity}};">
    </div>
</div>
<!--   breadcrumb area end    -->


<!--    services details section start   -->
<div class="pt-115 pb-60 service-details-section"  Style="text-align: -webkit-center;background-image:url('http://gce.rimona.net/assets/front/img/rewrf.jpg');background-size:cover;width:100%;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="service-details">
                    {!! $service->content !!}
                </div>
            </div>
            <!--    service sidebar start   -->
            <div class="col-lg-4" style="display:none;">
                <div class="blog-sidebar-widgets">
                    <div class="searchbar-form-section">
                        <form action="{{route('front.services')}}">
                            <div class="searchbar">
                                <input name="category" type="hidden" value="{{request()->input('category')}}">
                                <input name="term" type="text" placeholder="{{__('Search Services')}}"
                                    value="{{request()->input('term')}}">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                @if (hasCategory($be->theme_version))
                <div class="blog-sidebar-widgets category-widget">
                    <div class="category-lists job">
                        <h4>{{__('Categories')}}</h4>
                        <ul>
                            @foreach ($scats as $key => $scat)
                            <li
                                class="single-category {{(!empty($service->scategory) && $service->scategory->id == $scat->id) ? 'active' : ''}}">
                                <a
                                    href="{{route('front.services', ['category' => $scat->id, 'term'=>request()->input('term')])}}">{{convertUtf8($scat->name)}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endif
                <div class="subscribe-section">
                    <span>{{__('SUBSCRIBE')}}</span>
                    <h3>{{__('SUBSCRIBE FOR NEWSLETTER')}}</h3>
                    <form id="subscribeForm" class="subscribe-form" action="{{route('front.subscribe')}}" method="POST">
                        @csrf
                        <div class="form-element"><input name="email" type="email" placeholder="{{__('Email')}}"></div>
                        <p id="erremail" class="text-danger mb-3 err-email"></p>
                        <div class="form-element"><input type="submit" value="{{__('Subscribe')}}"></div>
                    </form>
                </div>
            </div>
            <!--    service sidebar end   -->
        </div>
    </div>
</div>
<!--    services details section end   -->
















@if (count(DB::table('sections')->orderBy('id','desc')->where('service',$service->id)->limit(12)->where('Type',"Logo")->get())>0)

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<div class="container">
    <h2 style="text-align: initial;font-weight:bold;color:red;"> اللوجهات</h2>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">

        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
  @php
      $as=1;
      $ac=0
  @endphp
        @foreach (DB::table('sections')->orderBy('id','desc')->where('service',$service->id)->where('Type',"Logo")->get() as $key => $servicess)

        <li data-target="#myCarousel" data-slide-to="{{ $as++ }}"></li>
        @endforeach
      </ol>
  
      <!-- Wrapper for slides -->
      <div class="carousel-inner">

        @foreach (DB::table('sections')->orderBy('id','desc')->where('service',$service->id)->where('Type',"Logo")->get() as $key => $servicess)
        @php
        $ac++;
        if($ac==1){
         $active="active";
        }else{
            $active="";
        }
    @endphp
        <div class="item {{ $active }}">
            
          <img src="{{asset('assets/front/img/Logo/' . $servicess->File)}}" alt="Los Angeles" style="width:100%;">
          <div class="carousel-caption">
            <h3>{{ $servicess->Title }}</h3>
            <p>{!! $servicess->paragraph !!}</p>
          </div>
        </div>
        @endforeach
  
      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
<hr>
<br>
  @endif










  @if (count(DB::table('sections')->orderBy('id','desc')->where('service',$service->id)->where('Type',"Products")->get())>0)


  <section class="finlance_team team_v1 gray_bg pt-100 pb-75">
      <div class="container">
          <h3 style="text-align: initial;font-weight:bold;color:red;">منتجاتنا</h3>
          <div class="row align-items-center">
              <div class="col-lg-8">
                  <div class="section_title">
                  </div>
              </div>
              <div class="col-lg-4">
                  <div class="button_box">
                  </div>
              </div>
          </div>
          <div class="team_slide team-slick text-center" >
              @foreach (DB::table('sections')->orderBy('id','desc')->where('service',$service->id)->where('Type',"Products")->limit(12)->get() as $key => $partner)
              <div class="grid_item">
                      <div class="grid_inner_item">
                          <div class="finlance_img">
                              <img src="{{asset('assets/front/img/Productsss/'.$partner->File)}}" class="img-fluid" alt="">
                              <div class="overlay_content">
                                  <div class="social_box">
                      
                                  </div>
                              </div>
                          </div>
                          <div class="finlance_content text-center">
                          </div>
                      </div>
                  </div>
              @endforeach
          </div>
      </div>
  </section>
  
  @endif





@if (count(DB::table('sections')->orderBy('id','desc')->where('service',$service->id)->where('Type',"Projects")->get())>0)

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<div class="container">
    <h2 style="text-align: initial;font-weight:bold;color:red;">من مشاريعنا</h2>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">

        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
  @php
      $as=1;
      $ac=0
  @endphp
        @foreach (DB::table('sections')->orderBy('id','desc')->where('service',$service->id)->where('Type',"Projects")->get() as $key => $servicess)

        <li data-target="#myCarousel" data-slide-to="{{ $as++ }}"></li>
        @endforeach
      </ol>
  
      <!-- Wrapper for slides -->
      <div class="carousel-inner">

        @foreach (DB::table('sections')->orderBy('id','desc')->where('service',$service->id)->where('Type',"Projects")->get() as $key => $servicess)
        @php
        $ac++;
        if($ac==1){
         $active="active";
        }else{
            $active="";
        }
    @endphp
        <div class="item {{ $active }}">
            
          <img src="{{asset('assets/front/img/Projects/' . $servicess->File)}}" alt="Los Angeles" style="width:100%;">
          <div class="carousel-caption">
            <h3>{{ $servicess->Title }}</h3>
            <p>{!! $servicess->paragraph !!}</p>
          </div>
        </div>
        @endforeach
  
      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
<hr>
<br>
  @endif



@endsection


<style>table{border:none!important;text-align:center;}.table-bordered td, .table-bordered th {
    
    border: none;
}

</style>
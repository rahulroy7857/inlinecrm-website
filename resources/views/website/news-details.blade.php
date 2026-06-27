@extends('website.layouts.app')
@section('title', $news->meta_title)
@section('style-css')   
<script src="https://unpkg.com/@phosphor-icons/web"></script>
  <link rel='stylesheet' id='popup-css-css' href="{{url('/website/css/magnific-popup.css')}}" media='all' />
  <link rel="stylesheet" href="{{url('/website/css/swiper-bundle.css')}}" />
  <link rel="stylesheet" href="{{url('/website/css/aos.css')}}">
  <link rel="stylesheet" href="{{url('/website/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{url('/website/css/main.css')}}" />
  <link rel="stylesheet" href="{{url('/website/css/popupstyles.css')}}">
  <script src="{{url('/website/js/jquery.min.js')}}"></script>
@endsection
@section('meta')
<meta name="title" content="{{$news->meta_title}}" />
<meta name="description" content="{{$news->meta}}" />
@endsection
@section('style')   
<style type="text/css">
    .blogs-box {
      border-radius: 33px;
    }
    .blogs-sec-wrap {
      margin-top: 55px;
    }
  </style>
@endsection
@section('content')

<div class="comm-section" data-aos="fade-in" data-duration="200">
      <div class="container">
        <ul class="breadcrumb">
          <li><a href="{{url('/')}}">Home</a></li>
          <li><a href="{{url('/news')}}">News</a></li>
          <li><a>{{$news->title}}</a></li>
        </ul>

        <!-- blog detail -->
        <div class="blog-detail-wrap">
          <h1 class="blog-title">{{$news->title}}</h1>

          <div class="blog-dtl-img">
            <img src="{{url('/storage/news/'.$news->resized_image)}}" alt="{{$news->title}}" title="{{$news->title}}">
          </div>

          <div class="container-tiny">
            <div class="blog-content">
              {!! $news->content !!}
            </div>

            <div class="share-sec">
              <span>Share Blog via :</span>
              <ul class="share-soc-icons">
                <li>
                  <a href="#">
                    <img src="img/icons/linkedin.svg" alt="">
                  </a>
                </li>
                <li>
                  <a href="#">
                    <img src="img/icons/facebook.svg" alt="">
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <!-- related blog sec 
        <div class="blogs-sec-wrap">
          <div class="f-row f-3 f-1024-2 f-640-1">
            <div class="f-col">
              <div class="blogs-box">
                <div class="blogs-img"><img src="img/dub-img-0.jpg" alt=""></div>
                <div class="blogs-dtl">
                  <h3 class="blogs-title">Advance Your Career With an MBA in Dubai
                  </h3>
                  <a href="advance-your-career-with-an-mba-in-dubai.html" class="button line">Read
                  More</a>
                </div>
              </div>
            </div>
            <div class="f-col">
              <div class="blogs-box">
                <div class="blogs-img"><img src="img/dub-img-1.jpg" alt=""></div>
                <div class="blogs-dtl">
                  <h3 class="blogs-title">Enhance Your Career With an Engineering Degree in Dubai
                  </h3>
                  <a href="enhance-your-career-with-an-engineering-degree-in-dubai.html"
                  class="button line">Read More</a>
                </div>
              </div>
            </div>
            <div class="f-col">
              <div class="blogs-box">
                <div class="blogs-img"><img src="img/dub-img-2.jpg" alt=""></div>
                <div class="blogs-dtl">
                  <h3 class="blogs-title">Fly Towards Your Dreams By Studying Aviation in Dubai
                  </h3>
                  <a href="fly-towards-your-dreams-by-studying-aviation-in-dubai.html"
                  class="button line">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>-->

      </div>
    </div>
@endsection
@section('scripts') 
<script src="{{url('/website/js/lenis.min.js')}}"></script>
  <!-- Gsap -->
  <script src="{{url('/website/js/ajax/libs/gsap/3.10.4/gsap.min.js')}}"></script>
  <script src="{{url('/website/js/ajax/libs/gsap/3.10.4/MotionPathPlugin.min.js')}}"></script>
  <script src="{{url('/website/js/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js')}}"></script>
  <!-- aos JS -->
  <script src="{{url('/website/js/aos.js')}}"></script>
  <!-- Swiper Slider -->
  <script src="{{url('/website/js/swiper-bundle.min.js')}}"></script>
  <script src="{{url('/website/js/jquery.magnific-popup.min.js')}}" id="popup-js-js"></script>
  <script src="{{url('/website/js/magni_poup.js')}}"></script>
  <script src="{{url('/website/js/megamenu.js')}}"></script>
  <script src="{{url('/website/js/common.js')}}"></script>
  <script src="{{url('/website/js/index.js')}}"></script>
  <!--popup start-->
  <!-- <script src="{{url('/website/js/popup-form.js')}}" id="popup-form-js-js"></script> -->
  <!--popup form validation script-->

  <!--predictive script-->
  <link rel="stylesheet" href="{{url('/website/css/jquery-ui.css')}}">
  <script src="{{url('/website/js/jquery-ui.min.js')}}"></script>
  <script src="{{url('/website/js/predictive-course.js')}}"></script>
  <script src="{{url('/website/js/popupscript.js')}}"></script>

  <link href="{{url('/website/css/select2.min.css')}}" rel="stylesheet" />
  <script src="{{url('/website/js/select2.min.js')}}"></script>
  <script src="{{url('/website/js/select2.js')}}"></script>
  <!--form data submit common script-->
  <script src="{{url('/website/js/formSubmission.js')}}"></script>
@endsection
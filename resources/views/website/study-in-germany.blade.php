@extends('website.layouts.app')
@section('title', 'Study in '.$name)
@section('style-css')   
<script src="https://unpkg.com/@phosphor-icons/web"></script>
  <link rel='stylesheet' id='popup-css-css' href="{{url('/website/css/magnific-popup.css')}}" media='all' />
  <link rel="stylesheet" href="{{url('/website/css/swiper-bundle.css')}}" />
  <link rel="stylesheet" href="{{url('/website/css/aos.css')}}">
  <link rel="stylesheet" href="{{url('/website/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{url('/website/css/main.css')}}" />
  <link rel="stylesheet" href="{{url('/website/css/popupstyles.css')}}">

  <!--form data submit common script-->
  <script src="{{url('/website/js/jquery.min.js')}}"></script>
@endsection
@section('meta')
<meta name="description" content="{{$country->meta_title}}" />
<meta name="keywords" content="{{$country->meta}}" />
@endsection
@section('style')   
<style type="text/css">
    .count-nums {
      font-size: 36px;
    }
    .moreabout-cont-wrap {
      width: 60%;
    }
    .moreabout-links {
      width: 30%;
    }
    .moreabout-sections {
      line-height: 27px;
    }
  </style>
@endsection
@section('content')
<div class="inner-hero study-hero study-hero2" data-aos="fade-in" data-duration="0">
      <div class="container">
        <div class="inner-hero-wrap">
          <div class="inner-hero-left">
            <h2 class="hero-title-txt"><span class="highlighter">{{$name}}: </span>Study in the <br>Land of Ideas </h2>
            <div class="hdr-search-form-wrap">
              <div class="hero-btns study-hero-btn">
                <a id="openPopup" class="button open-popup" style="cursor:pointer;">Free Expert Consultation</a>
                <a class="button" href="#"  target="_blank" style="cursor:pointer;">View & Download Brochure</a>  
              </div>
            </div>
          </div>
          <div class="inner-hero-right">
            <!-- <img src="{{url('/storage/'.$country->image)}}" alt="Study in {{$name}}"> -->
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <ul class="breadcrumb">
        <li><a href="{{url('/')}}">Home</a></li>
        <li><a>Study Abroad</a></li>
        <li><a>{{$name}}</a></li>
      </ul>
    </div>

    <div class="comm-section" data-aos="fade-in" data-duration="0">
      <div class="container">
        <div class="scholar-sec-wrap">
          <div class="sholar-left">
            <h3 class="sec-title">Study in <span class="highlighter">{{$name}}</span>
            </h3>
            <div class="comm-para">
            {!!$country->overview!!}
            </div>
          </div>
          <div class="sholar-img">
            <img src="{{url('/storage/'.$country->image)}}" alt="Study in {{$name}}">
          </div>
        </div>
      </div>
    </div>

    <div class="comm-section" data-aos="fade-in" data-duration="0">
      <div class="container">
        <h3 class="sec-title text-center">Top MBBS Colleges In <span class="highlighter">Germany</span></h3>
        <div class="moreabout-sec-wrap">
          <div class="moreabout-links">
            @foreach($abroadColleges as $key => $abroadCollege)
            <a href="#section{{$key+1}}" class="section-name">
              <i class="ph ph-building-office"></i>
              <span>{{$abroadCollege->name}}</span>
            </a>
            @endforeach
           
          </div>
          <div class="moreabout-cont-wrap">
            <!-- section 1 -->
            @foreach($abroadColleges as $key => $abroadCollege)
            <section id="section{{$key+1}}" class="moreabout-sections">
              <a href="{{url('/abroad-colleges/'.$abroadCollege->slug)}}"><h4 class="moreabout-dtl-title">{{$abroadCollege->name}}</h4></a>
              <div class="moreabout-dtl-points">
                {!!$abroadCollege->overview!!}
                <br>
                <p><i class="ph ph-map-pin" style="font-size: 30px; color: red;"></i> {{$abroadCollege->location}}</p>
              </div>
              <!-- <a class="button line open-popup">Free Expert Consultation</a> -->
            </section>
            @endforeach
          </div>
        </div>
      </div>
    </div>
@endsection
@section('scripts') 
<script>
      $(function() {
        $("#includeHtml").load("/common/floating_icon.html");
      });
    </script>   
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="{{url('/website/js/lenis.min.js')}}"></script>
  <!-- aos JS -->
  <script src="{{url('/website/js/aos.js')}}"></script>
  <!-- Swiper Slider -->
  <script src="{{url('/website/js/swiper-bundle.min.js')}}"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/carousel/carousel.umd.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/carousel/carousel.autoplay.umd.js"></script>

  <script src="{{url('/website/js/megamenu.js')}}"></script>
  <script src="{{url('/website/js/common.js')}}"></script>
  <script src="{{url('/website/js/about.js')}}"></script>
  <!--popup start-->
  <!-- <script src="{{url('/website/js/popup-form.js')}}" id="popup-form-js-js"></script> -->
  <!--popup form validation script-->

  <!--predictive script-->
  <link rel="stylesheet" href="{{url('/website/css/jquery-ui.css')}}">
  <script src="{{url('/website/js/jquery-ui.min.js')}}"></script>
  <script src="{{url('/website/js/predictive-course.js')}}"></script>
  <script src="{{url('/website/js/popupscript.js')}}"></script>

  <script>
    window.onload = function () {
      let intervalId = setInterval(function () {
        let badgeImage = document.querySelector('#iasBadge img');
        console.log("img: " + badgeImage);

        if (badgeImage) {
          badgeImage.style.width = '120px';
          badgeImage.style.height = '180px';


          var mq10 = window.matchMedia('(max-width: 1000px)');

          var mq5 = window.matchMedia('(max-width: 640px)');
          var mq4 = window.matchMedia('(max-width: 430px)');
          var mq3 = window.matchMedia('(max-width: 393px)');

          if (mq3.matches) {
            console.log(mq3);
                        // $('#iasBadge img').css({                            
                        //     'width': '40px',
                        //     'height': '65px'
                        // });
            $('#iasBadge img').css({
              'width': '150px',
              'height': '200px'
            });

          }

          else if (mq4.matches) {
            console.log(mq4);
            $('#iasBadge img').css({
              'width': '80px',
              'height': '100px'
            });
          }

          else if (mq5.matches) {
            console.log(mq5);
            $('#iasBadge img').css({
              'width': '110px',
              'height': '150px'
            });
          }
          else if (mq10.matches) {
            console.log(mq10);
            $('#iasBadge img').css({
              'width': '100px',
              'height': '110px'
            });
          }

                    // else {
                    //     $('#iasBadge img').css('');
                    // }

          clearInterval(intervalId);
        }
      }, 200);
    };
  </script>
@endsection
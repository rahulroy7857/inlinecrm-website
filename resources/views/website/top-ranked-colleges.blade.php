@extends('website.layouts.app')
@section('title', $title)
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
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script> -->
@endsection
@section('style')   

@endsection
@section('content')
<div class="inner-hero inner-hero-2" data-aos="fade-in" data-duration="0">
    <div class="container">
      <div class="inner-hero-wrap about-hero-wrap">
        <div class="inner-hero-left ">
          <h1 class="hero-title-txt">Explore more about <br><span class="highlighter2">{{$name}}</span></h1>
          <div class="hero-btns top40">
            <a href="{{url('/contact-us')}}" id="openPopup" class="button open-popup" style="cursor:pointer;">Enquire Now</a>
          </div>
        </div>
        <div class="inner-hero-right">
          <img src="{{url('/website/img/engineerboy.png')}}" alt="Explore more about Engineering">
        </div>
      </div>
    </div>
  </div>

  <div class="comm-section" data-aos="fade-in" data-duration="0">
    <div class="container">
      <h3 class="sec-title text-center">Top <span class="highlighter">Ranked {{$name}} Colleges</span> Across the India!</h3>
      <br>
      <div class="comm-para sec-dtl">
        <p class="center">India, being a hub for education and technology, here are some of the <strong>Best {{$name}} Colleges in India</strong>, known for their academic excellence, infrastructure, and placement records:</p>
      </div>

      <div class="courses-box-wrapper">
        <div class="f-row f-3 f-1024-2 f-768-1">
          @foreach($colleges as $college)
          <div class="f-col">
            <a href="{{url('/college-details/'.$college->slug)}}" class="course-box">
              <div class="course-img"><img src="{{url('/storage/colleges/'.$college->resized_image)}}" alt="{{$college->name}}">
              </div>
              <div class="course-dtl">
                <h3 class="course-name">{{$college->name}}</h3>
              </div>
            </a>
          </div>
          @endforeach

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
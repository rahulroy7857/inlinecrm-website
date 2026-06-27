@extends('website.layouts.app')
@section('title', 'Schools')
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
@section('style')   
<style type="text/css">
    .process-box {
      background: #fff;
      padding: 20px;
    }
    .prep-cors-img img {
      border-radius: 0px;
    }
    .prep-corse-box {
      border: 2px solid #091d4a;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }
    .prep-cors-img {
      margin-top: 0px;
    }
    .prep-cors-title {
      font-size: 18px;
    }
    @media (max-width: 768px) {
      .prep-cors-img {
        max-height: 100%;
      }
    }
  </style>
@endsection
@section('content')
<div class="inner-hero school-inner" data-aos="fade-in" data-duration="0">
      <div class="container">
        <div class="inner-hero-wrap about-hero-wrap">
          <div class="inner-hero-left ">
            <h1 class="hero-title-txt">Learn Today <br><span class="highlighter">Lead Tomorrow</span>
            </h1>

            <div class="hero-btns top40">
              <a id="openPopup" class="button open-popup" style="cursor:pointer;">Enquire Now</a>
            </div>
          </div>
          <div class="inner-hero-right">
            <img src="{{url('/website/img/schoolboybanner.webp')}}" alt="School banner">
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <ul class="breadcrumb">
        <li><a href="{{url('/')}}">Home</a></li>
        <li><a>Schools</a></li>
      </ul>
    </div>

    <!-- school sec -->
    <div class="comm-section" data-aos="fade-in" data-duration="0">
      <div class="container">
        <div class="scholar-sec-wrap">
          <div class="sholar-left" data-aos="fade-right" data-duration="200">
            <h3 class="sec-title"><span class="highlighter">Schools</span></h3>
            <div class="comm-para">
              <p><strong>"A school is a building which has four walls with tomorrow inside."</strong></p>
              <p>Bangalore is home to a wide variety of educational establishments offering courses in CBSE, ICSE, IB, IGCSE, and State Boards. An outline of Bangalore's major educational boards and a few of the best schools connected to them is provided below</p>
            </div>
          </div>
          <div class="sholar-img" data-aos="fade-left" data-duration="200">
            <img src="{{url('/website/img/schoolextra.webp')}}" alt="PUC">
          </div>
        </div>
      </div>
    </div>

    <!-- Educational Boards in Bangalore -->
    <div class="comm-section blue-bg" data-aos="fade-in" data-duration="0" id="boards">
      <div class="container">
        <div class="f-row f-1">
          <div class="f-col">
            <h3 class="sec-title text-white mb-40">Educational Boards in Bangalore</h3>
          </div>
        </div>
        <div class="f-row f-3">
          <div class="f-col mb-30">
            <div class="process-box">
              <div class="process-box-title">Central Board of Secondary Education (CBSE)</div>
              <div class="comm-para">
                <p class="ta-l2">A national-level board emphasizing a balanced curriculum with a focus on science and mathematics.</p>
              </div>
            </div>
          </div>
          <div class="f-col mb-30">
            <div class="process-box">
              <div class="process-box-title">Indian Certificate of Secondary Education (ICSE)</div>
              <div class="comm-para">
                <p class="ta-l2">Known for its comprehensive and detailed syllabus, fostering analytical skills and a strong foundation in English.</p>
              </div>
            </div>
          </div>
          <div class="f-col mb-30">
            <div class="process-box">
              <div class="process-box-title">International Baccalaureate (IB)</div>
              <div class="comm-para">
                <p class="ta-l2">An internationally recognized program promoting critical thinking and a global perspective.</p>
              </div>
            </div>
          </div>
          <div class="f-col mb-30">
            <div class="process-box">
              <div class="process-box-title">International General Certificate of Secondary Education (IGCSE)</div>
              <div class="comm-para">
                <p class="ta-l2">An internationally recognized qualification offering a broad and balanced curriculum.</p>
              </div>
            </div>
          </div>
          <div class="f-col mb-30">
            <div class="process-box">
              <div class="process-box-title">State Board</div>
              <div class="comm-para">
                <p class="ta-l2">Managed by the Karnataka State Government, focusing on regional languages and local relevance.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Top Schools In Bangalore -->
    <div class="comm-section pt-80" data-aos="fade-in" data-duration="0" id="topschools">
      <div class="container">
        <div class="f-row f-1">
          <div class="f-col">
            <h3 class="sec-title mb-40">Top <span class="highlighter">Schools In Bangalore</span></h3>
          </div>
        </div>
        <div class="f-row f-3">
          @foreach($schools as $school)
          <div class="f-col mb-30">
            <div class="prep-corse-box">
              <div class="prep-cors-img"><img src="{{url('/storage/schools/'.$school->resized_image)}}" alt="{{$school->name}}"></div>
              <div class="prep-corse-content">
                <h4 class="prep-cors-title"><a href="{{url('/school-details/'.$school->slug)}}" style="color: #091d4a;">{{$school->name}}</a></h4>
                <div class="comm-para">
                  <ul class="prep-cors-ul">
                    <li><strong>Board:</strong> {{$school->board}}</li>
                    <li><strong>Overview:</strong> {!!Str::limit($school->overview, 100)!!}</li>
                  </ul>
                </div>
                <!-- <a href="#" class="button line">Read More</a> -->
              </div>
            </div>
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
  <script>
    function isNumberKey(evt) {
      var charCode = (evt.which) ? evt.which : evt.keyCode
      if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
      return true;
    }

    window.onload = function () {
      let intervalId = setInterval(function () {
        let badgeImage = document.querySelector('#iasBadge img');

        console.log("img: " + badgeImage);
        badgeImage.alt = 'ICEF Accredited - ICEF Agency Status'; // Added on 10.21.2024 for Alt Atrribute 

        if (badgeImage) {
          badgeImage.style.width = '120px';
          badgeImage.style.height = '180px';

          var mq10 = window.matchMedia('(max-width: 1000px)');

          var mq5 = window.matchMedia('(max-width: 640px)');
          var mq4 = window.matchMedia('(max-width: 430px)');
          var mq3 = window.matchMedia('(max-width: 393px)');

          if (mq3.matches) {
            // console.log(mq3);
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
            // console.log(mq4);
            $('#iasBadge img').css({
              'width': '80px',
              'height': '100px'
            });
          }

          else if (mq5.matches) {
            // console.log(mq5);
            $('#iasBadge img').css({
              'width': '110px',
              'height': '150px'
            });
          }
          else if (mq10.matches) {
            // console.log(mq10);
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
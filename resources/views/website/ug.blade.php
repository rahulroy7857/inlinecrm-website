@extends('website.layouts.app')
@section('title', 'PUC')
@section('style-css')   
 <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
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
<meta name="description" content="" />
<meta name="keywords" content="" />
@endsection
@section('style')   
<style>
    .course-slider-wrap .courseSwiper {
      border: 0px solid transparent;
      margin-top: 30px;
    }
  </style>
  <style>
    /* Override jQuery UI accordion header + content with Tailwind */
    .ui-accordion .ui-accordion-header {
      @apply bg-sky-100 text-sky-800 px-4 py-3 rounded-md !important;
      display: flex !important;
      align-items: center !important;
      justify-content: space-between !important;
    }

    .ui-accordion .ui-accordion-content {
      @apply bg-white text-gray-800 px-4 py-3 !important;
      transition: all 0.3s ease-in-out !important;
    }

    /* Remove default icon padding */
    .ui-accordion .ui-accordion-header-icon {
      display: none !important;
    }

    /* Fix SVG arrow */
    .accordion-arrow {
      transition: transform 0.3s ease;
    }

    .rotate-180 {
      transform: rotate(180deg);
    }
    .ui-state-active{
      background: var(--clr-primary2) !important;
    }
  .custom-list{
    padding-left: 10px;
  }
     .custom-list li {
      text-align: left;
      a{
        color:  var(--clr-primary2);
        &:hover{
          text-decoration: underline;
        }
      }
    }

    .custom-list li::before {
      content: '';
      position: absolute;
      left: 0;
      top: 0.6rem;
      width: 6px;
      height: 6px;
      background-color: #1d4ed8; /* blue-700 */
    }
    .swiper-button-prev-course,
.swiper-button-next-course {
  background-color: white;
  border-radius: 50%;
  padding: 6px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.swiper-button-prev-course:hover,
.swiper-button-next-course:hover {
  background-color: #e0f2fe; /* sky-100 */
}

     @media (max-width: 576px) {
      .bb-border {
    padding: 0 10px;
     }
    }
  </style>
@endsection
@section('content')
<div class="inner-hero inner-hero-7" data-aos="fade-in" data-duration="0">
      <div class="container">
        <div class="inner-hero-wrap about-hero-wrap">
          <div class="inner-hero-left ">
            <h1 class="hero-title-txt">Explore <span class="highlighter">UG</span><br> Colleges
            </h1>
            <div class="hero-btns top40">
              <a id="openPopup" href="{{url('/contact-us')}}" class="button open-popup" style="cursor:pointer;">Enquire Now</a>
            </div>
          </div>
          <div class="inner-hero-right">
            <img src="{{url('/website/img/ug.png')}}" alt="UG">
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <ul class="breadcrumb">
        <li><a href="{{url('/')}}">Home</a></li>
        <li><a>Other Courses</a></li>
        <li><a>UG</a></li>
      </ul>
    </div>

    <!-- UG sec -->
    <div class="comm-section" data-aos="fade-in" data-duration="0">
      <div class="container">
        <div class="scholar-sec-wrap">
          <div class="sholar-left" data-aos="fade-right" data-duration="200">
            <h3 class="sec-title"><span class="highlighter">UG Course</span></h3>
            <div class="comm-para">
              <p>Your higher education journey begins with an undergraduate degree (UG), which equips you with the fundamental academic knowledge and abilities needed for a prosperous profession. Selecting the appropriate undergraduate course is essential to determining your future, regardless of your career goals in engineering, business, medical sciences, law, or any other field. We at KG2PG provide professional advice to assist you in choosing the ideal undergraduate program that fits your interests, abilities, and professional goals.</p>
            </div>
          </div>
          <div class="sholar-img" data-aos="fade-left" data-duration="200">
            <img src="{{url('/website/img/ug/ugextra.png')}}" alt="UG">
          </div>
        </div>
      </div>
    </div>

    <!-- Streams -->
    <div class="comm-section" data-aos="fade-in" data-duration="200">
      <div class="container">
        <h3 class="sec-title text-center"><span class="highlighter">Streams</span></h3>
        <div class="course-slider-wrap bb-border">
          <div class="relative">
  <!-- Left Arrow -->
  <div class="swiper-button-prev-course absolute left-0 top-1/2 -translate-y-1/2 z-10 cursor-pointer">
    <svg class="w-6 h-6 text-sky-700" fill="none" stroke="currentColor" stroke-width="2"
      viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
    </svg>
  </div>
            <div thumbsSlider="" class="swiper courseSwiper px-6">
              <div class="swiper-wrapper">
                @foreach($departments as $department)
                <div class="swiper-slide">
                  <div class="course-country">
                    <p>{{ $department->name }}</p>
                  </div>
                </div>
                @endforeach
                
              </div>
            </div>
  <!-- Right Arrow -->
    <div class="swiper-button-next-course absolute right-0 top-1/2 -translate-y-1/2 z-10 cursor-pointer">
      <svg class="w-6 h-6 text-sky-700" fill="none" stroke="currentColor" stroke-width="2"
        viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
      </svg>
    </div>

          </div>

          <div class="swiper courseSwiper2">
            <div class="swiper-wrapper">
              @foreach($departments as $department)
              <div class="swiper-slide" >
                <div class="courses-slides">
                  <div class="f-row f-1">
                    <div class="f-col">
                     
                      <div class="ba-style" style="text-align:center">{{$department->name}}</div>
                      <div class="comm-para">
                        <p>{{ $department->details }}</p>
                      </div>
                    </div>
                    <div class="f-col">
                      <div class="spe-tittle">Courses</div>
                    </div>
                  </div>
                  <div class="f-row f-5">
                    @foreach($department->ugCourses as $course)
                    <div class="f-col">
                      <div class="spe-col">{{ $course->name }}</div>
                    </div>
                    @endforeach
                  </div>


                  <br><br>
                  <div class="f-row f-1">
                    <div class="f-col">
                      <div class="spe-tittle">Top {{ $department->name }} College In Bangalore</div>
                      <ul class="some-ul text-left">
                          @foreach($department->collegeCourses as $clgCourse)
                          @if($clgCourse->college)
                          <li><a href="{{url('/college-details/'.$clgCourse->college->slug )}}" >{{ $clgCourse->college->name }}</a></li>
                          @endif
                          @endforeach
                      </ul>
                    </div>
                  </div>

                </div>
              </div>
              @endforeach
             
            </div>
          </div>

        </div>
      </div>
    </div>
@endsection
@section('scripts') 
  <script>
  
     $(document).ready(function () {
    $('[id^="accordion-"]').each(function () {
      const $accordion = $(this);
      
      $accordion.accordion({
        header: "h3",
        collapsible: true,
        active: false,
        heightStyle: "content",
        icons: false,
        create: function () {
          $accordion.find(".accordion-arrow").removeClass("rotate-180");
        },
        activate: function (event, ui) {
          $accordion.find(".accordion-arrow").removeClass("rotate-180");
          ui.newHeader.find(".accordion-arrow").addClass("rotate-180");
        }
      });
    });

 
  });
  </script>
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
  <script src="{{url('/website/js/formSubmission.js')}}"></script>
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
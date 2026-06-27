@extends('website.layouts.app')
@section('title', 'Disclaimer')
@section('style-css')   
<script src="https://unpkg.com/@phosphor-icons/web"></script>
  <link rel='stylesheet' id='popup-css-css' href="{{url('/website/css/magnific-popup.css')}}" media='all' />
  <link rel="stylesheet" href="{{url('/website/css/swiper-bundle.css')}}" />
  <link rel="stylesheet" href="{{url('/website/css/aos.css')}}">
  <link rel="stylesheet" href="{{url('/website/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/carousel/carousel.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/carousel/carousel.autoplay.css" />
  <link rel="stylesheet" href="{{url('/website/css/main.css')}}" />
  <link rel="stylesheet" href="{{url('/website/css/gallery.css')}}" />

  <!--form data submit common script-->
  <script src="{{url('/website/js/jquery.min.js')}}"></script>
@endsection
@section('style')   
<style type="text/css">
    .dotted-line {
      position: absolute;
      top: 7%;
      left: 50%;
      border: 1px dashed var(--clr-primary2);
      width: 1px;
      height: 85%;
    }
    .adm-proc-step-number .adm-stp-num-wrap .adm-stp-num p {
      background: #091d4a;
      color: var(--clr-white);
    }
    .adm-proc-steps:nth-child(odd) .adm-proc-step-number .adm-stp-num-wrap .adm-stp-num p {
      background: #091d4a;
    }
  </style>
@endsection
@section('content')
<div class="inner-hero inner-hero-2" data-aos="fade-in" data-duration="0">
      <div class="container">
        <div class="inner-hero-wrap adm-guid-hero-wrap">
          <div class="inner-hero-left adminsion-hero-left">
            <h1 class="hero-title-txt">Seamless <span class="highlighter">Admission</span> Journey
            </h1>
            <div class="comm-para">
              <!-- <p>Experience hassle-free abroad admission processes with expert guidance at Edwise.</p> -->
              <a id="openPopup" class="button open-popup" style="cursor:pointer;">Free Expert Consultation</a>
            </div>
          </div>

          <div class="inner-hero-right">
            <img src="{{url('/website/img/admission-guidance/admissionguidance.png')}}" alt="admission-guidance">
          </div>
        </div>
      </div>
    </div>

    <!-- adm proc sec -->
    <div class="comm-section admsn-step-main-div">
      <div class="container-small">
        <h2 class="text-center mb-20">Hassle-Free Admission Pathway</h2>
        <div class="adm-proc-steps-wrap">
          <div class="dotted-line"></div>
          <div class="adm-proc-steps">
            <div class="adm-proc-step-left" data-aos="fade-right" data-duration="0">
              <h3 class="adm-step-title">Professional Guidance for Your Academic Journey</h3>
              <div class="comm-para">
                <p>Our experienced consultants provide in-depth guidance to students at every step of their education journey. With a thorough understanding of global educational systems, we offer personalized advice on selecting the right courses, universities, and career paths. Whether you're exploring study abroad options or navigating local opportunities, our expert team is dedicated to helping you make informed decisions that align with your long-term academic and professional goals.</p>
              </div>
            </div>
            <div class="adm-proc-step-number" data-aos="fade-right" data-duration="0">
              <div class="adm-stp-num-wrap">
                <div class="adm-stp-num">
                  <p>01</p>
                </div>
              </div>
            </div>
            <div class="adm-proc-step-right" data-aos="fade-left" data-duration="0">
              <div class="adm-img"><img src="{{url('/website/img/admission-guidance/professional-guidance.png')}}" alt=""></div>
            </div>
          </div>

          <div class="adm-proc-steps">
            <div class="adm-proc-step-left" data-aos="fade-left" data-duration="200">
              <h3 class="adm-step-title">Choose the Best University, Course, and Country</h3>
              <div class="comm-para">
                <p>For your educational and vocational future, choose the appropriate course, nation, and university is essential. Taking into account your interests, strengths, and professional objectives, our knowledgeable counselors assist you in weighing your options. We help you find the best programs and colleges in different nations, making sure they align with your goals and provide the most chances for development. We help you make the best decisions possible, whether you're searching for specialized programs or the ideal campus setting.</p>
              </div>
            </div>
            <div class="adm-proc-step-number" data-aos="fade-left" data-duration="0">
              <div class="adm-stp-num-wrap">
                <div class="adm-stp-num">
                  <p>02</p>
                </div>
              </div>
            </div>
            <div class="adm-proc-step-right" data-aos="fade-right" data-duration="200">
              <div class="adm-img"><img src="{{url('/website/img/admission-guidance/best-university.png')}}" alt=""></div>
            </div>
          </div>

          <div class="adm-proc-steps">
            <div class="adm-proc-step-left" data-aos="fade-right" data-duration="200">
              <h3 class="adm-step-title">Application Process</h3>
              <div class="comm-para">
                <p>We help you choose the best institutions, universities, and courses in India that fit your objectives and interests. We make sure you are ready and on schedule to fulfill deadlines for everything from filling out application forms, verifying documents, and taking entrance examinations to securing seats. Our staff facilitates your admissions process at the state and federal levels.</p>
              </div>
            </div>
            <div class="adm-proc-step-number" data-aos="fade-right" data-duration="0">
              <div class="adm-stp-num-wrap">
                <div class="adm-stp-num">
                  <p>03</p>
                </div>
              </div>
            </div>
            <div class="adm-proc-step-right" data-aos="fade-left" data-duration="200">
              <div class="adm-img"><img src="{{url('/website/img/admission-guidance/application-process.png')}}" alt=""></div>
            </div>
          </div>

          <div class="adm-proc-steps">
            <div class="adm-proc-step-left" data-aos="fade-left" data-duration="200">
              <h3 class="adm-step-title">Interview Preparation</h3>
              <div class="comm-para">
                <p>When it comes to university admissions, visa eligibility, and visa approval, interviews are essential. We offer committed assistance to help students get ready for any kind of interview. In order to prepare for the questions that are frequently asked by colleges and visa officials, our team holds practice interviews. Experts who are knowledgeable about the subtleties of these interviews conduct these sessions and provide tailored comments. Students can increase their chances of success and approach their interviews with confidence if they have prepared.</p>
              </div>
            </div>
            <div class="adm-proc-step-number" data-aos="fade-left" data-duration="0">
              <div class="adm-stp-num-wrap">
                <div class="adm-stp-num">
                  <p>04</p>
                </div>
              </div>
            </div>
            <div class="adm-proc-step-right" data-aos="fade-right" data-duration="200">
              <div class="adm-img"><img src="{{url('/website/img/admission-guidance/interview-preparation.png')}}" alt=""></div>
            </div>
          </div>

          <div class="adm-proc-steps">
            <div class="adm-proc-step-left" data-aos="fade-right" data-duration="200">
              <h3 class="adm-step-title">Visa Assistance</h3>
              <div class="comm-para">
                <p>We give special attention to every application for admission, whether it is paper based or online. Students and counselors collaborate to thoroughly check and improve documents before submission. Additionally, we provide personalized assessments to institutions, highlighting the student's strengths and suitability for a successful match.</p>
              </div>
            </div>
            <div class="adm-proc-step-number" data-aos="fade-right" data-duration="0">
              <div class="adm-stp-num-wrap">
                <div class="adm-stp-num">
                  <p>05</p>
                </div>
              </div>
            </div>
            <div class="adm-proc-step-right" data-aos="fade-left" data-duration="200">
              <div class="adm-img"><img src="{{url('/website/img/admission-guidance/visa-assistance.png')}}" alt=""></div>
            </div>
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

<link rel="stylesheet" href="{{url('/website/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
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
@endsection
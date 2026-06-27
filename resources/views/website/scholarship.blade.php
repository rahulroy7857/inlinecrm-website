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
    @media (max-width: 1440px) {
      .comm-para p {
        text-align: left;
      }
    }
    .process-box {
      height: auto;
      width: 100%;
      text-align: left;
      margin-bottom: 30px;
    }
    .steps-card {
      border: 2px solid #000000;
      background: linear-gradient(#e8edf4, #e8edf4) padding-box, linear-gradient(252deg, #c6d3e3, #e8edf4, #dde5ee) border-box;
      color: #000000;
    }
  </style>
@endsection
@section('content')
<div class="inner-hero scholorship-inner" data-aos="fade-in" data-duration="0">
      <div class="container">
        <div class="inner-hero-wrap about-hero-wrap">
          <div class="inner-hero-left ">
            <h1 class="hero-title-txt">MBBS Abroad <span class="highlighter">Scholarship</span> Opportunities
            </h1>
            <div class="hero-btns top40">
              <a class="button open-popup modal-toggle" style="cursor:pointer;" data-target="openModal1">Enquire Now</a>
            </div>
          </div>
          <div class="inner-hero-right">
            <img src="{{url('/website/img/scholorship/scholarshipgirl.png')}}" alt="Scholorship Banner Image">
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <ul class="breadcrumb">
        <li><a href="{{url('/')}}">Home</a></li>
        <li><a>Study Abroad</a></li>
        <li><a>Scholarship</a></li>
      </ul>
    </div>

    <!-- Fulfill Your Dream of Studying MBBS Abroad with Scholarships! -->
    <div class="comm-section" data-aos="fade-in" data-duration="0">
      <div class="container">
        <div class="scholar-sec-wrap">
          <div class="sholar-left">
            <h3 class="sec-title">Fulfill <span class="highlighter">Your Dream of Studying</span> MBBS Abroad with Scholarships!</h3>
            <div class="comm-para">
              <p>Are you aspiring to pursue MBBS abroad but worried about financial constraints? We at KG2PG are here to help! Studying medicine in top international universities can be expensive, but with the right scholarships, you can achieve your dream without financial burden.</p>
            </div>
          </div>
          <div class="sholar-img">
            <img src="{{url('/website/img/scholorship/scholarshipextra.png')}}" alt="Scholarship">
          </div>
        </div>
      </div>
    </div>

    <!-- Why Apply for an MBBS Abroad Scholarship? -->
    <div class="comm-section" data-aos="fade-in" data-duration="0">
      <div class="container">
        <div class="sec-title text-center">Why Apply for an <span class="highlighter">MBBS Abroad Scholarship?</span></div>
        <div class="corevalue-swiper-wrap">
          <div class="swiper coreSwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="value-box">
                  <div class="val-cont">
                    <h3 class="value-title">Reduce Tuition Costs </h3>
                    <div class="comm-para">
                      <p>Get partial or full tuition fee waivers.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="value-box">
                  <div class="val-cont">
                    <h3 class="value-title">Financial Assistance</h3>
                    <div class="comm-para">
                      <p>Covers accommodation, living expenses, and travel.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="value-box">
                  <div class="val-cont">
                    <h3 class="value-title">Study in Top Universities</h3>
                    <div class="comm-para">
                      <p>Secure admission to globally recognized medical institutions.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="value-box">
                  <div class="val-cont">
                    <h3 class="value-title">No Repayment Required</h3>
                    <div class="comm-para">
                      <p>Unlike loans, scholarships are a financial aid that doesn’t need to be repaid.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Types of MBBS Scholarships Available -->
    <div class="comm-section onam-color" data-aos="fade-in" data-duration="0">
      <div class="container">
        <div class="sec-title text-center">Types of <span class="highlighter">MBBS Scholarships </span>Available</div>
        <div class="process-sec-wrap">
          <div class="f-row f-1">
            <div class="f-col">
              <div class="process-box">
                <div class="process-box-title">Government-Funded Scholarships</div>
                <div class="comm-para">
                  <p class="mb-15">Many countries provide scholarships for international students pursuing MBBS abroad. Some of them include:</p>
                  <ul class="some-ul">
                    <li><strong>Chinese Government Scholarship (CSC)</strong> – Fully funded for MBBS in China.</li>
                    <li><strong>Russian Government Scholarship</strong> – Covers tuition fees and provides a stipend.</li>
                    <li><strong>Turkey Success Scholarship</strong> – Offers tuition waivers and financial assistance.</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="f-col">
              <div class="process-box">
                <div class="process-box-title">University-Specific Scholarships</div>
                <div class="comm-para">
                  <p>Several medical universities abroad offer merit-based and need-based scholarships, such as:</p>
                  <ul class="some-ul">
                    <li>Orel State University (Russia) MBBS Scholarship</li>
                    <li>Nanjing Medical University (China) International Student Scholarship</li>
                    <li>Kazan Federal University (Russia) Merit Scholarship</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="f-col">
              <div class="process-box">
                <div class="process-box-title">Private and NGO Scholarships</div>
                <div class="comm-para">
                  <p>Various organizations and foundations offer MBBS scholarships for deserving students:</p>
                  <ul class="some-ul">
                    <li>SAARC Medical Scholarship (for students from South Asian countries)</li>
                    <li>Commonwealth Medical Fellowship</li>
                    <li>Islamic Development Bank (IsDB) Scholarship Program</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- details -->
    <div class="comm-section text-center" data-aos="fade-in" data-duration="200">
      <div class="container">
        <h4 class="sec-title-2">How We Help You Get an MBBS Scholarship</h4>
        <div class="comm-para">
          <p style="text-align: center;">At <a href="{{url('/')}}"><strong>KG2PG</strong></a>, we provide complete guidance and support for securing scholarships:<br>
            <strong>Personalized Consultation</strong> – Assess eligibility and suggest the best scholarship options.<br>
            <strong>Application Assistance</strong> – Help with filling scholarship forms, writing SOPs, and preparing documents.<br>
            <strong>University Selection</strong> – Find the best MBBS universities abroad with scholarship opportunities.<br>
            <strong>Interview Preparation</strong> – Training for scholarship interviews and selection rounds.
          </p>
        </div>
      </div>
    </div>

    <div class="comm-section pt-0 pb-0" data-aos="fade-in" data-duration="200">
      <div class="container">
        <div class="f-row f-1">
          <div class="f-col">
            <div class="steps-card">
              <div class="card-content-wrap">
                <h4 class="comm-card-hdn">Apply for an MBBS Abroad Scholarship Today!</h4>
                <div class="comm-para">
                  <p>Don't let financial worries stop you from achieving your dream of becoming a doctor! Get expert guidance and apply for an MBBS abroad scholarship with KG2PG today.</p>
                </div>
              </div>
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
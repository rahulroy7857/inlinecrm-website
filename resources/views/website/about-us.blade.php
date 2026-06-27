@extends('website.layouts.app')
@section('title', 'About US')
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

@endsection
@section('content')
<div class="inner-hero inner-hero-4" data-aos="fade-in" data-duration="0">
      <div class="container">
        <div class="inner-hero-wrap about-hero-wrap">
          <div class="inner-hero-left ">
            <h1 class="hero-title-txt">Discover KG2PG <br><span class="highlighter">About Us</span>
            </h1>
            <div class="hero-btns top40">
              <a id="openPopup" class="button open-popup" style="cursor:pointer;">Enquire Now</a>
            </div>
          </div>
          <div class="inner-hero-right">
            <img src="{{url('/website/img/aboutus.webp')}}" alt="About Us Banner Image">
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <ul class="breadcrumb">
        <li><a href="{{url('/')}}">Home</a></li>
        <li><a>About Us</a></li>
      </ul>
    </div>

    <!-- about us -->
    <div class="comm-section" data-aos="fade-in" data-duration="0">
      <div class="container">
        <div class="scholar-sec-wrap">
          <div class="sholar-left">
            <h3 class="sec-title">About <span class="highlighter">Us</span></h3>
            <div class="comm-para">
              <p>With over 20+ years of experience in career counseling, KG2PG EduHub is aware of how important individualized help and direction are in a world where there is an abundance of internet tools and information. Helping students realize their dreams of getting into the college of their choice and starting a successful career is the shared goal of our committed staff.</p>
              <p>We have a wealth of experience from years of working directly with students, educational institutions, and business executives as an education consultancy company in Karnataka. We can provide insightful analysis, meaningful connections, and customized guidance to help students achieve their academic and career objectives because of our thorough awareness of the local educational landscape.</p>
              <p>Every student deserves personalized attention at KG2PG EduHub, where we offer professional advice on college selection, entrance exams, career planning, and general academic development to help students confidently support their educational journey and make the best decisions for their future.</p>
              <p>We make it easier for students to get the tools and assistance they require to achieve by opening doors to a variety of possibilities through our solid connections with academic institutions and business leaders. Our staff is dedicated to assisting students in making educated decisions and realizing their goals, whether that means providing guidance on selecting appropriate courses, getting ready for tests, or comprehending current employment trends.</p>
              <p>We at KG2PG EduHub are more than just advisors; we are collaborators in your success, making sure that your route to a successful and satisfying profession is obvious and within your reach.</p>
            </div>
          </div>
          <div class="sholar-img">
            <img src="{{url('/website/img/about/about-us-boy.png')}}" alt="Scholarships to Study Abroad">
          </div>
        </div>
      </div>
    </div>

    <!-- vission & mission -->
    <div class="comm-section" data-aos="fade-in" data-duration="200">
      <div class="container">
        <div class="blue-bg type-bluebg">
          <!-- <h2 class="sec-title white-text text-center">Process of <span class="highlighter">Testing</span>
          </h2> -->
          <div class="process-sec-wrap">
            <div class="f-row f-3 f-1024-2 f-640-1">
              <div class="w50">
                <div class="process-box">
                  <img src="{{url('/website/img/icons/vision.png')}}" alt="Vision" class="text-center vm-icon">
                  <div class="process-box-title">Vision</div>
                  <div class="comm-para">
                    <p>We aim to create an inclusive educational atmosphere for all, irrespective of one's financial and economic status. We also ensure the students are guided along the journey to the best institution within a short duration.</p>
                  </div>
                </div>
              </div>
              <div class="w50">
                <div class="process-box">
                  <img src="{{url('/website/img/icons/mission.png')}}" alt="Mission" class="text-center vm-icon">
                  <div class="process-box-title">Mission</div>
                  <div class="comm-para">
                    <p>We strive to assist students in pursuing their ideal stream in one of the top colleges through our well-built consultancy services</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- core value sec -->
    <div class="comm-section" data-aos="fade-in" data-duration="0">
      <div class="container">
        <div class="sec-title text-center">Our <span class="highlighter">Fundamental Principles</span></div>
        <div class="corevalue-swiper-wrap">
          <div class="swiper coreSwiper">
            <div class="swiper-wrapper">

              <div class="swiper-slide">
                <div class="value-box">
                  <div class="value-icon">
                    <img src="{{url('/website/img/icons/integrity.png')}}" alt="Integrity" class="icon-width">
                  </div>
                  <div class="val-cont">
                    <h3 class="value-title">Integrity</h3>
                    <div class="comm-para">
                      <p>We uphold the highest standards of honesty and transparency in all our interactions with students, parents, and institutions.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="value-box">
                  <div class="value-icon">
                    <img src="{{url('/website/img/icons/excellence.png')}}" alt="Integrity" class="icon-width">
                  </div>
                  <div class="val-cont">
                    <h3 class="value-title">Excellence in Education</h3>
                    <div class="comm-para">
                      <p>We strive for excellence not just in service but in helping students achieve academic success and personal growth.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="value-box">
                  <div class="value-icon">
                    <img src="{{url('/website/img/icons/responsibility.png')}}" alt="Integrity" class="icon-width">
                  </div>
                  <div class="val-cont">
                    <h3 class="value-title">Responsibility</h3>
                    <div class="comm-para">
                      <p>We take full responsibility for the guidance we provide, ensuring that each student's future is our priority.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="value-box">
                  <div class="value-icon">
                    <img src="{{url('/website/img/icons/passion.png')}}" alt="Integrity" class="icon-width">
                  </div>
                  <div class="val-cont">
                    <h3 class="value-title">Passion</h3>
                    <div class="comm-para">
                      <p>Our passion for education drives us to make a meaningful impact on the lives of every student, helping them build a successful future.</p>
                    </div>
                  </div>
                </div>
              </div>

            </div>

          </div>
          <div class="value-btns-wrap">
            <div class="swiper-button-prev corebtn-prev"><i class="ph ph-arrow-left"></i></div>
            <div class="swiper-button-next corebtn-next"><i class="ph ph-arrow-right"></i></div>
          </div>
        </div>
      </div>
    </div>

    <!-- journey sec -->
    <div class="comm-section our-journey-section blue-bg mb40" data-aos="fade-in" data-duration="0">
      <div class="container">
        <div class="sec-title text-center white-text">Our <span class="highlighter">Journey</span></div>

        <div class="journey-swiper-wrap" data-fade>
          <div class="swiper swiperJourney swiper-journey">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="journey-wrap">
                  <div class="journey-year">
                    <span>2018</span>
                  </div>
                  <div class="journey-box">
                    <div class="journey-image">
                      <img src="{{url('/website/img/about/2018.png')}}" alt="">
                    </div>
                    <p>It was recognized as best educational advisors in south India</p>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="journey-wrap">
                  <div class="journey-year">
                    <span>2019</span>
                  </div>
                  <div class="journey-box">
                    <div class="journey-image">
                      <img src="{{url('/website/img/about/2019.png')}}" alt="">
                    </div>
                    <p>Despite the challenges posed by the global pandemic in 2019, <strong>KG2PG EduHub</strong> successfully completed over 100+ student admissions.</p>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="journey-wrap">
                  <div class="journey-year">
                    <span>2020</span>
                  </div>
                  <div class="journey-box">
                    <div class="journey-image">
                      <img src="{{url('/website/img/about/2020.png')}}" alt="">
                    </div>
                    <p>Collaborated with top educational institutions</p>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="journey-wrap">
                  <div class="journey-year">
                    <span>2021</span>
                  </div>
                  <div class="journey-box">
                    <div class="journey-image">
                      <img src="{{url('/website/img/about/2021.png')}}" alt="">
                    </div>
                    <p>Started Global admissions</p>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="journey-wrap">
                  <div class="journey-year">
                    <span>2022</span>
                  </div>
                  <div class="journey-box">
                    <div class="journey-image">
                      <img src="{{url('/website/img/about/2022.png')}}" alt="">
                    </div>
                    <p>Celebrated 5th year Anniversary</p>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="journey-wrap">
                  <div class="journey-year">
                    <span>2023</span>
                  </div>
                  <div class="journey-box">
                    <div class="journey-image">
                      <img src="{{url('/website/img/about/2023.png')}}" alt="">
                    </div>
                    <p>Partnered with 1000+ institutions worldwide</p>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="journey-wrap">
                  <div class="journey-year">
                    <span>2024</span>
                  </div>
                  <div class="journey-box">
                    <div class="journey-image">
                      <img src="{{url('/website/img/about/2024.png')}}" alt="">
                    </div>
                    <p>Successfully Closed 500+ MBBS India & Abroad Admissions</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="value-btns-wrap">
            <div class="journeybtn-prev"><i class="ph ph-arrow-left"></i></div>
            <div class="journeybtn-next"><i class="ph ph-arrow-right"></i></div>
          </div>
        </div>

      </div>
    </div>

    <!-- content sec -->
    <div class="comm-section pb0">
      <div class="container-small" data-aos="fade-in" data-duration="200">
        <div class="sec-title text-center mb-60"><span class="highlighter">What We Do</span></div>
        <div class="whatwedo-cont-wrap">

          <div class="whatwedo-cont-row">
            <div class="whatwedo-cont" data-aos="fade-right" data-duration="200">
              <h3>Student Counselling</h3>
              <p>We at KG2PG are aware that education is more than just academics. It's about supporting each student's development on both a personal and professional level. Our professional student counseling services are intended to assist students in overcoming obstacles, establishing specific objectives, and making wise choices that will affect their lives in the future.</p>
            </div>
            <div class="whatwedo-img" data-aos="fade-left" data-duration="200">
              <img src="{{url('/website/img/about/student-counselling.png')}}" alt="Student Counselling">
            </div>
          </div>
          <div class="whatwedo-cont-row rowr">
            <div class="whatwedo-cont" data-aos="fade-left" data-duration="200">
              <h3>Career Counselling</h3>
              <p>Our career counseling services are intended to give you the skills, knowledge, and self-assurance you need to effectively identify your path. We want to help you reach your full potential and clear the path to a rewarding career by providing you with individualized support, industry knowledge, and an emphasis on your unique objectives.</p>
            </div>
            <div class="whatwedo-img" data-aos="fade-right" data-duration="200">
              <img src="{{url('/website/img/about/career-counselling.png')}}" alt="Career Counselling">
            </div>
          </div>
          <div class="whatwedo-cont-row">
            <div class="whatwedo-cont" data-aos="fade-right" data-duration="200">
              <h3>Merit & Entrance Exams Guidance</h3>
              <p>We at KG2PG are aware of how important admission examinations like CET, NEET, and others are in determining your future. We are here to give you the professional advice and tools you need to succeed, whether your goal is to gain admission to esteemed medical schools, engineering colleges, or other specialized fields. We want to help you reach your full potential and get the grades you need to get into the school of your.</p>
            </div>
            <div class="whatwedo-img" data-aos="fade-left" data-duration="200">
              <img src="{{url('/website/img/about/exam.png')}}" alt="Merit & Entrance Exams Guidance">
            </div>
          </div>
          <div class="whatwedo-cont-row rowr">
            <div class="whatwedo-cont" data-aos="fade-left" data-duration="200">
              <h3>Direct Pan India Admission</h3>
              <p>We help you realize your dream of attending one of India's best institutions or universities. With the help of our direct Pan India admission services, students can easily and quickly gain admission to prominent universities for a range of programs and specialties. We help you with every stage of the admissions process, whether your goal is to enroll in undergraduate, graduate, or diploma programs.</p>
            </div>
            <div class="whatwedo-img" data-aos="fade-right" data-duration="200">
              <img src="{{url('/website/img/about/panindia.png')}}" alt="Direct Pan India Admission">
            </div>
          </div>
          <div class="whatwedo-cont-row">
            <div class="whatwedo-cont" data-aos="fade-right" data-duration="200">
              <h3>Abroad Admission</h3>
              <p>Your success depends on your choice of university and location. Whether you want to study in the US, Canada, the UK, Australia, or Europe, we help you find universities that provide the best programs for your academic interests, financial situation, and professional goals.</p>
            </div>
            <div class="whatwedo-img" data-aos="fade-left" data-duration="200">
              <img src="{{url('/website/img/about/abroad.png')}}" alt="Abroad Admission">
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
    <script src="js/formSubscribe.js"></script>
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
    // window.onload = function () {
    //   let intervalId = setInterval(function () {
    //     let badgeImage = document.querySelector('#iasBadge img');
    //     console.log("img: " + badgeImage);

    //     if (badgeImage) {
    //       badgeImage.style.width = '120px';
    //       badgeImage.style.height = '180px';


    //       var mq10 = window.matchMedia('(max-width: 1000px)');

    //       var mq5 = window.matchMedia('(max-width: 640px)');
    //       var mq4 = window.matchMedia('(max-width: 430px)');
    //       var mq3 = window.matchMedia('(max-width: 393px)');

    //       if (mq3.matches) {
    //         console.log(mq3);
    //                     // $('#iasBadge img').css({                            
    //                     //     'width': '40px',
    //                     //     'height': '65px'
    //                     // });
    //         $('#iasBadge img').css({
    //           'width': '150px',
    //           'height': '200px'
    //         });

    //       }

    //       else if (mq4.matches) {
    //         console.log(mq4);
    //         $('#iasBadge img').css({
    //           'width': '80px',
    //           'height': '100px'
    //         });
    //       }

    //       else if (mq5.matches) {
    //         console.log(mq5);
    //         $('#iasBadge img').css({
    //           'width': '110px',
    //           'height': '150px'
    //         });
    //       }
    //       else if (mq10.matches) {
    //         console.log(mq10);
    //         $('#iasBadge img').css({
    //           'width': '100px',
    //           'height': '110px'
    //         });
    //       }

    //                 // else {
    //                 //     $('#iasBadge img').css('');
    //                 // }

    //       clearInterval(intervalId);
    //     }
    //   }, 200);
    // };
  </script>
@endsection
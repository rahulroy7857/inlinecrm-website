@extends('website.layouts.app')
@section('title', 'PUC')
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

@endsection
@section('content')
<div class="inner-hero inner-hero-6" data-aos="fade-in" data-duration="0">
      <div class="container">
        <div class="inner-hero-wrap about-hero-wrap">
          <div class="inner-hero-left ">
            <h1 class="hero-title-txt">Explore <span class="highlighter">PUC</span><br> Colleges
            </h1>
            <div class="hero-btns top40">
              <a id="openPopup" href="{{url('/contact-us')}}" class="button open-popup" style="cursor:pointer;">Enquire Now</a>
            </div>
          </div>
          <div class="inner-hero-right">
            <img src="{{url('/website/img/pu.webp')}}" alt="pu">
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <ul class="breadcrumb">
        <li><a href="{{url('/')}}">Home</a></li>
        <li><a>Other Courses</a></li>
        <li><a>PUC</a></li>
      </ul>
    </div>

    <!-- puc sec -->
    <div class="comm-section" data-aos="fade-in" data-duration="0">
      <div class="container">
        <div class="scholar-sec-wrap">
          <div class="sholar-left" data-aos="fade-right" data-duration="200">
            <h3 class="sec-title"><span class="highlighter">Pre-University</span></h3>
            <div class="comm-para">
              <p>Following Grade 10 (SSLC/CBSE/ICSE), students must enroll in the Pre-University (PU) program, commonly called Junior College or Intermediate. It establishes the groundwork for future academic and professional endeavors.</p>
            </div>
          </div>
          <div class="sholar-img" data-aos="fade-left" data-duration="200">
            <img src="{{url('/website/img/puc/first.png')}}" alt="PUC">
          </div>
        </div>
      </div>
    </div>

    <!-- streams -->
    <div class="comm-section" data-aos="fade-in" data-duration="200">
      <div class="container">
        <div class="blue-bg type-bluebg">
          <h2 class="sec-title white-text text-center"><span class="highlighter2">Streams</span>
          </h2>
          <div class="process-sec-wrap">
            <div class="f-row f-3 f-1024-2 f-640-1">
              <div class="f-col">
                <div class="process-box ta-l">
                  <div class="process-box-title">Science Stream</div>
                  <div class="comm-para">
                    <ul>
                      <li>Physics, Chemistry, Mathematics (PCM)</li>
                      <li>Physics, Chemistry, Biology (PCB)</li>
                      <li>Career Pathways: Engineering, Medicine, Research, IT</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="f-col">
                <div class="process-box ta-l">
                  <div class="process-box-title">Commerce Stream</div>
                  <div class="comm-para">
                    <ul>
                      <li>Accountancy, Economics, Business Studies</li>
                      <li>Mathematics (optional)</li>
                      <li>Career Pathways: Management, Finance, CA, CS</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="f-col">
                <div class="process-box ta-l">
                  <div class="process-box-title">Arts/Humanities Stream</div>
                  <div class="comm-para">
                    <ul>
                      <li>History, Sociology, Political Science</li>
                      <li>Psychology, Geography, Languages</li>
                      <li>Career Pathways: Law, Journalism, Civil Services, Design</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- adm proc sec -->
    <div class="comm-section admsn-step-main-div">
      <div class="container-small">
        <div class="adm-proc-steps-wrap">
          <div class="dotted-line"></div>
          <div class="adm-proc-steps">
            <div class="adm-proc-step-left" data-aos="fade-right" data-duration="0">
              <h3 class="adm-step-title">Top Pre-University in Bangalore</h3>
              <div class="comm-para">
                <p>Some of the best Pre-University (PU) institutes are located in Bangalore, which is frequently referred to as India's educational center. In addition to emphasizing academic achievement, these institutions offer a well-rounded environment that supports students in achieving success in their chosen fields. Bangalore's PU institutions provide a solid foundation to help you realize your goals, whether they be in the arts, engineering, medicine, or commerce.</p>
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
              <div class="adm-img"><img src="{{url('/website/img/puc/2.png')}}" alt=""></div>
            </div>
          </div>

          <div class="adm-proc-steps mb-01">
            <div class="adm-proc-step-left" data-aos="fade-left" data-duration="200">
              <h3 class="adm-step-title">Why Choose PU Colleges in Bangalore?</h3>
              <div class="comm-para">
                <p><strong>World-Class Infrastructure:</strong> To facilitate higher education, the majority of colleges have state-of-the-art buildings, libraries, and labs.<br> <strong>Experienced Faculty:</strong> The faculty comprises highly qualified educators who nurture and guide students with dedication.<br> <strong>Comprehensive Curriculum:</strong> The courses are designed to prepare students for competitive exams like NEET, JEE, CET, and more.<br> <strong>Extracurricular Activities:</strong> A balance between academics and extracurricular activities helps in the overall development of students.</p>
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
              <div class="adm-img"><img src="{{url('/website/img/puc/1.png')}}" alt=""></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- PU Colleges in Bangalore -->
    <div class="comm-section" data-aos="fade-in" data-duration="0">
      <div class="container">
        <div class="scholar-sec-wrap">
          <div class="sholar-left">
            <h3 class="sec-title">Top PU Colleges <span class="highlighter">in Bangalore</span></h3>
            <div class="comm-para">
              <ul class="some-ul">
                @foreach($colleges as $college)
                <li><a href="{{url('/college-details/'.$college->slug)}}">{{$college->name}}</a></li>
                @endforeach
              </ul>
            </div>
          </div>
          <div class="sholar-img">
            <img src="{{url('/website/img/puc/toppucolleges.png')}}" alt="Scholarships to Study Abroad">
          </div>
        </div>
      </div>
    </div>

    <!-- Eligibility Critiriea for Admission -->
    <div class="comm-section" data-aos="fade-in" data-duration="200">
      <div class="container">
        <div class="report-sec-wrap">
          <div class="f-row">
            <div class="w100 w-1024-100">
              <h1 class="sec-title">Eligibility Critiriea for <span class="highlighter">Admission</span></h1> 
              <div class="study-desc">
                <ul>
                  <li>
                    <div class="report-icon"><i class="ph ph-certificate"></i></div>
                    <div class="study-descrp-wrap">
                      <h4 class="desc-title">Academic Requirement</h4>
                      <div class="comm-para">
                        <p>Completion of a recognized board's 10th grade curriculum (SSLC, CBSE, ICSE, or similar).</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="report-icon"><i class="ph ph-certificate"></i></div>
                    <div class="study-descrp-wrap">
                      <h4 class="desc-title">Minimum Score</h4>
                      <div class="comm-para">
                        <p> Depending on the college and stream, a minimum of 35–60% of the possible points must be earned in Class 10.<br>
                        Specific Requirements for Each Stream.</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="report-icon"><i class="ph ph-certificate"></i></div>
                    <div class="study-descrp-wrap">
                      <h4 class="desc-title">Science Stream</h4>
                      <div class="comm-para">
                        <p>Excellent results in science and math courses. 70% or above in these disciplines may be required by some universities.</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="report-icon"><i class="ph ph-certificate"></i></div>
                    <div class="study-descrp-wrap">
                      <h4 class="desc-title">Commerce Stream</h4>
                      <div class="comm-para">
                        <p>A solid grasp of principles linked to mathematics and commerce. It is frequently necessary to have a minimum aggregate score of 50% or above. Students from diverse academic backgrounds are welcome to enroll in the Arts Stream. Emphasis on originality and a passion for the humanities.</p>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <form id="bookconsultation" class="w30 w-1280-35 w-1024-100" action="" method="post">
              <div class="" id="divBookConsultation">
              </div>
              <input type="hidden" id="hdnCountryId" name="hdnCountryId" value="2" />
              <input type="hidden" id="hdnCountryName" name="hdnCountryName" value="UK" />
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- section -->
    <div class="comm-section" data-aos="fade-in" data-duration="200">
      <div class="container">
        <h4 class="sec-title-2">How We Can Help You</h4>
        <div class="comm-para">
          <p>We at KG2PG are aware that a student's academic trajectory is greatly impacted by their choice of Pre-University (PU) course. The proper PU program helps students develop their future job path and establishes the groundwork for further education. We can offer professional advice to help you make the best decision at every stage, whether you're choosing between academic programs like science, commerce, or the arts or getting ready to move on to undergraduate study.</p>
        </div>
        <h4 class="sec-title-2" style="margin-top:40px">Professional Advice</h4>
        <div class="comm-para">
          <p>Tailored suggestions for choosing the best school and program for your professional objectives.</p>
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
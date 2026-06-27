@extends('website.layouts.app')
@section('title', 'Application Process')
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
<div class="inner-hero application-process-inner" data-aos="fade-in" data-duration="0">
      <div class="container">
        <div class="inner-hero-wrap about-hero-wrap">
          <div class="inner-hero-left ">
            <h1 class="hero-title-txt">Start Your <span class="highlighter">MBBS Journey</span> Today!
            </h1>
            <div class="hero-btns top40">
              <a class="button open-popup modal-toggle" style="cursor:pointer;" data-target="openModal1">Enquire Now</a>
            </div>
          </div>
          <div class="inner-hero-right">
            <img src="{{url('/website/img/application-process/applicationprocessgirl.png')}}" alt="Application Process Banner Image">
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <ul class="breadcrumb">
        <li><a href="{{url('/')}}">Home</a></li>
        <li><a>Study Abroad</a></li>
        <li><a>Application Process</a></li>
      </ul>
    </div>

    <!-- about us -->
    <div class="comm-section" data-aos="fade-in" data-duration="0">
      <div class="container">
        <div class="scholar-sec-wrap">
          <div class="sholar-left">
            <h3 class="sec-title"><span class="highlighter">Application </span>Process</h3>
            <div class="comm-para">
              <p>Pursuing an MBBS degree abroad is a dream for many aspiring medical students. Our consultancy simplifies the process, ensuring a smooth and hassle-free experience. Here’s a step-by-step guide to applying for MBBS abroad through our expert services.</p>
            </div>
          </div>
          <div class="sholar-img">
            <img src="{{url('/website/img/application-process/applicationprocessextra.png')}}" alt="Application Process">
          </div>
        </div>
      </div>
    </div>

    <!-- Application Process Teps -->
    <div class="comm-section pb-0" data-aos="fade-in" data-duration="200">
      <div class="container">
        <div class="benefit-content-wrap mt-0">
          <div class="benefit-img-wrap">
            <div class="benef-sticky-div">
              <div class="benefit-img">
                <img src="{{url('/website/img/application-process/applicationprocessextraextra.png')}}" alt="Application Process 2">
              </div>
            </div>
          </div>
          <div class="benefit-content">
            <div class="benefit-box">
              <h3 class="benef-title"><span class="steps--">Step 1:</span> Free Counseling &amp; Guidance</h3>
              <div class="benef-dtl">
                <p>Our experienced education consultants provide free counseling to help students choose the right country, university, and course based on their academic background, preferences, and budget. We also offer detailed insights into the admission criteria, eligibility requirements, and career opportunities.</p>
              </div>
            </div>
            <div class="benefit-box">
              <h3 class="benef-title"><span class="steps--">Step 2:</span> Application Process</h3>
              <div class="benef-dtl">
                <ul class="some-ul">
                  <li>Assistance with filling out the university application form</li>
                  <li>Guidance on preparing required documents (passport, academic transcripts, recommendation letters, etc.)</li>
                  <li>Submission of the application to the selected universities</li>
                  <li>Follow-up with the universities to track application status and resolve any issues</li>
                </ul>
              </div>
            </div>
            <div class="benefit-box">
              <h3 class="benef-title"><span class="steps--">Step 3:</span> Offer Letter &amp; Admission Confirmation</h3>
              <div class="benef-dtl">
                <p>Once the university reviews the application, an official offer letter is issued. We assist in the acceptance process and confirm admission. Additionally, we help students understand the fee structure, payment methods, and deadlines to avoid any last-minute issues.</p>
              </div>
            </div>
            <div class="benefit-box">
              <h3 class="benef-title"><span class="steps--">Step 4:</span> Visa Documentation &amp; Processing</h3>
              <div class="benef-dtl">
                <ul class="some-ul">
                  <li>Guidance on visa application requirements</li>
                  <li>Assistance with financial statements and sponsorship documents</li>
                  <li>Visa interview preparation</li>
                  <li>Support with embassy formalities and visa submission to ensure a high success rate</li>
                </ul>
              </div>
            </div>
            <div class="benefit-box">
              <h3 class="benef-title"><span class="steps--">Step 5:</span> Travel &amp; Accommodation Arrangements</h3>
              <div class="benef-dtl">
                <ul class="some-ul">
                  <li>Assistance with flight bookings</li>
                  <li>Airport pick-up arrangements</li>
                  <li>Accommodation and hostel facility guidance</li>
                  <li>Tips on managing living expenses and part-time job opportunities for students</li>
                </ul>
              </div>
            </div>
            <div class="benefit-box">
              <h3 class="benef-title"><span class="steps--">Step 6:</span> Pre-Departure Orientation</h3>
              <div class="benef-dtl">
                <p>Students receive a pre-departure briefing, including details about culture, climate, lifestyle, and academic expectations. We also provide a checklist of essential items to carry, local transportation guidance, and emergency contact information.</p>
              </div>
            </div>
            <div class="benefit-box">
              <h3 class="benef-title">Additional Services</h3>
              <div class="benef-dtl">
                <ul class="some-ul">
                  <li>Assistance in licensing exams (FMGE, USMLE, PLAB) preparation</li>
                  <li>Internship and clinical rotation guidance</li>
                  <li>Career counseling for post-graduation options and job placements</li>
                  <li>Networking opportunities with alumni and medical professionals</li>
                </ul>
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
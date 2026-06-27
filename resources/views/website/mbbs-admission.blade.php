@extends('website.layouts.app')
@section('title', 'MBBS Abroad')
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
<style>
    .ui-autocomplete {
      z-index: 1001 !important;
      border: 1px solid #ccc;
      pointer-events: stroke;
    }
    .ui-menu-item {
      padding: 5px;
      cursor: pointer;
    }
    .blogs-sec-wrap {
      margin-top: 40px;
    }
    .process-box {
      background: #091d4a;
      padding: 25px;
      color: #fff;
      /*align-content: center;*/
    }
    @media (max-width: 1440px) {
      .comm-para p {
        text-align: left;
      }
    }
  </style>
@endsection
@section('content')
<div class="inner-hero mbbs-admission-inner" data-aos="fade-in" data-duration="0">
      <div class="container">
        <div class="inner-hero-wrap about-hero-wrap">
          <div class="inner-hero-left ">
            <h1 class="hero-title-txt">Discover About <br><span class="highlighter">MBBS Admission</span>
            </h1>
            <div class="hero-btns top40">
              <a href="{{url('/contact-us')}}" id="openPopup" class="button open-popup" style="cursor:pointer;">Enquire Now</a>
            </div>
          </div>
          <div class="inner-hero-right">
            <img src="{{url('/website/img/mbbs-admission/mbbsgirl.webp')}}" alt="MBBS Admission">
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <ul class="breadcrumb">
        <li><a href="{{url('/')}}">Home</a></li>
        <li><a>Medical</a></li>
        <li><a>MBBS Admission</a></li>
      </ul>
    </div>

    <!-- MBBS Admission sec -->
    <div class="comm-section" data-aos="fade-in" data-duration="0">
      <div class="container">
        <div class="scholar-sec-wrap">
          <div class="sholar-left" data-aos="fade-right" data-duration="200">
            <h3 class="sec-title"><span class="highlighter">MBBS Admission</span></h3>
            <div class="comm-para">
              <p>One of the most coveted undergraduate medical programs in India is the Bachelor of Medicine, Bachelor of Surgery (MBBS). India is a popular destination for aspiring physicians from all across the nation and even beyond due to its excellent medical education and hands-on training. The National Medical Commission (NMC) oversees MBBS programs in India, guaranteeing excellent educational and medical standards.</p>
              <p>The Bachelor of Medicine, Bachelor of Surgery, or MBBS, is a thorough undergraduate medical program that aims to give students the information, abilities, and real-world experience they need to become qualified medical professionals. The school, which usually lasts five and a half years, blends clinical training with theoretical instruction. In addition to a variety of clinical courses like medicine, surgery, pediatrics, obstetrics, and gynecology, students study anatomy, physiology, biochemistry, pathology, pharmacology, and microbiology. In order to give students real experience in diagnosing and treating patients, the curriculum also includes sessions at hospitals and other healthcare facilities. The MBBS degree, which is required for practicing medicine and seeking additional specialization in a variety of medical specialties, is granted to graduates upon satisfactory completion.</p>
            </div>
          </div>
          <div class="sholar-img" data-aos="fade-left" data-duration="200">
            <img src="{{url('/website/img/mbbs-admission/mbbsextra.webp')}}" alt="MBBS Admission">
          </div>
        </div>
      </div>
    </div>

    <div class="comm-section pt-0" data-aos="fade-in" data-duration="0">
      <div class="container">
        <div class="f-row f-1">
          <h1 class="sec-title mb-30"><span class="highlighter">Eligibility</span></h1>
          <div class="comm-para">
            <p>To pursue an <strong>MBBS (Bachelor of Medicine, Bachelor of Surgery)</strong> degree in India, candidates must meet specific academic, age, and entrance exam criteria.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="comm-section pt-0" data-aos="fade-in" data-duration="0">
      <div class="container">
        <div class="f-row f-1">
          <h2 class="sec-medium-title mb-30">Education Qualification</h2>
        </div>
        <div class="f-row f-3 mb-30">
          <div class="w33">
            <div class="process-box">
              <div class="process-box-title">Minimum Academic Requirements</div>
              <div class="comm-para">
                <p>The applicant must have passed the ICSE, CBSE, or any other state board's equivalent test or finished the 12th grade (upper secondary).</p>
              </div>
            </div>
          </div>
          <div class="w33">
            <div class="process-box">
              <div class="process-box-title">Required Subjects</div>
              <div class="comm-para">
                <p>English is a required subject, and the candidate must have studied biology, chemistry, and physics in the 12th grade.</p>
              </div>
            </div>
          </div>
          <div class="w33">
            <div class="process-box">
              <div class="process-box-title">Minimum Score</div>
              <div class="comm-para">
                <p> For General Category, candidates must have received at least 50% in Physics, Chemistry, and Biology combined. Candidates from Scheduled Castes (SC), Scheduled Tribes (ST), and Other Backward Classes (OBC) must receive at least 40% in these courses.Physics, Chemistry, and Biology combined must have a minimum of 45% for candidates with disabilities (PwD).</p>
              </div>
            </div>
          </div>
        </div>
        <div class="f-row f-1 mb-30">
          <div class="f-col">
            <h2 class="sec-medium-title mb-30">Age Limit</h2>
            <div class="comm-para">
              <p>As of December 31st of the year of admission, the applicant must be at least 17 years old.</p>
              <p><strong>Maximum Age:</strong> Candidates in the General Category must be at least 25 years old to apply to the MBBS program. Candidates who fall under the SC, ST, or OBC categories are eligible to apply for a five-year relaxation, which allows them to do so till they turn thirty.</p>
            </div>
          </div>
        </div>
        <div class="f-row f-1 mb-30">
          <div class="f-col">
            <h2 class="sec-medium-title mb-30">Entrance Exam - NEET (National Eligibility cum Entrance Test)</h2>
            <div class="comm-para">
              <p>Every medical college in India, including both public and private ones, requires the NEET UG entrance exam for admission to MBBS programs.</p><br>
              <p><strong>Pattern of the Exam:</strong><br>180 multiple-choice questions (MCQs) covering physics, chemistry, and biology (botany and zoology) make up the pen-and-paper NEET UG test.</p><br>
              <p><strong>Qualifying Marks:</strong><br>To be admitted, candidates must receive a score that is at least in the minimum qualifying percentile.Candidates in the General category must be in the 50th percentile, OBC/SC/ST candidates must be in the 40th percentile, and PwD (person with disabilities) candidates must be in the 45th percentile.</p><br>
              <p><strong>NEET Cut Off:</strong><br>The cut-off marks may vary each year based on the difficulty level of the exam and the number of candidates appearing. Candidates must score above the cut-off marks to qualify for the counseling process for MBBS admissions.</p><br>
              <p><strong>Number Of Attempts:</strong><br>The maximum number of NEET tries is not specified. As long as they fulfill the age and academic standards, candidates are permitted to take the NEET exam more than once.</p>
            </div>
          </div>
        </div>
        <div class="f-row f-1 mb-30">
          <div class="f-col">
            <h2 class="sec-medium-title mb-30">Medical Fitness </h2>
            <div class="comm-para">
              <p>To demonstrate that they are both cognitively and physically capable of pursuing medical education, candidates must present a medical fitness certificate. Usually, this is a prerequisite for counseling or the admissions process.</p>
            </div>
          </div>
        </div>
        <div class="f-row f-1 mb-30">
          <div class="f-col">
            <h2 class="sec-medium-title mb-30">Nationality</h2>
            <div class="comm-para">
              <p><strong>Indian Citizens:</strong> Indian citizens may apply for MBBS programs in India, including those who hold Indian passports.Candidates who are non-resident Indians (NRIs): In many colleges, NRIs are allowed to apply and have a distinct quota.</p>
              <p><strong>Foreign Nationals:</strong> Students from other countries may apply to India for MBBS programs. They might, however, also have to present their qualifying exam results, a visa, and certifications of language proficiency, among other things.</p>
            </div>
          </div>
        </div>
        <div class="f-row f-1 mb-30">
          <div class="f-col">
            <h2 class="sec-medium-title mb-30">Reservation Policy</h2>
            <div class="comm-para">
              <p>India has reservation policies for a number of categories, including MBBS admissions. The following is the reservation system:</p>
              <ul class="some-ul">
                <li>50% of seats are in the general category</li>
                <li>Seats reserved for Scheduled Castes (SC): 15%</li>
                <li>Tribes on the Schedule (ST): 7.5% of seats</li>
                <li>27% of seats are occupied by other backward classes (OBC)</li>
                <li>5% horizontal reservation for PwD (Persons with Disabilities) in all categories</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="f-row f-1">
          <div class="f-col">
            <h2 class="sec-medium-title mb-30">Top MBBS College In Bangalore</h2>
            <ul class="some-ul">
              @foreach($colleges as $college)
              <li><a href="{{url('/college-details/'.$college->slug)}}">{{$college->name}}</a></li>
              @endforeach
            </ul>
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
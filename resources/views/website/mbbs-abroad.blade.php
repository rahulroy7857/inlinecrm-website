@extends('website.layouts.app')
@section('title', 'MBBS Abroad')
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
<div class="inner-hero mbbs-abroad-inner" data-aos="fade-in" data-duration="0">
      <div class="container">
        <div class="inner-hero-wrap about-hero-wrap">
          <div class="inner-hero-left ">
            <h1 class="hero-title-txt">Study<span class="highlighter"> MBBS Abroad:</span> <br>Unlock Your Global Medical Career
            </h1>
            <div class="hero-btns top40">
              <a id="openPopup" class="button open-popup" style="cursor:pointer;">Enquire Now</a>
            </div>
          </div>
          <div class="inner-hero-right">
            <img src="{{url('/website/img/study-abroad/mbbsabroadgirl-1.png')}}" alt="MBBS Abroad">
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <ul class="breadcrumb">
        <li><a href="{{url('/')}}">Home</a></li>
        <li><a>MBBS Abroad</a></li>
      </ul>
    </div>

    <!-- MBBS Abroad -->
    <div class="comm-section" data-aos="fade-in" data-duration="0">
      <div class="container">
        <div class="scholar-sec-wrap">
          <div class="sholar-left">
            <h3 class="sec-title">Why Study MBBS Abroad?</h3>
            <div class="comm-para">
              <p>Pursuing MBBS abroad offers students access to globally recognized degrees, world-class medical infrastructure, and international exposure. It’s an excellent opportunity to receive a high-quality education at an affordable cost while gaining multicultural experiences that shape future healthcare leaders.</p>
            </div>
          </div>
          <div class="sholar-img">
            <img src="{{url('/website/img/study-abroad/mbbsabroadextra.png')}}" alt="Why Study MBBS Abroad?">
          </div>
        </div>
      </div>
    </div>

    <!-- MBBS in Georgia -->
    <div class="" data-aos="fade-in" data-duration="0">
      <div class="container">
        <div class="f-row f-1 text-center">
          <div class="f-col">
            <h3 class="sec-title mb-15"><strong>MBBS in Georgia</strong><br>The Preferred Destination for Medical Aspirants</h3>
            <div class="comm-para">
              <p style="text-align: center;" class="mb-30">Georgia has rapidly become a top choice for Indian students due to its high educational standards, affordable tuition fees, and safe environment. Among the many reputable medical institutions, Grigol Robakidze University (GRUNI) stands out for its academic excellence, modern facilities, and commitment to producing globally competent medical professionals.</p>
            </div>
            <img src="{{url('/website/img/study-abroad/georgia.webp')}}" alt="MBBS in Georgia">
          </div>
        </div>
      </div>
    </div>

    <!--<div class="comm-section overflw-y-hdn" data-aos="fade-in" data-duration="0">
      <div class="container">
        <div class="f-row f-1">
          <div class="f-col">
            <h3 class="sec-title text-center lh-60 mb-50"><strong class="gruni-title">Grigol Robakidze University (GRUNI)</strong><br>- Your Gateway to a Successful Medical Career
            </h3>
          </div>
        </div>
        <div class="f-row f-2">
          <div class="f-col">
            <h2 class="sec-medium-title mb-20">About Grigol Robakidze University (GRUNI)</h2>
            <div class="comm-para">
              <p>Established in 1992, <strong>Grigol Robakidze University (GRUNI)</strong> is a leading private university located in the heart of Tbilisi, Georgia’s vibrant capital. Named after the renowned Georgian writer and philosopher Grigol Robakidze, the university embodies the spirit of intellectual freedom, academic integrity, and innovation.</p>
              <p>GRUNI is internationally recognized for its modern approach to medical education, integrating advanced teaching methods with practical clinical exposure. Its Medical Faculty is one of the most sought-after in Georgia, attracting students from around the world.</p>
            </div>
          </div>
          <div class="f-col">
            <img src="img/study-abroad/gruni-university.webp" alt="Grigol Robakidze University">
          </div>
        </div>
      </div>
    </div>-->

    <!-- visa assis dtl sec -->
    <div class="comm-section ">
      <div class="container">
        <div class="f-row f-1">
          <div class="f-col">
            <h3 class="sec-title text-center lh-60 mb-50"><strong class="gruni-title">Grigol Robakidze University (GRUNI)</strong><br>- Your Gateway to a Successful Medical Career
            </h3>
          </div>
        </div>
        <div class="visa-ass-dtl">
          <div class="visa-asst-img" data-aos="fade-right" data-duration="200">
            <img src="{{url('/website/img/study-abroad/gruni-university.webp')}}" alt="About Grigol Robakidze University">
          </div>
          <div class="visa-asst-cont" data-aos="fade-left" data-duration="200">
            <h3>About Grigol Robakidze University (GRUNI)</h3>
            <p>Established in 1992, <strong>Grigol Robakidze University (GRUNI)</strong> is a leading private university located in the heart of Tbilisi, Georgia's vibrant capital. Named after the renowned Georgian writer and philosopher Grigol Robakidze, the university embodies the spirit of intellectual freedom, academic integrity, and innovation.</p>
            <p>GRUNI is internationally recognized for its modern approach to medical education, integrating advanced teaching methods with practical clinical exposure. Its Medical Faculty is one of the most sought-after in Georgia, attracting students from around the world.</p>
          </div>
        </div>
        <div class="sectio-line-sepr">
          <img src="{{url('/website/img/study-abroad/section-join-lines-img.png')}}" alt="curve line">
        </div>
        <div class="visa-ass-dtl row-reverse">
          <div class="visa-asst-img-2" data-aos="fade-left" data-duration="200">
            <img src="{{url('/website/img/study-abroad/gruni2.png')}}" alt="Key Highlights of Grigol Robakidze University">
          </div>
          <div class="visa-asst-cont" data-aos="fade-right" data-duration="200">
            <h3>Key Highlights of Grigol Robakidze University (GRUNI):</h3>
            <h4 class="mt-20"><strong>Accreditations &amp; Recognitions</strong></h4>
            <ul class="some-ul2">
              <li>Recognized by the World Health Organization (WHO)</li>
              <li>Listed in the World Directory of Medical Schools (WDOMS)</li>
              <li>Approved by the National Medical Commission (NMC) of India</li>
              <li>Accredited by FAIMER, making graduates eligible for global medical licensing exams like USMLE, PLAB, and more</li>
            </ul>
            <h4 class="mt-20"><strong>Modern Infrastructure:</strong></h4>
            <ul class="some-ul2">
              <li>Smart classrooms with the latest digital tools</li>
              <li>State-of-the-art laboratories for Anatomy, Physiology, Biochemistry, Pathology, and Microbiology</li>
              <li>Advanced simulation centers for real-time clinical practice</li>
              <li>Digital library with access to international medical journals and research materials</li>
            </ul>
            <h4 class="mt-20"><strong>International Curriculum:</strong></h4>
            <ul class="some-ul2">
              <li>European Credit Transfer and Accumulation System (ECTS)</li>
              <li>Globally competitive curriculum aligned with USMLE and FMGE requirements</li>
              <li>Focus on problem-based learning (PBL) and evidence-based medical practice</li>
            </ul>
            <h4 class="mt-20"><strong>Experienced Faculty:</strong></h4>
            <ul class="some-ul2">
              <li>Professors and medical experts with international teaching experience</li>
              <li>Guest lectures from renowned doctors and healthcare leaders</li>
            </ul>
          </div>
        </div>
        <div class="sectio-line-sepr img-reverse">
          <img src="{{url('/website/img/study-abroad/section-join-lines-img.png')}}" alt="curve line">
        </div>
        <div class="visa-ass-dtl">
          <div class="visa-asst-img" data-aos="fade-right" data-duration="200">
            <img src="{{url('/website/img/study-abroad/gruni3.png')}}" alt="Why Choose Grigol Robakidze University (GRUNI) for MBBS?">
          </div>
          <div class="visa-asst-cont" data-aos="fade-left" data-duration="200">
            <h3>Why Choose Grigol Robakidze University (GRUNI) for MBBS?</h3>
            <ul class="some-ul2">
              <li><strong>Affordable Tuition:</strong> Study MBBS at a fraction of the cost compared to private medical colleges in India.</li>
              <li><strong>No Donation or Capitation Fees:</strong> Transparent admission process without hidden charges.</li>
              <li><strong>100% English-Medium Program:</strong> No language barriers for international students.</li>
              <li><strong>Global Exposure:</strong> Students from over 25+ countries, creating a multicultural learning environment.</li>
              <li><strong>Early Clinical Exposure:</strong> Practical training starts from the 2nd year in affiliated hospitals.</li>
              <li><strong>Safe Campus Life:</strong> Tbilisi is one of Europe’s safest cities, offering a friendly environment for international students.</li>
            </ul>
          </div>
        </div>
        <div class="sectio-line-sepr last-seprtr">
          <img src="{{url('/website/img/study-abroad/section-join-lines-img.png')}}" alt="curve line">
        </div>
        <div class="visa-ass-dtl row-reverse">
          <div class="visa-asst-img" data-aos="fade-left" data-duration="200">
            <img src="{{url('/website/img/study-abroad/gruni4.png')}}" alt="Key Highlights of Grigol Robakidze University">
          </div>
          <div class="visa-asst-cont" data-aos="fade-right" data-duration="200">
            <h3>MBBS Program Details at Grigol Robakidze University (GRUNI):</h3>
            <ul class="some-ul2">
              <li><strong>Course Duration:</strong> 6 years (5 years of academic study + 1-year clinical internship)</li>
              <li><strong>Medium of Instruction:</strong> English</li>
              <li><strong>Intake:</strong> March & September (2 intakes per year)</li>
              <li><strong>Curriculum Structure:</strong>
                <ol class="some-ul2">
                  <li><strong>Year 1-2:</strong> Basic medical sciences (Anatomy, Physiology, Biochemistry)</li>
                  <li><strong>Year 3-4:</strong> Pre-clinical subjects (Pathology, Pharmacology, Microbiology)</li>
                  <li><strong>Year 5:</strong> Clinical subjects (Internal Medicine, Surgery, Pediatrics, Obstetrics & Gynecology)</li>
                  <li><strong>Year 6:</strong> Internship/Clinical rotations in affiliated hospitals</li>
                </ol>
              </li>
            </ul>
          </div>
        </div>
        <div class="sectio-line-sepr img-reverse">
          <img src="{{url('/website/img/study-abroad/section-join-lines-img.png')}}" alt="curve line">
        </div>
        <div class="visa-ass-dtl">
          <div class="visa-asst-img" data-aos="fade-right" data-duration="200">
            <img src="{{url('/website/img/study-abroad/gruni5.png')}}" alt="Why Choose Grigol Robakidze University (GRUNI) for MBBS?">
          </div>
          <div class="visa-asst-cont" data-aos="fade-left" data-duration="200">
            <h3>Fee Structure for MBBS at Grigol Robakidze University (GRUNI)</h3>
            <ul class="some-ul2">
              <li><strong>Tuition Fees:</strong> ₹3.5 to ₹4.5 lakhs per year</li>
              <li><strong>Hostel Fees:</strong> ₹80,000 to ₹1.2 lakhs annually (optional off-campus apartments also available)</li>
              <li><strong>Living Expenses:</strong> ₹1 to ₹1.5 lakhs per year (depending on lifestyle)</li>
              <li><strong>Total Estimated Cost:</strong> ₹20 to ₹25 lakhs for the entire MBBS program</li>
            </ul>
          </div>
        </div>
        <div class="sectio-line-sepr last-seprtr">
          <img src="{{url('/website/img/study-abroad/section-join-lines-img.png')}}" alt="curve line">
        </div>
        <div class="visa-ass-dtl row-reverse">
          <div class="visa-asst-img" data-aos="fade-left" data-duration="200">
            <img src="{{url('/website/img/study-abroad/gruni6.png')}}" alt="Key Highlights of Grigol Robakidze University">
          </div>
          <div class="visa-asst-cont" data-aos="fade-right" data-duration="200">
            <h3>Eligibility Criteria:</h3>
            <ul class="some-ul2">
              <li>Age: Minimum 17 years old at the time of admission</li>
              <li>Academic Qualifications:</li>
              <li>10+2 with Physics, Chemistry, Biology, and English</li>
              <li>Minimum 50% aggregate marks in PCB (40% for reserved categories in India)</li>
              <li>NEET Requirement: Mandatory for Indian students (for practicing medicine in India after graduation)</li>
            </ul>
          </div>
        </div>
        <div class="sectio-line-sepr img-reverse">
          <img src="{{url('/website/img/study-abroad/section-join-lines-img.png')}}" alt="curve line">
        </div>
        <div class="visa-ass-dtl">
          <div class="visa-asst-img" data-aos="fade-right" data-duration="200">
            <img src="{{url('/website/img/study-abroad/gruni7.png')}}" alt="Why Choose Grigol Robakidze University (GRUNI) for MBBS?">
          </div>
          <div class="visa-asst-cont" data-aos="fade-left" data-duration="200">
            <h3>Admission Process for Grigol Robakidze University (GRUNI)</h3>
            <ul class="some-ul2">
              <li>Application Submission: Fill out the application form and submit academic documents.</li>
              <li>Offer Letter: Receive the admission letter from the university.</li>
              <li>Document Verification: Submit necessary documents for visa processing.</li>
              <li>Visa Application: Apply for a Georgian student visa with full support from our team.</li>
              <li>Travel Arrangements: Book your flight and get ready for your MBBS journey in Georgia!</li>
            </ul>
          </div>
        </div>
        <div class="sectio-line-sepr last-seprtr">
          <img src="{{url('/website/img/study-abroad/section-join-lines-img.png')}}" alt="curve line">
        </div>
        <div class="visa-ass-dtl row-reverse">
          <div class="visa-asst-img" data-aos="fade-left" data-duration="200">
            <img src="{{url('/website/img/study-abroad/gruni8.png')}}" alt="Key Highlights of Grigol Robakidze University">
          </div>
          <div class="visa-asst-cont" data-aos="fade-right" data-duration="200">
            <h3>Required Documents:</h3>
            <ul class="some-ul2">
              <li>10th & 12th Mark Sheets</li>
              <li>NEET Scorecard (for Indian students)</li>
              <li>Valid Passport</li>
              <li>Passport-size Photographs</li>
              <li>Medical Fitness Certificate</li>
              <li>Admission Letter from Grigol Robakidze University (GRUNI)</li>
            </ul>
          </div>
        </div>
        <div class="sectio-line-sepr img-reverse">
          <img src="{{url('/website/img/study-abroad/section-join-lines-img.png')}}" alt="curve line">
        </div>
        <div class="visa-ass-dtl">
          <div class="visa-asst-img" data-aos="fade-right" data-duration="200">
            <img src="{{url('/website/img/study-abroad/gruni9.png')}}" alt="Why Choose Grigol Robakidze University (GRUNI) for MBBS?">
          </div>
          <div class="visa-asst-cont" data-aos="fade-left" data-duration="200">
            <h3>Campus Life at Grigol Robakidze University (GRUNI)</h3>
            <p>Life at GRUNI goes beyond academics! The university offers a vibrant student life with</p>
            <ul class="some-ul2">
              <li><strong>Modern Hostels:</strong> Comfortable, secure accommodations with all amenities</li>
              <li><strong>Cafeterias:</strong> Offering international cuisine, including Indian food options</li>
              <li><strong>Student Clubs:</strong> Medical research groups, cultural societies, sports activities</li>
              <li><strong>Annual Events:</strong> Cultural festivals, sports competitions, and academic conferences</li>
              <li><strong>Exploring Georgia:</strong> Weekends can be spent exploring Georgia’s breathtaking landscapes, historical sites, and modern city life</li>
            </ul>
          </div>
        </div>
        <div class="sectio-line-sepr last-seprtr">
          <img src="{{url('/website/img/study-abroad/section-join-lines-img.png')}}" alt="curve line">
        </div>
        <div class="visa-ass-dtl row-reverse">
          <div class="visa-asst-img" data-aos="fade-left" data-duration="200">
            <img src="{{url('/website/img/study-abroad/gruni10.png')}}" alt="Key Highlights of Grigol Robakidze University">
          </div>
          <div class="visa-asst-cont" data-aos="fade-right" data-duration="200">
            <h3>Career Opportunities After MBBS from Grigol Robakidze University (GRUNI):</h3>
            <ul class="some-ul2">
              <li><strong>Practice in India:</strong> Clear the FMGE/NExT to start practicing in India</li>
              <li><strong>Pursue PG Abroad:</strong> Appear for USMLE (USA), PLAB (UK), or other licensing exams in Canada, Australia, Germany, etc.</li>
              <li><strong>Global Medical Practice:</strong> Work in reputed hospitals worldwide or pursue opportunities in medical research, healthcare management, and public health</li>
              <li><strong>Higher Studies:</strong> Specialized programs in cardiology, surgery, radiology, and other fields globally</li>
            </ul>
          </div>
        </div>
        <div class="sectio-line-sepr img-reverse">
          <img src="{{url('/website/img/study-abroad/section-join-lines-img.png')}}" alt="curve line">
        </div>
        <div class="visa-ass-dtl">
          <div class="visa-asst-img" data-aos="fade-right" data-duration="200">
            <img src="{{url('/website/img/study-abroad/gruni11.png')}}" alt="Why Choose Grigol Robakidze University (GRUNI) for MBBS?">
          </div>
          <div class="visa-asst-cont" data-aos="fade-left" data-duration="200">
            <h3>Why Choose Us for Your MBBS Journey at Grigol Robakidze University (GRUNI)?</h3>
            <p>Life at GRUNI goes beyond academics! The university offers a vibrant student life with</p>
            <ul class="some-ul2">
              <li><strong>Expert Guidance:</strong> End-to-End counseling from university selection to visa assistance</li>
              <li><strong>Complete Admission Support:</strong> Hassle-free application, document processing, and travel arrangements</li>
              <li><strong>Affordable Packages:</strong> Transparent fee structure with no hidden costs</li>
              <li><strong>Post-Arrival Services:</strong> Airport pickup, accommodation assistance, and ongoing support throughout your studies</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- faqs sec -->
    <div class="comm-section" data-aos="fade-in" data-duration="200">
      <div class="container">
        <h3 class="sec-title text-center"><strong>FAQs</strong></h3>

        <ul class="accordion">
          <li>
            <a class="toggle" href="#">Is Grigol Robakidze University (GRUNI) recognized by NMC?<span class="sign"></span></a>
            <p class="pera">
              Yes, the university is recognized by the National Medical Commission (NMC), making Indian students eligible to practice in India after clearing the FMGE/NExT.
            </p>
          </li>
          <li>
            <a class="toggle" href="#">Is NEET required to study MBBS at Grigol Robakidze University (GRUNI)?<span class="sign"></span></a>
            <p class="pera">
              Yes, NEET is mandatory for Indian students who want to practice medicine in India.
            </p>
          </li>
          <li>
            <a class="toggle" href="#">What is the medium of instruction?<span
              class="sign"></span>
            </a>
            <p class="pera">
              The MBBS program is taught entirely in English.
            </p>
          </li>
          <li>
            <a class="toggle" href="#">Is it safe to study in Georgia?<span class="sign"></span></a>
            <p class="pera">
              Yes, Georgia is one of the safest countries in Europe with a friendly environment for international students.
            </p>
          </li>
          <li>
            <a class="toggle" href="#">Can I pursue PG in the USA or UK after MBBS from Grigol Robakidze University (GRUNI)?<span
              class="sign"></span>
            </a>
            <p class="pera">
              Yes, after clearing the respective licensing exams like USMLE or PLAB, you can pursue PG in countries like the USA, UK, Canada, etc.
            </p>
          </li>
        </ul>
      </div>
    </div>

    <!-- Recognitions sec -->
    <div class="comm-section lBlue-bg pres-recog-sec-wrap">
      <div class="container" data-aos="fade-in" data-duration="0">
        <h3 class="sec-title text-center">Start Your Medical Career @ <br><strong>Grigol Robakidze University (GRUNI)</strong> Today!</h3>
        <div class="media-logo-wrap">
          <div class="f-row f-1">
            <div class="f-col">
              <div class="comm-para">
                <p>Don’t just dream of becoming a doctor—make it a reality with <strong>Grigol Robakidze University (GRUNI)</strong> in Georgia. Get world-class medical education, global exposure, and the skills needed to succeed in today’s competitive healthcare environment.</p>
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
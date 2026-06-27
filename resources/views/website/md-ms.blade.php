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
<style type="text/css">
    .benefit-content-wrap {
      margin-top: 0px;
    }
  </style>
@endsection
@section('content')
<div class="inner-hero mdms-inner" data-aos="fade-in" data-duration="0">
      <div class="container">
        <div class="inner-hero-wrap about-hero-wrap">
          <div class="inner-hero-left ">
            <h1 class="hero-title-txt">Discover About <br><span class="highlighter">MD/MS</span>
            </h1>
            <div class="hero-btns top40">
              <a id="openPopup" href="{{url('/contact-us')}}" class="button open-popup" style="cursor:pointer;">Enquire Now</a>
            </div>
          </div>
          <div class="inner-hero-right">
            <img src="{{url('/website/img/md-ms/mdmsgirl.png')}}" alt="MD/MS">
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <ul class="breadcrumb">
        <li><a href="{{url('/')}}">Home</a></li>
        <li><a>MD/MS</a></li>
      </ul>
    </div>

    <!-- MD/MS -->
    <div class="comm-section" data-aos="fade-in" data-duration="0">
      <div class="container">
        <div class="scholar-sec-wrap">
          <div class="sholar-left">
            <h3 class="sec-title"><span class="highlighter">MD/MS</span></h3>
            <div class="comm-para">
              <p>Medical education in India offers various opportunities for doctors to specialize after completing their MBBS degree. Among the most sought-after postgraduate courses are Doctor of Medicine (MD) and Master of Surgery (MS). These degrees provide advanced training in medical and surgical specialties, respectively, allowing doctors to enhance their expertise and career prospects</p>
            </div>
          </div>
          <div class="sholar-img">
            <img src="{{url('/website/img/md-ms/mdmsextra.webp')}}" alt="MD/MS">
          </div>
        </div>
      </div>
    </div>

    <!-- MD sec -->
    <div class="comm-section" data-aos="fade-in" data-duration="200" id="md">
      <div class="container">
        <div class="benefit-content-wrap">
          <div class="benefit-img-wrap">
            <div class="benef-sticky-div">
              <div class="benefit-img"><img src="{{url('/website/img/md-ms/md.webp')}}" alt="MD"></div>
            </div>
          </div>
          <div class="benefit-content">
            <div class="benefit-box">
              <h3 class="benef-title logo-color-1 fs-30">MD (Doctor of Medicine)</h3>
              <div class="benef-dtl">
                <p><strong>Doctor of Medicine</strong>, or MD for short, is a professional degree given to doctors who diagnose, cure, and prevent illnesses. These physicians go through a rigorous educational and training program that includes residency, medical school, and perhaps additional specialization.</p>
                <p>The term "MD" in geography refers to the U.S. state of Maryland, which is well-known for its rich history, stunning coastline, and robust economy. In the field of technology, MD stands for Markdown, a straightforward markup language that is used to format text in documentation and code.</p>
                <p>Furthermore, MD is an acronym for Managing Director, a senior executive in charge of making strategic and operational choices for a business. Because the acronym "MD" is so flexible and often used, it is crucial to interpret it according to the context in which it is used.</p>
              </div>
              <h3 class="spe-tittle">Top Specialization In MD</h3>
              <div class="f-row f-3 text-center">
                @foreach($mdSpecializations as $specialization) 
                <div class="f-col mb-15">
                  <div class="spe-col">{{$specialization->name}}</div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- MS sec -->
    <div class="comm-section" data-aos="fade-in" data-duration="200" id="ms">
      <div class="container">
        <div class="benefit-content-wrap">
          <div class="benefit-content">
            <div class="benefit-box">
              <h3 class="benef-title logo-color-1 fs-30">MS (Master of Surgery)</h3>
              <div class="benef-dtl">
                <p>Physicians who specialize in surgery are granted the <strong>Master of Surgery (MS)</strong>, a postgraduate medical degree. Medical professionals who want to improve their knowledge, abilities, and proficiency in a variety of surgical specialties, including neurosurgery, orthopedic surgery, and general surgery, are the target audience.</p>
                <p>In order to ensure that graduates are adequately equipped to carry out intricate surgical procedures with care and precision, the curriculum usually combines research, practical clinical training, and demanding academic study. Depending on the nation and expertise, MS programs typically run two to three years.</p>
                <p>This degree is essential for increasing the surgical skills of medical professionals, which in turn improves patient care and healthcare results.</p>
              </div>
              <h3 class="spe-tittle">Top Specialization In MS</h3>
              <div class="f-row f-3 text-center">
                @foreach($msSpecializations as $specialization)
                <div class="f-col mb-15">
                  <div class="spe-col">{{$specialization->name}}</div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
          <div class="benefit-img-wrap">
            <div class="benef-sticky-div">
              <div class="benefit-img"><img src="{{url('/website/img/md-ms/ms.webp')}}" alt="MS"></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- sec -->
    <div class="comm-section" data-aos="fade-in" data-duration="200">
      <div class="container">
        <div class="f-row f-1 mb-40">
          <div class="f-col mb-30">
            <h4 class="sec-title-2"><span class="highlighter">Admission Process</span></h4>
          </div>
          <div class="f-col">
            <h5 class="sec-title-3">In India, entrance exams are the main method of admission to MD/MS programs:</h5>
            <div class="comm-para">
              <p>The most popular entrance exam for admission to MD/MS seats in public and private medical schools is NEET-PG (National Eligibility cum Entrance Test-Postgraduate), which is administered by the National Board of Examinations (NBE).</p>
              <p>For admission to prestigious universities like AIIMS, JIPMER, PGIMER, and NIMHANS, AIIMS administers the Institute of National Importance Combined Entrance Test, or INI-CET.</p>
              <p>State-Level and Private University Examinations: A number of states and private universities administer their own entrance exams to candidates for MD/MS programs.</p>
            </div>
          </div>
        </div>
        <div class="f-row f-1 mb-40">
          <div class="f-col mb-30">
            <h4 class="sec-title-2"><span class="highlighter">Course Duration</span></h4>
          </div>
          <div class="f-col">
            <div class="comm-para">
              <ul class="some-ul">
                <li>Both the MD and MS programs last three years.</li>
                <li>Research, theoretical learning, and clinical training are all part of the program.</li>
                <li>Under supervision, students must work as residents in hospitals.</li>
                <li>Case studies, patient care, and live surgeries are examples of practical exposure (for MS candidates).</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="f-row f-1 mb-40">
          <div class="f-col mb-30">
            <h4 class="sec-title-2"><span class="highlighter">Career Opportunity</span></h4>
          </div>
          <div class="f-col">
            <h5 class="sec-title-3">Graduates with an MD or MS have a variety of professional options:</h5>
            <div class="comm-para">
              <p><strong>Hospital Practice:</strong> Hold specialized positions at public or private hospitals.</p>
              <p><strong>Teaching and Research:</strong> Become a faculty member at medical schools or work as a medical researcher.</p>
              <p><strong>Super-Specialization (DM/MCh):</strong> This refers to additional specialization through Master of Chirurgiae (MCh) or Doctor of Medicine (DM) programs.</p>
              <p><strong>Private Practice:</strong> Open a multispecialty hospital or private clinic.</p>
              <p><strong>Possibilities Abroad:</strong> A large number of MD/MS graduates work as fellows and practitioners in the US, UK, Canada, and Australia.</p>
              <p><strong>Corporate Healthcare:</strong> Collaborate with medical device companies, pharmaceutical corporations, or healthcare startups.</p>
            </div>
          </div>
        </div>
        <div class="f-row f-1 mb-40">
          <div class="f-col mb-30">
            <h4 class="sec-title-2"><span class="highlighter">Salary</span></h4>
          </div>
          <div class="f-col">
            <div class="comm-para">
              <p>Government Hospitals: INR 1,00,000 - 2,50,000 per month</p>
              <p>Private Hospitals: INR 1,50,000 - 5,00,000 per month</p>
            </div>
          </div>
        </div>
        <div class="f-row f-1">
          <div class="f-col mb-30">
            <h4 class="sec-title-2"><span class="highlighter">Top MD/MS Colleges In India</span></h4>
          </div>
        </div>
        <div class="f-row f-3 text-center">
          @foreach($colleges as $college) 
          <div class="f-col mb-15">
            <a href="{{url('/college-details/'.$college->slug)}}"><div class="spe-col mb-15">{{$college->name}}</div></a>
          </div>
          @endforeach
        </div>
      </div>
    </div>

    <!-- FAQ -->
    <div class="comm-section" data-aos="fade-in" data-duration="200">
      <div class="container">
        <h3 class="sec-title text-center"><strong>FAQs</strong></h3>
        <ul class="accordion">
          <li>
            <a class="toggle" href="#">Is there a management quota for MD/MS admissions?<span class="sign"></span></a>
            <p class="pera">Yes, private medical colleges may have a management quota, but admissions are still conducted through the NEET PG counseling process.</p>
          </li>
          <li>
            <a class="toggle" href="#">Can I apply directly to a medical college for MD/MS?<span class="sign"></span></a>
            <p class="pera">No, all admissions are through the NEET PG counseling process</p>
          </li>
          <li>
            <a class="toggle" href="#">Are there any quotas for specific categories?<span class="sign"></span></a>
            <p class="pera">Yes, there are quotas for categories such as General, OBC, SC, ST, and PwD. Each category has specific eligibility criteria and seat reservations.</p>
          </li>
          <li>
            <a class="toggle" href="#">What is the fee structure for MD/MS programs?<span class="sign"></span></a>
            <p class="pera">Fees vary depending on the institution and the category of the seat. Government colleges generally have lower fees compared to private institutions.</p>
          </li>
          <li>
            <a class="toggle" href="#">Can I apply for MD/MS if I have a foreign medical degree?<span class="sign"></span></a>
            <p class="pera">Yes, provided you have a valid Foreign Medical Graduate Examination (FMGE) certificate and meet other eligibility criteria.</p>
          </li>
          <li>
            <a class="toggle" href="#">Is there any internal quota for MD/MS admissions?<span class="sign"></span></a>
            <p class="pera">No, admissions are based on merit through the NEET PG counseling process.</p>
          </li>
        </ul>
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
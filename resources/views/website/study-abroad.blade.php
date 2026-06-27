@extends('website.layouts.app')
@section('title', 'Disclaimer')
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
    .count-nums {
      font-size: 36px;
    }
  </style>
@endsection
@section('content')
<div class="inner-hero study-hero" data-aos="fade-in" data-duration="0">
      <div class="container">
        <div class="inner-hero-wrap study-hero-wrap">
          <div class="inner-hero-left">
            <h2 class="hero-title-txt"><span class="highlighter">Study Abroad: </span>Learn, explore and grow in a vibrant international community.</h2>
            <div class="hdr-search-form-wrap">
              <div class="hero-btns study-hero-btn">
                <a id="openPopup" href="{{url('/contact-us')}}" class="button open-popup" style="cursor:pointer;">Book Free Consultation</a>
                <a class="button" href="#"  target="_blank" style="cursor:pointer;">View & Download Brochure</a>  
              </div>
            </div>
          </div>

          <div class="inner-hero-right">
            <img src="{{url('/website/img/study-abroad/studyabroad.png')}}" alt="Study Abroad">
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <ul class="breadcrumb">
        <li><a href="{{url('/')}}">Home</a></li>
        <li><a>Study Abroad</a></li>
      </ul>
    </div>

    <!-- counter sec -->
    <div class="comm-section" data-aos="fade-in" data-duration="0">
      <div class="container">
        <div class="counter-wrap">
          <div class="f-row f-4 f-834-2 f-480-1">
            <div class="f-col">
              <div class="counter-cont-wrap">
                <h3 class="count-nums">50<span>+</span></h3>
                <h4 class="count-title">Universities</h4>
              </div>
            </div>
            <div class="f-col">
              <div class="counter-cont-wrap">
                <h3 class="count-nums">7k-30k</h3>
                <h4 class="count-title">Annual tuition fees</h4>
              </div>
            </div>
            <div class="f-col">
              <div class="counter-cont-wrap">
                <h3 class="count-nums">100<span>+</span></h3>
                <h4 class="count-title">International Students</h4>
              </div>
            </div>
            <div class="f-col">
              <div class="counter-cont-wrap">
                <h3 class="count-nums">30<span>%</span></h3>
                <h4 class="count-title">Scholorship</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- study Abroad sec -->
    <div class="comm-section" data-aos="fade-in" data-duration="0">
      <div class="container">
        <h3 class="sec-title text-center"><span class="highlighter">Study Abroad</span></h3>
        <br>
        <div class="comm-para sec-dtl">
          <p class="center">Studying overseas gives students a rare chance to encounter different cultures, broaden their horizons, and advance both academically and personally. Students who study abroad are exposed to a variety of instructional approaches, cutting-edge classroom settings, and a wealth of scholarly materials. Additionally, studying overseas makes it simpler to interact with peers and professionals worldwide by opening doors to global networking opportunities. Furthermore, it assists students in acquiring critical life skills like flexibility, problem-solving, and intercultural communication—all of which are highly sought after by employers in the current global labor market. Studying abroad, whether for professional, graduate, or undergraduate degrees, is a life-changing experience that expands perspectives and creates the groundwork for a prosperous global career.</p>
        </div>
      </div>
    </div>

    <!-- MBBS Abroad -->
    <div class="comm-section" data-aos="fade-in" data-duration="0">
      <div class="container">
        <div class="scholar-sec-wrap">
          <div class="sholar-left" data-aos="fade-right" data-duration="200">
            <h3 class="sec-title"><span class="highlighter">MBBS Abroad</span></h3>
            <div class="comm-para">
              <p>Aspiring medical professionals are increasingly choosing to pursue an MBBS (Bachelor of Medicine, Bachelor of Surgery) degree overseas. Studying MBBS overseas offers a special chance to obtain international exposure and high-quality education because of the top-notch colleges, internationally renowned curricula, and varied cultural experiences. We at <a href="{{url('/')}}">KG2PG Admissions</a> make sure that students get the greatest support and guidance possible as they navigate the whole MBBS study process at prestigious international universities.</p>
            </div>
          </div>
          <div class="sholar-img" data-aos="fade-left" data-duration="200">
            <img src="{{url('/website/img/study-abroad/mbbsabroadextra.png')}}" alt="MBBS Abroad">
          </div>
        </div>
      </div>
    </div>

    <!-- why study abroad -->
    <div class="comm-section" data-aos="fade-in" data-duration="200">
      <div class="container">
        <div class="report-sec-wrap">
          <div class="f-row">
            <div class="w60 w-1024-100">
              <h1 class="sec-title">Why <span class="highlighter">Study Abroad?</span> </h1>
              <div class="study-desc">
                <ul>
                  <li>
                    <div class="report-icon"><i class="ph ph-certificate"></i></div>
                    <div class="study-descrp-wrap">
                      <h4 class="desc-title">High Quality Education</h4>
                      <div class="comm-para">
                        <p>Numerous foreign colleges provide internationally certified MBBS programs and are approved by medical bodies. In order to become qualified medical professionals, students receive excellent instruction, including practical experience through clinical internships in prestigious hospitals.</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="report-icon"><i class="ph ph-certificate"></i></div>
                    <div class="study-descrp-wrap">
                      <h4 class="desc-title">Affordability</h4>
                      <div class="comm-para">
                        <p>Compared to the high cost of medical education in many countries, studying MBBS abroad can often be more affordable. With reasonable tuition fees, students can access the same high-quality education that would otherwise be unattainable in their home country.</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="report-icon"><i class="ph ph-certificate"></i></div>
                    <div class="study-descrp-wrap">
                      <h4 class="desc-title">Global Exposure</h4>
                      <div class="comm-para">
                        <p>Students can engage with peers from many cultural backgrounds when they study in varied settings, which broadens their understanding of medicine and healthcare. Additionally, it provides access to post-graduation employment options abroad.</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="report-icon"><i class="ph ph-certificate"></i></div>
                    <div class="study-descrp-wrap">
                      <h4 class="desc-title">International Recognition</h4>
                      <div class="comm-para">
                        <p>The Medical Council of India (MCI), the World Health Organization (WHO), and other major medical councils throughout the world acknowledge MBBS programs offered by universities abroad, particularly those in nations like China, Russia, Ukraine, and the Philippines. This guarantees that after earning their degree, students can practice medicine anywhere in the world.</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="report-icon"><i class="ph ph-certificate"></i></div>
                    <div class="study-descrp-wrap">
                      <h4 class="desc-title">No Entrance Exam</h4>
                      <div class="comm-para">
                        <p>The admissions process for overseas students is made simpler by the fact that many nations that offer MBBS programs abroad do not require students to take competitive entrance exams like NEET.</p>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <form id="bookconsultation" class="w30 w-1280-35 w-1024-100" action="{{url('/submit-enquiry')}}" method="post">
              <div class="" id="divBookConsultation">
                <div class="book-counseller-form">    
                  <div class="contact-form">
                    <h4 class="bookcounsr-title">
                      Book your Free Consultation with Trustworthy Counsellors
                      
                    </h4>
                    
                    @csrf
                    @honeypot
                    <input type="hidden" name="type" value="countryPageForm">
                    <div class="comm-form">
                      <div class="f-row">
                        <div class="w100">
                          <div class="form-grp">
                            <input type="text" class="form-field" placeholder="Name" id="formfirstName" name="name" oninvalid="this.setCustomValidity('Please Enter Name')" oninput="setCustomValidity('')" required="">
                          </div>
                        </div>
                        <div class="w100">
                          <div class="form-grp">
                            <input type="email" class="form-field" placeholder="Email" id="formEmail" name="email" oninvalid="this.setCustomValidity('Please Enter Valid Email')" oninput="setCustomValidity('')" required="">
                          </div>
                        </div>
                        <div class="w100">
                          <div class="form-grp">
                            <input type="number" class="form-field" maxlength="12" placeholder="Mobile Number" id="phone" name="phone" oninvalid="this.setCustomValidity('Please Enter Mobile No')" oninput="setCustomValidity('')" required="">
                          </div>
                        </div>
                        <div class="w100">
                          <div class="form-grp">
                            <input type="text" class="predictive form-field ui-autocomplete-input" placeholder="Preferred Course" id="formCourse" name="course" oninvalid="this.setCustomValidity('Please Enter Course')" oninput="setCustomValidity('')" required="" autocomplete="off">
                          </div>
                        </div>
                        <div class="w100">                                                        
                          <input class="button line country" type="submit" value="Submit">
                        </div>
                        <div id="message" class="postmsg" style="color:red"></div>
                      </div>
                    </div>
                    
                  </div>   
                </div>
              </div>
              </form>
          </div>
        </div>

      </div>
    </div>

    <!-- Why KG2PG For Study Abroad -->
    <div class="comm-section lBlue-bg-2 pb-space overflw-y-hdn mt-40" data-aos="fade-in" data-duration="0" style="border-bottom-left-radius: 0; border-bottom-right-radius: 0;">
      <div class="container">
        <h3 class="sec-title text-center">Why <strong>KG2PG</strong> For<span class="highlighter"> Study Abroad</span>
        </h3>
        <br>
        <div class="comm-para sec-dtl">
          <p class="center">From selecting the best university to completing the required documentation for visas and scholarships, KG2PG is a study abroad consultancy that assists students in overcoming the challenges of studying Abroad.</p>
        </div>
        <div class="swiper univesSwiper univer-swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="univer-box">
                <div class="unvier-hdr">
                  <h3 class="univer-name">Professional Advice</h3>
                </div>
                <div class="unvier-dtl">
                  <div class="univer-dtl-div">
                    <div class="comm-para">
                      <p>Based on students academic backgrounds, professional aspirations, and personal preferences, KG2PG provides individualized counseling to assist students in choosing the ideal course and university. In order to guarantee that students make informed judgments, this advice is essential.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="univer-box">
                <div class="unvier-hdr">
                  <h3 class="univer-name">All-inclusive Services</h3>
                </div>
                <div class="unvier-dtl">
                  <div class="univer-dtl-div">
                    <div class="comm-para">
                      <p>We offer a variety of services, such as help with college applications, visa processing, scholarship counseling, and lodging arrangements.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="univer-box">
                <div class="unvier-hdr">
                  <h3 class="univer-name">International Experience</h3>
                </div>
                <div class="unvier-dtl">
                  <div class="univer-dtl-div">
                    <div class="comm-para">
                      <p>KG2PG has a network of international partners and ties with universities across various countries, helping students to access a wide range of options for studying abroad.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="univer-box">
                <div class="unvier-hdr">
                  <h3 class="univer-name">Professional Support</h3>
                </div>
                <div class="unvier-dtl">
                  <div class="univer-dtl-div">
                    <div class="comm-para">
                      <p>The consultancy is staffed with experienced professionals who are well-versed in the requirements and procedures involved in studying abroad, ensuring students don’t miss any important steps.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="univer-box">
                <div class="unvier-hdr">
                  <h3 class="univer-name">Scholarship Opportunities</h3>
                </div>
                <div class="unvier-dtl">
                  <div class="univer-dtl-div">
                    <div class="comm-para">
                      <p>KG2PG often assists students in finding scholarships or financial aid opportunities, helping to make studying abroad more affordable.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="univer-box">
                <div class="unvier-hdr">
                  <h3 class="univer-name">Visa Assistance</h3>
                </div>
                <div class="unvier-dtl">
                  <div class="univer-dtl-div">
                    <div class="comm-para">
                      <p>Going through the visa application process can be tricky, and KG2PG’s expertise in handling visa ensures students meet all requirements and deadlines for successful approval.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-scrollbar"></div>
        </div> 
      </div>
    </div>

    <!-- Top Destinations for Studying MBBS Abroad -->
    <div class="comm-section lBlue-bg" data-aos="fade-in" data-duration="0" style="border-top-left-radius: 0; border-top-right-radius: 0;" id="topdes">
      <div class="container">
        <div class="sec-title text-center">Top <strong>Destinations</strong> for
          <span class="highlighter">Studying MBBS Abroad</span>
        </div>
        <br>
        <div class="comm-para sec-dtl">
          <p class="center black-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
        </div>
        <div class="destn-cntry-box-wrap">
          <div class="f-row f-3 f-1024-2 f-480-1">
            @foreach($countries as $country)
            <div class="f-col">
              <a href="{{url('/study-in-'.$country->slug)}}" class="det-cntry-box">
                <div class="cntry-img">
                  <img src="{{url('/storage/'.$country->image)}}" alt="{{$country->name}}">
                </div>
                <h3 class="cntry-title black-text text-center">{{$country->name}}</h3>
              </a>
            </div>
            @endforeach

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

<script src="{{url('/website/js/lenis.min.js')}}"></script>
  <!-- aos JS -->
  <script src="{{url('/website/js/aos.js')}}"></script>
  <!-- Swiper Slider -->
  <script src="{{url('/website/js/swiper-bundle.min.js')}}"></script>
  <script src="{{url('/website/js/jquery.magnific-popup.min.js')}}" id="popup-js-js"></script>
  <script src="{{url('/website/js/megamenu.js')}}"></script>
  <script src="{{url('/website/js/common.js')}}"></script>
  <script src="{{url('/website/js/studyabroad-pages.js')}}"></script>
  <!--popup start-->
  <!-- <script src="{{url('/website/js/popup-form.js')}}" id="popup-form-js-js"></script> -->
  <!--popup form validation script-->

  <!--predictive script-->
  <link rel="stylesheet" href="{{url('/website/css/jquery-ui.css')}}">
  <script src="{{url('/website/js/jquery-ui.min.js')}}"></script>
  <script src="{{url('/website/js/predictive-course.js')}}"></script>
  <script src="{{url('/website/js/popupscript.js')}}"></script>
  <!--form data submit common script-->
@endsection
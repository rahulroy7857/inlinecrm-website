@extends('website.layouts.app')
@section('title', 'Diploma')
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
    .dotted-line {
      position: absolute;
      top: 2.5%;
      left: 50%;
      border: 1px dashed var(--clr-primary2);
      width: 1px;
      height: 95%;
    }
    .adm-proc-step-number .adm-stp-num-wrap .adm-stp-num p {
      background: #091d4a;
      color: var(--clr-white);
    }
    .adm-proc-steps:nth-child(odd) .adm-proc-step-number .adm-stp-num-wrap .adm-stp-num p {
      background: var(--clr-primary2);
    }
    .adm-step-title {
      font-size: 23px;
      color: var(--clr-primary2);
    }
  </style>
@endsection
@section('content')
<div class="inner-hero diploma-inner" data-aos="fade-in" data-duration="0">
      <div class="container">
        <div class="inner-hero-wrap about-hero-wrap">
          <div class="inner-hero-left ">
            <h1 class="hero-title-txt">Explore <span class="highlighter">Diploma</span><br> Colleges
            </h1>

            <div class="hero-btns top40">
              <a id="openPopup" href="{{url('/contact-us')}}" class="button open-popup" style="cursor:pointer;">Enquire Now</a>
            </div>
          </div>
          <div class="inner-hero-right">
            <img src="{{url('/website/img/diploma/diplomagirl.webp')}}" alt="Diploma">
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <ul class="breadcrumb">
        <li><a href="{{url('/')}}">Home</a></li>
        <li><a>Other Courses</a></li>
        <li><a>Diploma</a></li>
      </ul>
    </div>

    <!-- Diploma sec -->
    <div class="comm-section" data-aos="fade-in" data-duration="0">
      <div class="container">
        <div class="scholar-sec-wrap">
          <div class="sholar-left" data-aos="fade-right" data-duration="200">
            <h3 class="sec-title"><span class="highlighter">Diploma Course</span></h3>
            <div class="comm-para">
              <p>Without committing to a lengthy degree program, diploma courses are an excellent opportunity to seek job options, improve employability, and acquire specific skills. These courses are intended to give students in-depth information and real-world experience in particular sectors, enabling them to become competent and prepared for the workforce.</p>
              <p>We at KG2PG assist you in selecting the best diploma program, guaranteeing that you acquire the credentials and abilities required for a prosperous job.</p>
            </div>
          </div>
          <div class="sholar-img" data-aos="fade-left" data-duration="200">
            <img src="{{url('/website/img/diploma/diplomaextra.png')}}" alt="Diploma">
          </div>
        </div>
      </div>
    </div>

    <!--Why Pursue a Diploma Course? -->
    <div class="comm-section" data-aos="fade-in" data-duration="0">
      <div class="container">
        <h3 class="sec-title text-center">Why Pursue a <span class="highlighter">Diploma Course?</span></h3>
        <div class="moreabout-sec-wrap">
          <div class="moreabout-links">
            <a href="#section1" class="section-name">
              <i class="ph ph-note"></i>
              <span>Time-efficient</span>
            </a>
            <a href="#section2" class="section-name">
              <i class="ph ph-identification-badge"></i>
              <span>Specialized Information</span>
            </a>
            <a href="#section3" class="section-name">
              <i class="ph ph-identification-badge"></i>
              <span>Affordable</span>
            </a>
            <a href="#section4" class="section-name">
              <i class="ph ph-identification-badge"></i>
              <span>Job Readiness</span>
            </a>
            <a href="#section5" class="section-name">
              <i class="ph ph-identification-badge"></i>
              <span>Flexible Opportunities</span>
            </a>
          </div>
          <div class="moreabout-cont-wrap">
            <section id="section1" class="moreabout-sections">
              <div class="comm-para">
                <h4 class="moreabout-dtl-title">Time-efficient</h4>
                <p>Because diploma programs are usually shorter than degree programs, you can start working sooner.</p>
              </div>
            </section>

            <section id="section2" class="moreabout-sections">
              <div class="comm-para">
                <h4 class="moreabout-dtl-title">Specialized Information</h4>
                <p>By concentrating on particular fields, these programs give you the information and abilities that will improve your employability.</p>
              </div>
            </section>

            <section id="section3" class="moreabout-sections">
              <div class="comm-para">
                <h4 class="moreabout-dtl-title">Affordable</h4>
                <p>Diploma programs are a great choice for individuals who wish to acquire knowledge without making a significant financial commitment because they typically cost less than full degree programs.</p>
              </div>
            </section>

            <section id="section4" class="moreabout-sections">
              <div class="comm-para">
                <h4 class="moreabout-dtl-title">Job Readiness</h4>
                <p>A lot of diploma programs provide practical instruction and internships that get you ready for work right away in your subject of choice.</p>
              </div>
            </section>

            <section id="section5" class="moreabout-sections">
              <div class="comm-para">
                <h4 class="moreabout-dtl-title">Flexible Opportunities</h4>
                <p>For working people who wish to improve their skills, a lot of diploma programs provide evening, online, and part-time opportunities.</p>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>

    <!-- Why Choose KG2PG for Diploma Course Guidance -->
    <div class="comm-section" data-aos="fade-in" data-duration="200">
      <div class="container">
        <div class="report-sec-wrap">
          <div class="f-row">
            <div class="w100 w-1024-100">
              <h1 class="sec-title mb-20">Why <span class="highlighter">Choose KG2PG</span> for Diploma Course Guidance</h1>
              <div class="comm-para">
                <p>We at <strong>KG2PG</strong> guide you through the many diploma programs that are offered and help you make the best decision.</p>
              </div>
              <div class="study-desc">
                <ul>
                  <li>
                    <div class="report-icon"><i class="ph ph-certificate"></i></div>
                    <div class="study-descrp-wrap">
                      <h4 class="desc-title">Customized Guidance</h4>
                      <div class="comm-para">
                        <p>We offer individual guidance to comprehend your objectives and recommend the most appropriate diploma programs for you.</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="report-icon"><i class="ph ph-certificate"></i></div>
                    <div class="study-descrp-wrap">
                      <h4 class="desc-title">College Selection</h4>
                      <div class="comm-para">
                        <p>We assist you in choosing the top universities with top-notch diploma programs and first-rate placement assistance.</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="report-icon"><i class="ph ph-certificate"></i></div>
                    <div class="study-descrp-wrap">
                      <h4 class="desc-title">Admission Support</h4>
                      <div class="comm-para">
                        <p>We assist you with the application process, making sure you fulfill the prerequisites and send in all required paperwork.</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="report-icon"><i class="ph ph-certificate"></i></div>
                    <div class="study-descrp-wrap">
                      <h4 class="desc-title">Career Guidance</h4>
                      <div class="comm-para">
                        <p>Following graduation, we offer career guidance and assistance to help you land internships and employment.</p>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- adm proc sec -->
    <div class="comm-section admsn-step-main-div pb-0">
      <div class="container-small">
        <h3 class="sec-title text-center mb-50">Popular <span class="highlighter">Diploma Course</span></h3>
        <div class="adm-proc-steps-wrap">
          <div class="dotted-line"></div>
          <div class="adm-proc-steps">
            <div class="adm-proc-step-left" data-aos="fade-right" data-duration="0">
              <h3 class="adm-step-title">Diploma In Computer Application</h3>
              <div class="comm-para">
                <p>The fundamentals of computer applications, software tools, and IT systems are covered in this diploma program.</p>
                <p>Opportunities for employment include positions as web designers, software developers, IT support assistants, computer operators, and data entry operators.</p>
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
              <div class="adm-img"><img src="{{url('/website/img/diploma/compapp.png')}}" alt="Diploma In Computer Application"></div>
            </div>
          </div>

          <div class="adm-proc-steps">
            <div class="adm-proc-step-left" data-aos="fade-left" data-duration="200">
              <h3 class="adm-step-title">Diploma In Digital Marketing</h3>
              <div class="comm-para">
                <p>SEO, SEM, social media marketing, email marketing, and content marketing are among the digital marketing tools and tactics that are the main emphasis of this course.</p>
                <p>Possibilities for employment include brand manager, social media manager, SEO specialist, digital marketing executive, and content writer.</p>
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
              <div class="adm-img"><img src="{{url('/website/img/diploma/digmarket.png')}}" alt="Diploma In Digital Marketing"></div>
            </div>
          </div>

          <div class="adm-proc-steps">
            <div class="adm-proc-step-left" data-aos="fade-right" data-duration="200">
              <h3 class="adm-step-title">Diploma In Graphic Design</h3>
              <div class="comm-para">
                <p>The foundations of graphic design, including Adobe Photoshop, Illustrator, CorelDRAW, and other design tools, are covered in this diploma course.</p>
                <p>Career options include positions as an animator, art director, UI/UX designer, graphic designer, and visual communication specialist, among others.</p>
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
              <div class="adm-img"><img src="{{url('/website/img/diploma/graphic.png')}}" alt="Diploma In Graphic Design"></div>
            </div>
          </div>

          <div class="adm-proc-steps">
            <div class="adm-proc-step-left" data-aos="fade-left" data-duration="200">
              <h3 class="adm-step-title">Diploma In Hotel Management</h3>
              <div class="comm-para">
                <p>With an emphasis on hotel operations, customer service, and management, this course equips students with the information and abilities necessary to operate in the hospitality sector.</p>
                <p>Employment Possibilities: Managers of hotels, restaurants, front desk staff, event planners, chefs, etc.</p>
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
              <div class="adm-img"><img src="{{url('/website/img/diploma/hotel.png')}}" alt=""></div>
            </div>
          </div>

          <div class="adm-proc-steps">
            <div class="adm-proc-step-left" data-aos="fade-right" data-duration="200">
              <h3 class="adm-step-title">Application ProcessDiploma In Business Administration</h3>
              <div class="comm-para">
                <p>Students learn the fundamentals of operations, marketing, finance, human resources, and business management in this course.</p>
                <p>Career Opportunities: Sales Manager, Marketing Executive, Operations Manager, HR Assistant, Business Analyst.</p>
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
              <div class="adm-img"><img src="{{url('/website/img/diploma/business.png')}}" alt=""></div>
            </div>
          </div>

          <div class="adm-proc-steps">
            <div class="adm-proc-step-left" data-aos="fade-left" data-duration="200">
              <h3 class="adm-step-title">Interview Preparation </h3>
              <div class="comm-para">
                <p>Interviews are needed for admission, visa eligibility and for visa grant too. We help prepare students with answers to questions that universities are likely to ask. These mock interview sessions are led by specialists who are highly familiar with the typical questions asked by universities. </p>
              </div>
            </div>
            <div class="adm-proc-step-number" data-aos="fade-left" data-duration="0">
              <div class="adm-stp-num-wrap">
                <div class="adm-stp-num">
                  <p>06</p>
                </div>
              </div>
            </div>
            <div class="adm-proc-step-right" data-aos="fade-right" data-duration="200">
              <div class="adm-img"><img src="{{url('/website/img/diploma/interview.png')}}" alt=""></div>
            </div>
          </div>

          <div class="adm-proc-steps">
            <div class="adm-proc-step-left" data-aos="fade-right" data-duration="200">
              <h3 class="adm-step-title">Diploma In Fashion Designing</h3>
              <div class="comm-para">
                <p>The foundations of fashion design, fabric selection, clothing manufacturing, pattern making, and fashion marketing are all covered in this course.</p>
                <p>Possibilities for employment include retail buyer, fashion illustrator, textile designer, fashion consultant, and fashion designer.</p>
              </div>
            </div>
            <div class="adm-proc-step-number" data-aos="fade-right" data-duration="0">
              <div class="adm-stp-num-wrap">
                <div class="adm-stp-num">
                  <p>07</p>
                </div>
              </div>
            </div>
            <div class="adm-proc-step-right" data-aos="fade-left" data-duration="200">
              <div class="adm-img"><img src="{{url('/website/img/diploma/fashion.png')}}" alt=""></div>
            </div>
          </div>

          <div class="adm-proc-steps">
            <div class="adm-proc-step-left" data-aos="fade-left" data-duration="200">
              <h3 class="adm-step-title">Diploma In Interior Designing</h3>
              <div class="comm-para">
                <p>Students enrolled in this diploma program learn how to create visually beautiful and useful interior designs for residences, workplaces, and commercial buildings.</p>
                <p>Possibilities for employment include project management, furniture design, lighting design, interior design, and space planning.</p>
              </div>
            </div>
            <div class="adm-proc-step-number" data-aos="fade-left" data-duration="0">
              <div class="adm-stp-num-wrap">
                <div class="adm-stp-num">
                  <p>08</p>
                </div>
              </div>
            </div>
            <div class="adm-proc-step-right" data-aos="fade-right" data-duration="200">
              <div class="adm-img"><img src="{{url('/website/img/diploma/interior.png')}}" alt=""></div>
            </div>
          </div>

          <div class="adm-proc-steps">
            <div class="adm-proc-step-left" data-aos="fade-right" data-duration="200">
              <h3 class="adm-step-title">Diploma In Accounts & Finance</h3>
              <div class="comm-para">
                <p>The fundamentals of bookkeeping, taxation, accounting, and financial management are taught in this diploma program.</p>
                <p>Career Options: Financial Analyst, Auditor, Payroll Manager, Tax Consultant, Accountant.</p>
              </div>
            </div>
            <div class="adm-proc-step-number" data-aos="fade-right" data-duration="0">
              <div class="adm-stp-num-wrap">
                <div class="adm-stp-num">
                  <p>09</p>
                </div>
              </div>
            </div>
            <div class="adm-proc-step-right" data-aos="fade-left" data-duration="200">
              <div class="adm-img"><img src="{{url('/website/img/diploma/accounts.png')}}" alt=""></div>
            </div>
          </div>

          <div class="adm-proc-steps">
            <div class="adm-proc-step-left" data-aos="fade-left" data-duration="200">
              <h3 class="adm-step-title">Diploma In Photography</h3>
              <div class="comm-para">
                <p>Covering camera methods, image processing, and composition, the course emphasizes both the technical and artistic sides of photography.</p>
                <p>Possibilities for employment include freelance photography, studio management, event photography, photo editing, and photography.</p>
              </div>
            </div>
            <div class="adm-proc-step-number" data-aos="fade-left" data-duration="0">
              <div class="adm-stp-num-wrap">
                <div class="adm-stp-num">
                  <p>10</p>
                </div>
              </div>
            </div>
            <div class="adm-proc-step-right" data-aos="fade-right" data-duration="200">
              <div class="adm-img"><img src="{{url('/website/img/diploma/photography.png')}}" alt=""></div>
            </div>
          </div>

          <div class="adm-proc-steps">
            <div class="adm-proc-step-left" data-aos="fade-right" data-duration="200">
              <h3 class="adm-step-title">Diploma In Early Childhood Education</h3>
              <div class="comm-para">
                <p>This course covers subjects like child psychology, pedagogy, and learning strategies to prepare students for a profession in teaching and caring for young children.</p>
                <p>Opportunities for employment include early childhood educators, childcare providers, preschool teachers, education coordinators.</p>
              </div>
            </div>
            <div class="adm-proc-step-number" data-aos="fade-right" data-duration="0">
              <div class="adm-stp-num-wrap">
                <div class="adm-stp-num">
                  <p>11</p>
                </div>
              </div>
            </div>
            <div class="adm-proc-step-right" data-aos="fade-left" data-duration="200">
              <div class="adm-img"><img src="{{url('/website/img/diploma/earlychild.png')}}" alt=""></div>
            </div>
          </div>

          <div class="adm-proc-steps">
            <div class="adm-proc-step-left" data-aos="fade-left" data-duration="200">
              <h3 class="adm-step-title">Diploma In Healthcare Management</h3>
              <div class="comm-para">
                <p>This course covers the fundamentals of managing healthcare facilities, comprehending healthcare regulations, and supervising hospital and clinic operations.</p>
                <p>Employment Possibilities: Healthcare Consultant, Hospital Operations Manager, Medical Records Manager, and Healthcare Administrator.</p>
              </div>
            </div>
            <div class="adm-proc-step-number" data-aos="fade-left" data-duration="0">
              <div class="adm-stp-num-wrap">
                <div class="adm-stp-num">
                  <p>12</p>
                </div>
              </div>
            </div>
            <div class="adm-proc-step-right" data-aos="fade-right" data-duration="200">
              <div class="adm-img"><img src="{{url('/website/img/diploma/healthcare.png')}}" alt=""></div>
            </div>
          </div>

          <div class="adm-proc-steps">
            <div class="adm-proc-step-left" data-aos="fade-right" data-duration="200">
              <h3 class="adm-step-title">Diploma In Civil Engineering</h3>
              <div class="comm-para">
                <p>Important topics in civil engineering are covered in this course, such as building design, surveying, infrastructure development, and construction materials.</p>
                <p>Opportunities for Employment: Urban Planner, Structural Engineer, Project Engineer, Civil Engineer, Site Supervisor.</p>
              </div>
            </div>
            <div class="adm-proc-step-number" data-aos="fade-right" data-duration="0">
              <div class="adm-stp-num-wrap">
                <div class="adm-stp-num">
                  <p>13</p>
                </div>
              </div>
            </div>
            <div class="adm-proc-step-right" data-aos="fade-left" data-duration="200">
              <div class="adm-img"><img src="{{url('/website/img/diploma/civileng.png')}}" alt=""></div>
            </div>
          </div>

          <div class="adm-proc-steps">
            <div class="adm-proc-step-left" data-aos="fade-left" data-duration="200">
              <h3 class="adm-step-title">Diploma in Animation & Multimedia</h3>
              <div class="comm-para">
                <p>The fundamentals of animation, 3D modeling, visual effects, and multimedia creation are taught in this diploma program.</p>
                <p>Possibilities for employment include film editor, game developer, multimedia designer, animator, and visual effects artist, among others.</p>
              </div>
            </div>
            <div class="adm-proc-step-number" data-aos="fade-left" data-duration="0">
              <div class="adm-stp-num-wrap">
                <div class="adm-stp-num">
                  <p>14</p>
                </div>
              </div>
            </div>
            <div class="adm-proc-step-right" data-aos="fade-right" data-duration="200">
              <div class="adm-img"><img src="{{url('/website/img/diploma/animation.png')}}" alt=""></div>
            </div>
          </div>

          <div class="adm-proc-steps">
            <div class="adm-proc-step-left" data-aos="fade-right" data-duration="200">
              <h3 class="adm-step-title">Diploma In Web Designing</h3>
              <div class="comm-para">
                <p>HTML, CSS, JavaScript, and other web design tools are covered in this course, which focuses on web development and design.</p>
                <p>Career Opportunities: E-commerce Manager, UX/UI Designer, Front-End Developer, Web Designer.</p>
              </div>
            </div>
            <div class="adm-proc-step-number" data-aos="fade-right" data-duration="0">
              <div class="adm-stp-num-wrap">
                <div class="adm-stp-num">
                  <p>15</p>
                </div>
              </div>
            </div>
            <div class="adm-proc-step-right" data-aos="fade-left" data-duration="200">
              <div class="adm-img"><img src="{{url('/website/img/diploma/web.png')}}" alt=""></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Top Diploma Colleges In Bangalore -->
    <div class="comm-section pt-0" data-aos="fade-in" data-duration="0">
      <div class="container">
        <h3 class="sec-title text-center mb-50">Top <span class="highlighter">Diploma Colleges</span> In Bangalore</h3>
        <div class="f-row f-5 text-center">
          @foreach($colleges as $college)
          <div class="f-col mb-15">
            <a href="{{url('/college-details/'.$college->slug)}}"><div class="spe-col mb-20">{{$college->name}}</div></a>
          </div>
          @endforeach
          
          
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
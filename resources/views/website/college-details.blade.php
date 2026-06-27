@extends('website.layouts.app')
@section('title', $college->meta_title)
@section('style-css')   
<script src="https://unpkg.com/@phosphor-icons/web"></script>
  <link rel='stylesheet' id='popup-css-css' href="{{url('/website/css/magnific-popup.css')}}" media='all' />
  <link rel="stylesheet" href="{{url('/website/css/swiper-bundle.css')}}" />
  <link rel="stylesheet" href="{{url('/website/css/aos.css')}}">
  <link rel="stylesheet" href="{{url('/website/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{url('/website/css/main.css')}}" />
  <link rel="stylesheet" href="{{url('/website/css/popupstyles.css')}}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
@endsection
@section('meta')
<meta name="description" content="{{$college->meta}}" />
<meta property="og:title" content="{{ $college->meta_title }}" />
@endsection
@section('style')   
<style type="text/css">
    @media all and (max-width: 768px) {
      .f-col {
        width: 100% !important;
      }
    }
    table th {
      background: var(--clr-primary);
      color: #fff;
      padding: 14px 10px;
      font-size: 18px;
      font-weight: 400;
    }
  table {
    background: #FCFCFD;
    width: 100%;
    border-radius: 30px;
    border-style: hidden;
    border-collapse: separate !important;
    border-spacing: 0;
    border: 1px solid #E6E7E9;
    -moz-border-radius: 12px;
    -webkit-border-radius: 12px;
    border-radius: 12px;
}
table td {
    text-align: center;
    padding: 20px;
    border-right: 1px solid #E6E7E9;
    border-bottom: 1px solid #E6E7E9;
    font-size: 18px;
    font-weight: 500;
    width: 33%;
    color: var(--clr-secndry);
    vertical-align: top;
}
  </style>
@endsection
@section('content')

<div class="comm-section lGrey-bg" data-aos="fade-in" data-duration="0">
      <div class="container">
        <div class="test-page-bnr">
          <div class="test-bnr-cont-left">
            <h1 class="test-page-title">{{$college->name}}</h1>
            <div class="test-cont-dtl-wrap">
              <div class="test-cont-div">
                <h4>Affiliation :</h4>
                <p>{{$college->affiliation}}</p>
              </div>
              <div class="test-cont-div">
                <h4>Established : </h4>
                <p>{{$college->established}}</p>
              </div>
              <div class="test-cont-div">
                <h4>Location</h4>
                <p>{{$college->location}}</p>
              </div>
            </div>
            <a href="{{url('/contact-us')}}" id="openPopup" class="button open-popup" style="cursor:pointer;">Book Free Consultation</a>
          </div>
          <div class="test-bnr-cont-img">
            <img src="{{url('/storage/'.$college->image)}}" alt="colleges-header">
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <ul class="breadcrumb">
        <li><a href="{{url('/')}}">Home</a></li>
        <li><a href="{{url('/colleges')}}">Colleges</a></li>
        <li><a>{{$college->name}}</a></li>
      </ul>
    </div>

    <!-- prep inner page banner sec -->
    <div class="comm-section" data-aos="fade-in" data-duration="0" style="padding-top: 0px;">
      <div class="container">
        <div class="test-rolling-sec-wrap">
          <div class="test-cont-rolling-links">
            <a href="#section1" class="section-name">Overview</a>
            <a href="#section2" class="section-name">Course</a>
            <a href="#section3" class="section-name">Specialization</a>
            <a href="#section4" class="section-name">Fees</a>
            <a href="#section5" class="section-name">Placement</a>
            <a href="#section6" class="section-name">FAQ</a>
          </div>

          <section id="section1" class="test-dtl-sections">
            <div class="sec-title">Overview</div>
            <div class="comm-para">
            {!! $college->about !!}
              {!! $college->overview !!}
            </div>
          </section>

          <section id="section2" class="test-dtl-sections">
            <div class="sec-title">Course</div>
            <div class="comm-para">
              
            </div>
            <div class="test-tables table-responsive">
              <table class="test-table test-table3">
                <thead>
                  <tr>
                    <th>Course</th>
                    <th>Mode</th>
                    <th>Duration</th>
                    <th>Fees</th>
                    <th>Exam</th>
                    <th>Eligibility</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($pgCourses as $course)
                  <tr>
                    <td>{{$course->course->name}}</td>
                    <td>{{$course->type == 1 ? 'Full Time' : 'Part Time'}}</td>
                    <td>{{$course->duration}}</td>
                    <td>{{$course->fees}}</td>
                    <td>{{$course->exam}}</td>
                    <td>{!!$course->eligibility!!}</td>
                  </tr>
                  @endforeach
                  @foreach($ugCourses as $course)
                  <tr>
                    <td>{{$course->course->name}}</td>
                    <td>{{$course->type == 1 ? 'Full Time' : 'Part Time'}}</td>
                    <td>{{$course->duration}}</td>
                    <td>{{$course->fees}}</td>
                    <td>{{$course->exam}}</td>
                    <td>{!!$course->eligibility!!}</td>
                  </tr>
                  @endforeach 
                  @foreach($diplomaCourses as $course)
                  <tr>
                    <td>{{$course->course->name}}</td>
                    <td>{{$course->type == 1 ? 'Full Time' : 'Part Time'}}</td>
                    <td>{{$course->duration}}</td>
                    <td>{{$course->fees}}</td>
                    <td>{{$course->exam}}</td>
                    <td>{!!$course->eligibility!!}</td>
                  </tr>
                  @endforeach 
                  @foreach($pucCourses as $course)
                  <tr>
                    <td>{{$course->course->name}}</td>
                    <td>{{$course->type == 1 ? 'Full Time' : 'Part Time'}}</td>
                    <td>{{$course->duration}}</td>
                    <td>{{$course->fees}}</td>
                    <td>{{$course->exam}}</td>
                    <td>{!!$course->eligibility!!}</td>
                  </tr>
                  @endforeach 
                </tbody>
              </table>
            </div>
          </section>
          @if(!empty($college->specializations))
          <section id="section3" class="test-dtl-sections">
            <div class="sec-title">Specialization</div>
            <div class="comm-para">
              {!! $college->specializations !!}
            </div>
          </section>
          @endif
          @if(!empty($college->fees))
          <section id="section4" class="test-dtl-sections">
            <div class="sec-title">Fees</div>
            <div class="comm-para">
            {!! $college->fees !!}
            </div>
           
          </section>
          @endif
          @if(!empty($college->placements))
          <section id="section5" class="test-dtl-sections">
            <div class="sec-title">Placement</div>
            <div class="comm-para">
              {!! $college->placements !!}
            </div>
            
              @php
                $recruitment = json_decode($college->campus_images);
              @endphp
              @if(!empty($recruitment))
            <div class="sec-small-title mb-30">Top Recruiters</div>
            <div class="f-row">
              @foreach($recruitment as $rec)
              <div class="f-col">
                <div class="placement-logo mb-30">
                    <img src="{{url('/storage/campus/'.$rec)}}" alt="cognizant" class="placement-logo-border">
                </div>
              </div>
              @endforeach
            </div>
            @endif
            <!-- <div class="sec-small-title">Internships</div>
            <div class="comm-para">
              <p>During the summer internship program, students receive an opportunity to work with leading global organizations, which often leads to full-time job offers.</p>
            </div> -->
          </section>
          @endif
          @if(!empty($faqs))
          <section id="section6" class="test-dtl-sections">
            <h3 class="sec-title text-center"><strong>FAQs</strong></h3>
            <ul class="accordion">
              @foreach($faqs as $faq)
                <li>
                  <a class="toggle" href="#">{!!$faq->question!!}<span class="sign"></span></a>
                  <p class="pera">{!!$faq->answer!!}</p>
                </li>
                @endforeach
              </ul>
            </section>
            @endif
          </div>
        </div>
      </div>
@endsection
@section('scripts') 
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
  <script src="{{url('/website/js/scoll-script.js')}}"></script>
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
@endsection
@extends('website.layouts.app')
@section('title', 'Top '.$name.' Entrance Exams')
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
<div class="inner-hero inner-hero-9" data-aos="fade-in" data-duration="0">
      <div class="container">
        <div class="inner-hero-wrap about-hero-wrap">
          <div class="inner-hero-left ">
            <h1 class="hero-title-txt">Explore <span class="highlighter">{{$name}}</span><br> Entrance Exams
            </h1>

            <div class="hero-btns top40">
              <a href="{{url('/contact-us')}}" id="openPopup" class="button open-popup" style="cursor:pointer;">Enquire Now</a>
            </div>
          </div>
          <div class="inner-hero-right">
            <img src="{{url('/website/img/entranceexam.webp')}}" alt="{{$name}} entrance exam">
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <ul class="breadcrumb">
        <li><a href="{{url('/')}}">Home</a></li>
        <li><a href="{{url('/top-ranked-'.$slug.'-colleges')}}">{{$name}}</a></li>
        <li><a>{{$name}} Entrance Exams</a></li>
      </ul>
    </div>

    <div class="comm-section" data-aos="fade-in" data-duration="0">
      <div class="container">
        <div class="f-row f-1">
          <div class="f-col">
            <div class="comm-para">
              <p class="mb-20">{{$name}} entrance exams are tests that students take to gain admission to undergraduate {{$name}} programs at various universities and colleges. These exams assess a student's knowledge and aptitude in subjects like Mathematics, Physics, and Chemistry. Depending on the country or region, the exams may vary in terms of structure, syllabus, and the colleges they are associated with.</p>
            </div>
          </div>

          @foreach($exams as $exam)
          <div class="f-col mb-30" id="kcet">
            <div class="career-box">
              <h2 class="job-title">
                <i class="ph ph-number-circle-one"></i>
                <span>{{$exam->full_name}}({{$exam->short_name}})</span>                                            
              </h2>
              <hr>
              <div class="comm-para">
                <p><strong>Conducted by: {{$exam->conducted_by}}</strong></p>
              </div>
              <div class="para-small">
                <p><strong>Purpose:</strong></p>
                <p>{!! $exam->purpose !!}</p>
              </div>
              <div class="para-small">
                <p><strong>Eligibility:</strong></p>
                <p>{!! $exam->eligibility !!}</p>
              </div>
              <div class="para-small">
                <p><strong>Exam Pattern:</strong></p>
                <p>{!! $exam->exam_pattern !!}</p>
              </div>
              <div class="para-small">
                <p><strong>Mode:</strong></p>
                <p>{{$exam->mode}}</p>
              </div>
              <div class="para-small">
                <p><strong>Admission Process:</strong></p>
                <p>{!! $exam->admission_process !!}</p>
              </div>
            </div>
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
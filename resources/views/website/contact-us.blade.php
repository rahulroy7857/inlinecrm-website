@extends('website.layouts.app')
@section('title', 'Contact US')
@section('style-css')   
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

<div class="inner-hero inner-hero-5" data-aos="fade-in" data-duration="0">
  <div class="container">
    <div class="inner-hero-wrap about-hero-wrap">
      <div class="inner-hero-left ">
        <h1 class="hero-title-txt"><span class="highlighter">Contact Us</span>
        </h1>
      </div>
      <div class="inner-hero-right">
        <img src="{{url('/website/img/aboutus.webp')}}" alt="Contact Us">
      </div>
    </div>
  </div>
</div>

<div class="container">
  <ul class="breadcrumb">
    <li><a href="{{url('/')}}">Home</a></li>
    <li><a>Contact Us</a></li>
  </ul>
</div>

<div class="comm-section pb30" data-aos="fade-in" data-duration="200">
  <div class="container">
    <div class="contact-hdr-sec">
      <h1 class="sec-title text-center">
        Contact <span class="highlighter">India's Leading</span> Overseas Educational Consultancy
      </h1>
    </div>
  </div>
</div>

<div class="container-tiny" data-aos="fade-in" data-duration="200">
  <div class="contact-page-form">
    <form id="comm-form" class="form" action="{{url('/submit-contact-us')}}" method="post">
      @csrf
      @honeypot
      <input type="hidden" name="type" value="Website Enquiry">

      <div class="comm-form">
        <div class="f-row">
          <div class="w50 w-1200-100">
            <label for="">Name </label>
            <div class="form-grp">
              <input type="text" class="form-field" id="formName" name="name" oninvalid="this.setCustomValidity('Please Enter Name')" oninput="setCustomValidity('')" required />
            </div>
          </div>
          <div class="w50 w-1200-100">
            <label for="">Email ID </label>
            <div class="form-grp">
              <input type="email" class="form-field" id="formEmail" name="email" oninvalid="this.setCustomValidity('Please Enter Valid Email')" oninput="setCustomValidity('')" required />
            </div>
          </div>
          <div class="w50 w-1200-100">
            <label for="">Mobile Number </label>
            <div class="form-grp">
              <input type="tel" class="form-field" id="formMobile" name="phone" maxlength="10" oninvalid="this.setCustomValidity('Please Enter Mobile No')" oninput="setCustomValidity('')" onkeypress="return isNumberKey(event)" required />
            </div>
          </div>
          <div class="w50 w-1200-100">
            <label for="">Your preferred study destination</label>
            <div class="form-grp">
              <select class="select-field" id="formDestination" name="destination" oninvalid="this.setCustomValidity('Please select destination')" oninput="setCustomValidity('')" required>
                <option value="">Select Destination</option>
                <option value="2">UK</option>
                <option value="3">USA</option>
                <option value="4">Canada</option>
                <option value="5">Australia</option>
                <option value="6">New Zealand</option>
                <option value="7">Singapore</option>
                <option value="8">Ireland</option>
                <option value="9">Germany</option>
                <option value="10">Switzerland</option>
                <option value="11">Dubai</option>
                <option value="12">France</option>
                <option value="13">Spain</option>
                <option value="14">Malaysia</option>
                <option value="16">Italy</option>

              </select>
            </div>
          </div>
          <div class="w50 w-1200-100">
            <label for="">Course </label>
            <div class="form-grp">
              <input type="text" class="predictive form-field" id="formCourse" name="course" oninvalid="this.setCustomValidity('Please enter course')" oninput="setCustomValidity('')" required />
            </div>
          </div>
          <div class="w100">
            <div class="submit-btn">
              <input class="button line" type="submit" value="Submit">                                    
            </div>                                                               
          </div>   
          <div id="message" class="postmsg" style="color:red;"></div>                                                   
        </div>                        
      </div>
    </form>
  </div>
</div>

<!-- Our Location Starts -->
<section class="comm-section blue-bg lacation-main-div top-margin-1" data-aos="fade-in" data-duration="200">
  <div class="container">
    <div class="sec-hdn">
      <h3 class="sec-title text-center white-text"><span class="highlighter">Touch With Us</span></h3>
    </div>
    <div class="locate-wrap">
      <div class="locate-left">
        <!-- <div class="search-bar">
          <input class="search-input" id="searchInput" placeholder="Search Location" type="text" />
        </div> -->
        <div class="choose-box-wrap" data-lenis-prevent>
          <div class="choose-box">
            <i class="ph ph-map-pin"></i>
            <div>
              <h3 class="choose-hdn">KG2PG Admissions</h3>
              <div class="comm-para">
                <p>133/2, 2nd, Janardhana Towers, Residency Rd, above Indian Overseas Bank, Shanthala Nagar, Ashok Nagar, Bengaluru, Karnataka 560025</p>
              </div>
              <div class="complete-line"></div>
            </div>
          </div>
          <div class="choose-box">
            <i class="ph ph-envelope-simple"></i>
            <div>
              <h3 class="choose-hdn"><a href="mailto:info@kg2pgadmissions.com" style="color: #fff;">info@kg2pgadmissions.com</a></h3>
              <div class="complete-line"></div>
            </div>
          </div>
          <div class="choose-box">
            <i class="ph ph-phone-call"></i>
            <div>
              <h3 class="choose-hdn"><a href="tel:+919900008970" style="color: #fff;">+91 99000 08970</a></h3>
              <div class="complete-line"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="locate-right">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.075999430333!2d77.5993302!3d12.966988599999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae17760cedb0cd%3A0xf52fb58a217a2c7a!2sKG2PG%20EduHub%20(OPC)%20Private%20Limited!5e0!3m2!1sen!2sin!4v1736573980502!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>
</section>

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
@endsection
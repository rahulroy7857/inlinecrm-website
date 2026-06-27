@extends('website.layouts.app')
@section('title', 'Register')
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
  .alert {
    padding: 15px;
    margin-bottom: 20px;
    border: 1px solid transparent;
    border-radius: 4px;
  }
  
  .alert-success {
    color: #155724;
    background-color: #d4edda;
    border-color: #c3e6cb;
  }
  
  .alert-danger {
    color: #721c24;
    background-color: #f8d7da;
    border-color: #f5c6cb;
  }
  
  .alert ul {
    margin: 0;
    padding-left: 20px;
  }
  
  .alert li {
    margin-bottom: 5px;
  }
  
  .form-field.error, .select-field.error {
    border-color: #dc3545;
    box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
  }
  
  .error-message {
    display: block;
    margin-top: 5px;
  }
</style>
@endsection
@section('content')
<div class="inner-hero inner-hero-4" data-aos="fade-in" data-duration="0">
      <div class="container">
        <div class="inner-hero-wrap about-hero-wrap">
          <div class="inner-hero-left ">
            <h1 class="hero-title-txt"><span class="highlighter">Registration</span>
            </h1>
            <div class="hero-btns top40">
              <a class="button open-popup modal-toggle" style="cursor:pointer;" data-target="openModal1">Enquire Now</a>
            </div>
          </div>
          <div class="inner-hero-right">
            <img src="{{url('/website/img/aboutus.png')}}" alt="">
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <ul class="breadcrumb">
        <li><a href="{{url('/')}}">Home</a></li>
        <li><a>Registration</a></li>
      </ul>
    </div>

    <div class="container-tiny mt-40" data-aos="fade-in" data-duration="200">
      <div class="contact-page-form">
        @if(session('success'))
          <div class="alert alert-success" role="alert">
            {{ session('success') }}
          </div>
        @endif
        
        @if(session('error'))
          <div class="alert alert-danger" role="alert">
            {{ session('error') }}
          </div>
        @endif

        @if ($errors->any())
          <div class="alert alert-danger" role="alert">
            <ul class="mb-0">
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif

        <form id="comm-form" class="form" action="{{ route('submit-registration') }}" method="post">
          @csrf
          <div class="comm-form">
            <div class="f-row">
              <div class="w100 w-1200-100">
                <label for="">Student Name*</label>
                <div class="form-grp">
                  <input type="text" class="form-field" id="formName" name="formName" value="{{ old('formName') }}" oninvalid="this.setCustomValidity('Please Enter Name')" oninput="setCustomValidity('')" required />
                </div>
              </div>
              <div class="w100 w-1200-100">
                <label for="">Student Contact No.*</label>
                <div class="form-grp">
                  <input type="tel" class="form-field" id="formStuMobile" name="formStuMobile" value="{{ old('formStuMobile') }}" maxlength="10" oninvalid="this.setCustomValidity('Please Enter Student Contact No')" oninput="setCustomValidity('')" onkeypress="return isNumberKey(event)" required />
                </div>
              </div>
              <div class="w100 w-1200-100">
                <label for="">Alternative Contact No.*</label>
                <div class="form-grp">
                  <input type="tel" class="form-field" id="formAltMobile" name="formAltMobile" value="{{ old('formAltMobile') }}" maxlength="10" oninvalid="this.setCustomValidity('Please Enter Alternative Contact No')" oninput="setCustomValidity('')" onkeypress="return isNumberKey(event)" required />
                </div>
              </div>
              <div class="w50 w-1200-100">
                <label for="">DOB*</label>
                <div class="form-grp">
                  <input type="date" class="form-field" id="formDOB" name="formDOB" value="{{ old('formDOB') }}" oninvalid="this.setCustomValidity('Select Your Date Of Birth')" oninput="setCustomValidity('')" required />
                </div>
              </div>
              <div class="w50 w-1200-100">
                <label for="">Gender*</label>
                <div class="form-grp">
                  <select class="select-field" id="formDestination" name="formDestination" oninvalid="this.setCustomValidity('Please select destination')" oninput="setCustomValidity('')" required>
                    <option value="">Select Gender</option>
                    <option value="Male" {{ old('formDestination') == 'Male' ? 'selected' : '' }}>Male</option>
                    <option value="Female" {{ old('formDestination') == 'Female' ? 'selected' : '' }}>Female</option>
                  </select>
                </div>
              </div>
              <div class="w50 w-1200-100">
                <label for="">Father's Name*</label>
                <div class="form-grp">
                  <input type="text" class="form-field" id="formFatherName" name="formFatherName" value="{{ old('formFatherName') }}" oninvalid="this.setCustomValidity('Please Enter Father Name')" oninput="setCustomValidity('')" required />
                </div>
              </div>
              <div class="w50 w-1200-100">
                <label for="">Father's Contact No.*</label>
                <div class="form-grp">
                  <input type="tel" class="form-field" id="formFatherMobile" name="formFatherMobile" value="{{ old('formFatherMobile') }}" maxlength="10" oninvalid="this.setCustomValidity('Please Enter Father Contact No')" oninput="setCustomValidity('')" onkeypress="return isNumberKey(event)" required />
                </div>
              </div>
              <div class="w50 w-1200-100">
                <label for="">Mother's Name*</label>
                <div class="form-grp">
                  <input type="text" class="form-field" id="formMotherName" name="formMotherName" value="{{ old('formMotherName') }}" oninvalid="this.setCustomValidity('Please Enter Mother Name')" oninput="setCustomValidity('')" required />
                </div>
              </div>
              <div class="w50 w-1200-100">
                <label for="">Mother's Contact No.*</label>
                <div class="form-grp">
                  <input type="tel" class="form-field" id="formMotherMobile" name="formMotherMobile" value="{{ old('formMotherMobile') }}" maxlength="10" oninvalid="this.setCustomValidity('Please Enter Mother Contact No')" oninput="setCustomValidity('')" onkeypress="return isNumberKey(event)" required />
                </div>
              </div>
              <div class="w100 w-1200-100">
                <label for="">Address*</label>
                <div class="form-grp">
                  <input type="text" class="form-field" id="formAddress" name="formAddress" value="{{ old('formAddress') }}" oninvalid="this.setCustomValidity('Please Enter Address')" oninput="setCustomValidity('')" required />
                </div>
              </div>
              <div class="w50 w-1200-100">
                <label for="">City*</label>
                <div class="form-grp">
                  <input type="text" class="form-field" id="formCity" name="formCity" value="{{ old('formCity') }}" oninvalid="this.setCustomValidity('Please Enter City')" oninput="setCustomValidity('')" required />
                </div>
              </div>
              <div class="w50 w-1200-100">
                <label for="">Postal Code</label>
                <div class="form-grp">
                  <input type="text" class="form-field" id="formPostalCode" name="formPostalCode" value="{{ old('formPostalCode') }}" oninvalid="this.setCustomValidity('Please Enter Postal Code')" oninput="setCustomValidity('')" required />
                </div>
              </div>
              <div class="w50 w-1200-100">
                <label for="">Percentage: 10<sup>th</sup> Standard*</label>
                <div class="form-grp">
                  <input type="text" class="form-field" id="formpercentage10" name="formpercentage10" value="{{ old('formpercentage10') }}" oninvalid="this.setCustomValidity('Please Enter Your 10th Standard Percentage')" oninput="setCustomValidity('')" required />
                </div>
              </div>
              <div class="w50 w-1200-100">
                <label for="">Percentage: 12<sup>th</sup> Standard*</label>
                <div class="form-grp">
                  <input type="text" class="form-field" id="formpercentage12" name="formpercentage12" value="{{ old('formpercentage12') }}" oninvalid="this.setCustomValidity('Please Enter Your 12th Standard Percentage')" oninput="setCustomValidity('')" required />
                </div>
              </div>
              <div class="w100 w-1200-100">
                <label for="">Course*</label>
                <div class="form-grp">
                  <input type="text" class="form-field" id="formCourse" name="formCourse" value="{{ old('formCourse') }}" oninvalid="this.setCustomValidity('Please Enter Course')" oninput="setCustomValidity('')" required />
                </div>
              </div>
              <div class="w100 w-1200-100">
                <label for="">Declaration</label>
                <div class="form-grp">
                  <p class="lh-27">I hereby declare that all the information submitted in this form is true to the best of my knowledge. I am aware that my information may be passed on to third parties to offer better services. Furthermore, I accept the responsibility to pay the registration amount to KG2PG Admissions. for the further processing of my registration.</p>
                </div>
              </div>
              <div class="w100 w-1200-100">
                <input class="form-check-input" type="checkbox" name="agree" value="1" id="flexCheckDefault" {{ old('agree') ? 'checked' : '' }} required>
                <label class="form-check-label" for="flexCheckDefault">I Agree</label>
              </div>
              <div class="w100 w-1200-100">
                <p class="mb-15" style="font-size: 15px;"><a href="#" target="_blank">Terms &amp; Conditions</a> apply</p>
              </div>
              <div class="w100">
                <div class="submit-btn">
                  <input class="button line" type="submit" value="Submit">
                </div>
              </div> 
            </div>
          </div>
        </form>
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
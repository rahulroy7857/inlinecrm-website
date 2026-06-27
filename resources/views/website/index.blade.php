@extends('website.layouts.app')
@section('title', 'Home')
@section('style-css')   
<link rel='stylesheet' id='popup-css-css' href="{{url('/website/css/magnific-popup.css')}}" media='all' />
  <link rel="stylesheet" href="{{url('/website/css/swiper-bundle.css')}}" />
  <link rel="stylesheet" href="{{url('/website/css/aos.css')}}">
  <link rel="stylesheet" href="{{url('/website/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{url('/website/css/main.css')}}" />
  <link rel="stylesheet" href="{{url('/website/css/popupstyles.css')}}">    
  <script src="{{url('/website/js/jquery.min.js')}}"></script>
  <script src="{{url('/website/js/notification.js')}}"></script>
  <link href="{{url('/website/css/notification.css')}}" rel="stylesheet" />
@endsection
@section('style')   

@endsection
@section('content')
<div class="container">
      <div class="home-hero" data-aos="fade-in" data-duration="0">
        <div class="hero-left">
          <h1 class="hero-title-txt">Achieve More & Dream more with development addd <span class="highlighter2">KG2PG Admissions</span> Your Study Partner!</h1>
          <div class="comm-para">
            <p>From Kindergarten to Post-Graduation Admissions in India and Abroad! <br>Let us guide you every step of the way!</p>
          </div>
          <div class="hero-btns">
            <!-- <a href="#popupForm" class="button open-popup-link">Book Free Consultation With Expert</a>
            <a href="" class="button line"><i class="ph ph-whatsapp-logo"></i> WhatsApp</a>-->
            <a class="button open-popup modal-toggle" style="cursor:pointer;" data-target="openModal1">Book Free Consultation</a>
            <a href="https://wa.link/vy4txb" target="_blank" class="button green-line"><i class="ph ph-whatsapp-logo"></i> WhatsApp</a>
          </div>
        </div>
        <div class="hero-right">
          <img src="{{url('/website/img/homepage/study-abroad-consultants.webp')}}" alt="Study abroad consultants">
        </div>
      </div>
    </div>

    <!-- counter sec -->
    <div class="comm-section count-box--">
      <div class="container">
        <div class="counter-wrap">
          <div class="f-row f-4 f-834-2 f-480-1">
            <div class="f-col">
              <div class="counter-cont-wrap">
                <h3 class="count-nums">Over 2 Decades</h3>
                <h4 class="count-title">Of Achievement</h4>
              </div>
            </div>
            <div class="f-col">
              <div class="counter-cont-wrap">
                <h3 class="count-nums">1000,000+<span></span></h3>
                <h4 class="count-title">Accomplishments</h4>
              </div>
            </div>
            <div class="f-col">
              <div class="counter-cont-wrap">
                <h3 class="count-nums">Free</h3>
                <h4 class="count-title">Counselling</h4>
              </div>
            </div>
            <div class="f-col">
              <div class="counter-cont-wrap">
                <h3 class="count-nums">Expert</h3>
                <h4 class="count-title">Admission Guidance</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- our team sec -->
    <div class="comm-section blue-bg" data-aos="fade-in" data-duration="0">
      <div class="container">
        <div class="team-reach-sec-wrap">
          <div class="team-reach-right">
            <div class="sec-title white-text">Let <span class="highlighter2">Our Team</span> get in touch with you!</div>
            <div class="contact-form">
                <form id="comm-form" class="form" action="{{url('/submit-enquiry')}}" method="post">
                  @csrf
                  @honeypot
                <input type="hidden" name="type" value="Website Enquiry">
                <!-- Honeypot field -->
                <input type="text" name="website" class="honeypot-field" tabindex="-1" autocomplete="off">
                <div class="comm-form">
                  <div class="f-row">
                    <div class="w50 w-1200-100">
                      <label for="">Name</label>
                      <div class="form-grp">
                        <input type="text" class="form-field" id="formName" name="name"
                        oninvalid="this.setCustomValidity('Please Enter Name')" oninput="setCustomValidity('')"
                        required />
                      </div>
                    </div>
                    <!-- <div class="w50 w-1200-100">
                      <label for="">Last Name </label>
                      <div class="form-grp">
                        <input type="text" class="form-field" id="formlastName" name="formlastName"
                        oninvalid="this.setCustomValidity('Please Enter Last Name')" oninput="setCustomValidity('')"
                        required />
                      </div>
                    </div> -->
                    <div class="w50 w-1200-100">
                      <label for="">Email ID </label>
                      <div class="form-grp">
                        <input type="email" class="form-field" id="formEmail" name="email"
                        oninvalid="this.setCustomValidity('Please Enter Valid Email')" oninput="setCustomValidity('')"
                        required />
                      </div>
                    </div>
                    <div class="w50 w-1200-100">
                      <label for="">Mobile Number </label>
                      <div class="form-grp">
                        <input type="tel" class="form-field" id="formMobile" name="phone" maxlength="12"
                        oninvalid="this.setCustomValidity('Please Enter Mobile No')" oninput="setCustomValidity('')"
                        onkeypress="return isNumberKey(event)" required />
                      </div>
                    </div>
                    <div class="w50 w-1200-100">
                      <label for="">Course </label>
                      <div class="form-grp">
                        <input type="text" class="predictive form-field" id="formCourse" name="course"
                        oninvalid="this.setCustomValidity('Please enter course')" oninput="setCustomValidity('')"
                        required />
                      </div>
                    </div>
                    <div class="w50 w-1200-100">
                      <label for="">Location </label>
                      <div class="form-grp">
                        <input type="text" class="predictive form-field" id="formPlace" name="place"
                        oninvalid="this.setCustomValidity('Please enter Your Location')" oninput="setCustomValidity('')"
                        required />
                      </div>
                    </div>
                    <!-- <div class="w50 w-1200-100">
                      <label for="">Your preferred study destination</label>
                      <div class="form-grp">
                        <select class="select-field" multiple id="formDestination" style="width:100%" name="formDestination" oninvalid="this.setCustomValidity('Please select destination')" oninput="setCustomValidity('')" required>
                          <option value="0" disabled>You Can Select Multiple Destinations</option>
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
                      <label for="">When do you plan to study?</label>
                      <div class="form-grp">
                        <select class="select-field" id="formMonth" name="formMonth" oninvalid="this.setCustomValidity('Please select month')" oninput="setCustomValidity('')" required>
                          <option value="">Select Month</option>
                          <option value="Jan">Jan</option>
                          <option value="Feb">Feb</option>
                          <option value="Mar">Mar</option>
                          <option value="Apr">Apr</option>
                          <option value="May">May</option>
                          <option value="Jun">Jun</option>
                          <option value="Jul">Jul</option>
                          <option value="Aug">Aug</option>
                          <option value="Sept">Sept</option>
                          <option value="Oct">Oct</option>
                          <option value="Nov">Nov</option>
                          <option value="Dec">Dec</option>
                        </select>
                      </div>
                    </div>
                    <div class="w50 w-1200-100">
                      <label for="">Your preferred year</label>
                      <div class="form-grp">
                        <select class="select-field" id="formYear" name="formYear" oninvalid="this.setCustomValidity('Please select year')" oninput="setCustomValidity('')" required>
                          <option value="">Select Year</option>
                          <option value="2024">2024</option>
                          <option value="2025">2025</option>
                          <option value="2026">2026</option>
                        </select>
                      </div>
                    </div> -->
                    <div class="w100">
                      <!--<div class="agree-check-field-wrap">
                        <div class="checkbox-box">
                          <input type="checkbox" id="checkbox1" name="checkbox1" required />
                          <label class="chk-label" for="checkbox1">I agree to Edwise's Terms and Conditions</label>
                        </div>
                      </div>-->
                      <input class="button white-line" type="submit" value="Submit" id="btnSubmit">
                      <br /><br />
                      <div id="message" class="postmsg" style="color:white"></div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="team-reach-left">
            <div class="team-reach-img">
              <img src="{{url('/website/img/homepage/overseas-education-consultants.png')}}" alt="Overseas education consultants">
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- 5steps -->
    <div class="comm-section" data-aos="fade-in" data-duration="200">
      <div class="container">
        <div class="sec-title text-center"><span class="highlighter">5 Easy Steps</span> to Secure Your Preferred College Admission</div>
        <div class="steps-main-wrapper">
          <div class="steps-card-wrap">
            <div class="steps-card">
              <div class="numbers">1</div>
              <div class="card-content-wrap">
                <h4 class="comm-card-hdn">Free Counselling</h4>
                <div class="comm-para">
                  <p>
                    Our expert counsellors are here to guide you. Discuss your career goals, explore courses, and identify the colleges that align with your aspirations-all at no cost!
                  </p>
                </div>
                <a class="button line card-btn open-popup modal-toggle" style="cursor:pointer;" data-target="openModal1">Book Free Consultation</a>
                <!-- <a id="openPopup1" class="button line card-btn" style="cursor:pointer;">Free Expert Consultation</a> -->
              </div>
            </div>
            <div class="steps-card">
              <div class="numbers">2</div>
              <div class="card-content-wrap">
                <h4 class="comm-card-hdn">Registration</h4>
                <div class="comm-para">
                  <p>
                    Kickstart your admission process by registering with us. Fill in your details and upload the required documents for a smooth and hassle-free experience.
                  </p>
                </div>
                <a href="{{url('/registration')}}" class="button line card-btn">Registration Now</a>
              </div>
            </div>
            <div class="steps-card">
              <div class="numbers">3</div>
              <div class="card-content-wrap">
                <h4 class="comm-card-hdn">Choose Your College</h4>
                <div class="comm-para">
                  <p>
                    Explore a wide range of colleges and courses. Our team will help you shortlist the best options based on your preferences, budget, and eligibility.
                  </p>
                </div>
                <a href="{{url('/colleges')}}" class="button line card-btn">Explore Colleges</a>
              </div>
            </div>
            <div class="steps-card">
              <div class="numbers">4</div>
              <div class="card-content-wrap">
                <h4 class="comm-card-hdn">Reservation</h4>
                <div class="comm-para">
                  <p>
                    Secure your seat at your chosen college by completing the reservation process. Our team ensures that everything is handled efficiently, so you don't miss out on your spot.
                  </p>
                </div>
                <a href="{{url('/contact-us')}}" class="button line card-btn">Reserve Your Seat</a>
              </div>
            </div>
            <div class="steps-card">
              <div class="numbers">5</div>
              <div class="card-content-wrap">
                <h4 class="comm-card-hdn">Admission</h4>
                <div class="comm-para">
                  <p>
                    Finalize your admission by completing the necessary formalities. We'll assist you every step of the way to ensure you have a stress-free experience.
                  </p>
                </div>
                <a href="{{url('/contact-us')}}" class="button line card-btn">Let's Begin!</a>
              </div>
            </div>
          </div>
          <div class="steps-img">
            <img src="{{url('/website/img/homepage/foreign-education-consultants.webp')}}" class="img-fluid d-block mx-auto" alt="Foreign education consultants">
          </div>
        </div>
      </div>
    </div>

    <!-- your path -->
    <div class="comm-section" data-aos="fade-in" data-duration="200">
      <div class="trusted-sec-wrap">
        <div class="container">
          <div class="trusted-sec-wrapper">
            <div class="trusted-left">
              <div class="sec-title">Discover <span class="highlighter">Your Path</span> to Success
              </div>
              <div class="comm-para">
                <p>In a world full of opportunities, choosing the right institution is the key to unleash your potential. Let us guide you to the perfect course and university, turning your aspirations into achievements.</p>
              </div>
              <a class="button line card-btn open-popup modal-toggle" style="cursor:pointer;" data-target="openModal1">Enquire Now</a>
            </div>
            <div class="trusted-right-box"></div>
          </div>
        </div>
        <div class="trusted-right">
          <div class="swiper trustedImgSwiper trusted-img-swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="right-slider-content">
                  <h3 class="slide-title">100,000+ Happy Students</h3>
                  <div class="rgt-sld-img">
                    <img src="{{url('/website/img/homepage/car2.webp')}}" alt="College Admission Consulting">
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="right-slider-content">
                  <h3 class="slide-title">Admission Consulting</h3>
                  <div class="rgt-sld-img">
                    <img src="{{url('/website/img/homepage/car3.webp')}}"
                    alt="Best consultancy for abroad studies">
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="right-slider-content">
                  <h3 class="slide-title">Career Consulting</h3>
                  <div class="rgt-sld-img">
                    <img src="{{url('/website/img/homepage/car5.webp')}}"
                    alt="Free consultation for study abroad">
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="right-slider-content">
                  <h3 class="slide-title">International Education Consulting</h3>
                  <div class="rgt-sld-img">
                    <img src="{{url('/website/img/homepage/car4.webp')}}"
                    alt="Free counselling for study abroad">
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="right-slider-content">
                  <h3 class="slide-title">100+ Expert Counsellors</h3>
                  <div class="rgt-sld-img">
                    <img src="{{url('/website/img/homepage/car1.webp')}}" alt="Study abroad student reviews">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="trusted-btns-wrap">
            <div class=" trusted-prev"><i class="ph ph-arrow-left"></i></div>
            <div class=" trusted-next"><i class="ph ph-arrow-right"></i></div>
          </div>
        </div>
      </div>
    </div>

    <!-- roadmap -->
    <div class="blue-bg top-margin p0" data-aos="fade-in" data-duration="200">
      <div class="container">
        <div class="destination-sec-wrap">
          <div class="dest-img-left">
            <div class="dest-img">
              <img src="{{url('/website/img/destin/canada.webp')}}" alt="canada">
            </div>
            <div class="dest-img">
              <img src="{{url('/website/img/destin/germany.webp')}}" alt="germany">
            </div>
            <div class="dest-img">
              <img src="{{url('/website/img/destin/italy.webp')}}" alt="italy">
            </div>
            <div class="dest-img">
              <img src="{{url('/website/img/destin/uk.webp')}}" alt="uk">
            </div>
          </div>
          <div class="dest-content text-center">
            <h3 class="sec-title">The <strong><span class="highlighter2">KG2PG Roadmap </span></strong>to Study Abroad
            </h3>
            <div class="comm-para">
              <p style="color: #fff; text-align: center;">Our Global Education Mentors work closely with our KG2PG to craft their roadmap to study MBBS Abroad. We prime your journey for success, aligning your dreams and ambitions to our expertise and connections with top global universities, Transforming pathways to an excellent higher education abroad.
              </p>
            </div>
            <a href="{{url('/study-abroad')}}" class="button white-line">View more</a>
          </div>
          <div class="dest-img-right">
            <div class="dest-img">
              <img src="{{url('/website/img/destin/bulgaria.webp')}}" alt="bulgaria">
            </div>
            <div class="dest-img">
              <img src="{{url('/website/img/destin/georgia.webp')}}" alt="georgia">
            </div>
            <div class="dest-img">
              <img src="{{url('/website/img/destin/russia.webp')}}" alt="russia">
            </div>
            <div class="dest-img">
              <img src="{{url('/website/img/destin/uzbekistan.webp')}}" alt="uzbekistan">
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- gateway -->
    <div class="comm-section" data-aos="fade-in" data-duration="200">
      <div class="container-small">
        <h3 class="sec-title text-center">Your <span class="highlighter">Gateway </span>to the World's Best Universities</h3>
        <div class="comm-para sec-dtl">
          <p class="center">Our strong partnerships with over 100+ prestigious universities open doors to limitless opportunities for students. Choose from a diverse range of top academic programs and make your dream of studying India and abroad come true</p>
        </div>
        <div class="partner-logo-wrap">
          <div class="f-row f-4 f-834-3 f-640-2 f-360-1">
            @foreach($ourPartners as $partner)
            <div class="f-col">
              <div class="partner-logo">
                <a href="#"><img src="{{url('/storage/'.$partner->image)}}" alt="{{$partner->name}}" class="partner-logo-border"></a>
              </div>
            </div>
            @endforeach
          </div>
          <div class="center-btn">
            <a href="{{url('/colleges')}}" class="button line">View more</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Popular course -->
    <div class="comm-section" data-aos="fade-in" data-duration="200">
      <div class="container">
        <h3 class="sec-title text-center">Explore the Most <span class="highlighter">Popular Courses</span> Across India</h3>
        <div class="course-slider-wrap">
          <!-- courses name swiper -->
          <div thumbsSlider="" class="swiper courseSwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="course-country">
                  <p>Medical</p>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="course-country">
                  <p>Engineering</p>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="course-country">
                  <p>Management</p>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="course-country">
                  <p>Law</p>
                </div>
              </div>
            </div>
          </div>

          <!-- courses boxes swiper -->
          <div class="swiper courseSwiper2">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="courses-slides">
                  <div class="f-row f-3 f-1024-2 f-768-1">
                    <!--<div class="f-col">
                      <a href="" class="course-box">
                        <div class="course-img"><img src="img/courses/1.jpg" alt=""></div>
                        <div class="course-dtl">
                          <div class="univers-name">Northeastern University</div>
                          <h3 class="course-name">Accounting</h3>
                          <a class="dura-qual-dtl-wrapper">
                            <div class="duration-div">
                              <div class="dur-icon">
                                <i class="ph ph-clock"></i>
                              </div>
                              <div class="dur-dtl">
                                <h5 class="dur-hdr">Course Duration</h5>
                                <h4 class="duration">24 Months</h4>
                              </div>
                            </div>
                            <div class="duration-div">
                              <div class="dur-icon">
                                <i class="ph ph-certificate"></i>
                              </div>
                              <div class="dur-dtl">
                                <h5 class="dur-hdr">Qualification</h5>
                                <h4 class="duration qualif">Masters Degree</h4>
                              </div>
                            </div>
                          </div>
                          <a href="" class="button line course-btn">Know More</a>
                        </div>
                      </div>
                    </div>-->
                    @foreach($medicalCourses as $course)
                    <div class="f-col">
                      <a href="{{url('/medical/courses')}}" class="course-box">
                        <div class="course-img">
                          <img src="{{url('/storage/'.$course->logo)}}" alt="{{$course->name}}">
                        </div>
                        <div class="course-dtl">
                          <h3 class="course-name">{{$course->name}}</h3>
                        </div>
                      </a>
                    </div>
                    @endforeach
                    
                  </div>
                  <div class="center-btn">
                    <a href="{{url('/medical/courses')}}" class="button line">View more</a>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="courses-slides">
                  <div class="f-row f-3 f-1024-2 f-768-1">
                    @foreach($engineeringCourses as $course)
                    <div class="f-col">
                      <a href="#" class="course-box">
                        <div class="course-img">
                          <img src="{{url('/storage/'.$course->logo)}}" alt="{{$course->name}}">
                        </div>
                        <div class="course-dtl">
                          <h3 class="course-name">{{$course->name}}</h3>
                        </div>
                      </a>
                    </div>
                    @endforeach
                  </div>
                  <div class="center-btn">
                    <a href="{{url('/engineering/courses')}}" class="button line">View more</a>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="courses-slides">
                  <div class="f-row f-3 f-1024-2 f-768-1">
                    @foreach($managementCourses as $course)
                    <div class="f-col">
                      <a href="#" class="course-box">
                        <div class="course-img">
                          <img src="{{url('/storage/'.$course->logo)}}" alt="{{$course->name}}">
                        </div>
                        <div class="course-dtl">
                          <h3 class="course-name">{{$course->name}}</h3>
                        </div>
                      </a>
                    </div>
                    @endforeach
                  </div>
                  <div class="center-btn">
                    <a href="{{url('/management/courses')}}" class="button line">View more</a>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="courses-slides">
                  <div class="f-row f-3 f-1024-2 f-768-1">
                    @foreach($lawCourses as $course)
                    <div class="f-col">
                      <a href="#" class="course-box">
                        <div class="course-img">
                          <img src="{{url('/storage/'.$course->logo)}}" alt="{{$course->name}}">
                        </div>
                        <div class="course-dtl">
                          <h3 class="course-name">{{$course->name}}</h3>
                        </div>
                      </a>
                    </div>
                    @endforeach
                  </div>
                  <div class="center-btn">
                    <a href="{{url('/law/courses')}}" class="button line">View more</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- testimonials -->
    <!--<div class="comm-section lBlue-bg pb-space overflw-y-hdn" data-aos="fade-in" data-duration="0">
      <div class="container">
        <div class="header-titlewithnav">
          <h3 class="sec-title"><span class="highlighter">Success Stories</span> </h3>
          <div class="story-nav">
            <div class="swiper-button-prev story-prev"><i class="ph ph-arrow-right"></i></div>
            <div class="swiper-button-next story-next"><i class="ph ph-arrow-right"></i></div>
          </div>
        </div>
        <div class="swiper storySwiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="story-slide">
                <a href="https://www.youtube.com/watch?v=btx3JEH0vZ8" class="story-vdo popup-youtube">
                  <img src="img/testim/study-abroad-canada-review.webp" alt="Study Abroad Canada Review">
                  <div class="play-btn">
                    <i class="ph ph-play"></i>
                  </div>
                </a>
                <div class="story-content">
                  <p>Choosing Edwise was a game changer when I decided to study abroad. The staff and my counselor were super friendly and every step became seamless.</p>
                  <div class="prof-content">
                    <div class="prof-pic"><img src="img/testim/vaibhavee-confederation-colleg,-canada.webp" alt="">
                    </div>
                    <div class="prof-dtl">
                      <h4>Vaibhavee Modi</h4>
                      <h5>Confederation College, Canada</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="story-slide">
                <a href="https://www.youtube.com/watch?v=hYumwPjecvY" class="story-vdo popup-youtube">
                  <img src="img/testim/study-abroad-australia-review.webp" alt="Study Abroad Australia Review">
                  <div class="play-btn">
                    <i class="ph ph-play"></i>
                  </div>
                </a>
                <div class="story-content">
                  <p>Edwise managed my entire journey to Australia, from university selection to visa and flights! I highly recommend Edwise for anyone wanting to study abroad.</p>
                  <div class="prof-content">
                    <div class="prof-pic"><img src="img/testim/bhumika-university-of-adelaide-australia.webp" alt="">
                    </div>
                    <div class="prof-dtl">
                      <h4>Bhumika</h4>
                      <h5>University of Adelaide, Australia</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="story-slide">
                <a href="https://www.youtube.com/watch?v=sPogxqYFShg" class="story-vdo popup-youtube">
                  <img src="img/testim/study-abroad-uk-review.webp" alt="Study Abroad UK Review">
                  <div class="play-btn">
                    <i class="ph ph-play"></i>
                  </div>
                </a>
                <div class="story-content">
                  <p>Edwise made studying in London super easy. They handled everything and before I knew it I was in the city of my dreams.</p>
                  <div class="prof-content">
                    <div class="prof-pic"><img src="img/testim/regin-london-metropolitan-university-uk.webp" alt="">
                    </div>
                    <div class="prof-dtl">
                      <h4>Regin Christy</h4>
                      <h5>London Metropolitan University, UK</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>-->

    <!-- Insights & Blogs sec -->
    <div class="comm-section pd-0" data-aos="fade-in" data-duration="200">
      <div class="container">
        <h3 class="sec-title text-center">Latest <span class="highlighter">Insights & Articles</span></h3>
        <div class="blogs-sec-wrap">
          <div class="f-row f-3 f-1024-2 f-768-1">
            @foreach($blogs as $blog)
            <div class="f-col">
              <div class="blogs-box">
                <div class="blogs-img">
                  <img src="{{url('/storage/blogs/'.$blog->resized_image)}}" alt="{{$blog->title}}">
                </div>
                <div class="blogs-dtl">
                  <h3 class="blogs-title">{{Str::limit($blog->title, 50)}}</h3>
                  <a href="{{url('/blog-details/'.$blog->slug)}}" class="button line">Read More</a>
                </div>
              </div>
            </div>
            @endforeach

          </div>
        </div>
      </div>
    </div>
@endsection
@section('faq')
 <!-- FAQ -->
 <div class="comm-section" data-aos="fade-in" data-duration="200">
                <div class="container">
                <h3 class="sec-title text-center"><strong>FAQs</strong></h3>
                <ul class="accordion">
                    <li>
                    <a class="toggle" href="#">What services does your consultancy offer?<span class="sign"></span></a>
                    <p class="pera">
                        We provide a range of services, including university selection, application assistance, scholarship guidance, admission guidance.
                    </p>
                    </li>
                    <li>
                    <a class="toggle" href="#">How can an education consultant help me?<span class="sign"></span></a>
                    <p class="pera">
                        Our experts guide you through every step of the study abroad process, ensuring that you choose the best universities, submit strong applications, and secure scholarships.
                    </p>
                    </li>
                    <li>
                    <a class="toggle" href="#">Is there a consultation fee?<span class="sign"></span></a>
                    <p class="pera">
                        We offer a free initial consultation. Detailed services may have associated fees, which we explain during the consultation.
                    </p>
                    </li>
                    <li>
                    <a class="toggle" href="#">What are the minimum test scores required for universities?<span class="sign"></span></a>
                    <p class="pera">
                        Minimum scores vary depending on the university and program. We provide specific details during counseling.
                    </p>
                    </li>
                    <li>
                    <a class="toggle" href="#">What if I don't know which program or country to choose?<span class="sign"></span></a>
                    <p class="pera">
                        Our expert counselors will assess your profile, interests, and goals to suggest the best options.
                    </p>
                    </li>
                </ul>
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
  <script src="{{url('/website/js/index.js')}}"></script>
  <!--popup start-->
  <!-- <script src="{{url('/website/js/popup-form.js')}}" id="popup-form-js-js"></script> -->
  <!--predictive script-->
  <link rel="stylesheet" href="{{url('/website/css/jquery-ui.css')}}">
  <script src="{{url('/website/js/jquery-ui.min.js')}}"></script>
  <script src="{{url('/website/js/predictive-course.js')}}"></script>
  <script src="{{url('/website/js/popupscript.js')}}"></script>
  <link href="{{url('/website/css/select2.min.css')}}" rel="stylesheet" />
  <script src="{{url('/website/js/select2.min.js')}}"></script>
  <script src="{{url('/website/js/select2.js')}}"></script>
  <!--form data submit common script-->
  <!-- <script src="{{url('/website/js/formSubmission.js')}}"></script> -->
  <script>
    function isNumberKey(evt) {
      var charCode = (evt.which) ? evt.which : evt.keyCode
      if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
      return true;
    }

    // window.onload = function () {
    //   let intervalId = setInterval(function () {
    //     let badgeImage = document.querySelector('#iasBadge img');

    //     console.log("img: " + badgeImage);
    //     badgeImage.alt = 'ICEF Accredited - ICEF Agency Status'; // Added on 10.21.2024 for Alt Atrribute 

    //     if (badgeImage) {
    //       badgeImage.style.width = '120px';
    //       badgeImage.style.height = '180px';

    //       var mq10 = window.matchMedia('(max-width: 1000px)');

    //       var mq5 = window.matchMedia('(max-width: 640px)');
    //       var mq4 = window.matchMedia('(max-width: 430px)');
    //       var mq3 = window.matchMedia('(max-width: 393px)');

    //       if (mq3.matches) {
    //         // console.log(mq3);
    //         // $('#iasBadge img').css({                            
    //         //     'width': '40px',
    //         //     'height': '65px'
    //         // });
    //         $('#iasBadge img').css({
    //           'width': '150px',
    //           'height': '200px'
    //         });

    //       }

    //       else if (mq4.matches) {
    //         // console.log(mq4);
    //         $('#iasBadge img').css({
    //           'width': '80px',
    //           'height': '100px'
    //         });
    //       }

    //       else if (mq5.matches) {
    //         // console.log(mq5);
    //         $('#iasBadge img').css({
    //           'width': '110px',
    //           'height': '150px'
    //         });
    //       }
    //       else if (mq10.matches) {
    //         // console.log(mq10);
    //         $('#iasBadge img').css({
    //           'width': '100px',
    //           'height': '110px'
    //         });
    //       }

    //       // else {
    //       //     $('#iasBadge img').css('');
    //       // }

    //       clearInterval(intervalId);
    //     }
    //   }, 200);
    // };
  </script>
@endsection
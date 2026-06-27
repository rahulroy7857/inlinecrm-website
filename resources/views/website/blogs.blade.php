@extends('website.layouts.app')
@section('title', 'News')
@section('style-css')   
<script src="https://unpkg.com/@phosphor-icons/web"></script>
  <link rel='stylesheet' id='popup-css-css' href="{{url('/website/css/magnific-popup.css')}}" media='all' />
  <link rel="stylesheet" href="{{url('/website/css/swiper-bundle.css')}}" />
  <link rel="stylesheet" href="{{url('/website/css/aos.css')}}">
  <link rel="stylesheet" href="{{url('/website/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{url('/website/css/main.css')}}" />
  <link rel="stylesheet" href="{{url('/website/css/popupstyles.css')}}">
  <script src="{{url('/website/js/jquery.min.js')}}"></script>
@endsection
@section('style')   
<style type="text/css">
    .blogs-box {
    border-radius: 33px;
  }
  .blogs-sec-wrap {
    margin-top: 55px;
  }
</style>
@endsection
@section('content')

      
      <div class="comm-section" data-aos="fade-in" data-duration="200">
        <div class="container">
          <ul class="breadcrumb blog-breadcrumb">
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="">Resources</a></li>
            <li><a>Blogs</a></li>
          </ul>
          <div class="blogs-hdr-sec">
            <div class="blog-hdr-left">
              <h1 class="page-hdr-title">All <strong>blogs</strong></h1>
            </div>
            <form method="get" action="{{url('/blogs')}}" id="form1">
              <div id="blogsearchForm" class="blog-search-form">
                <select name="countrySelect" id="countrySelect" class="select-field">
                  <option value="">Select Country</option>
                  <option value="India" {{ request('countrySelect') == 'India' ? 'selected' : '' }}>India</option>
                  <option value="Georgia" {{ request('countrySelect') == 'Georgia' ? 'selected' : '' }}>Georgia</option>
                  <option value="USA" {{ request('countrySelect') == 'USA' ? 'selected' : '' }}>USA</option>
                  <option value="UK" {{ request('countrySelect') == 'UK' ? 'selected' : '' }}>UK</option>
                  <option value="Canada" {{ request('countrySelect') == 'Canada' ? 'selected' : '' }}>Canada</option>
                  <option value="Australia" {{ request('countrySelect') == 'Australia' ? 'selected' : '' }}>Australia</option>
                  <option value="New Zealand" {{ request('countrySelect') == 'New Zealand' ? 'selected' : '' }}>New Zealand</option>
                  <option value="Other" {{ request('countrySelect') == 'Other' ? 'selected' : '' }}>Other</option>
                </select>
                <select name="categorySelect" id="categorySelect" class="select-field">
                  <option value="1">Select Category</option>
                  <option value="General" {{ request('categorySelect') == 'General' ? 'selected' : '' }}>General</option>
                  <option value="Scholarships" {{ request('categorySelect') == 'Scholarships' ? 'selected' : '' }}>Scholarships</option>
                  <option value="Study Abroad" {{ request('categorySelect') == 'Study Abroad' ? 'selected' : '' }}>Study Abroad</option>
                  <option value="Education Fairs" {{ request('categorySelect') == 'Education Fairs' ? 'selected' : '' }}>Education Fairs</option>
                  <option value="Test Prep" {{ request('categorySelect') == 'Test Prep' ? 'selected' : '' }}>Test Prep</option>
                </select>
                <input type="submit" name="btnFilter" value="Search" id="btnFilter" class="button" type="button" />
              </div>
            </form>
          </div>
          <div class="blogs-sec-wrap">
            <div class="f-row f-3 f-1024-2 f-640-1">
              @foreach($blogs as $blog)
              <div class="f-col">
                <div class="blogs-box">
                  <div class="blogs-img">
                    <img src="{{url('/storage/blogs/'.$blog->resized_image)}}" alt="{{$blog->title}}" />
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
  <!-- <script src="{{url('/website/js/formSubmission.js')}}"></script> -->
@endsection
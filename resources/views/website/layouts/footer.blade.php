<footer id="footer">

<script>
  $(function() {
    $("#includeHtml").load("/common/floating_icon.html");
  });
</script>    

<div id="includeHtml">

  <link rel="stylesheet" href="/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

  <div class="fab-container">
    <div class="fab shadow">
      <div class="fab-content">
        <span class="material-icons" style="cursor: pointer;">support_agent</span>
      </div>
    </div>

    <div class="sub-button shadow">
      <a href="tel:+919900008970" target="_blank">
        <span style="color: #fff; font-size: 1.3em;">
          <i class="fa fa-phone" aria-hidden="true"></i>
        </span>
      </a>
    </div>

    <div class="sub-button shadow">
      <a href="mailto:info@kg2pgadmissions.com" target="_blank">
        <span style="color: #fff; font-size: 1.3em;">
          <i class="fa fa-envelope-o" aria-hidden="true"></i>
        </span>
      </a>
    </div>

    <!-- <div class="sub-button shadow">
      <a href="#" target="_blank">
        <span style="color: #fff; font-size: 1.3em;">
          <i class="fa fa-video-camera" aria-hidden="true"></i>
        </span>
      </a>
    </div> -->

    <div class="sub-button shadow">
      <a href="https://wa.link/vy4txb" target="_blank">
        <span style="color: #fff; font-size: 1.5em;">
          <i class="fa fa-whatsapp" aria-hidden="true"></i>
        </span>
      </a>
    </div>
  </div>
</div>  

<div class="comm-section top-margin aos-init" data-aos="fade-in" data-duration="200">
  <div class="container">
    <div class="btm-bnr blue-bg">
      <div class="btm-bnr-content">
        <h3 class="sec-title">Your Journey <br><span class="highlighter2 f-42">Begins Here!</span></h3>
        <p>Explore possibilities, stay motivated, and take the first step toward your dreams.</p>
        <div class="desk">
          <div class="btm-bnr-buttons">
            <a href="{{url('/contact-us')}}" class="button white">Contact Us</a>
            <div class="btm-white-bg">
              <a href="https://www.instagram.com/kg2pg_admission/" target="_blank">
                <img src="{{url('/website/img/logos/instagram.png')}}" class="btm-logos"> 
              </a>
              <a href="https://www.facebook.com/kg2pg.admission" target="_blank">
                <img src="{{url('/website/img/logos/facebook.png')}}" class="btm-logos">
              </a>
              <a href="#" target="_blank">                 
                <img src="{{url('/website/img/logos/youtube.png')}}" class="btm-logos">
              </a>
              <a href="#" target="_blank">
                <img src="{{url('/website/img/logos/linkedin.png')}}" class="btm-logos">
              </a>
              <a href="#" target="_blank">
                <img src="{{url('/website/img/logos/twitter.png')}}" class="btm-logos">
              </a>
              <!-- <a href="#" target="_blank">
                <img src="img/logos/blogger.png" class="btm-logos">
              </a> -->
            </div>
          </div>
        </div>

        <div class="phone"> 
          <div class="btm-bnr-buttons">
            <div class="btm-white-bg">
              <a href="https://www.instagram.com/kg2pg_admission/" target="_blank">
                <img src="{{url('/website/img/logos/instagram.png')}}" class="btm-logos"> 
              </a>
              <a href="#" target="_blank">                 
                <img src="{{url('/website/img/logos/youtube.png')}}" class="btm-logos">
              </a>
              <a href="#" target="_blank">
                <img src="{{url('/website/img/logos/linkedin.png')}}" class="btm-logos">
              </a>
              <a href="https://www.facebook.com/kg2pg.admission" target="_blank">
                <img src="{{url('/website/img/logos/facebook.png')}}" class="btm-logos">
              </a>
              <a href="#" target="_blank">
                <img src="{{url('/website/img/logos/twitter.png')}}" class="btm-logos">
              </a>
              <!-- <a href="#" target="_blank">
                <img src="img/logos/blogger.png" class="btm-logos">
              </a> -->
            </div>                
          </div>
          <a href="contact-us.html" class="button white">Contact Us</a>
        </div> 
      </div>
      <div class="btm-bnr-img">
        <img src="{{url('/website/img/btm-bnr-img.webp')}}" alt="Your Journey Begins Here!">
      </div>
    </div>
  </div>
</div>    

<div class="footer-wrap aos-init" data-aos="fade-in" data-duration="0">
  <div class="container">
    <!-- <div class="footer-top">
      <h3 class="sec-title">
        <span class="highlighter">Subscribe</span> <strong> for more info</strong>
      </h3>
      <a class="button open-popup" style="cursor:pointer;">Subscribe Now</a>
    </div> -->
    <hr>
    <div class="footer-link-wrap">
      <div class="f-row f-6 f-834-3 f-768-2 f-480-2">
        <!--<div class="f-col">
          <div class="footer-logo"><img src="../img/logo.svg" alt=""></div>
        </div>-->
        <div class="f-col">
          <h4 class="footer-link-hdr">Important Links</h4>
          <ul class="footer-links-ul">
            <li><a href="{{url('/about-us')}}">About Us</a></li>
            <li><a href="#">Pay Online</a></li>
          </ul>
        </div>
        <div class="f-col">
          <h4 class="footer-link-hdr">Test Prep</h4>
          <ul class="footer-links-ul">
            @foreach(\App\Models\EntranceExam::getActiveExams() as $exam)
              <li><a href="{{url('/entrances/'.$exam->slug)}}">{{ $exam->short_name }}</a></li>
            @endforeach
          </ul>
        </div>
        <div class="f-col">
          <h4 class="footer-link-hdr">Study Destinations</h4>
          <ul class="footer-links-ul">
            <li><a href="{{url('/study-in-germany')}}">Germany</a></li>
            <li><a href="{{url('/study-in-italy')}}">Italy</a></li>
            <li><a href="{{url('/study-in-uk')}}">UK</a></li>
            <li><a href="{{url('/study-in-us')}}">US</a></li>
            <li><a href="{{url('/study-in-bulgaria')}}">Bulgaria</a></li>
            <li><a href="{{url('/study-in-georgia')}}">Georgia</a></li>
            <li><a href="{{url('/study-in-russia')}}">Russia</a></li>
            <li><a href="{{url('/study-in-germany')}}">Uzbekistan</a></li>
          </ul>
        </div>
        <!--<div class="f-col">
          <h4 class="footer-link-hdr">Useful Links</h4>
          <ul class="footer-links-ul">
            <li><a href="">University Application Forms</a></li>
            <li><a href="">Cost of Study</a></li>
            <li><a href="">What study in UK</a></li>
            <li><a href="">Write a Query / FAQ's</a></li>
            <li><a href="blog.aspx">Study abroad resources</a></li>
            <li><a href="">E-Brochure Download</a></li>
            <li><a href="">Study Destinations</a></li>
            <li><a href="scholarship.html">Scholarship</a></li>
            <li><a href="gallery.html">Photo Gallery</a></li>
            <li><a href="gallery.html">Videos</a></li>
            <li><a href="">New age Courses</a></li>
            <li><a href="">Engineering</a></li>
            <li><a href="">MBA</a></li>
          </ul>
        </div>-->
        <div class="f-col">
          <h4 class="footer-link-hdr">Student Services</h4>
          <ul class="footer-links-ul">
            <li><a href="{{url('/admission-guidance')}}">Admission Guidance</a></li>
            <li><a href="{{url('/scholarship')}}">Scholarship</a></li>
            <li><a href="{{url('/study-abroad')}}">Study Abroad</a></li>
          </ul>
        </div>
        <div class="f-col">
          <h4 class="footer-link-hdr">Contact Us</h4>
          <ul class="footer-links-ul">
            <li><i class="fa fa-map-marker" aria-hidden="true" style="color: #231F20;"></i> <a href="https://maps.app.goo.gl/Ea2KJhV2JyuyKa699" target="_blank">133/2, 2nd, Janardhana Towers, Residency Rd, above Indian Overseas Bank, Shanthala Nagar, Ashok Nagar, Bengaluru, Karnataka 560025</a></li>
            <li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@kg2pgadmissions.com">info@kg2pgadmissions.com</a></li>
            <li><i class="fa fa-volume-control-phone" aria-hidden="true"></i> <a href="tel:+919900008970">+91 99000 08970</a></li>
          </ul>
        </div>
        <!-- <div class="f-col">
          <ul class="footer-links-ul">
            <li><a href="/study-abroad-consultant/coimbatore.html">Coimbatore</a></li>
            <li><a href="/study-abroad-consultant/delhi.html">Delhi</a></li>
            <li><a href="/study-abroad-consultant/hyderabad.html">Hyderabad</a></li>
            <li><a href="/study-abroad-consultant/indore.html">Indore</a></li>
            <li><a href="/study-abroad-consultant/jaipur.html">Jaipur</a></li>
            <li><a href="/study-abroad-consultant/nashik.html">Nashik</a></li>
            <li><a href="/study-abroad-consultant/kolkata.html">Kolkata</a></li>
            <li><a href="/study-abroad-consultant/pune.html">Pune</a></li>
            <li><a href="/study-abroad-consultant/pune-fc-road.html">Pune FC</a></li>
            <li><a href="/study-abroad-consultant/surat.html">Surat</a></li>
            <li><a href="/study-abroad-consultant/trivandrum.html">Trivandrum</a></li>
            <li><a href="/study-abroad-consultant/vadodara.html">Vadodara</a></li>
            <li><a href="/study-abroad-consultant/vizag.html">Vizag</a></li>
          </ul>
        </div> -->
      </div>
    </div>
    <hr>
    <div class="footer-btm">
      <h5>&copy; Copyright <script>document.write(new Date().getFullYear())</script>, All Rights Reserved by KG2PG</h5>
      <ul class="fotter-btm-links">
        <li><a href="{{url('/disclaimer')}}">Disclaimer</a></li>
        <li><a href="{{url('/privacy-policy')}}">Privacy Policy</a></li>
        <li><a href="{{url('/site-map')}}">Sitemap</a></li>
        <!--<li><a href="">Terms & Conditions</a></li> -->
      </ul>
    </div>
  </div>
</div>
<script src="js/formSubscribe.js"></script>
</footer>
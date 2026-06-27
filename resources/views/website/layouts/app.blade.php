<!DOCTYPE html>
<html lang="en">
    <head>
        @include('website.layouts.header')
        @yield('style')
        <!-- SweetAlert2 CDN -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <style>
            .ui-autocomplete {
            z-index: 1001 !important;
            border: 1px solid #ccc;
            pointer-events: stroke;
            }
            .ui-menu-item {
            padding: 5px;
            cursor: pointer;
            }
            .blogs-sec-wrap {
            margin-top: 40px;
            }
            .form-field {
            color: #fff;
            }
            /* Honeypot field - hidden from users */
            .honeypot-field {
                position: absolute !important;
                left: -9999px !important;
                width: 1px !important;
                height: 1px !important;
                opacity: 0 !important;
                pointer-events: none !important;
            }
        </style>
    </head>
    <body>
        @include('website.layouts.navbar')
        <div class="main-container">
            @yield('content')
        </div>
        @yield('faq')
         
        @include('website.layouts.footer') 

  <!-- Popup -->
  <div id="openModal1" class="modal-wrapper">
    <div class="modal">
      <a href="#close" title="Close" class="close">X</a>
      <div class="modal-header">
        <h2 class="mb-15 text-center">Get In Touch With <span class="highlighter2">Our Experts!</span></h2>
      </div>
      <div class="modal-content">
        <form id="comm-form" class="form" method="post" action="{{url('/submit-enquiry')}}">
          @csrf
          @honeypot
          <input type="hidden" name="type" value="Website Enquiry">
          <!-- Honeypot field -->
          <input type="text" name="website" class="honeypot-field" tabindex="-1" autocomplete="off">
          <div class="comm-form">
            <div class="f-row">
              <div class="w100 w-1200-100">
                <label for="">Name </label>
                <div class="form-grp">
                  <input type="text" class="form-field" id="formName" name="name" style="color: #000;" required />
                </div>
              </div>
              <div class="w100 w-1200-100">
                <label for="">Email ID </label>
                <div class="form-grp">
                  <input type="email" class="form-field" id="formEmail" name="email" style="color: #000;" required />
                </div>
              </div>
              <div class="w100 w-1200-100">
                <label for="">Mobile Number </label>
                <div class="form-grp">
                  <input type="tel" class="form-field" id="formMobile" name="phone" style="color: #000;" maxlength="10" required />
                </div>
              </div>
              <div class="w100 w-1200-100">
                <label for="">Course </label>
                <div class="form-grp">
                  <input type="text" class="predictive form-field" id="formCourse" name="course" style="color: #000;" required />
                </div>
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
  </div>

@include('website.layouts.scripts')
@yield('scripts')

<!-- Form submission handling with SweetAlert -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Check for flash messages
    @if(session('success'))
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: '{{ session('success') }}',
            confirmButtonColor: '#3085d6'
        });
    @endif

    @if(session('error'))
        Swal.fire({
            icon: 'error',
            title: 'Error!',
            text: '{{ session('error') }}',
            confirmButtonColor: '#d33'
        });
    @endif

});
</script>

</body>
</html>

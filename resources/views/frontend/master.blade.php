<!DOCTYPE html>
<html class="no-js" lang="zxx">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>TravelGo - Travel & Tour Booking Agency - Home Tour</title>
    <meta name="author" content="Tourm" />
    <meta name="description"content="TravelGO - Travel & Tour Booking Agency"/>
    <meta name="keywords"content="TravelGO - Travel & Tour Booking Agency"/>
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no"/>
    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicons/apple-icon-57x57.png"/>
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicons/apple-icon-60x60.png"/>
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicons/apple-icon-72x72.png"/>
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicons/apple-icon-76x76.png"/>
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicons/apple-icon-114x114.png"/>
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicons/apple-icon-120x120.png"/>
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicons/apple-icon-144x144.png"/>
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicons/apple-icon-152x152.png"/>
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-icon-180x180.png"/>
    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicons/android-icon-192x192.png"/>
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png"/>
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicons/favicon-96x96.png"/>
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png"/>
    <link rel="manifest" href="assets/img/favicons/manifest.json" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="msapplication-TileImage" content="assets/img/favicons/ms-icon-144x144.png"/>
    <meta name="theme-color" content="#ffffff" />
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&amp;family=Manrope:wght@200..800&amp;family=Montez&amp;display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/fontawesome.min.css" />
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css" />
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body>
    <!-- <div class="magic-cursor relative z-10">
      <div class="cursor"></div>
      <div class="cursor-follower"></div>
    </div> -->
   @include('frontend.include.header')

   @yield('content')
  
    @include('frontend.include.footer')
    <div class="scroll-top">
      <svg
        class="progress-circle svg-content"
        width="100%"
        height="100%"
        viewBox="-1 -1 102 102"
      >
        <path
          d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
          style="
            transition: stroke-dashoffset 10ms linear 0s;
            stroke-dasharray: 307.919, 307.919;
            stroke-dashoffset: 307.919;
          "
        ></path>
      </svg>
    </div>
    <div id="login-form" class="popup-login-register mfp-hide">
      <ul class="nav" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <button
            class="nav-menu"
            id="pills-home-tab"
            data-bs-toggle="pill"
            data-bs-target="#pills-home"
            type="button"
            role="tab"
            aria-controls="pills-home"
            aria-selected="false"
          >
            Login
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button
            class="nav-menu active"
            id="pills-profile-tab"
            data-bs-toggle="pill"
            data-bs-target="#pills-profile"
            type="button"
            role="tab"
            aria-controls="pills-profile"
            aria-selected="true"
          >
            Register
          </button>
        </li>
      </ul>
      <div class="tab-content" id="pills-tabContent">
        <div
          class="tab-pane fade"
          id="pills-home"
          role="tabpanel"
          aria-labelledby="pills-home-tab"
        >
          <h3 class="box-title mb-30">Sign in to your account</h3>
          <div class="th-login-form">
            <form
              action="https://html.themeholy.com/tourm/demo/mail.php"
              method="POST"
              class="login-form ajax-contact"
            >
              <div class="row">
                <div class="form-group col-12">
                  <label>Username or email</label>
                  <input
                    type="text"
                    class="form-control"
                    name="email"
                    id="email"
                    required="required"
                  />
                </div>
                <div class="form-group col-12">
                  <label>Password</label>
                  <input
                    type="password"
                    class="form-control"
                    name="pasword"
                    id="pasword"
                    required="required"
                  />
                </div>
                <div class="form-btn mb-20 col-12">
                  <button class="th-btn btn-fw th-radius2">Send Message</button>
                </div>
              </div>
              <div id="forgot_url">
                <a href="my-account.html">Forgot password?</a>
              </div>
              <p class="form-messages mb-0 mt-3"></p>
            </form>
          </div>
        </div>
        <div
          class="tab-pane fade active show"
          id="pills-profile"
          role="tabpanel"
          aria-labelledby="pills-profile-tab"
        >
          <h3 class="th-form-title mb-30">Sign in to your account</h3>
          <form
            action="https://html.themeholy.com/tourm/demo/mail.php"
            method="POST"
            class="login-form ajax-contact"
          >
            <div class="row">
              <div class="form-group col-12">
                <label>Username*</label>
                <input
                  type="text"
                  class="form-control"
                  name="usename"
                  id="usename"
                  required="required"
                />
              </div>
              <div class="form-group col-12">
                <label>First name*</label>
                <input
                  type="text"
                  class="form-control"
                  name="firstname"
                  id="firstname"
                  required="required"
                />
              </div>
              <div class="form-group col-12">
                <label>Last name*</label>
                <input
                  type="text"
                  class="form-control"
                  name="lastname"
                  id="lastname"
                  required="required"
                />
              </div>
              <div class="form-group col-12">
                <label for="new_email">Your email*</label>
                <input
                  type="text"
                  class="form-control"
                  name="new_email"
                  id="new_email"
                  required="required"
                />
              </div>
              <div class="form-group col-12">
                <label for="new_email_confirm">Confirm email*</label>
                <input
                  type="text"
                  class="form-control"
                  name="new_email_confirm"
                  id="new_email_confirm"
                  required="required"
                />
              </div>
              <div class="statement">
                <span class="register-notes"
                  >A password will be emailed to you.</span
                >
              </div>
              <div class="form-btn mt-20 col-12">
                <button class="th-btn btn-fw th-radius2">Sign up</button>
              </div>
            </div>
            <p class="form-messages mb-0 mt-3"></p>
          </form>
        </div>
      </div>
    </div>
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/gsap.min.js"></script>
    <script src="assets/js/circle-progress.js"></script>
    <script src="assets/js/matter.min.js"></script>
    <script src="assets/js/matterjs-custom.js"></script>
    <script src="assets/js/nice-select.min.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>

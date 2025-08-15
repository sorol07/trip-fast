 <div id="preloader" class="preloader">
      <button class="th-btn preloaderCls">Cancel Preloader</button>
      <div class="preloader-inner">
        <img src="assets/img/tripfastlogo.png" alt="tripfast" />
      </div>
      <div id="loader" class="th-preloader">
        <div class="animation-preloader">
          <div class="txt-loading">
            <span preloader-text="T" class="characters">T </span>
            <span preloader-text="R" class="characters">R </span>
            <span preloader-text="I" class="characters">I </span>
            <span preloader-text="P" class="characters">P </span>
            <span preloader-text="F" class="characters">F</span>
            <span preloader-text="A" class="characters">A</span>
            <span preloader-text="S" class="characters">S</span>
            <span preloader-text="T" class="characters">T</span>
          </div>
        </div>
      </div>
    </div>
    <div class="popup-search-box">
      <button class="searchClose"><i class="fal fa-times"></i></button>
      <form action="#">
        <input type="text" placeholder="What are you looking for?" />
        <button type="submit"><i class="fal fa-search"></i></button>
      </form>
    </div>
    <div class="th-menu-wrapper onepage-nav">
      <div class="th-menu-area text-center">
        <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo">
          <a href="{{ route('home') }}"
            ><img src="assets/img/main_logo.svg" alt="TravGo"
          /></a>
        </div>
        <div class="th-mobile-menu">
          <ul>
            <li class="mega-menu-wrap">
              <a class="active" href="{{ route('home') }}">Home</a>
            </li>
            <li><a href="{{ route('about') }}">About Us</a></li>
            <li class="menu-item-has-children">
              <a href="#">Services</a>
              <ul class="sub-menu">
                <li><a href="#">Hotels</a></li>
                <li><a href="#">Car Rentals</a></li>
                <li><a href="#">Vacation</a></li>
                <li><a href="#">VIP & Corporate</a></li>
                <li><a href="#">Airport Transfers</a></li>
                <li><a href="#">Special Request</a></li>
              </ul>
            </li>

            <li><a href="{{ route('contact') }}">Contact us</a></li>
          </ul>
        </div>
      </div>
    </div>
    <header class="th-header header-layout1 header-layout2">
      <div class="header-top">
        <div class="container th-container">
          <div class="row justify-content-center justify-content-lg-between align-items-center">
            <div class="col-auto d-none d-md-block">
              <div class="header-links">
                <ul>
                  <li class="d-none d-xl-inline-block">
                    <i class="fa-sharp fa-regular fa-location-dot"></i>
                    <span>House-103 Pantha Path Farmgate Dhaka, Bangladesh</span>
                  </li>
                  <li class="d-none d-xl-inline-block">
                    <i class="fa-regular fa-clock"></i>
                    <span>Sun to Friday: 8.00 am - 7.00 pm</span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-auto">
              <div class="header-right">
                <div class="header-links">
                  <ul>
                    <li>
                      <a href="#login-form" class="popup-content"
                        >Sign In / Register<i class="fa-regular fa-user"></i
                      ></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="sticky-wrapper">
        <div class="menu-area" data-bg-src="assets/img/bg/line-pattern.png">
          <div class="container th-container">
            <div class="row align-items-center justify-content-between">
              <div class="col-auto">
                <div class="header-logo">
                  <a href="{{ route('home') }}"><img src="assets/img/triplogo1.png" alt="TravGo" style="width: 200px;"/></a>
                </div>
              </div>
              <div class="col-auto">
                <nav class="main-menu d-none d-xl-inline-block">
                  <ul>
                    <li class=" mega-menu-wrap">
                      <a class="active" href="{{ route('home') }}">Home</a>
                    </li>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li class="menu-item-has-children">
                      <a href="#">Services</a>
                      <ul class="sub-menu">
                        
                        <li><a href="#">Hotels</a></li>
                        <li><a href="#">Car Rentals</a></li>
                        <li><a href="#">Vacation</a></li>
                        <li><a href="#">VIP & Corporate</a></li>
                        <li><a href="#">Special Request</a></li>
                      </ul>
                    </li>
                    <li><a href="{{ route('contact') }}">Contact us</a></li>
                  </ul>
                </nav>
                <button type="button" class="th-menu-toggle d-block d-xl-none">
                  <i class="far fa-bars"></i>
                </button>
              </div>
              <div class="col-auto d-none d-xl-block">
                <div class="header-button">
                  <a href="{{ route('contact') }}" class="th-btn style3 th-icon">Book Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
@extends('frontend.master')


@section('title')
  About page
@endsection

@section('content')
  <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
    <div class="container">
      <div class="breadcumb-content">
        <h1 class="breadcumb-title">About Trip-Fast</h1>
        <ul class="breadcumb-menu">
          <li><a href="{{ route('home') }}">Home</a></li>
          <li>About Trip-Fast</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="about-area position-relative overflow-hidden overflow-hidden space" id="about-sec">
    <div class="container">
      <div class="row">
        <div class="col-xl-7">
          <div class="img-box3">
            <div class="img1">
              <img src="assets/img/normal/about_3_1.jpg" alt="About" />
            </div>
            <div class="img2">
              <img src="assets/img/normal/about_3_2.jpg" alt="About" />
            </div>
            <div class="img3 movingX">
              <img src="assets/img/normal/about_3_3.jpg" alt="About" />
            </div>
          </div>
        </div>
        <div class="col-xl-5">
          <div class="ps-xl-4">
            <div class="title-area mb-20">
              <span class="sub-title style1">Welcome To Trip-Fast</span>
              <h2 class="sec-title mb-20 pe-xl-5 me-xl-5 heading">
                We are world reputeted travel agency
              </h2>
            </div>
            <p class="pe-xl-5">
              There are many variations of passages of available but the
              majority have suffered alteration in some form, by injected hum
              randomised words.
            </p>
            <p class="mb-30 pe-xl-5">
              Leiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
              enim ad minim veniam, quis nostrud exercitation ullamco laboris
              nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
              in reprehenderit in voluptate velit esse cillum dolore eu fugiat
              nulla pariatur. Excepteur sint occaecat cupidatat non proident,
              sunt in culpa qui officia deserunt.
            </p>
            <div class="about-item-wrap">
              <div class="about-item style2">
                <div class="about-item_img">
                  <img src="assets/img/icon/about_1_1.svg" alt="" />
                </div>
                <div class="about-item_centent">
                  <h5 class="box-title">Exclusive Trip</h5>
                  <p class="about-item_text">
                    There are many variations of passages of available but the
                    majority.
                  </p>
                </div>
              </div>
              <div class="about-item style2">
                <div class="about-item_img">
                  <img src="assets/img/icon/about_1_2.svg" alt="" />
                </div>
                <div class="about-item_centent">
                  <h5 class="box-title">Safety First Always</h5>
                  <p class="about-item_text">
                    There are many variations of passages of available but the
                    majority.
                  </p>
                </div>
              </div>
              <div class="about-item style2">
                <div class="about-item_img">
                  <img src="assets/img/icon/about_1_3.svg" alt="" />
                </div>
                <div class="about-item_centent">
                  <h5 class="box-title">Professional Guide</h5>
                  <p class="about-item_text">
                    There are many variations of passages of available but the
                    majority.
                  </p>
                </div>
              </div>
            </div>
            <div class="mt-35">
              <a href="{{ route('contact') }}" class="th-btn style3 th-icon">Contact With Us</a>
            </div>
          </div>
        </div>
      </div>
      <div class="shape-mockup movingX d-none d-xxl-block" data-top="0%" data-left="-18%">
        <img src="assets/img/shape/shape_2_1.png" alt="shape" />
      </div>
      <div class="shape-mockup jump d-none d-xxl-block" data-top="28%" data-right="-15%">
        <img src="assets/img/shape/shape_2_2.png" alt="shape" />
      </div>
      <div class="shape-mockup spin d-none d-xxl-block" data-bottom="18%" data-left="-112%">
        <img src="assets/img/shape/shape_2_3.png" alt="shape" />
      </div>
      <div class="shape-mockup movixgX d-none d-xxl-block" data-bottom="18%" data-right="-12%">
        <img src="assets/img/shape/shape_2_4.png" alt="shape" />
      </div>
    </div>
  </div>

  <section class="team-area3 position-relative bg-top-center space" data-bg-src="assets/img/bg/team_bg_2.jpg">
    <div class="container z-index-common">
      <div class="title-area text-center">
        <span class="sub-title">Meet with Guide</span>
        <h2 class="sec-title">Meet with Tour Guide</h2>
      </div>
        <div class="slider-area">
          <div
            class="swiper th-slider teamSlider1 has-shadow"
            id="teamSlider1"
            data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}}}'
          >
            <div class="swiper-wrapper">
              @foreach($guides as $guide)
                <div class="swiper-slide">
                  <div class="th-team team-box">
                    <div class="team-img">
                      <img src="{{ asset($guide->image) }}" alt="Team" />
                    </div>
                    <div class="team-content">
                      <div class="media-body">
                        <h3 class="box-title">
                          <a href="tour-guider-details.html">{{ $guide->name }}</a>
                        </h3>
                        <span class="team-desig">Tourist Guide</span>
                        <div class="th-social">
                          <a target="_blank" href="https://facebook.com/"
                            ><i class="fab fa-facebook-f"></i
                          ></a>
                          <a target="_blank" href="https://twitter.com/"
                            ><i class="fab fa-twitter"></i
                          ></a>
                          <a target="_blank" href="https://instagram.com/"
                            ><i class="fab fa-instagram"></i
                          ></a>
                          <a target="_blank" href="https://linkedin.com/"
                            ><i class="fab fa-linkedin-in"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
            <div class="slider-pagination"></div>
          </div>
        </div>
    </div>
  </section>

 @endsection
   
    

    
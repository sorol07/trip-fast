@extends('frontend.master')

@section('title')
  TripFast - Travel & Tour Booking Agency - Home Tour
@endsection

@section('content')
   
   <div class="hero-2" id="hero">
      <div
        class="hero2-overlay"
        data-bg-src="assets/img/bg/line-pattern.png"
      ></div>
      <div class="swiper hero-slider-2" id="heroSlide2">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="hero-inner">
              <div
                class="th-hero-bg"
                data-bg-src="assets/img/hero/hero_bg_2_1.jpg"
              ></div>
              <div class="container">
                <div class="hero-style2">
                  <h1
                    class="hero-title"
                    data-ani="slideinup"
                    data-ani-delay="0.4s"
                  >
                    Discover <span class="hero-text">The beauty of world</span>
                  </h1>
                  <p
                    class="hero-desc"
                    data-ani="slideinup"
                    data-ani-delay="0.5s"
                  >
                     Tourm an international travel management company with specializing
                     in business and maritime
                    travel.
                  </p>
                  <div
                    class="btn-group"
                    data-ani="slideinup"
                    data-ani-delay="0.6s"
                  >
                    <a href="destination.html" class="th-btn white-btn th-icon"
                      >Explore Tours</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="hero-inner">
              <video autoplay loop muted>
                <source src="assets/img/hero/hero-video.mp4" type="video/mp4" />
              </video>
              <div class="container">
                <div class="hero-style2">
                  <h1
                    class="hero-title"
                    data-ani="slideinup"
                    data-ani-delay="0.4s"
                  >
                    Explore<span class="hero-text"
                      >beauty of the whole world</span
                    >
                  </h1>
                  <p
                    class="hero-desc"
                    data-ani="slideinup"
                    data-ani-delay="0.5s"
                  >
                    Provide a detailed itinerary of the tour, including the
                    places you'll visit each day, any activities planned
                    approximate times.
                  </p>
                  <div
                    class="btn-group"
                    data-ani="slideinup"
                    data-ani-delay="0.6s"
                  >
                    <a href="destination.html" class="th-btn white-btn th-icon"
                      >Explore Tours</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="hero-inner">
              <div
                class="th-hero-bg"
                data-bg-src="assets/img/hero/hero_bg_2_3.jpg"
              ></div>
              <div class="container">
                <div class="hero-style2">
                  <h1
                    class="hero-title"
                    data-ani="slideinup"
                    data-ani-delay="0.4s"
                  >
                    Enjoy<span class="hero-text"
                      >The Most Enjoyable Journey</span
                    >
                  </h1>
                  <p class="hero-desc" data-ani="slideinup" data-ani-delay="0.5s">
                    Tourm an international travel management company with specializing
                     in business and maritime
                    travel.
                  </p>
                  <div class="btn-group" data-ani="slideinup" data-ani-delay="0.6s">
                    <a href="tour.html" class="th-btn white-btn th-icon">Explore Tours</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="hero-inner">
              <video autoplay loop muted>
                <source src="assets/img/hero/hero-video.mp4" type="video/mp4" />
              </video>
              <div class="container">
                <div class="hero-style2">
                  <h1
                    class="hero-title"
                    data-ani="slideinup"
                    data-ani-delay="0.4s">
                    Explore<span class="hero-text">beauty of the whole world</span>
                  </h1>
                  <p class="hero-desc" data-ani="slideinup" data-ani-delay="0.5s">
                    Provide a detailed itinerary of the tour, including the
                    places you'll visit each day, any activities planned
                    approximate times.
                  </p>
                  <div class="btn-group" data-ani="slideinup" data-ani-delay="0.6s">
                    <a href="#" class="th-btn white-btn th-icon">Explore Tours</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="th-swiper-custom">
          <div class="swiper-pagination"></div>
          <div class="hero-icon">
            <button data-slider-prev="#heroSlide2, #heroSlide3" class="hero-arrow slider-prev">
              <img src="assets/img/icon/hero-arrow-left.svg" alt="" />
            </button>
            <button data-slider-next="#heroSlide2, #heroSlide3" class="hero-arrow slider-next">
              <img src="assets/img/icon/hero-arrow-right.svg" alt="" />
            </button>
          </div>
        </div>
      </div>
      <div class="swiper heroThumbs" id="heroSlide3">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="hero-inner">
              <div class="hero-card">
                <div class="hero-img">
                  <img src="assets/img/hero/hero_bg_2_1.jpg" alt="" />
                </div>
                <div class="hero-card_content">
                  <h3 class="box-title">Mountain Tour</h3>
                  <h4 class="hero-card_price">
                    <span class="currency">$850.00</span>/Person
                  </h4>
                  <span><i class="fa-light fa-clock"></i>7 Days</span>
                  <a href="destination-details.html" class="th-btn style2">Book Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="scroll-down">
        <a href="#destination-sec" class="scroll-wrap">
          <span><img src="assets/img/icon/down-arrow.svg" alt="" /></span>Scroll Down
        </a>
      </div>
    </div>
    <div class="about-area position-relative overflow-hidden space py-5"id="about-sec">
    <div class="container">
      <div class="row">
        <div class="col-xl-6">
          <div class="img-box1">
    @foreach($gallarys as $index => $gallary)
        @if($index == 0)
            <div class="img1">
                <img src="{{ asset($gallary->image) }}" alt="About 1" />
            </div>
        @elseif($index == 1)
            <div class="img2">
                <img src="{{ asset($gallary->image) }}" alt="About 2" />
            </div>
        @elseif($index == 2)
            <div class="img3">
                <img src="{{ asset($gallary->image) }}" alt="About 3" />
            </div>
        @endif
    @endforeach
</div>
        </div>
        <div class="col-xl-6">
          <div class="ps-xl-4 ms-xl-2">
            <div class="title-area mb-20 pe-xl-5 me-xl-5">
              <span class="sub-title style1">Our Mission</span>
              <h2 class="sec-title mb-20 pe-xl-5 me-xl-5 heading">
                Trip-Fast Travel Agency Mission
              </h2>
              <p class="sec-text mb-30">
                At Trip-fast, our mission is to make every journey unforgettable by offering seamless, personalized, and affordable travel experiences.
                We are dedicated to connecting people to their dream destinations, ensuring they explore the world with ease, comfort, and confidence.
                By combining cutting-edge technology, expert insights, and exceptional customer service, we aim to inspire wanderlust and foster a lifelong love for travel.
              </p>
            </div>
            
          </div>
        </div>
      </div>
      <div class="shape-mockup shape1 d-none d-xl-block" data-top="12%" data-left="-16%">
        <img src="assets/img/shape/shape_1.png" alt="shape" />
      </div>
      <div class="shape-mockup shape2 d-none d-xl-block" data-top="20%" data-left="-16%">
        <img src="assets/img/shape/shape_2.png" alt="shape" />
      </div>
      <div class="shape-mockup shape3 d-none d-xl-block" data-top="14%" data-left="-10%">
        <img src="assets/img/shape/shape_3.png" alt="shape" />
      </div>
      <div class="shape-mockup about-shape movingX d-none d-xxl-block" data-bottom="0%" data-right="-11%">
        <img src="assets/img/normal/about-slide-img.png" alt="shape" />
      </div>
      <div class="shape-mockup about-rating d-none d-xxl-block" data-bottom="50%" data-right="-20%">
        <i class="fa-sharp fa-solid fa-star"></i><span>4.9k</span>
      </div>
      <div class="shape-mockup about-emoji d-none d-xxl-block" data-bottom="25%" data-right="5%">
        <img src="assets/img/icon/emoji.png" alt="" />
      </div>
    </div>
    <div class="destination-area bg-top-center position-relative space" id="destination-sec" data-bg-src="assets/img/bg/line-pattern2.png">
      <div class="container">
        <div class="title-area text-center">
          <span class="sub-title">Top Destination</span>
          <h2 class="sec-title">Our Featured Destination</h2>
        </div>
        <div class="row">
          <div class="destination-list-area">
            <div class="destination-list-wrap">
              <div
                class="destination-list"
                data-bg-src="assets/img/destination/coxs-bazar.png"
              >
                <div class="destination-content">
                  <h4 class="box-title">
                    <a href="destination-details.html">Coxis Bazar</a>
                  </h4>
                  <span class="destination-subtitle">28 Listing</span>
                </div>
                <a href="{{ route('contact') }}" class="th-btn style2">Book Now</a>
              </div>
            </div>
            <div class="destination-list-wrap">
              <div
                class="destination-list"
                data-bg-src="assets/img/destination/sajek.jpg"
              >
                <div class="destination-content">
                  <h4 class="box-title">
                    <a href="destination-details.html">Sajek</a>
                  </h4>
                  <span class="destination-subtitle">15 Listing</span>
                </div>
                <a href="{{ route('contact') }}" class="th-btn style2">Book Now</a>
              </div>
            </div>
            <div class="destination-list-wrap">
              <div
                class="destination-list"
                data-bg-src="assets/img/destination/bandarban.png"
              >
                <div class="destination-content">
                  <h4 class="box-title">
                    <a href="destination-details.html">Bandarban</a>
                  </h4>
                  <span class="destination-subtitle">22 Listing</span>
                </div>
                <a href="{{ route('contact') }}" class="th-btn style2">Book Now</a>
              </div>
            </div>
            <div class="destination-list-wrap active">
              <div
                class="destination-list"
                data-bg-src="assets/img/destination/senmartin.png"
              >
                <div class="destination-content">
                  <h4 class="box-title">
                    <a href="destination-details.html">Senmartin</a>
                  </h4>
                  <span class="destination-subtitle">25 Listing</span>
                </div>
                <a href="{{ route('contact') }}" class="th-btn style2">Book Now</a>
              </div>
            </div>
          </div>
        </div>
        <div class="destination-btn text-center mt-60">
          <a href="destination.html" class="th-btn style3 th-icon">View All</a>
        </div>
        <div
          class="shape-mockup movingX d-none d-xl-block"
          data-top="8%"
          data-left="-15%"
        >
          <img src="assets/img/shape/shape_2_1.png" alt="shape" />
        </div>
        <div
          class="shape-mockup jump d-none d-xl-block"
          data-top="23%"
          data-right="-14%"
        >
          <img src="assets/img/shape/shape_2_2.png" alt="shape" />
        </div>
        <div
          class="shape-mockup spin d-none d-xl-block"
          data-bottom="21%"
          data-left="-14%"
        >
          <img src="assets/img/shape/shape_2_3.png" alt="shape" />
        </div>
        <div
          class="shape-mockup movingX d-none d-xl-block"
          data-bottom="12%"
          data-right="-14%"
        >
          <img src="assets/img/shape/shape_2_4.png" alt="shape" />
        </div>
      </div>
    </div>
    <section class="category-area2 bg-top-center">
      <div class="container th-container">
        <div class="title-area text-center">
          <span class="sub-title">Wornderful Place For You</span>
          <h2 class="sec-title">Tour Categories</h2>
        </div>
        <div class="swiper categorySlider2" id="categorySlide2">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="category-card single2">
                <div class="box-img global-img">
                  <img src="assets/img/category/category_1_1.jpg" alt="Image" />
                </div>
                <h3 class="box-title">
                  <a href="destination.html">Cruises</a>
                </h3>
                <a class="line-btn" href="destination.html">See more</a>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="category-card single2">
                <div class="box-img global-img">
                  <img src="assets/img/category/category_1_2.jpg" alt="Image" />
                </div>
                <h3 class="box-title"><a href="destination.html">Hiking</a></h3>
                <a class="line-btn" href="destination.html">See more</a>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="category-card single2">
                <div class="box-img global-img">
                  <img src="assets/img/category/category_1_3.jpg" alt="Image" />
                </div>
                <h3 class="box-title">
                  <a href="destination.html">Airbirds</a>
                </h3>
                <a class="line-btn" href="destination.html">See more</a>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="category-card single2">
                <div class="box-img global-img">
                  <img src="assets/img/category/category_1_4.jpg" alt="Image" />
                </div>
                <h3 class="box-title">
                  <a href="destination.html">Wildlife</a>
                </h3>
                <a class="line-btn" href="destination.html">See more</a>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="category-card single2">
                <div class="box-img global-img">
                  <img src="assets/img/category/category_1_5.jpg" alt="Image" />
                </div>
                <h3 class="box-title">
                  <a href="destination.html">Walking</a>
                </h3>
                <a class="line-btn" href="destination.html">See more</a>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="category-card single2">
                <div class="box-img global-img">
                  <img src="assets/img/category/category_1_1.jpg" alt="Image" />
                </div>
                <h3 class="box-title">
                  <a href="destination.html">Cruises</a>
                </h3>
                <a class="line-btn" href="destination.html">See more</a>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="category-card single2">
                <div class="box-img global-img">
                  <img src="assets/img/category/category_1_2.jpg" alt="Image" />
                </div>
                <h3 class="box-title"><a href="destination.html">Hiking</a></h3>
                <a class="line-btn" href="destination.html">See more</a>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="category-card single2">
                <div class="box-img global-img">
                  <img src="assets/img/category/category_1_3.jpg" alt="Image" />
                </div>
                <h3 class="box-title">
                  <a href="destination.html">Airbirds</a>
                </h3>
                <a class="line-btn" href="destination.html">See more</a>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="category-card single2">
                <div class="box-img global-img">
                  <img src="assets/img/category/category_1_4.jpg" alt="Image" />
                </div>
                <h3 class="box-title">
                  <a href="destination.html">Wildlife</a>
                </h3>
                <a class="line-btn" href="destination.html">See more</a>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="category-card single2">
                <div class="box-img global-img">
                  <img src="assets/img/category/category_1_5.jpg" alt="Image" />
                </div>
                <h3 class="box-title">
                  <a href="destination.html">Walking</a>
                </h3>
                <a class="line-btn" href="destination.html">See more</a>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="category-card single2">
                <div class="box-img global-img">
                  <img src="assets/img/category/category_1_1.jpg" alt="Image" />
                </div>
                <h3 class="box-title">
                  <a href="destination.html">Cruises</a>
                </h3>
                <a class="line-btn" href="destination.html">See more</a>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="category-card single2">
                <div class="box-img global-img">
                  <img src="assets/img/category/category_1_2.jpg" alt="Image" />
                </div>
                <h3 class="box-title"><a href="destination.html">Hiking</a></h3>
                <a class="line-btn" href="destination.html">See more</a>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="category-card single2">
                <div class="box-img global-img">
                  <img src="assets/img/category/category_1_3.jpg" alt="Image" />
                </div>
                <h3 class="box-title">
                  <a href="destination.html">Airbirds</a>
                </h3>
                <a class="line-btn" href="destination.html">See more</a>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="category-card single2">
                <div class="box-img global-img">
                  <img src="assets/img/category/category_1_4.jpg" alt="Image" />
                </div>
                <h3 class="box-title">
                  <a href="destination.html">Wildlife</a>
                </h3>
                <a class="line-btn" href="destination.html">See more</a>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="category-card single2">
                <div class="box-img global-img">
                  <img src="assets/img/category/category_1_5.jpg" alt="Image" />
                </div>
                <h3 class="box-title">
                  <a href="destination.html">Walking</a>
                </h3>
                <a class="line-btn" href="destination.html">See more</a>
              </div>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section>
   
    <section class="bg-smoke space" data-bg-src="assets/img/bg/team_bg_1.png">
      <div class="container z-index-common">
        <div class="title-area text-center">
          <span class="sub-title">Meet with Guide</span>
          <h2 class="sec-title">Meet with expert guide</h2>
        </div>
        <div class="slider-area">
          <div
            class="swiper th-slider teamSlider1 has-shadow"
            id="teamSlider1"
            data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}}}'
          >
            <div class="swiper-wrapper">

              <div class="swiper-slide">
                <div class="th-team team-box">
                  <div class="team-img">
                    <img src="assets/img/team/team_1_1.jpg" alt="Team" />
                  </div>
                  <div class="team-content">
                    <div class="media-body">
                      <h3 class="box-title">
                        <a href="tour-guider-details.html">Sorol Sarkar</a>
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
              <div class="swiper-slide">
                <div class="th-team team-box">
                  <div class="team-img">
                    <img src="assets/img/team/team_1_2.jpg" alt="Team" />
                  </div>
                  <div class="team-content">
                    <div class="media-body">
                      <h3 class="box-title">
                        <a href="tour-guider-details.html">Bishal Kumar</a>
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
              <div class="swiper-slide">
                <div class="th-team team-box">
                  <div class="team-img">
                    <img src="assets/img/team/team_1_3.jpg" alt="Team" />
                  </div>
                  <div class="team-content">
                    <div class="media-body">
                      <h3 class="box-title">
                        <a href="tour-guider-details.html">Sadique Hossain</a>
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
              <div class="swiper-slide">
                <div class="th-team team-box">
                  <div class="team-img">
                    <img src="assets/img/team/team_1_4.jpg" alt="Team" />
                  </div>
                  <div class="team-content">
                    <div class="media-body">
                      <h3 class="box-title">
                        <a href="tour-guider-details.html">Elias Hasan</a>
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
            </div>
            <div class="slider-pagination"></div>
          </div>
        </div>
      </div>
    </section>

@endsection
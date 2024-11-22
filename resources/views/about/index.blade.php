@extends('layouts.app')

@section('title', 'About Us')
    
@section('content')
<main>
    <!-- Start Breadcrumbs Area -->
    <div
      class="ep-breadcrumbs breadcrumbs-bg background-image"
      style="background-image: url('assets/images/breadcrumbs-bg.png')"
    >
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 col-md-6 col-12">
            <div class="ep-breadcrumbs__content">
              <h3 class="ep-breadcrumbs__title">About Us</h3>
              <ul class="ep-breadcrumbs__menu">
                <li>
                  <a href="{{ route('home') }}">Home</a>
                </li>
                <li>
                  <i class="fi-bs-angle-right"></i>
                </li>
                <li class="active">
                  <a href="about.html">About Us</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Breadcrumbs Area -->
    <!-- Start About Area -->
    <section class="ep-about ep-section section-gap position-relative">
      <div class="ep-about__shape updown-ani">
        <img
          src="assets/images/about/about-1/circle-shape.svg"
          alt="circle-shape"
        />
      </div>
      <div class="container ep-container">
        <div class="row align-items-center">
          <div class="col-lg-6 col-12">
            <div class="ep-section__img position-relative">
              <div class="ep-section__img-shape rotate-ani">
                <img
                  src="assets/images/about/about-1/pattern-shape.svg"
                  alt="pattern-shape"
                />
              </div>
              <div class="ep-section__img-main">
                <img
                  src="assets/images/about/about-1/about-img.png"
                  alt="about-img"
                />
              </div>
              <div class="overview-card updown-ani">
                <div class="overview-card__icon">
                  <img
                    src="assets/images/about/about-1/user.svg"
                    alt="user-icon"
                  />
                </div>
                <div class="overview-card__info">
                  <h4><span>2</span>k+</h4>
                  <p>Full Time Student</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-12">
            <div class="ep-section__content">
              <div class="ep-section-head">
                <span class="ep-section-head__sm-title ep1-color"
                  >Know About Us</span
                >
                <h3 class="ep-section-head__big-title ep-split-text left">
                  Unlocking the <span>Power</span> <br />
                  of Knowledge
                </h3>
                <p class="ep-section-head__text">
                  Et purus duis sollicitudin dignissim habitant. Egestas
                  nulla quis venenatis cras sed eu massa eu faucibus. Urna
                  fusce aenean tortor pretium. Ac
                </p>
              </div>
              <div class="ep-section__widget">
                <div class="ep-feature-list">
                  <div class="ep-feature-list__icon">
                    <i class="fi fi-ss-check-circle"></i>
                  </div>
                  <div class="ep-feature-list__info">
                    <h5>Ignite your passion for learning</h5>
                    <p>
                      Et purus duis sollicitudin dignissim habitant.
                      Egestas nulla quis venenatis cras sed eu massa eu
                      faucibus.
                    </p>
                  </div>
                </div>
                <div class="ep-feature-list">
                  <div class="ep-feature-list__icon">
                    <i class="fi fi-ss-check-circle"></i>
                  </div>
                  <div class="ep-feature-list__info">
                    <h5>Discover the joy of lifelong learning</h5>
                    <p>
                      Et purus duis sollicitudin dignissim habitant.
                      Egestas nulla quis venenatis cras sed eu massa eu
                      faucibus.
                    </p>
                  </div>
                </div>
              </div>
              <div class="ep-section__btn">
                <a href="about.html" class="ep-btn border-btn"
                  >Read More <i class="fi fi-rs-arrow-small-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Start About Area -->
    <!-- Start Category Area -->
    <section class="ep-category section-gap pt-0">
      <div class="container ep-container">
        <div class="row justify-content-center">
          <div class="col-lg-8 col-xl-4 col-md-8 col-12">
            <div class="ep-section-head text-center">
              <span class="ep-section-head__sm-title ep1-color"
                >Categories</span
              >
              <h3 class="ep-section-head__big-title ep-split-text left">
                Study Aids to <span>Boost</span> <br />Your Learning
              </h3>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Single Card -->
          <div class="col-lg-4 col-xl-3 col-md-6 col-12">
            <a
              href="course.html"
              class="ep-category__card wow fadeInUp"
              data-wow-delay=".3s"
              data-wow-duration="1s"
            >
              <div class="ep-category__icon ep1-bg">
                <img
                  src="assets/images/category/category-1/1.svg"
                  alt="category-icon"
                />
              </div>
              <div class="ep-category__info">
                <h3>Study Buddy</h3>
              </div>
            </a>
          </div>
          <!-- Single Card -->
          <div class="col-lg-4 col-xl-3 col-md-6 col-12">
            <a
              href="course.html"
              class="ep-category__card wow fadeInUp"
              data-wow-delay=".5s"
              data-wow-duration="1s"
            >
              <div class="ep-category__icon ep2-bg">
                <img
                  src="assets/images/category/category-1/2.svg"
                  alt="category-icon"
                />
              </div>
              <div class="ep-category__info">
                <h3>Tutoring Services</h3>
              </div>
            </a>
          </div>
          <!-- Single Card -->
          <div class="col-lg-4 col-xl-3 col-md-6 col-12">
            <a
              href="course.html"
              class="ep-category__card wow fadeInUp"
              data-wow-delay=".7s"
              data-wow-duration="1s"
            >
              <div class="ep-category__icon ep4-bg">
                <img
                  src="assets/images/category/category-1/3.svg"
                  alt="category-icon"
                />
              </div>
              <div class="ep-category__info">
                <h3>Digital Advertising</h3>
              </div>
            </a>
          </div>
          <!-- Single Card -->
          <div class="col-lg-4 col-xl-3 col-md-6 col-12">
            <a
              href="course.html"
              class="ep-category__card wow fadeInUp"
              data-wow-delay=".9s"
              data-wow-duration="1s"
            >
              <div class="ep-category__icon ep3-bg">
                <img
                  src="assets/images/category/category-1/4.svg"
                  alt="category-icon"
                />
              </div>
              <div class="ep-category__info">
                <h3>Brain Boost</h3>
              </div>
            </a>
          </div>
          <!-- Single Card -->
          <div class="col-lg-4 col-xl-3 col-md-6 col-12">
            <a
              href="course.html"
              class="ep-category__card wow fadeInUp"
              data-wow-delay=".3s"
              data-wow-duration="1s"
            >
              <div class="ep-category__icon ep4-bg">
                <img
                  src="assets/images/category/category-1/5.svg"
                  alt="category-icon"
                />
              </div>
              <div class="ep-category__info">
                <h3>Edu Connect</h3>
              </div>
            </a>
          </div>
          <!-- Single Card -->
          <div class="col-lg-4 col-xl-3 col-md-6 col-12">
            <a
              href="course.html"
              class="ep-category__card wow fadeInUp"
              data-wow-delay=".5s"
              data-wow-duration="1s"
            >
              <div class="ep-category__icon ep5-bg">
                <img
                  src="assets/images/category/category-1/6.svg"
                  alt="category-icon"
                />
              </div>
              <div class="ep-category__info">
                <h3>Tutoring Services</h3>
              </div>
            </a>
          </div>
          <!-- Single Card -->
          <div class="col-lg-4 col-xl-3 col-md-6 col-12">
            <a
              href="course.html"
              class="ep-category__card wow fadeInUp"
              data-wow-delay=".7s"
              data-wow-duration="1s"
            >
              <div class="ep-category__icon ep6-bg">
                <img
                  src="assets/images/category/category-1/7.svg"
                  alt="category-icon"
                />
              </div>
              <div class="ep-category__info">
                <h3>Study Buddy</h3>
              </div>
            </a>
          </div>
          <!-- Single Card -->
          <div class="col-lg-4 col-xl-3 col-md-6 col-12">
            <a
              href="course.html"
              class="ep-category__card wow fadeInUp"
              data-wow-delay=".9s"
              data-wow-duration="1s"
            >
              <div class="ep-category__icon ep4-bg">
                <img
                  src="assets/images/category/category-1/8.svg"
                  alt="category-icon"
                />
              </div>
              <div class="ep-category__info">
                <h3>Online Courses</h3>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- End  Category Area -->
    <div class="ep-section-bg bg-img-1">
      <!-- Start Funfact Area -->
      <section class="ep-funfact section-gap pb-0">
        <div class="container ep-container">
          <div class="row g-0 justify-content-between">
            <!-- Single Funfact Card -->
            <div class="col-xl-auto col-lg-3 col-md-6 col-12">
              <div
                class="ep-funfact__card wow fadeInUp"
                data-wow-delay=".3s"
                data-wow-duration="1s"
              >
                <div class="ep-funfact__icon ep3-bg">
                  <img
                    src="assets/images/funfact/funfact-1/1.svg"
                    alt="funfact-icon"
                  />
                </div>
                <div class="ep-funfact__info">
                  <h4><span class="counter">14</span>k+</h4>
                  <p>Student Enrolled</p>
                </div>
              </div>
            </div>
            <!-- Single Funfact Card -->
            <div class="col-xl-auto col-lg-3 col-md-6 col-12">
              <div
                class="ep-funfact__card wow fadeInUp"
                data-wow-delay=".5s"
                data-wow-duration="1s"
              >
                <div class="ep-funfact__icon ep1-bg">
                  <img
                    src="assets/images/funfact/funfact-1/2.svg"
                    alt="funfact-icon"
                  />
                </div>
                <div class="ep-funfact__info">
                  <h4><span class="counter">20</span>k+</h4>
                  <p>Class Completed</p>
                </div>
              </div>
            </div>
            <!-- Single Funfact Card -->
            <div class="col-xl-auto col-lg-3 col-md-6 col-12">
              <div
                class="ep-funfact__card wow fadeInUp"
                data-wow-delay=".7s"
                data-wow-duration="1s"
              >
                <div class="ep-funfact__icon ep8-bg">
                  <img
                    src="assets/images/funfact/funfact-1/3.svg"
                    alt="funfact-icon"
                  />
                </div>
                <div class="ep-funfact__info">
                  <h4><span class="counter">100</span>%</h4>
                  <p>Happy Customers</p>
                </div>
              </div>
            </div>
            <!-- Single Funfact Card -->
            <div class="col-xl-auto col-lg-3 col-md-6 col-12">
              <div
                class="ep-funfact__card wow fadeInUp"
                data-wow-delay=".9s"
                data-wow-duration="1s"
              >
                <div class="ep-funfact__icon ep7-bg">
                  <img
                    src="assets/images/funfact/funfact-1/4.svg"
                    alt="funfact-icon"
                  />
                </div>
                <div class="ep-funfact__info">
                  <h4><span class="counter">900</span>+</h4>
                  <p>Top Instructors</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Funfact Area -->
      <!-- Start Faq Area -->
      <section class="ep-faq mg-top-80 position-relative">
        <div class="ep-faq__pattern-2 updown-ani">
          <img
            src="assets/images/faq/faq-1/pattern-2.svg"
            alt="pattern-2"
          />
        </div>
        <div class="container ep-container">
          <div class="ep-faq__inner position-relative">
            <div class="ep-faq__pattern-1 rotate-ani">
              <img
                src="assets/images/faq/faq-1/pattern-1.svg"
                alt="pattern-1"
              />
            </div>
            <div class="row g-0 align-items-center">
              <div class="col-lg-12 col-xl-6 col-12">
                <div class="ep-faq__img">
                  <img
                    src="assets/images/faq/faq-1/faq-img.png"
                    alt="faq-img"
                  />
                </div>
              </div>
              <div class="col-lg-12 col-xl-6 col-12">
                <div class="ep-faq__content">
                  <div class="ep-section-head">
                    <span class="ep-section-head__sm-title ep1-color"
                      >Faq</span
                    >
                    <h3
                      class="ep-section-head__big-title ep-split-text left"
                    >
                      Frequently <span>Asked</span> <br />
                      Questions and Answers
                    </h3>
                  </div>
                  <div
                    class="ep-faq__accordion faq-inner accordion"
                    id="accordionExample"
                  >
                    <!-- Single Faq -->
                    <div class="ep-faq__accordion-item">
                      <h2 class="accordion-header" id="headingOne">
                        <button
                          class="accordion-button"
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#collapseOne"
                          aria-expanded="true"
                          aria-controls="collapseOne"
                        >
                          <span>01</span>What are the benefits of
                          education?
                        </button>
                      </h2>
                      <div
                        id="collapseOne"
                        class="accordion-collapse collapse show"
                        aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample"
                      >
                        <div class="ep-faq__accordion-body">
                          <p class="ep-faq__accordion-text">
                            The generated is therefore always free from
                            repetition is the injected humour or words
                            etc.
                          </p>
                        </div>
                      </div>
                    </div>
                    <!-- Single Faq -->
                    <div class="ep-faq__accordion-item">
                      <h2 class="accordion-header" id="headingTwo">
                        <button
                          class="accordion-button collapsed"
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#collapseTwo"
                          aria-expanded="false"
                          aria-controls="collapseTwo"
                        >
                          <span>02</span>How can I find the program for
                          me?
                        </button>
                      </h2>
                      <div
                        id="collapseTwo"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample"
                      >
                        <div class="ep-faq__accordion-body">
                          <p class="ep-faq__accordion-text">
                            The generated is therefore always free from
                            repetition is the injected humour or words
                            etc.
                          </p>
                        </div>
                      </div>
                    </div>
                    <!-- Single Faq -->
                    <div class="ep-faq__accordion-item">
                      <h2 class="accordion-header" id="headingThree">
                        <button
                          class="accordion-button collapsed"
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#collapseThree"
                          aria-expanded="false"
                          aria-controls="collapseThree"
                        >
                          <span>03</span>Can I get financial for my
                          education?
                        </button>
                      </h2>
                      <div
                        id="collapseThree"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample"
                      >
                        <div class="ep-faq__accordion-body">
                          <p class="ep-faq__accordion-text">
                            The generated is therefore always free from
                            repetition is the injected humour or words
                            etc.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Faq Area -->
    </div>
    <!-- Start Brand -->
    <div class="ep-brand section-gap pb-0">
      <div class="container ep-container">
        <div class="row">
          <div class="col-12">
            <div class="owl-carousel ep-brand__slider">
              <!-- Single Brand -->
              <a href="#" class="ep-brand__logo">
                <img
                  src="assets/images/brand/brand-1/1.svg"
                  alt="brand-logo"
                />
              </a>
              <!-- Single Brand -->
              <a href="#" class="ep-brand__logo">
                <img
                  src="assets/images/brand/brand-1/2.svg"
                  alt="brand-logo"
                />
              </a>
              <!-- Single Brand -->
              <a href="#" class="ep-brand__logo">
                <img
                  src="assets/images/brand/brand-1/3.svg"
                  alt="brand-logo"
                />
              </a>
              <!-- Single Brand -->
              <a href="#" class="ep-brand__logo">
                <img
                  src="assets/images/brand/brand-1/4.svg"
                  alt="brand-logo"
                />
              </a>
              <!-- Single Brand -->
              <a href="#" class="ep-brand__logo">
                <img
                  src="assets/images/brand/brand-1/5.svg"
                  alt="brand-logo"
                />
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Start Brand -->
    <!-- Start Testimonial Area -->
    <section class="ep-testimonial section-gap">
      <div class="container ep-container">
        <div class="row">
          <div class="col-12">
            <div class="owl-carousel ep-testimonial__slider">
              <!-- Single Testimonial -->
              <div class="ep-testimonial__item position-relative">
                <div class="ep-testimonial__rattings">
                  <ul>
                    <li>
                      <i class="icofont-star"></i>
                    </li>
                    <li>
                      <i class="icofont-star"></i>
                    </li>
                    <li>
                      <i class="icofont-star"></i>
                    </li>
                    <li>
                      <i class="icofont-star"></i>
                    </li>
                    <li>
                      <i class="icofont-star off-color"></i>
                    </li>
                  </ul>
                </div>
                <p class="ep-testimonial__desc">
                  Their product exceeded his my daily design routine
                  expectations wa The quality and heres attention to
                  detail were outstanding and it isi has become an
                  essential
                </p>
                <div class="ep-testimonial__author">
                  <div class="ep-testimonial__author-img">
                    <img
                      src="assets/images/testimonial/testimonial-1/author-1.png"
                      alt="author-img"
                    />
                  </div>
                  <div class="ep-testimonial__author-info">
                    <h5>Edward Ramirez</h5>
                    <p>CEO Of Google</p>
                  </div>
                </div>
                <div class="ep-testimonial__shape">
                  <img
                    src="assets/images/testimonial/testimonial-1/dot-shape.svg"
                    alt="dot-pattern"
                  />
                </div>
              </div>
              <!-- Single Testimonial -->
              <div class="ep-testimonial__item position-relative">
                <div class="ep-testimonial__rattings">
                  <ul>
                    <li>
                      <i class="icofont-star"></i>
                    </li>
                    <li>
                      <i class="icofont-star"></i>
                    </li>
                    <li>
                      <i class="icofont-star"></i>
                    </li>
                    <li>
                      <i class="icofont-star"></i>
                    </li>
                    <li>
                      <i class="icofont-star off-color"></i>
                    </li>
                  </ul>
                </div>
                <p class="ep-testimonial__desc">
                  Their product exceeded his my daily design routine
                  expectations wa The quality and heres attention to
                  detail were outstanding and it isi has become an
                  essential
                </p>
                <div class="ep-testimonial__author">
                  <div class="ep-testimonial__author-img">
                    <img
                      src="assets/images/testimonial/testimonial-1/author-2.png"
                      alt="author-img"
                    />
                  </div>
                  <div class="ep-testimonial__author-info">
                    <h5>Edward Ramirez</h5>
                    <p>CEO Of Google</p>
                  </div>
                </div>
                <div class="ep-testimonial__shape">
                  <img
                    src="assets/images/testimonial/testimonial-1/dot-shape.svg"
                    alt="dot-pattern"
                  />
                </div>
              </div>
              <!-- Single Testimonial -->
              <div class="ep-testimonial__item position-relative">
                <div class="ep-testimonial__rattings">
                  <ul>
                    <li>
                      <i class="icofont-star"></i>
                    </li>
                    <li>
                      <i class="icofont-star"></i>
                    </li>
                    <li>
                      <i class="icofont-star"></i>
                    </li>
                    <li>
                      <i class="icofont-star"></i>
                    </li>
                    <li>
                      <i class="icofont-star off-color"></i>
                    </li>
                  </ul>
                </div>
                <p class="ep-testimonial__desc">
                  Their product exceeded his my daily design routine
                  expectations wa The quality and heres attention to
                  detail were outstanding and it isi has become an
                  essential
                </p>
                <div class="ep-testimonial__author">
                  <div class="ep-testimonial__author-img">
                    <img
                      src="assets/images/testimonial/testimonial-1/author-1.png"
                      alt="author-img"
                    />
                  </div>
                  <div class="ep-testimonial__author-info">
                    <h5>Edward Ramirez</h5>
                    <p>CEO Of Google</p>
                  </div>
                </div>
                <div class="ep-testimonial__shape">
                  <img
                    src="assets/images/testimonial/testimonial-1/dot-shape.svg"
                    alt="dot-pattern"
                  />
                </div>
              </div>
              <!-- Single Testimonial -->
              <div class="ep-testimonial__item position-relative">
                <div class="ep-testimonial__rattings">
                  <ul>
                    <li>
                      <i class="icofont-star"></i>
                    </li>
                    <li>
                      <i class="icofont-star"></i>
                    </li>
                    <li>
                      <i class="icofont-star"></i>
                    </li>
                    <li>
                      <i class="icofont-star"></i>
                    </li>
                    <li>
                      <i class="icofont-star off-color"></i>
                    </li>
                  </ul>
                </div>
                <p class="ep-testimonial__desc">
                  Their product exceeded his my daily design routine
                  expectations wa The quality and heres attention to
                  detail were outstanding and it isi has become an
                  essential
                </p>
                <div class="ep-testimonial__author">
                  <div class="ep-testimonial__author-img">
                    <img
                      src="assets/images/testimonial/testimonial-1/author-2.png"
                      alt="author-img"
                    />
                  </div>
                  <div class="ep-testimonial__author-info">
                    <h5>Edward Ramirez</h5>
                    <p>CEO Of Google</p>
                  </div>
                </div>
                <div class="ep-testimonial__shape">
                  <img
                    src="assets/images/testimonial/testimonial-1/dot-shape.svg"
                    alt="dot-pattern"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Testimonial Area -->
    <!-- Start Video Area -->
    <div class="ep-video section-gap pt-0">
      <div class="container ep-container">
        <div
          class="ep-video__bg background-image ep-hobble position-relative"
          style="
            background-image: url('assets/images/video/video-1/bg.jpg');
          "
        >
          <a
            href="https://www.youtube.com/watch?v=gyGsPlt06bo"
            class="ep-video__btn popup-video ep-hover-layer-2"
          >
            <i class="fi fi-sr-play"></i>
          </a>
        </div>
      </div>
    </div>
    <!-- End Video Area -->
  </main>
@endsection
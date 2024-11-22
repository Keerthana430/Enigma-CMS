@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<main>
    <!-- Start Breadcrumbs Area -->
    <div
      class="ep-breadcrumbs breadcrumbs-bg background-image"
      style="background-image: url('{{ asset('assets/images/breadcrumbs-bg.png') }}')"
    >
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 col-md-6 col-12">
            <div class="ep-breadcrumbs__content">
              <h3 class="ep-breadcrumbs__title">Contact</h3>
              <ul class="ep-breadcrumbs__menu">
                <li>
                  <a href="{{ route('home') }}">Home</a>
                </li>
                <li>
                  <i class="fi-bs-angle-right"></i>
                </li>
                <li class="active">
                  <a href="{{ route('contact') }}">Contact</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Breadcrumbs Area -->
    <!-- Start Contact Area -->
    <section class="ep-contact section-gap position-relative pb-0">
      <div class="container ep-container">
        <div class="row">
          <div class="col-lg-12 col-xl-5 col-12">
            <div class="ep-contact__info">
              <div class="ep-contact__info-head">
                <span>Contact us</span>
                <h3 class="ep-split-text left">
                  Unlocking Potential the an Through Enigma
                </h3>
              </div>
              <!-- Single Info -->
              <div class="ep-contact__info-item">
                <div class="ep-contact__info-icon">
                  <i class="fi-ss-marker"></i>
                </div>
                <div class="ep-contact__info-text">
                  <h6>Address</h6>
                  <p>
                    3rd floor, A J Institute of Engineering and Technology<br />Bangrakuloor, Mangalore, Karnataka 575006
                  </p>
                </div>
              </div>
              <!-- Single Info -->
              <div class="ep-contact__info-item">
                <div class="ep-contact__info-icon">
                  <i class="fi fi-sr-phone-call"></i>
                </div>
                <div class="ep-contact__info-text">
                  <h6>Lets Talk us</h6>
                  <p>
                    Phone number:
                    <a href="tel:+32566 - 800 - 890">
                      +91 9019 00 3490</a
                    >
                    <br />
                    {{-- Fax: 1234 -58963 - 007 --}}
                  </p>
                </div>
              </div>
              <!-- Single Info -->
              <div class="ep-contact__info-item">
                <div class="ep-contact__info-icon">
                  <i class="fi fi-sr-envelope"></i>
                </div>
                <div class="ep-contact__info-text">
                  <h6>Send us email</h6>
                  <a href="mailto:enigma@ajiet.edu.in">
                    enigma@ajiet.edu.in
                  </a>
                  <br />
                  <a href="mailto:drshnbhandary@gmail.com"
                    >drshnbhandary@gmail.com
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12 col-xl-7 col-12">
            <div class="ep-contact__form">
              <h3 class="ep-contact__form-title ep-split-text left">
                Get in Touch With Us
              </h3>
              <form action="/" method="post">
                <div class="form-group">
                  <label>Your Name</label>
                  <input
                    type="text"
                    id="name"
                    name="your-name"
                    placeholder="Name "
                    required
                  />
                </div>
                <div class="form-group">
                  <label>Your Email</label>
                  <input
                    type="email"
                    id="email"
                    name="your-email"
                    placeholder="Email "
                    required
                  />
                </div>
                <div class="form-group">
                  <label>Your Number</label>
                  <input
                    type="tel"
                    id="phone"
                    name="your-number"
                    placeholder="Phone Number"
                    required
                  />
                </div>
                <div class="form-group">
                  <label>Message</label>
                  <textarea
                    name="message"
                    id="message"
                    placeholder="Message here.."
                    required
                  ></textarea>
                </div>
                <button type="submit" class="ep-btn">Send Message</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="ep-contact__map">
        <div class="gmap_canvas">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62222.13891811075!2d74.75254834863279!3d12.915196799999993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba35a7940000001%3A0x37b1d2f42900de85!2sAJ%20Institute%20of%20Engineering%20%26%20Technology!5e0!3m2!1sen!2sin!4v1730636413012!5m2!1sen!2sin"
            width="1920"
            height="576"
            style="border: 0"
          ></iframe>
        </div>
      </div>
    </section>
    <!-- End Contact Area -->
    <!-- Start Brand Area -->
    <div class="ep-brand section-gap">
      <div class="container ep-container">
        <div class="row">
          <div class="col-12">
            <div class="owl-carousel ep-brand__slider">
              <!-- Single Brand -->
              <a href="#" class="ep-brand__logo">
                <img
                  src="{{asset('assets/images/brand/brand-1/1.svg')}}"
                  alt="brand-logo"
                />
              </a>
              <!-- Single Brand -->
              <a href="#" class="ep-brand__logo">
                <img
                  src="{{asset('assets/images/brand/brand-1/2.svg')}}"
                  alt="brand-logo"
                />
              </a>
              <!-- Single Brand -->
              <a href="#" class="ep-brand__logo">
                <img
                  src="{{asset('assets/images/brand/brand-1/3.svg')}}"
                  alt="brand-logo"
                />
              </a>
              <!-- Single Brand -->
              <a href="#" class="ep-brand__logo">
                <img
                  src="{{asset('assets/images/brand/brand-1/4.svg')}}"
                  alt="brand-logo"
                />
              </a>
              <!-- Single Brand -->
              <a href="#" class="ep-brand__logo">
                <img
                  src="{{asset('assets/images/brand/brand-1/5.svg')}}"
                  alt="brand-logo"
                />
              </a>
              <!-- Single Brand -->
              <a href="#" class="ep-brand__logo">
                <img
                  src="{{asset('assets/images/brand/brand-1/6.svg')}}"
                  alt="brand-logo"
                />
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Brand Area -->
  </main>
@endsection
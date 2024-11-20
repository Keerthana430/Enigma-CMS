<!DOCTYPE html>
<html class="no-js" lang="ZXX">
  
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="robots" content="all" />
    <meta
      name="keywords"
      content="Enigma, Enigma Cse, Enigma computer science and engineering, AJIET, Computer Science and Engineering, CSE, AJIET, Enigma 2024, Enigma 2024 AJIET, Enigma 2024 AJIET CSE, Enigma 2024 AJIET CSE"
    />
    <meta name="robots" content="index, follow">
    <meta name="author" content="Darshan Bhandary" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('/assets/images/logo-landing.png') }}" />

    <!-- Site Title -->
    {{-- renders dynamic titles  --}}
    <title>Enigma | @yield('title')</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('/assets/plugins/css/bootstrap.min.css') }}" />
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/plugins/css/animate.min.css') }}" />
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/plugins/css/owl.carousel.min.css') }}" />
    <!-- Maginific Popup CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/plugins/css/maginific-popup.min.css') }}" />
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/plugins/css/nice-select.min.css') }}" />
    <!-- Icofont -->
    <link rel="stylesheet" href="{{ asset('/assets/plugins/css/icofont.css') }}" />
    <!-- Uicons -->
    <link rel="stylesheet" href="{{ asset('/assets/plugins/css/uicons.css') }}" />
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('style.css') }}" />
  </head>


  <body class="ep-magic-cursor"> 
    <!-- Start Preloader  -->
<div id="preloader">
    <div id="ep-preloader" class="ep-preloader">
      <div class="animation-preloader">
        <div class="spinner"></div>
      </div>
    </div>
  </div>
  <!-- End Preloader -->

  <!-- Start Cursor To Top  -->
  <div class="cursor"></div>
  <div class="cursor2"></div>
  <!-- End Cursor To Top -->

  <!-- Start Begin Magic Cursor -->
  <div id="magic-cursor">
    <div id="ball"></div>
  </div>
  <!-- End Begin Magic Cursor -->

  <!-- Start Back To Top  -->
  <div class="progress-wrap">
    <svg
      class="progress-circle svg-content"
      width="100%"
      height="100%"
      viewBox="-1 -1 102 102"
    >
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
  <!-- End Back To Top -->


    @include('layouts.includes.nav')

    @yield('content')

    @include('layouts.includes.footer')

  </body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ZenBlog Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS Files -->
  <link href="assets/css/variables.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: ZenBlog
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/zenblog-bootstrap-blog-template/
  * Author: BootstrapMade.com
  * License: https:///bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{url('/')}}" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>ZenBlog</h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{url('/')}}">Blog</a></li>
          <li><a href="{{url('/')}}/latest-post">Latest Post</a></li>
          <li class="dropdown"><a href="category"><span>Categories</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <!-- <li><a href="search-result">Search Result</a></li> -->
              <li><a href="category/Cureent_Affaris">Cureent Affaris</a></li>
              <li class="dropdown"><a href="category/tech"><span>Tech</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="category/programing">Programing</a></li>
                  <li><a href="category/electronics">Electronics</a></li>
                  <li><a href="category/ai">Ai</a></li>
                  <li><a href="category/Meachine_learning">Meachine learning</a></li>
                  <li><a href="category/Tech_Update">Tech Update</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="category/news"><span>News</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="category/Social_Issue">Social Issue</a></li>
                  <li><a href="category/History">History</a></li>
                  <li><a href="category/War">War</a></li>
                  <li><a href="category/World_Affaris">World Affaris</a></li>
                </ul>
              </li>
              <li><a href="category/gaming">Gaming</a></li>
              <li><a href="category/sports">Sports</a></li>
              <li><a href="category/Entertainment">Entertainment</a></li>
              <!-- <li><a href="category">Entertainment</a></li>
              <li><a href="category">Entertainment</a></li> -->
            </ul>
          </li>

          <li><a href="{{url('/')}}/about">About</a></li>
          <li><a href="{{url('/')}}/contact">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

      <div class="position-relative">
        <a href="#" class="mx-2"><span class="bi-facebook"></span></a>
        <a href="#" class="mx-2"><span class="bi-twitter"></span></a>
        <a href="#" class="mx-2"><span class="bi-instagram"></span></a>

        <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>
        <i class="bi bi-list mobile-nav-toggle"></i>

        <!-- ======= Search Form ======= -->
        <div class="search-form-wrap js-search-form-wrap">
          <form action="{{ url('/') }}/search-result" class="search-form" method="get">
            @csrf
            <span class="icon bi-search"></span>
            <input type="submit" name="search" class="icon bi-search one" value="">
              <!-- <button type="button" name="btn">
                <span class="icon bi-search"></span>
              </button> -->
            <input type="text" placeholder="Search" class="form-control" value="" name="search">
            <button class="btn js-search-close"><span class="bi-x"></span></button>
          </form>
        </div><!-- End Search Form -->

      </div>

    </div>

  </header>
  <!-- End Header -->
<style>
.one{
  background-color:#ffffff;
  z-index:-1;
  border: none;
}
</style>
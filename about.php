<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="Ava Recruitment Services" name="keywords">
  <meta content="" name="description">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>About Us | Ava Recruitment Services</title>

  <!-- Favicon -->
  <link href="assets/img/icon.png" rel="icon">

  <link rel="stylesheet" href="assets/css/maicons.css">

  <link rel="stylesheet" href="assets/css/bootstrap.css">

  <link rel="stylesheet" href="assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="assets/css/theme.css">


  <!--====== Default css ======-->
  <link rel="stylesheet" href="assets-2/css/default.css">


  <style type="text/css">
    .card-service {
      display: inline-flex;
      flex-direction: row;
      align-items: center;
      padding: 20px;
      margin: 0 auto;
      width: 100%;
      height: 100px;
      font-size: 20px;
      line-height: normal;
      background-color: #fff;
      border-radius: 4px;
      box-shadow: 0 2px 6px rgba(154, 159, 151, 0.2);
    }
  </style>
</head>
<body class="bg-light">

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <!-- Preloader 
  <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>-->

  <?php require 'linkpage/topbar.php'; ?>
  <header class="sticky-top" style="background:#fff;">
    <nav class="navbar navbar-expand-lg navbar-light shadow">
      <div class="container">
        <?php require 'linkpage/logo.php'; ?>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="./">HOME</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="about.php">ABOUT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="services.php">SERVICES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">CONTACT</a>
            </li>
            <li class="nav-item">
              <a class="btn bg-pink text-white ml-lg-3" href="apply.php">APPLY</a>
            </li>
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  <div class="page-banner bg-image" style="background-image: url(assets/img/bg-main.jpg);" data-overlay="3">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <h1 class="font-weight-normal text-white">About Us</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <div class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 py-3 wow zoomIn">
          <div class="card-service">
            <div class="circle-shape bg-blue text-white">
              <span class="mai-shield-checkmark-outline"></span>
            </div>
            <p>Vetted</p>         
          </div>
        </div>
        <div class="col-md-4 py-3 wow zoomIn">
          <div class="card-service">
            <div class="circle-shape bg-blue text-white">
                <span class="mai-document-text-outline"></span>
            </div>
            <p>Fully Compliant</p>
          </div>
        </div>
        <div class="col-md-4 py-3 wow zoomIn">
          <div class="card-service">
            <div class="circle-shape bg-blue text-white">
              <span class="mai-briefcase-outline"></span>
            </div>
            <p>Well Experienced</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="page-section" style="margin-top:-60px;">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 wow fadeInUp">
            <h1>Welcome to Ava Recruitment <br> Services</h1>
            <p class="text-grey mb-4">Our carers and nurses are fully trained, experienced and have passed enhanced criminal records checks.</p>
            <hr>
            <p class="text-grey mb-4">Equally important are the qualities that we look for when choosing our carers and nurses such as friendliness, warmth, conscientiousness, dedication and compassion. Qualities that ensure our service users receive the service they deserve and make everyday life a little better for the person receiving recruitment.</p>

            <a href="why.php" class="btn bg-pink text-white wow bounceInLeft">Why Join Us</a>
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="assets/img/Iconic-1.png" alt="">
            </div>
          </div>

        </div>
      </div>
    </div> <!-- .bg-light -->
  </div> <!-- .bg-light -->

  
  <?php require 'linkpage/footer.php'; ?>

<script src="assets/js/jquery-3.5.1.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="assets/vendor/wow/wow.min.js"></script>

<script src="assets/js/theme.js"></script>
  
</body>
</html>
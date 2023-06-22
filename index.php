<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="Ava Recruitment Services" name="keywords">
  <meta content="" name="description">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Ava Recruitment Services</title>

  <!-- Favicon -->
  <link href="assets/img/icon.png" rel="icon">

  <link rel="stylesheet" href="assets/css/maicons.css">

  <link rel="stylesheet" href="assets/css/bootstrap.css">

  <link rel="stylesheet" href="assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="assets/css/theme.css">

  <!--====== Default & Index css ======-->
  <link rel="stylesheet" href="assets-2/css/default.css">
  <link rel="stylesheet" type="text/css" href="assets-2/css/index.css">
    
  <!--====== Responsive css ======-->
  <link rel="stylesheet" href="assets-2/css/responsive.css">

  <!-- Swiper CSS 
  <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">-->

  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />


  <style type="text/css"> 
    /* Testimonial */

    /* Google Fonts - Poppins */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');
    .testimo{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }
    .testimo{
      position: relative;
      max-width: 900px;
      width: 100%;
      padding: 50px 0;
      row-gap: 30px;
      overflow: hidden;
    }
    .testimo .image{
      height: 170px;
      width: 170px;
      object-fit: cover;
      border-radius: 50%;
    }
    .container-2{
      height: 60vh;
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: #fff;
    }
    .testimo .slide{
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      row-gap: 30px;
    }
    .slide p{
      text-align: center;
      padding: 0 100px;
      font-size: 14px;
      font-weight: 400;
      color: #333;
    }
    .slide .quote-icon{
      font-size: 30px;
      color: #ec2a80;
    }
    .slide .details{
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    .details .name{
      font-size: 14px;
      font-weight: 600;
      color: #333;
    }
    .details .job{
      font-size: 12px;
      font-weight: 400;
      color: #333;
    }
    /* Swiper button css */
    .nav-btn{
      height: 40px;
      width: 40px;
      border-radius: 50%;
      transform: translateY(30px);
      background-color: rgba(0, 0, 0, 0.1);
    }
    .nav-btn:hover{
      background-color: rgba(0, 0, 0, 0.2);
    }
    .nav-btn::after,
    .nav-btn::before{
      font-size: 20px;
      color: #fff;
    }
    .swiper-pagination-bullet{
      background-color: rgba(0, 0, 0, 0.8);
    }
    .swiper-pagination-bullet-active{
      background-color: #4070f4;
    }
    @media screen and (max-width:768px){
      .slide p{
        padding: 0 20px;
      }
      .nav-btn{
        display: none;
      }
    }
    .bxs-star{
      color: #ffbb00;
      font-size: 25px;
    }

  </style>

  <!-- Boxicons CSS -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body style="background:#f4f9f5;">

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
            <li class="nav-item active">
              <a class="nav-link" href="./">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="jobs.php">JOBS</a>
            </li>
            <li class="nav-item">
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

  <!--====== SLIDER PART START ======-->
    
    <section id="slider-part" class="slider-active">
        <div class="single-slider bg_cover pt-150" style="background-image: url(assets/img/bg-main.jpg); background-position: center center;" data-overlay="3">
            <div class="container">
                <div class="row">
                  <div class="col-xl-7 col-lg-9">
                        <div class="slider-cont">
                            <h1 class="wow zoomIn">Welcome to Ava Recruitment Services</h1>
                            <p class="wow fadeIn" style="font-weight: normal;">Ava recruitment is a flexible work force solutions specializing in supplying the industrial, cleaners, warehouse,distribution & logistics, construction, retail food & health care sector throughout the United Kingdom.</p>
                            <ul style="padding-left: 0;">
                                <li><a class="btn bg-pink text-white wow bounceInLeft" href="apply.php">Apply Now</a></li>
                                <li><a class="btn bg-pink text-white wow bounceInLeft" data-wow-delay="200ms" href="why.php">Why Join Us</a></li>
                            </ul>

                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->
    </section>
    
    <!--====== SLIDER PART ENDS ======-->


  <div class="bg-light">
    <
    <div class="page-section py-3 mt-md-n5 custom-index">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-blue text-white">
                <span class="mai-shield-checkmark-outline"></span>
              </div>
              <p>Vetted</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-blue text-white">
                <span class="mai-document-text-outline"></span>
              </div>
              <p>Fully Compliant</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-blue text-white">
                <span class="mai-briefcase-outline"></span>
              </div>
              <p>Well Experienced</p>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .page-section -->

    <div class="page-section py-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1>Ava Recruitment Services</h1>
            <p class="text-grey mb-4">To ensure our services are second to none we provide Recruitmentrs and nurses who are suitably qualified or are willing to train to the high standards we have set.<br><br>Our key objective is to provide comprehensive quality range of Recruitment and support services. For this to happen we rely on our well trained and experienced nurses and Recruitmentrs to provide a quality service, when representing us at our Service Users.<br><br>Our Recruitmentrs and nurses are fully trained, experienced and have passed enhanced criminal records checks.</p>
            <a href="about.php" class="btn bg-pink text-white">Learn More</a>
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="assets/img/bg-doctor-3.png" alt="">
            </div>
          </div>

        </div>
      </div>
    </div> <!-- .bg-light -->
  </div> <!-- .bg-light -->


  <section class="container-2">
    <div class="testimo mySwiper">
      <div class="testi-content swiper-wrapper">

        <div class="slide swiper-slide"> <!-- Slide Starts -->
          <div class="stars wow bounceIn" data-wow-delay="200ms">
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
          </div>
          <p class="wow fadeIn">AvaRecruitment has been good to me when it comes to providing work to me.</p>

          <i class="bx bxs-quote-alt-left quote-icon wow fadeIn" data-wow-delay="100ms"></i>

          <div class="details wow fadeIn" data-wow-delay="300ms">
            <span class="name">Emeka</span>
            <!--<span class="job">Web Developer</span>-->
          </div>
        </div> <!-- Slide Ends -->

        <div class="slide swiper-slide"> <!-- Slide Starts -->
          <div class="stars">
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
          </div>
          <p>An agency that provides transport to and from work.</p>

          <i class='bx bxs-quote-alt-left quote-icon'></i>

          <div class="details">
            <span class="name">Donald</span>
          </div>
        </div> <!-- Slide Ends -->

      </div>

      <div class="swiper-button-next nav-btn"></div>
      <div class="swiper-button-prev nav-btn"></div>
      <div class="swiper-pagination"></div>

    </div>
    </div>
  </section>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 30,
      centeredSlides: true,
      speed: 1000,
      autoplay: {
        delay: 8000,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>


  <?php require 'linkpage/footer.php'; ?>

<script src="assets/js/script.js"></script>  

<script src="assets/js/jquery-3.5.1.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="assets/vendor/wow/wow.min.js"></script>

<script src="assets/js/theme.js"></script>

<!-- Swiper JS 
<script src="assets/js/swiper-bundle.min.js"></script>-->
  
</body>
</html>
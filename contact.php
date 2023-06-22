<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="Ava Recruitment Services" name="keywords">
  <meta content="" name="description">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Contact Us | Ava Recruitment Services</title>

  <!-- Favicon -->
  <link href="assets/img/icon.png" rel="icon">

  <link rel="stylesheet" href="assets/css/maicons.css">

  <link rel="stylesheet" href="assets/css/bootstrap.css">

  <link rel="stylesheet" href="assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="assets/css/theme.css">

  <!--====== Validator js ======-->
  <script src="assets/js/validator.min.js"></script>


  <!--====== Default css ======-->
  <link rel="stylesheet" href="assets-2/css/default.css">
    

  <style type="text/css">
    .contact-from{
        background-color: #fff;
        padding: 50px;
        border-radius: 5px;
    }
    .contact-from .main-form{}
    .contact-from .main-form .singel-form{
        margin-top: 20px;
    }
    .contact-from .main-form .singel-form input,
    .contact-from .main-form .singel-form textarea{
        width: 100%;
        height: 50px;
        padding: 0 20px;
        border-radius: 5px;
        color: #8a8a8a;
        font-size: 15px;
    }

    .contact-from .main-form .singel-form textarea{
        padding-top: 10px;
        height: 100px;
        resize: none;
    }

    .form-group{
        margin: 0;
    }
    .list-unstyled li {
      font-size: 13px;
      margin-left: 2px;
      margin-top: 5px;
      color: #f00;
    }
    p.form-message.success,
    p.form-message.error {
      font-size: 16px;
      color: #353535;
      background: #ddd;
      padding: 10px 15px;
      margin-left: 15px;
      margin-top: 15px;
    }

    .contact-address{
        background-color: #fff;
        padding: 20px 50px 50px;
        border-radius: 5px;
    }

    .contact-address ul li{
        padding-top: 30px;
    }
    .contact-address ul li .singel-address{
        display: -moz-flex;
        display: -ms-flex;
        display: -o-flex;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }

    .contact-address ul li .singel-address .icon i{
        width: 50px;
        line-height: 50px;
        border-radius: 50%;
        border: 1px solid #07294d;
        color: #07294d;
        font-size: 24px;
        text-align: center;
    }
    .contact-address ul li .singel-address .cont{
        padding-left: 20px;
    }
    .contact-address ul li .singel-address .cont p{}

    .map{}
    .map #contact-map{
        width: 100%;
        height: 225px;
    }

    .map.map-big #contact-map{
        width: 100%;
        height: 415px;
    }
    .contact-address .contact-heading{
      padding-top: 35px;
    }

    .contact-address .contact-heading h5{
      padding-bottom: 15px;
    }

  </style>
</head>
<body style="background:#ecf0f3;">

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
            <li class="nav-item">
              <a class="nav-link" href="about">ABOUT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="services">SERVICES</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="contact">CONTACT</a>
            </li>
            <li class="nav-item">
              <a class="btn bg-pink text-white ml-lg-3" href="apply">APPLY</a>
            </li>
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  <div class="page-banner bg-image" style="background-image: url(assets/img/bg-main.jpg);" data-overlay="3">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <h1 class="font-weight-normal text-white">Contact Us</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <!--====== CONTACT PART START ======-->
    
    <section class="py-5 wow fadeIn">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">
                    <div class="contact-from">
                        <div class="section-title wow fadeInUp">
                            <h5>Contact Us</h5>
                            <div class="bg-pink" style="width:40px; height: 3px; margin-bottom: 15px;"></div>
                            <h2 style="margin-bottom:50px;">Get in touch</h2>
                        </div> <!-- section title -->
                        <div class="main-form">
                            <form id="contact-form" action="contact" method="post" data-toggle="validator">
                                <div class="row">
                                    <div class="col-md-12">

                                      <?php

                                            if (isset($_POST['send-message'])) {
                                                                                     
                                                $to = 'info@avacarers.com';
                                                $subject = 'Getting In Touch With Ava Recruitment';
                                                $from = $_POST['email'];
                                                $fromName = $_POST['fullName'];
                                                $tel = $_POST['phone'];
                                                $message1 = $_POST['message'];
                                                
                                                // Email body content 
                                                $message = ' 
                                                    <html><body>
                                                    <p style="font-size:17px;"><b>Name:</b> '.$fromName.'</p> 
                                                    <p style="font-size:17px;"><b>Email:</b> '.$from.'</p> 
                                                    <p style="font-size:17px;"><b>Telephone:</b> '.$tel.'</p> 
                                                    <p style="font-size:17px;"><b>Message:</b> '.$message1.'</p>
                                                    </body></html> 
                                                '; 

                                                // To send HTML mail, the Content-type header must be set
                                                $headers  = 'MIME-Version: 1.0' . "\r\n";
                                                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                                               
                                                // Create email headers
                                                $headers .= 'From: '.$from."\r\n".
                                                  'Reply-To: '.$from."\r\n" .
                                                  'X-Mailer: PHP/' . phpversion();
                                                 

                                                // Sending email
                                                if(@mail($to, $subject, $message, $headers)){
                                                    echo '<p style="text-align:center; background:#f0f8fd; margin-top:10px; padding:10px; border-radius:4px;" class="text-blue bg-bluish">Dear '.$fromName.', Thanks for getting in touch with us, we will respond shortly.</p>';
                                                } else{
                                                    echo '<p style="text-align:center; margin-top:10px; padding:10px; border-radius:4px; color:#c4160a; background:#ffe5e3;" class="">Unable to send message now. Please try again.</p>';
                                                }

                                            }
                                        ?>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <input class="form-control" name="fullName" type="text" placeholder="Your name" data-error="Name is required." required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <input class="form-control" name="email" type="email" placeholder="Email" data-error="Valid email is required." required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <input class="form-control" name="subject" type="text" placeholder="Subject" data-error="Subject is required." required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form --> 
                                    </div>
                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <input class="form-control" name="phone" type="text" placeholder="Phone" data-error="Phone is required." required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-12">
                                        <div class="singel-form form-group">
                                            <textarea class="form-control" name="message" placeholder="Message" data-error="Please,leave us a message." required="required"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form -->
                                    </div>

                                    <div class="col-md-12">
                                        <div class="singel-form">
                                            <button type="submit" name="send-message" class="btn bg-blue text-white wow bounceIn" data-wow-delay="200ms">SEND</button>
                                        </div> <!-- singel form -->
                                    </div> 
                                </div> <!-- row -->
                            </form>
                        </div> <!-- main form -->
                    </div> <!--  contact from -->
                </div>
                <div class="col-lg-4">
                    <div class="contact-address">
                        <div class="contact-heading">
                            <p class="wow fadeInUp" data-wow-delay="200ms"><span style="font-weight:bold;">Opening Hours:</span> Monday to Sunday: 9 AM – 7 PM</p>
                            <hr>
                            <p class="wow fadeInUp" data-wow-delay="400ms" style="margin-top:;">If you have any further questions, please don’t hesitate to contact us.</p>
                        </div>
                        <ul style="padding-left:0;">
                            <li style="overflow: hidden;">
                                <div class="singel-address">
                                    <div class="icon" style="">
                                        <i class="mai-home" style="padding: 12px;"></i>
                                    </div>
                                    <div class="cont">
                                        <p>11 Salcey Street, Northampton NN4 8NY, UK</p>
                                    </div>
                                </div> <!-- singel address -->
                            </li>
                            <li style="overflow: hidden;">
                                <div class="singel-address">
                                    <div class="icon">
                                        <i class="mai-call" style="padding: 12px;"></i>
                                    </div>
                                    <div class="cont">
                                        <p>+44 7450 399039</p>
                                    </div>
                                </div> <!-- singel address -->
                            </li>
                            <li style="overflow: hidden;">
                                <div class="singel-address">
                                    <div class="icon">
                                        <i class="mai-mail-outline" style="padding: 12px;"></i>
                                    </div>
                                    <div class="cont">
                                        <p>info@avacarers.com</p>
                                    </div>
                                </div> <!-- singel address -->
                            </li>
                        </ul>
                    </div> <!-- contact address -->
                
                </div>
            </div> <!-- row -->
        </div> <!-- container -->

    </section>

  <div class="g-maps-container wow fadeInUp">
    <div id="g-maps">
      <iframe class="position-relative rounded w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2444.0391015929977!2d-0.9012812!3d52.2245074!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48770f18a33c79cd%3A0xe4f9f60f1f1bf581!2s11%20Salcey%20St%2C%20Delapre%2C%20Northampton%20NN4%208NY%2C%20UK!5e0!3m2!1sen!2stz!4v1676040581381!5m2!1sen!2stz" frameborder="0" style="min-height: 400px; border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
  </div>

  
  <?php require 'linkpage/footer.php'; ?>

<script src="assets/js/jquery-3.5.1.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="assets/vendor/wow/wow.min.js"></script>

<script src="assets/js/google-maps.js"></script>

<script src="assets/js/theme.js"></script>

<!--====== Map js ======-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ"></script>
<script src="js/map-script.js"></script>
  
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="Ava Recruitment Services" name="keywords">
  <meta content="" name="description">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Apply | Ava Recruitment Services</title>

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
    
  </style>
</head>
<body>

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
            <li class="nav-item">
              <a class="nav-link" href="contact">CONTACT</a>
            </li>
            <li class="nav-item active">
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
        <h1 class="font-weight-normal text-white">Application</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->


  <!-- Job Apply Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row gy-5 gx-4">
                    <div class="col-lg-4">
                      <div class="sidebar">
                        <div class="sidebar-block">
                          <div class="img-place custom-img-1">
                            <img src="assets/img/Iconic-6.jpg" alt="" class="wow fadeIn" data-wow-delay="200ms">
                          </div>
                          <h3 class="sidebar-title-2 text-pink wow fadeInUp" data-wow-delay="600ms" style="margin-top:30px;">Join Us</h3>
                          <p class="wow fadeIn" data-wow-delay="600ms">We have a dedicated team of nurses and carers who make a real difference to the individuals we support. We are looking for committed, positive and caring individuals who share our passion in delivering high-quality person-centred recruitment.</p>

                          <h4 class="wow fadeIn" data-wow-delay="800ms" style="margin-top: 20px;">We offer a great range of benefits including:</h4>
                          <ul class="wow fadeIn" data-wow-delay="1000ms">
                            <li>Competitive pay</li>
                            <li>Flexible working hours</li>
                            <li>Pay training</li>
                            <li>Training and Development</li>
                          </ul>
          
                        </div>
                      </div>
                    </div> 
                    <div class="col-lg-8">
                        <div class="sidebar">
                            <div class="sidebar-block">
                                <h4 class="text-center mb-4 bg-pink text-white wow fadeInUp" data-wow-delay="800ms" style="padding: 8px;">Do you want to make a difference? Why not join our team.</h4>
                                <p style="text-align: center; font-weight: bold;" class="wow fadeIn" data-wow-delay="900ms">Please fill in the form below to send us your details.</p>
                                <hr>
                                <form action="apply" id="form" method="post" enctype='multipart/form-data'>

                                    <div class="row g-3 input-control" style="margin-bottom:15px;">
                                       <!-- <script type="text/javascript">
                                            window.onload = function()
                                            {
                                                document.getElementById('feedback').scrollIntoView();
                                            };
                                        </script>-->
                                        <div class="col-12 col-sm-12" id="feedback">
                                            <?php

                                                if (isset($_POST['apply'])) {
                                                                                         
                                                    $to = 'info@avacarers.com';
                                                    $subject = 'Driving Job Application';
                                                    $from = $_POST['email'];
                                                    $fromName = $_POST['fullName'];
                                                    $dob = $_POST['dob'];
                                                    $address = $_POST['address'];
                                                    $identity = $_POST['identity'];
                                                    $tel = $_POST['tel'];
                                                    $email = $_POST['email'];
                                                    $pos = $_POST['pos'];
                                                    
                                                    $path = 'upload/' .$_FILES["identity"]["name"];
                                                    move_uploaded_file($_FILES["identity"]["tmp_name"], $path);                                                
                                                      
                                                    // Attachment files
                                                    $identity = 'upload/'. $_FILES["identity"]["name"]; 
                                                     
                                                    
                                                    // Email body content 
                                                    $htmlContent = ' 
                                                        <p style="font-size:17px;"><b>Name:</b> '.$fromName.'</p> 
                                                        <p style="font-size:17px;"><b>Date of Birth:</b> '.$dob.'</p> 
                                                        <p style="font-size:17px;"><b>Telephone:</b> '.$tel.'</p> 
                                                        <p style="font-size:17px;"><b>Address:</b> '.$address.'</p> 
                                                        <p style="font-size:17px;"><b>Position:</b> '.$pos.'</p> 
                                                    '; 
                                                     
                                                    // Header for sender info 
                                                    $headers = "From: $fromName"." <".$from.">"; 
                                                     
                                                    // Boundary  
                                                    $semi_rand = md5(time());  
                                                    $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";  
                                                     
                                                    // Headers for attachment  
                                                    $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 
                                                     
                                                    // Multipart boundary  
                                                    $message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" . 
                                                    "Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n";  
                                                     
                                                    // Preparing attachment 
                                                    if(!empty($identity) > 0){ 
                                                        if(is_file($identity)){ 
                                                            $message .= "--{$mime_boundary}\n"; 
                                                            $fp =    @fopen($identity,"rb"); 
                                                            $data =  @fread($fp,filesize($identity)); 
                                                     
                                                            @fclose($fp); 
                                                            $data = chunk_split(base64_encode($data)); 
                                                            $message .= "Content-Type: application/octet-stream; name=\"".basename($identity)."\"\n" .  
                                                            "Content-Description: ".basename($identity)."\n" . 
                                                            "Content-Disposition: attachment;\n" . " filename=\"".basename($identity)."\"; size=".filesize($identity).";\n" .  
                                                            "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n"; 
                                                            
                                                        } 
                                                    } 

                                                    $message .= "--{$mime_boundary}--"; 
                                                    //$returnpath = "-f" . $from; 
                                                     

                                                    // Sending email
                                                    if(@mail($to, $subject, $message, $headers)){
                                                        echo '<p style="text-align:center; margin-top:10px; padding:10px; border-radius:4px;" class="text-color bg-bluish">Congratulations '.$fromName.', your application was sent seccessfully.</p>';
                                                    } else{
                                                        echo '<p style="text-align:center; margin-top:10px; padding:10px; border-radius:4px; color:#c4160a; background:#ffe5e3;" class="">Unable to send application now. Please try again.</p>';
                                                    }

                                                }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="row g-3 input-control wow fadeInUp" data-wow-delay="600ms" style="margin-bottom:15px;">
                                        <label for="fullName" class="col-sm-2">Full Name</label>
                                        <div class="col-12 col-sm-10">
                                          <input type="fullName" class="form-control" id="fullName" name="fullName" placeholder="" required>
                                          <div class="error"></div>
                                        </div>
                                    </div>
                                    <div class="row g-3 input-control wow fadeInUp" data-wow-delay="700ms" style="margin-bottom:15px;">
                                        <label for="dob" class="col-sm-2">Date of Birth</label>
                                        <div class="col-12 col-sm-10">
                                          <input type="text" class="form-control" id="dob" name="dob" placeholder="" onfocus="(this.type='date')" onblur="if(!this.value) this.type='text'" required>
                                          <div class="error"></div>
                                        </div>
                                    </div>
                                    <div class="row g-3 input-control wow fadeInUp" data-wow-delay="800ms" style="margin-bottom:15px;">
                                        <label for="address" class="col-sm-2">Address</label>
                                        <div class="col-12 col-sm-10">
                                          <textarea class="form-control" rows="2" id="address" placeholder="" name="address" required></textarea>
                                          <div class="error"></div>
                                        </div>
                                    </div>
                                    <div class="row g-3 input-control wow fadeInUp" data-wow-delay="900ms" style="margin-bottom:15px;">
                                        <label for="identity" class="col-sm-2">National Identity</label>
                                        <div class="col-12 col-sm-10">
                                          <input type="file" class="form-control bg-white" id="identity" name="identity" accept=".pdf" placeholder="" required>
                                          <label class="desc">Attach PDF copy</label>
                                          <div class="error"></div>
                                        </div>
                                    </div>
                                    <div class="row g-3 input-control wow fadeInUp" data-wow-delay="1000ms" style="margin-bottom:15px;">
                                        <label for="tel" class="col-sm-2">Telephone Number</label>
                                        <div class="col-12 col-sm-10">
                                          <input type="tel" class="form-control" id="tel" name="tel" placeholder="" required>
                                          <div class="error"></div>
                                        </div>
                                    </div>
                                    <div class="row g-3 input-control wow fadeInUp" data-wow-delay="1100ms" style="margin-bottom:15px;">
                                        <label for="email" class="col-sm-2">Email Address</label>
                                        <div class="col-12 col-sm-10">
                                          <input type="email" class="form-control" id="email" name="email" placeholder="" required>
                                          <div class="error"></div>
                                        </div>
                                    </div>
                                    <div class="row g-3 input-control wow fadeInUp" data-wow-delay="1200ms" style="margin-bottom:15px;">
                                        <label for="tel" class="col-sm-2">Position Applied For</label>
                                        <div class="col-12 col-sm-10">
                                          <input type="pos" class="form-control" id="pos" name="pos" placeholder="" required>
                                          <div class="error"></div>
                                        </div>
                                    </div>
                                    

                                    <div class="row g-3">
                                        <div class="col-12">
                                            <button class="btn bg-blue wow bounceIn" data-wow-delay="1300ms" type="submit" name="apply" style="color:#fff; float: right;">SEND</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
        
                    <!--<div class="col-lg-4">
                        <div class="bg-bluish rounded p-5 wow slideInUp" data-wow-delay="0.1s" style="text-align: center;">
                            <p class="m-0" style="font-size: 20px;">Would you like to find out more?</p>
                            <a class="btn bg px-5 mt-3" href="job-desc" style="color:#fff;">Read The Job Description</a>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
        <!-- Job Apply End -->

  
  
  <?php require 'linkpage/footer.php'; ?>

  <script src="assets/js/jquery-3.5.1.min.js"></script>

  <script src="assets/js/bootstrap.bundle.min.js"></script>
  
  <script src="assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
  
  <script src="assets/vendor/wow/wow.min.js"></script>
  
  <script src="assets/js/theme.js"></script>
  
</body>
</html>
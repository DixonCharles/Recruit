  <footer class="page-footer">
    <div class="container">
      <div class="row px-md-3">

        <div class="col-sm-6 col-lg-12 py-3">
          <form id="contact-form" method="post" data-toggle="validator">
                                <div class="row">
                                    
                                    <div class="col-lg-12">
                                      <?php

                                            if (isset($_POST['send'])) {
                                                                                     
                                                $to = 'info@avacarers.com';
                                                $subject = 'Call Back Service Request!';
                                                $from = $_POST['email'];
                                                $fromName = $_POST['fullName'];
                                                $tel = $_POST['tel'];
                                                $address = $_POST['address'];
                                                
                                                // Email body content 
                                                $messageF = ' 
                                                    <p style="font-size:17px;"><b>Name:</b> '.$fromName.'</p> 
                                                    <p style="font-size:17px;"><b>Telephone:</b> '.$tel.'</p> 
                                                    <p style="font-size:17px;"><b>Address:</b> '.$address.'</p> 
                                                '; 
                                                 
                                                // To send HTML mail, the Content-type header must be set
                                                $headers  = 'MIME-Version: 1.0' . "\r\n";
                                                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                                               
                                                // Create email headers
                                                $headers .= 'From: '.$from."\r\n".
                                                  'Reply-To: '.$from."\r\n" .
                                                  'X-Mailer: PHP/' . phpversion();
                                                 

                                                // Sending email
                                                if(@mail($to, $subject, $messageF, $headers)){
                                                    echo '<p style="text-align:center; background:#f0f8fd; margin-top:10px; padding:10px; border-radius:4px;" class="text-blue bg-bluish">Dear '.$fromName.', your request was sent seccessfully, we will respond shortly.</p>';
                                                } else{
                                                    echo '<p style="text-align:center; margin-top:10px; padding:10px; border-radius:4px; color:#c4160a; background:#ffe5e3;" class="">Unable to send request now. Please try again.</p>';
                                                }

                                            }
                                        ?>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="singel-form form-group">
                                            <h5 style="margin-bottom:5px;">Request A Call Back Service</h5>
                                            <div class="bg-pink" style="width:40px; height: 3px; margin-bottom: 15px;"></div>
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="singel-form form-group" style="margin-bottom:10px;">
                                            <input class="form-control" name="fullName" type="text" placeholder="Full Name" data-error="Name is required." required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="singel-form form-group" style="margin-bottom:10px;">
                                            <input class="form-control" name="address" type="text" placeholder="Address" data-error="Address is required." required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="singel-form form-group" style="margin-bottom:10px;">
                                            <input class="form-control" name="tel" type="tel" placeholder="Telephone" data-error="Valid email is required." required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form -->
                                    </div>

                                    <div class="col-md-12">
                                        <div class="singel-form" style="margin-bottom:10px; text-align: right;">
                                            <button type="submit" name="send" class="btn bg-blue text-white" style="margin-bottom:20px;">Send</button>
                                        </div> <!-- singel form -->
                                    </div> 
                                </div> <!-- row -->
                            </form>
        </div>
        <div class="col-sm-12">
          <span class="mai-document-text"></span> <a href="download.php?file=Ava-Recruitment-Terms-Conditions" class="text-white" style="text-decoration:none;">Terms & Conditions</a>
        </div>
      </div>
      <hr>
      <div class="row px-md-3">
        <div class="col-sm-6 col-lg-4 py-3">
          <div class="logo">
              <a href="./"><img src="assets/img/logo-w-1.png" alt="Logo" width="90%" height="auto" style="text-align:left;"></a>
          </div>
          <p class="footer-link mt-2">The centre is focused in provision of good and accurate services with high quality</p>
          <div class="footer-sosmed mt-3">
            <a href="https://www.facebook.com/profile.php?id=100079200107731" target="_blank"><span class="mai-logo-facebook-f"></span></a>
            <a href="https://instagram.com/avacare_recruitment" target="_blank"><span class="mai-logo-instagram"></span></a>
            <a href="https://www.linkedin.com/in/avacare-recruitment-agency-ltd-7620b1255/" target="_blank"><span class="mai-logo-linkedin"></span></a>
          </div>
                        
        </div>
        <div class="col-sm-6 col-lg-1 py-3">
        </div>
        <div class="col-sm-6 col-lg-2 py-3">
          <h5 class="text-white">Quick Links</h5>
          <ul class="footer-menu">
            <li><a href="about.php">About Us</a></li>
            <li><a href="services.php">Our Services</a></li>
            <li><a href="apply.php">Apply</a></li>
            <li><a href="contact.php">Contact us</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-5 py-3">
          <h5 class="text-white">Contact</h5>

          
          <div class="cont" style="padding-top: 10px;">
              <div style="width:20px; color: rgba(255, 255, 255, 0.6); position: absolute; padding-top: 2px;">
                  <span class="mai-location" style="margin-right: 10px; font-size:18px;"></span>
              </div>
              <div style="width:auto; margin-left:40px; color: rgba(255, 255, 255, 0.6);">
                  <span class="mt-2">11 Salcey Street, Northampton NN4 8NY, UK</span>
              </div>
          </div>
          <div class="cont" style="padding-top: 10px;">
              <div style="width:20px; color: rgba(255, 255, 255, 0.6); position: absolute; padding-top: 2px;">
                  <span class="mai-call" style="margin-right: 10px; font-size:18px;"></span>
              </div>
              <div style="width:auto; margin-left:40px;">
                  <a href="tel:+447450399039" class="mt-2" style="color: rgba(255, 255, 255, 0.6); text-decoration:none;"> +44 7450 399039</a>
              </div>
          </div>
          <div class="cont" style="padding-top: 10px;">
              <div style="width:20px; color: rgba(255, 255, 255, 0.6); position: absolute; padding-top: 2px;">
                  <span class="mai-mail" style="margin-right: 10px; font-size:18px;"></span>
              </div>
              <div style="width:auto; margin-left:40px;">
                  <a href="mailto:info@avacarers.com" class="mt-2" style="color: rgba(255, 255, 255, 0.6); text-decoration:none;"> info@avacarers.com</a>
              </div>
          </div>
        </div>

      </div>

      <hr>

      <p class="text-white" id="copyright">Copyright &copy; <script>document.write(new Date().getFullYear())</script> Ava Recruitment Services, All Rights Reserved. <span style="color: silver;">Designed By <a href="https://eldigital.co.tz" target="blank" style="text-decoration: none; color: silver;">elDigital</a></span></p>
    </div>
  </footer>
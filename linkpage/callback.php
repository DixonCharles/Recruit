<section class="wow fadeInUp" style="background: #fff;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-from">
                        <div class="pt-45" style="padding-top: 20px">
                            <form id="contact-form" action="contact" method="post" data-toggle="validator">
                                <div class="row">
                                    
                                    <div class="col-md-12">
                                      <?php

                                            if (isset($_POST['send'])) {
                                                                                     
                                                $to = 'info@avacarers.com';
                                                $subject = 'Getting In Touch With Ava Care';
                                                $from = $_POST['email'];
                                                $fromName = $_POST['fullName'];
                                                $tel = $_POST['phone'];
                                                $message = $_POST['message'];
                                                
                                                // Email body content 
                                                $htmlContent = ' 
                                                    <p style="font-size:17px;"><b>Name:</b> '.$fromName.'</p> 
                                                    <p style="font-size:17px;"><b>Email:</b> '.$email.'</p> 
                                                    <p style="font-size:17px;"><b>Telephone:</b> '.$tel.'</p> 
                                                    <p style="font-size:17px;"><b>Message:</b> '.$message.'</p> 
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


                                                $message .= "--{$mime_boundary}--"; 
                                                $returnpath = "-f" . $from; 
                                                 

                                                // Sending email
                                                if(@mail($to, $subject, $message, $headers, $returnpath)){
                                                    echo '<p style="text-align:center; background:#f0f8fd; margin-top:10px; padding:10px; border-radius:4px;" class="text-blue bg-bluish">Dear '.$fromName.', your request was sent seccessfully, we will respond shortly.</p>';
                                                } else{
                                                    echo '<p style="text-align:center; margin-top:10px; padding:10px; border-radius:4px; color:#c4160a; background:#ffe5e3;" class="">Unable to send request now. Please try again.</p>';
                                                }

                                            }
                                        ?>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="singel-form form-group">
                                            <h5 style="margin-bottom:5px;">Request A Call Back Service</h5>
                                            <div class="bg-pink" style="width:40px; height: 3px; margin-bottom: 15px;"></div>
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-3">
                                        <div class="singel-form form-group" style="margin-bottom:10px;">
                                            <input class="form-control" name="fullName" type="text" placeholder="Full Name" data-error="Name is required." required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-3">
                                        <div class="singel-form form-group" style="margin-bottom:10px;">
                                            <input class="form-control" name="address" type="text" placeholder="Address" data-error="Address is required." required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-3">
                                        <div class="singel-form form-group" style="margin-bottom:10px;">
                                            <input class="form-control" name="tel" type="tel" placeholder="Telephone" data-error="Valid email is required." required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form -->
                                    </div>

                                    <div class="col-md-1">
                                        <div class="singel-form" style="margin-bottom:10px;">
                                            <button type="submit" name="send" class="btn bg-blue text-white" style="margin-bottom:20px">Send</button>
                                        </div> <!-- singel form -->
                                    </div> 
                                </div> <!-- row -->
                            </form>
                        </div> <!-- main form -->
                    </div> <!--  contact from -->
                </div>

            </div> <!-- row -->
        </div> <!-- container -->

    </section>
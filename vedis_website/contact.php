<?php

session_start();

require_once 'security/security.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vedis</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<!-- javascript for countdown -->
<script type="text/javascript" src="js/countdown.js"></script>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<link href="https://fonts.googleapis.com/css?family=Oranienbaum&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Alegreya+Sans&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300&display=swap" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="css/printstyle1.css"/>
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
<!------<style>
    #anitext {
  
  position :relative;
  -webkit-animation: mymove 2s ; /* Safari 4.0 - 8.0 */
  animation: mymove 2s ;
}

/* Safari 4.0 - 8.0 */
@-webkit-keyframes mymove {
  from {top: 100px;}
  to {top: 0px;}
}

/* Standard syntax */
@keyframes mymove {
  from {top: 100px;}
  to {top: 0px;}
}
</style>----->
</head>

<body>
    <div class="container-fluid" id="container">
           
            <div class="img-fluid" id="bg-img"><img src="img/bgimgvedis2.jpg" class="img-fluid"/></div>
  
            
           <div class="row" id="row1">
                 <div class="col-sm-12" id="contact"><div class="anitext" data-aos="fade-up">Contact Us</div></div>
                 <div class="col-sm-12" style=" margin-top:30px;">
                    <div class="row">
                        <div class="col-sm-2 col-md-3 col-lg-4"></div>
                        <div class="col-sm-8 col-md-6 col-lg-4" id="contact1">Vedis Capital Technologies is based near Sector-V in Kolkata. We have state-of-the-art facilities to provide a secure and pleasant environment for our employees. </div>
                        <div class="col-sm-2 col-md-3 col-lg-4"></div>
                    </div>
                    
                 </div>
                 <div class="col-sm-12" style="margin-top:20px;">
                    <div class="row">
                        <div class="col-sm-2 col-md-3 col-lg-4"></div>
                        <div class="col-sm-8 col-md-6 col-lg-4" id="contact2"> We follow the best practices in the industry to secure our client’s privacy and data onsite.</div>
                        <div class="col-sm-2 col-md-3 col-lg-4"></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2 col-md-3 col-lg-4"></div>
                        <div class="col-sm-8 col-md-6 col-lg-4" id="address">
                            <p style="color:#000;font-size:30px;font-family: var(--main-font-name);">Address</p>
                            <p style="font-weight: bold;color:#000; font-family: 'Alegreya Sans', sans-serif;">DLF Galleria, Action Area 1, New Town
                               Rajarhat, Kolkata, WB 700163, India</p>
                            </div>
                        <div class="col-sm-2 col-md-3 col-lg-4"></div>
                    </div>
                 </div>
                 <div class="col-sm-12" style="margin-top:20px;">
                    <div class="row">
                        <div class="col-sm-3 col-md-2 col-lg-2"></div>
                        <div class="col-sm-6 col-md-8 col-lg-8" id="address1"><div class="anitext" data-aos="fade-right">You can contact us here !</div></div>
                        <div class="col-sm-3 col-md-2 col-lg-2"></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-lg-3"></div>
                        <div class="col-sm-6 col-md-6 col-lg-6" id="contactform">
                            
                            <form action="mail.php" name="contactForm" onsubmit ="return validateForm()" method="post" id="formgroup">
    <div class="form-group" >
      
      <input type="text" class="form-control" id="uname" placeholder="Name" name="uname" required>
      
      
    </div>
    <div class="form-group">
      
      <input type="text" class="form-control" id="pwd" placeholder="Company" name="company" required>
      
      
    </div>
    <div class="form-group">
      
      <input type="text" class="form-control" id="pwd" placeholder="Email" name="email" required>
      
      
    </div>
    <div class="form-group">
      
      <textarea class="form-control" rows="8" id="comment" name="message" placeholder="Message"></textarea>
    </div>
    <div class="col text-center">
    <button type="submit" class="btn btn-primary" name="submit" style="width:200px;">Submit</button>
    </div>
  </form>
                            
                            </div>
                        <div class="col-sm-3 col-md-3 col-lg-3" ></div>
                    </div>
                 </div>
                 
                 <div class="col-sm-12 col-md-12 col-lg-12">
                     <h2 style="font-size:18px; color:#006400; text-align: center;margin-top:20px;margin-bottom:20px;font-size:19px;">
                         <?php 
         
         if(isset($_GET['msg2'])) 
         {
             echo "Thank you &nbsp;"."<b>".$_GET['msg2']."</b>"."&nbsp;for contacting us"; 
             echo '<br/>You will be redirect to home page in &nbsp;'.'<span id="timer" style="text-align: center;">
    <script type="text/javascript">countDown();</script>
    </span><br/>';
             echo 'Or <a href="index.php">Click here</a>';
         }
         
             
            ?>
                     </h2>
                     <p id="jsmsg" style="color:#FF0000; text-align: center; margin-top:20px;margin-bottom:20px;font-size:19px;"></p>
                 </div>
                 
             </div>
                <div class="row">
                   <div class="col-sm-12 col-md-12 col-lg-12">
                      <div class="col text-center">
    <a href="index.php" style="text-decoration: none;border:none;"><button type="submit" class="btn btn-primary" id="homebtn">Back to Home</button></a>
    </div>
                   </div>   
                 </div>
            </div>
            <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
        duration:1000,
    });
    </script>
</body>
</html>

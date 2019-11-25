<?php

session_start();


$name = '';
$company = '';
$email = '';
$msg = '';
$msg2 = '';

if(isset($_POST['submit']))
{
       $name = $_POST['uname'];
       $company = $_POST['company'];
       $email = $_POST['email'];
       $msg = $_POST['message'];
       
       
       if($name || $company || $email || $msg !=0) 
       {
           $_SESSION['name'] = $name;
           $_SESSION['company'] = $company;
           $_SESSION['email'] = $email;
           $_SESSION['message'] = $msg;
           
           $to = "anand@vedis.co.in";
         $subject = "Contact from Vedis Website";
         
         $message = "<b>Message from-</b>".$_SESSION['name']."<br>"."<b>Mail ID-</b>".$_SESSION['email']."<br>"."<b>Company-</b>".$_SESSION['company'];
         $message .= "<h3>"."Message-"."</h3>".$_SESSION['message'];
         
         $header = "From:tushar@vedis.co.in \r\n";
         $header .= "Cc:programistushar@gmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            
            
            $msg2 = $_SESSION['name'];
            
            
            
            header('Location:contact.php?msg2='.$msg2); 
            
            

         }else {
            echo "Message could not be sent...";
         }
       }
       else
           {
              header('Location:contact.php');
           }
       
}
else {
    echo"something went wrong";
}


?>

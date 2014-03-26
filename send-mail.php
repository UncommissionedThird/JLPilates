<?php
  // Time for Server Validation
  include "lib/remove-injections.php";
  $site = "localhost";

  if(!isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['phone']) || !isset($_POST['message']) || !isset($_POST['submit'])){
    echo "Not Sent!";
    header($_SERVER['HTTP_REFERER']."?sent=0");
  }else{
  $to = "info";
  $subject = "Email from: " . $_POST['name'] . "! - B Yoga Contact Form";
  $message = "Name: ". $_POST['name'] . "\nEmail: ". $_POST['email'] . "\nPhone" . $_POST['phone'] . "\nMessage: \n" . $_POST['message'] . "\n\nEmail Form Created by <a href='http://wavamedia.com/'>WavaMedia</a>";
  //$headers = "From: " . $_POST['email'] . "\r\nBcc: Susan<susanvoss@mac.com>,Lisa<lisa.scurlock@gmail.com>\r\n";
  $headers = "From: " . $_POST['email'];

  //time to send the mail
  mail("jemiloii@jemiloii.com",$subject,$message,$headers);
  mail("jemiloii@gmail.com",$subject,$message,$headers);

  //redirect back to contact page with sent message
  echo "Sent!";
  header('http://localhost/contact.php?sent=1');
  }
?>
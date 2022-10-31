<?php

  function sendMail(){
    $to_address = 'bonganealfred@gmail.com';
    $from_name = $_POST['name'];
    $from_email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
      
   echo "OK";
  }

  sendMail(); 
?>

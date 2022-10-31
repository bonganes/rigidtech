<?php
   class PHP_Email_Form{
     public $to;
     public $from_name;
	  public $from_email;
	  public $subject;
	  private $message;
  }
   
   $mail = new PHP_Email_Form();

   $mail->to = 'rigidtech2@gmail.com';
   $mail->from_name = $_POST['name'];
   $mail->from_email = $_POST['email'];
   $mail->subject = $_POST['subject'];
      
   echo "Successfully came in here";
?>

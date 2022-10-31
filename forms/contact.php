<?php
  class PHP_Email_Form{
     public $to;
     public $from_name;
	   public $from_email;
	   public $subject;
	   private $message;
  }
  
  $receiving_email_address = 'rigidtech2@gmail.com';

  $contact = new PHP_Email_Form();

  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];
?>

<?php
  class PHP_Email_Form{
     public $to;
     public $from_name;
	 public $from_email;
	 public $subject;
	 private $message;
  }
  
  function add_message($msg,$wordwrap){
     $this->message = wordwrap($msg,$wordwrap);
  }
  
  function send(){
	 mail($to,$subject,$message); 
  }  
  
?>

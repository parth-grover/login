<?php

class oops{
	
	
		function checkemail($email){
			
				if(empty($email)){
					$this->emailerror="Enter email";
				}elseif(!FILTER_VAR($email,FILTER_VALIDATE_EMAIL)){
					$email="";
					$this->emailerror="Email wrong";
				}
				else{
					return true;
				}
				
		}
		
		
		function checkphone($phone){
			
				if(empty($phone)){
				 $this->phoneerror="Enter phone";
				 }elseif(!preg_match("/^[6-9]{1}[0-9]{9}$/",$phone)){
				 $phone="";
				 $this->phoneerror="Phone is not valid";
				}else{
					return true;
				}
		}
		
		
		function checkname($name){
			
					if(empty($name)){
					$this->nameerror="Enter Name";
				}
		}
		
		
		function checkpassword($password){
			
				if(empty($password)){
				 $this->passworderror="Enter password";
			 }
		}
	
	
	
}

trait textspecial{
   private $messages;
   private $messages1;
   protected $emailerror;
   protected $phoneerror;
   protected $nameerror;
   protected $passworderror;
   private $emailcheck;
   private $phonecheck;
	
	
}



?>
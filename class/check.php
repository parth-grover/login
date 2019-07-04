<?php
include("oops.php");
 
class check extends oops

{
	protected $emailerror;
	protected $passworderror;
	private $message;


    public function get_emailerror(){
	   return $this->emailerror;
	   
   }

    public function get_passworderror(){
	   return $this->passworderror;
   }   
	
	function main(){
		
			if($_SERVER["REQUEST_METHOD"]=="POST"){
				
				$email=$_POST["email"];
				$password=$_POST["password"];
				
				
				$validate=$this->checkemail($email);
				if($validate == false){
					$email="";
				}
				
				$this->checkpassword($password);
				
				if(!empty($email) and !empty($password)){
					$this->message->dologin($email,$password);
				}
				
				
			}
	}
	
	function __construct(login $message){
		$this->message=$message;
	}
	
}

?>
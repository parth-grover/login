<?php
class login{
	private $message;
	private $error;
	
	
	public function get_loginerror(){
		return $this->error;
	}
	
	function dologin($email,$password){
		$conn=$this->message->data();
		$stmt=$conn->prepare("select * from login where email= '".$email."' and password='".$password."'");
		$stmt->execute();
		$num=$stmt->rowcount();
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$data=$stmt->Fetch();
		if($num>=1){
			$_SESSION["id"]=$data["id"];
			header("Location:https://localhost/imt/admin");
		}
		else{
			$this->error="Please enter valid details";
		}
	}
	
	
	function __construct(database $message){
		$this->message=$message;
	}

}


?>
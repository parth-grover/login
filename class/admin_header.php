<?php
class admin_header{
	private $login;
	

	function admin_header(){
		if($this->login == 'check'){
			if(!isset($_SESSION['id'])):
				header("Location:https://localhost/imt/login");
			endif;
		}else if($this->login == "is_login"){
			if(isset($_SESSION['id'])){
				header("Location:https://localhost/imt/admin");
			}
		}
		require('a_header.php');
	}
	
	
	function __construct($login=''){
		$this->login=$login;
	}

}


?>
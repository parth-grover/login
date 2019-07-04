<?php

class database{
	
	function data(){
	$servername="localhost";
	$username="root";
	$database="imt";
	$password="";
	
			try{
				$conn=new PDO("mysql:host=$servername;dbname=$database",$username,$password);
				$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

			}
			
			catch(PDOException $e){
				echo $e->getmessage();
			
			}
			return $conn;
			
	}
	
}





?>
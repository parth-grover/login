<?php

class message implements msginterface{
	public $data;
	private $msg;
	
	 function __set($msg,$db){
		
		$this->msg=$msg;
		$this->data=$db;
		
	}
	
	function get(){
		echo "Message is ".$this->msg;
	}
	
	
	
}





?>
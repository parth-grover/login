<?php
require("include.php");
if(isset($_SESSION['id'])){
	unset($_SESSION['id']);
}
header("Location:https://localhost/imt/login");
?>
<?php
require("include.php");
$include_class = ['admin_header'=>'check'];
$class_auto = class_auto($include_class);
$class_auto[0]->admin_header();
//session_destroy();
var_dump($_SESSION);die;?>
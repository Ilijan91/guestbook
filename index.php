<?php
require "autoload.php";
$method = "";

if(isset($_GET['mvcmethod'])){
    $method=$_GET['mvcmethod'];
}

$ctrl = "";

if(isset($_GET['mvccontroller'])){
    $ctrl=$_GET['mvccontroller'];
}
$ctrl .= "Controller";
if(!file_exists("controller/{$ctrl}.php")){
    die("Controller does not exist!");
}else {
    require_once "controller/{$ctrl}.php";
}

$controler=new $ctrl;
if(!method_exists($controler,$method)){
    $method= "index"; 
}
$controler->$method();

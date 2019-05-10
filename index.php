<?php 


define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)) DS);
require "Config/Autoload.php";

Config\Autoload::run();
new Config\Request();



 /*$est = new Models\Estudiante();

 $est->set("id", 1);

 $datos = $est->view();

 print $datos['nombre'];*/






 ?>
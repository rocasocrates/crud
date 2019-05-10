<?php 


require "Config/Autoload.php";

Config\Autoload::run();

 $est = new Models\Estudiante();

 $est->set("id", 1);

 $datos = $est->view();

 print $datos['nombre'];






 ?>
<?php 
   
   $method = $_SERVER['REQUEST_METHOD'];
   //print_r($_POST['opcn']);
   switch ($method) {
   	case 'POST':
      include_once('../models/Registrarse.php');
   	  switch ($_POST['opcn']) {

   	  	case 'registrar':
   	  		    $resultado['data'] = Registro::Registrarse($_POST);
  		   		echo json_encode($resultado);
   	  		break;
   	  	
   	   }

   		break; 
   }
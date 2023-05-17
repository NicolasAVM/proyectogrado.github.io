<?php  
$metodo = $_SERVER['REQUEST_METHOD'];
switch ($metodo) {
	case 'POST':
		include_once('../models/iniciarSesion.php');
		switch ($_POST['opcn']) {
			case 'ctrLogin':
				$login = Login::mdlIngresar($_POST);
				echo json_encode($login);
				
				break;
		}
		break;
}
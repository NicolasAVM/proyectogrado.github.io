<?php  
    $method = $_SERVER['REQUEST_METHOD'];
    switch ($method) {
        case 'POST':
            include_once('../models/deudas.php');
            switch ($_POST['opcn']){
                case 'listarproyectos':
                    $respuesta = Prestamos::listarproyectos();
                    echo json_encode($respuesta);
                    break;
                case 'crear':
                    $respuesta = Prestamos::crear($_POST);
                    echo json_encode($respuesta);
                    break;
                case 'verXid':
                    $respuesta = Prestamos::verXid($_POST);
                    echo json_encode($respuesta);
                    break;
                case 'update':
                    $respuesta = Prestamos::update($_POST);
                    echo json_encode($respuesta);
                    break;
                
            }
    }
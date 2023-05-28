<?php  
    $method = $_SERVER['REQUEST_METHOD'];
    switch ($method) {
        case 'POST':
            include_once('../models/menu.php');
            switch ($_POST['opcn']){
                case 'listarproyectos':
                    $respuesta = Proyectos::listarproyectos();
                    echo json_encode($respuesta);
                    break;
                case 'crear':
                    $respuesta = Proyectos::crear($_POST);
                    echo json_encode($respuesta);
                    break;
                case 'verXid':
                    $respuesta = Proyectos::verXid($_POST);
                    echo json_encode($respuesta);
                    break;
                case 'update':
                    $respuesta = Proyectos::update($_POST);
                    echo json_encode($respuesta);
                    break;
                case 'eliminarXid':
                    $respuesta = Proyectos::eliminarXid($_POST);
                    echo json_encode($respuesta);
                    break;
                
            }
    }
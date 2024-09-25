<?php
require_once 'controllers/ComentarioController.php';
require_once 'controllers/Controllers.php';

$controllers = new Controllers();

//print_r($_GET);

if (count($_GET)>0) {

    switch ($_GET['call']) {
        case 'home':
            $controllers->home();
            break;

        case 'aprendices':
            $controllers->aprendices();
            break;

        case 'cursos':
            $controllers->cursos();
        
        default:
            # code...
            break;
    }
}else{
    $controllers->home();
}


// codigo anterior

//$controller = new ComentarioController();

// Manejo de solicitudes POST para formularios
//if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//    $controller->manejarFormulario();
//} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
//    if (isset($_GET['action'])) {
//        switch ($_GET['action']) {
//            case 'eliminar':
//                if (isset($_GET['id'])) {
//                    $controller->eliminarComentario($_GET['id']);
//                }
//                break;
//            case 'editar':
//                if (isset($_GET['id'])) {
//                    $controller->mostrarFormulario($_GET['id']);
//                }
//                break;
//            default:
//                $controller->listarComentarios();
//                break;
//        }
//    } else {
//        $controller->listarComentarios();
//    }
//}

?>
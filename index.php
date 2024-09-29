<?php
require_once 'controllers/ComentarioController.php';
require_once 'controllers/Controllers.php';
require_once 'controllers/CursoController.php';
require_once 'controllers/AsignarCursos.php';

//helpers

function sideBar()
{
    $view_sidebar = "Views/sidebar.php";
    require_once($view_sidebar);
}

function header_template(){
    $view_header = "Views/header.php";
    require_once($view_header);  
}

$controllers = new Controllers();
$cursosController = new CursoController();
$AsignarCursos = new AsignarCursos();

//print_r($_GET);

if (count($_GET) > 0) {

    switch ($_GET['call']) {
        case 'home':
            $controllers->home();
            break;
        case 'aprendices':
            $controllers->aprendices();
            break;
        case 'cursos':
            $cursosController->listarCursos();

        case 'AsignarCursos':
            $AsignarCursos->mostrar();
            break;

        default:
            # code...
            break;
    }
} else {
    $controllers->home();
}


// codigo anterior

//$controller = new ComentarioController();

// Manejo de solicitudes POST para formularios
//if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//    $controller->manejarFormulario();
//} /* elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
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
//                $controller->listarCursos();
//                break;
//        }
//    } */ else {
//    $controller->listarCursos();
//}
/* } */

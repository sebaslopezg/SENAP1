<?php
require_once 'controllers/AprendicesController.php';
require_once 'controllers/CursoController.php';
require_once 'controllers/AsignarController.php';
require_once 'controllers/HomeController.php';

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

$home = new Home();
$aprendicesController = new AprendicesController();
$cursosController = new CursoController();
$asignarController = new AsignarController();

//print_r($_GET);

if (count($_GET) > 0) {

    switch ($_GET['call']) {
        case 'home':
            $home->home();
            break;
        case 'aprendices':
            $aprendicesController->aprendices();
            break;
        case 'cursos':
            $cursosController->listarCursos();
            break;
        case 'cursosAcciones':
            $cursosController->manejarFormulario();
            break;
            // 3 Case para las asignaciones :: mostrar,add 1 curso muchos aprendices, add 1 aprendiz muchos cursos
        case 'asignaciones':
            $asignarController->mostrar();
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

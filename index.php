<?php
require_once 'controllers/AprendicesController.php';
require_once 'controllers/CursoController.php';
require_once 'controllers/AsignarController.php';
require_once 'controllers/HomeController.php';


//helpers

function sideBar()
{
    require_once('Views/sidebar.php');
}

function header_template(){
    require_once('Views/header.php');  
}

function footer_template(){
    require_once 'Views/footer.php';
}

$home = new Home();
$aprendicesController = new AprendicesController();
$cursosController = new CursoController();
$asignarController = new AsignarController();

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

            break;
    }
} else {
    header('Location: index.php?call=home');
}
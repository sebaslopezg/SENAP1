<?php
require_once 'controllers/AprendicesController.php';
require_once 'controllers/CursoController.php';
require_once 'controllers/AsignarController.php';
require_once 'controllers/HomeController.php';
require_once 'controllers/Admins.php';

//helpers

function sideBar()
{
    $view_sidebar = "Views/sidebar.php";
    require_once($view_sidebar);
}

function header_template()
{
    $view_header = "Views/header.php";
    require_once($view_header);
}

$home = new Home();
$aprendicesController = new AprendicesController();
$cursosController = new CursoController();
$asignarController = new AsignarController();
$admins = new Admins();

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
        case 'admins':
            $admins->getAdmins();
            break;
        default:
            # code...
            break;
    }
} else {
    header('Location: index.php?call=home');
}

/* function msg($posicion, $icono, $showConfirmButton){
"<script>Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Your work has been saved',
                showConfirmButton: false,
                timer: 1500
                });
            </script>";
} */

<?php
require_once 'controllers/AprendicesController.php';
require_once 'controllers/CursoController.php';
require_once 'controllers/AsignarController.php';
require_once 'controllers/HomeController.php';
require_once 'controllers/Admins.php';
require_once 'controllers/Login.php';
require_once 'controllers/Reportes.php';

//helpers

function sideBar()
{
    require_once('Views/sidebar.php');
}

function header_template()
{
    $view_header = "Views/header.php";
    require_once($view_header);
}
setLoginStatus(true);
function setLoginStatus(bool $status){

    if ($status) {
        $GLOBALS['login'] = true;
    }else{
        $GLOBALS['login'] = false;
    }
}

$home = new Home();
$aprendicesController = new AprendicesController();
$cursosController = new CursoController();
$asignarController = new AsignarController();
$admins = new Admins();
$loginController = new Login();
$reportes = new Reportes();

//print_r($_GET);

if ($login) {
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
            case 'reportes':
                $reportes->getReportes();
                break;
            default:
                //header('Location: index.php?call=error');
                require_once 'views/Error.php';
                break;
        }
    } else {
        header('Location: index.php?call=home');
    } 
}else{
    $loginController->getLogin();
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

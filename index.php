<?php
require_once 'Helpers/helpers.php';
require_once 'controllers/AprendicesController.php';
require_once 'controllers/CursoController.php';
require_once 'controllers/AsignarController.php';
require_once 'controllers/HomeController.php';
require_once 'controllers/Admins.php';
require_once 'controllers/Login.php';
require_once 'controllers/Reportes.php';

//USUARIO: admin
//CONTRASEÑA: admin

$home = new Home();
$aprendicesController = new AprendicesController();
$cursosController = new CursoController();
$asignarController = new AsignarController();
$admins = new Admins();
$loginController = new Login();
$reportes = new Reportes();
$sesionActiva;
session_start();

if (isset($_SESSION['login'])) {
    $sesionActiva = true;
} else {
    $sesionActiva = false;
}

if ($sesionActiva) {
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
            case 'logout':
                session_destroy();
                header('Location: index.php');
                break;
            default:
                //header('Location: index.php?call=error');
                require_once 'views/Error.php';
                break;
        }
    } else {
        header('Location: index.php?call=home');
    }
} else {
    $loginController->getLogin();
}

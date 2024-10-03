<?php
require_once 'Helpers/helpers.php';
require_once 'controllers/Aprendices.php';
require_once 'controllers/Curso.php';
require_once 'controllers/Asignar.php';
require_once 'controllers/Home.php';
require_once 'controllers/Admins.php';
require_once 'controllers/Login.php';
require_once 'controllers/Reportes.php';
require_once 'models/UsuarioSesion.php';

//USUARIO: admin
//CONTRASEÑA: admin

$home = new Home();
$aprendicesController = new Aprendices();
$cursosController = new Curso();
$asignarController = new Asignar();
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


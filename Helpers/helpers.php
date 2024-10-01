<?php

function sideBar()
{
    require_once('Views/sidebar.php');
}

function header_template()
{
    $view_header = "Views/header.php";
    require_once($view_header);
}

function footer_template(){
    require_once 'views/footer.php';
}

function dep($data){
    $format = print_r('<pre>');
    $format .= print_r($data);
    $format .= print_r('<pre>');
    return $format;
}

function msg($titulo, $icono, $showConfirmButton){
"<script>Swal.fire({
                title: '$titulo',
                icon: '$icono',
                text: '$showConfirmButton',
                });
            </script>";
} 
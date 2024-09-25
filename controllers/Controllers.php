<?php

require_once 'models/aprendicesModel.php';

class Controllers{


    function home(){
        require 'views/home.php';
    }

    //sebas
    function aprendices(){
        $this->aprendicesModel = new AprendicesModel();
        $arrAprendices = $this->aprendicesModel->mostrarAprendices();
        require 'views/aprendices.php';
        //print_r($arrAprendices);
    }

    function cursos(){
        require 'views/cursos.php';
    }

}

?>
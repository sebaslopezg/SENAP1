<?php

require_once 'models/ReportesModel.php';
//require_once 'Libraries/fpdf/fpdf.php';
require_once 'Libraries/ReportPdf/ReportPdf.php';

class Reportes
{

    private $reportesModel;
    //private $pdf;
    private $nPdf;

    public function __construct()
    {
        $this->reportesModel = new ReportesModel();
        //$this->pdf = new FPDF();
        $this->nPdf = new ReportPdf();
    }

    public function getReportes()
    {

        if (isset($_GET['reporte'])) {

            if ($_GET['reporte'] === 'cursosexistentes') {
                $this->generarReporteCursos();
            }

            if ($_GET['reporte'] === 'aprendicesasignados') {
                $this->generarReporteAprendices();
            }

            if ($_GET['reporte'] === 'noasignados') {
                $this->generarReporteAprendicesNoAsignados();
            }

        }


        $cantidadCursos = $this->reportesModel->CantidadCursos();
        $cantidadAprendices = $this->reportesModel->CantidadAprendices();
        $cantidadAprendicesSinCursos = $this->reportesModel->CantidadAprendicesSinCursos();
        $cursos = $this->reportesModel->getCursos();
        require 'views/reportesView.php';
    }

    private function generarReporteCursos(){
        $cursos = $this->reportesModel->getCursosReporte();
        $this->nPdf->tabla("Reporte Cursos",['Nombre','Descipcion','Fecha Creacion'], [40, 90, 60],$cursos, 'D');
    }

    private function generarReporteAprendices(){
        $aprendicesData = $this->reportesModel->getAprendicesReporte();
        $this->nPdf->tabla("Reporte Aprendices",['Nombre','Apellido','Documento','Correo'], [50, 50, 40,50],$aprendicesData, 'D');
    }

    private function generarReporteAprendicesNoAsignados(){
        $aprendicesData = $this->reportesModel->getAprendicesSinCursosReporte();
        $this->nPdf->tabla("Reporte Aprendices No asignados",['Nombre','Apellido','Correo'], [60, 60, 60],$aprendicesData, 'D');
    }
    
}


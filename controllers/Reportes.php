<?php

require_once 'models/ReportesModel.php';
require_once 'Libraries/fpdf/fpdf.php';

class Reportes{

    private $reportesModel;
    private $pdf;

    public function __construct()
    {
        $this->reportesModel = new ReportesModel();
        $this->pdf = new FPDF();
    }
    
    public function getReportes()
    {

        if (isset($_GET['reporte'])) {
            if ($_GET['reporte'] === 'cursosexistentes') {
                $this->generarReporteCursos();
            }
        }


        $cantidadCursos = $this->reportesModel->CantidadCursos();
        $cantidadAprendices = $this->reportesModel->CantidadAprendices();
        $cantidadAprendicesSinCursos = $this->reportesModel->CantidadAprendicesSinCursos();
        $cursos = $this->reportesModel->getCursos();
        require 'views/reportesView.php';
    }

    private function generarReporteCursos(){
        $cursos = $this->reportesModel->getCursos();
        $this->pdf->AddPage();
        $this->pdf->SetFont('Arial','B',16);
        $this->pdf->SetTitle('Reporte Cursos');
        $header = array('Nombre', 'Descripcion', 'Fecha Creacion');
        $this->TablaCursos($header, $cursos);
        $this->pdf->Output($dest = 'D', 'Test.pdf', true);
    }

    function TablaCursos($header, $data)
{
    // Colores, ancho de línea y fuente en negrita
    $this->pdf->SetFillColor(255,0,0);
    $this->pdf->SetTextColor(255);
    $this->pdf->SetDrawColor(128,0,0);
    $this->pdf->SetLineWidth(.3);
    $this->pdf->SetFont('','B');
    // Cabecera
    $w = array(40, 80, 60);
    for($i=0;$i<count($header);$i++)
        $this->pdf->Cell($w[$i],7,$header[$i],1,0,'C',true);
        $this->pdf->Ln();
        // Restauración de colores y fuentes
        $this->pdf->SetFillColor(224,235,255);
        $this->pdf->SetTextColor(0);
        $this->pdf->SetFont('');
        // Datos
    $fill = false;
    foreach($data as $row)
    {
        $this->pdf->Cell($w[0],6,$row['nombre_Cur'],'LR',0,'L',$fill);
        $this->pdf->Cell($w[1],6,$row['descripcion_Cur'],'LR',0,'L',$fill);
        $this->pdf->Cell($w[2],6,$row['fecha_Creacion_Cur'],'LR',0,'R',$fill);
        $this->pdf->Ln();
        $fill = !$fill;
    }
    // Línea de cierre
    $this->pdf->Cell(array_sum($w),0,'','T');
}
}


<?php
define('FPDF_FONTPATH','font/');
require "fpdf.php";

class myPDF extends FPDF{
    function header(){
        try{
        $this->Image('logo.png',10,6);
       $this->SetFont('Arial', 'B', 14);
        $this->Cell(275,5,'Employ',0,0,'C');
        $this->Ln();
        $this->SetFont('Times','',12);
        $this->Cell(276,10,'Food Food',0,0,'C');
        $this->Ln(20);
        }
        catch(Exception $e) {
            echo 'Message: ' .$e->getMessage();
        }
    }
    function footer(){
        $this->SetY(-15);
        $this->SetFont('Arial');
        $this->Cell(0,10, 'Page', $this->PageNo(), '/{nb}',0,0,'C');
    }
}

$pdf = new myPDF();
$pdf->AliasNbPages();
$pdf->AddPage('L','A4',0);
// L = landscape | A4 = Paper Size | 0 = Page No
$pdf->Output();
?>
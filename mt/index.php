<?php

require "fpdf.php";

class myPDF extends FPDF{
    function header(){
        try{
        $this->Image('logoo.png',10,6);
        // image  ('img name', left, top)
        $this->SetFont('Arial', 'B', 14);
        // ('font name', 'bold', font size)
        $this->Cell(0,0,'Modern Trust',0,0,'R');
        // cell (x axis, y axis , title, 'LCR' left center right)
        $this->Ln();
        // line brake
        $this->SetFont('Times','',12);
        $this->Cell(0,10,'Test Doc',0,0,'R');
        $this->Ln(20);
        }
        catch(Exception $e) {
            echo 'Message: ' .$e->getMessage();
        }
    }
    function doc(){

    }
    function footer(){
        $this->SetY(-15);
        $this->SetFont('Arial','',8);
        $this->Cell(0,10, 'Page' .$this->PageNo(). '/{nb}',0,0,'C');
    }
}

$pdf = new myPDF();
$pdf->AliasNbPages();
//$pdf->WriteHTML('<h1>hello<h1>');
$pdf->AddPage('P','A4',0);
// L = landscape | A4 = Paper Size | 0 = Page No
$pdf->Output();
?>
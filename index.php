<?php
/**
 * Created by Vaibhav
 * User: smvaibhav
 * Date: 31/07/19
 * Time: 16:05
 */
require "fpdf.php";

class myPDF extends FPDF{
    function header(){
        try{
        $this->SetFont('Arial', '', 8);
        $this ->Cell(0,0, 'DocuSign Envelope ID: B842E8E3-EDC6-4B01-8B0A-170D57FCC7FD', 0,0, 'L' );
        $this->SetFont('Arial', '', 8);
        $this->SetTextColor(255,0,0);
        $this->Cell(0,0,'DEMONSTRATION DOCUMENT ONLY',0,0,'R');
        $this->Ln(4);
        // line brake
        $this->Cell(0,0,'PROVIDED BY DOCUSIGN ONLINE SIGNING SERVICE',0,0,'R');
        $this->Ln(4);
        $this->Cell(0,0,'999 3rd Ave, Suite 1700 | Seattle | Washington 98104 | (206) 219-0200',0,0,'R');
        $this->Ln(4);
        $this->Cell(0,0,'www.docusign.com',0,0,'R');
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
       // $this->Cell(0,10, 'Page' .$this->PageNo(). '/{nb}',0,0,'C');
        $this->Cell(0,10,'The Trust Document has been revoked by <Trustor Name> on <Date> <Time> .',0,0,'C');
    }
}

$pdf = new myPDF();
$pdf->AliasNbPages();
//$pdf->WriteHTML('<h1>hello<h1>');
$pdf->AddPage('P','A4',0);
// L = landscape | A4 = Paper Size | 0 = Page No
$pdf->Output();
?>
<!DOCTYPE html>
<html lang="en-ES">
<head>
			<meta charset="UTF-8">
			
			<link rel="stylesheet" type="text/css" href="style.css">
</head>

<br/>


<?php
ini_set('error_reporting',0);
include ('fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Helvetica', 'B', 10);//tipo de letra
$pdf->Write (7,"EL RESULTADO DE LA AUDITORIA ES:");
$pdf->Ln(10);//salto de linea
$pdf->SetTextColor('0','0','255');//datos en color azul
$pdf->Write (7,"NOMBRE      ");
$pdf->Cell(80,7,$_POST['nombre'],1,'C');
$pdf->Ln(10); //salto de linea
$pdf->Write (7,"DIRECCION  ");
$pdf->Cell(80,7,$_POST['direccion'],1,'C');
$pdf->Ln(10);//ahora salta 15 lineas
$pdf->Write (7,"CORREO      ");
$pdf->Cell(80,7,$_POST['correo'],1,'C');
$pdf->Ln(10); //salto de linea
//$pdf->Write (7,"TELEFONO   ");
//$pdf->Cell(40,7,$_POST['tel'],1,0,'c');
//$pdf->Line(0,160,300,160);//impresión de linea
$pdf->Write (7,"LINEA DE SERVICIO  ");
$pdf->Cell(80,7,$_POST['servicio'],1,'C');
$pdf->Ln(10);//ahora salta 15 lineas
$pdf->Write (7,"CALIFICACION CRITICA  ");
$pdf->Cell(80,7,$_POST['critica'],1,'C');
$pdf->Ln(10);//ahora salta 15 lineas
$pdf->Write (7,"CALIFICACION NO CRITICA  ");
$pdf->Cell(80,7,$_POST['nocritica'],1,'C');
$pdf->Ln(10);//ahora salta 15 lineas
$pdf->Write (7,"NOTA DEFINITIVA  ");
$pdf->Cell(80,7,$_POST['definitiva'],1,'C');
$pdf->Ln(10);//ahora salta 15 lineas
$pdf->Write (7,"OBSERVACIONES  ");
$pdf->Cell(80,7,$_POST['observaciones'],1,'C');
$pdf->Ln(10);//ahora salta 15 lineas







$pdf->Output("prueba.pdf",'F');
echo "<script language='javascript'>window.open('prueba.pdf','_self');</script>";//paral archivo pdf generado

exit;

?>

</body>
</HTML>
<?php
require('includes/fpdf.php');

// Crear una instancia de FPDF
$pdf = new FPDF();
$pdf->AddPage();

// Configurar fuente
$pdf->SetFont('Arial', 'B', 16);

// Título
$pdf->Cell(0, 10, 'Informe de Vehículos', 0, 1, 'C');

// Espacio entre el título y la tabla
$pdf->Ln(10);

// Configuración de fuente para la tabla
$pdf->SetFont('Arial', 'B', 12);

// Encabezado de la tabla
$pdf->Cell(10, 10, '#', 1);
$pdf->Cell(40, 10, 'Placa', 1);
$pdf->Cell(40, 10, 'Marca', 1);
$pdf->Cell(50, 10, 'Conductor', 1);
$pdf->Cell(50, 10, 'Propietario', 1);
$pdf->Ln();

// Cargar datos
foreach ($reports as $key => $report) {
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(10, 10, $key + 1, 1);
    $pdf->Cell(40, 10, $report['plate'], 1);
    $pdf->Cell(40, 10, $report['brand'], 1);
    $pdf->Cell(50, 10, $report['driver_name'], 1);
    $pdf->Cell(50, 10, $report['owner_name'], 1);
    $pdf->Ln();
}

// Salida del archivo PDF
$pdf->Output('D', 'informe_vehiculos.pdf');
?>

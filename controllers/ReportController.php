<?php
require_once 'models/Report.php';

require('includes/fpdf.php');

$reports = Report::getVehicleReport();
$action = $_GET['subaction'] ?? 'none';

if ($action == 'export') {
    $pdf = new FPDF();

    // Función para agregar el encabezado
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'B', 16);
    
    // Encabezado empresarial
    $pdf->Image('assets/img/logo.png', 10, 6, 30); // Logo de la empresa (ajusta la ruta y tamaño según tu necesidad)
    $pdf->Cell(80); // Desplazamiento a la derecha
    $pdf->Cell(30, 10, 'ACME S.A', 0, 1, 'C');
    $pdf->Cell(80);
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(30, 10, 'cr 55 # 63 - 89', 0, 1, 'C');
    $pdf->Cell(80);
    $pdf->Cell(30, 10, 'Telefono: (555) 555-5555', 0, 1, 'C');
    $pdf->Cell(80);
    $pdf->Cell(30, 10, 'Correo: info@empresa.com', 0, 1, 'C');
    $pdf->Ln(20);
    
    // Título del informe
    $pdf->SetFont('Arial', 'B', 16);
    $pdf->Cell(0, 10, 'Informe de Vehiculos', 0, 1, 'C');
    $pdf->Ln(10);
    
    // Cabecera de la tabla
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(10, 10, '#', 1);
    $pdf->Cell(40, 10, 'Placa', 1);
    $pdf->Cell(40, 10, 'Marca', 1);
    $pdf->Cell(50, 10, 'Conductor', 1);
    $pdf->Cell(50, 10, 'Propietario', 1);
    $pdf->Ln();
    
    // Datos del informe
    foreach ($reports as $key => $report) {
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(10, 10, $key + 1, 1);
        $pdf->Cell(40, 10, $report['plate'], 1);
        $pdf->Cell(40, 10, $report['brand'], 1);
        $pdf->Cell(50, 10, $report['driver_name'], 1);
        $pdf->Cell(50, 10, $report['owner_name'], 1);
        $pdf->Ln();
    }
    
    // Función para agregar el pie de página
    $pdf->SetY(-40); // Posición a 1.5 cm del final
    $pdf->SetFont('Arial', 'I', 8);
    $pdf->Cell(0, 10, 'Pagina ' . $pdf->PageNo() . '/{nb}', 0, 0, 'C');
    
    // Salida del PDF
    $pdf->AliasNbPages(); // Para el conteo de páginas
    $pdf->Output('D', 'informe_vehiculos.pdf');
    
}else {
    include 'views/reports/vehicle_report.php';
}

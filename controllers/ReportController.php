<?php
require_once 'models/Report.php';

$reports = Report::getVehicleReport();
include 'views/reports/vehicle_report.php';
?>
<?php
require '../../controllers/productos.controller.php';
require '../../models/productos.model.php';
require '../../controllers/reportes.controller.php';

$reporte = new ControllerReportes();
$reporte->ctrDescargarRepotes($_GET["reporte"]);
<?php

require_once "../../application/controllers/ventas.controlador.php";
require_once "../../application/models/ventas.modelo.php";
require_once "../../application/controllers/clientes.controlador.php";
require_once "../../application/models/clientes.modelo.php";
require_once "../../application/controllers/usuarios.controlador.php";
require_once "../../application/models/usuarios.modelo.php";

$reporte = new ControladorVentas();
$reporte -> ctrDescargarReporte();
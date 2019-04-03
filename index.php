<?php

require_once "application/controllers/plantilla.controlador.php";
require_once "application/controllers/usuarios.controlador.php";
require_once "application/controllers/categorias.controlador.php";
require_once "application/controllers/productos.controlador.php";
require_once "application/controllers/clientes.controlador.php";
require_once "application/controllers/ventas.controlador.php";

require_once "application/models/usuarios.modelo.php";
require_once "application/models/categorias.modelo.php";
require_once "application/models/productos.modelo.php";
require_once "application/models/clientes.modelo.php";
require_once "application/models/ventas.modelo.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();
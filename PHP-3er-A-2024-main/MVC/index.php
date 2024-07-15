<?php
require_once  "controller/Enlaces.php";
require_once  "controller/Template.php";
require_once  "controller/Clientes.php";
require_once  "controller/Ingreso.php";

require_once  "model/Model_enlaces.php";
require_once  "model/Model_cliente.php";
require_once  "model/Model_ingreso.php";

$enlaces = new Template();
$enlaces->template_get();



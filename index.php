<?php

require_once __DIR__ . "/Juego2/controller/personajeController.php";
require_once __DIR__ . "/Juego2/view/vistaPersonaje.php";

$vista = new vistaPersonaje();
$controller = new personajeController($vista);

$controller->estadisticas();
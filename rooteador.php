<?php

include_once("controladores/Controlador_".$controlador.".php");

$objControlador = "Controlador".ucfirst($controlador);
$controlador = new $objControlador();
$controlador ->$accion();
?>
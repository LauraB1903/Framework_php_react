<?php
include ("../Models/ProductoDAO.php");

$clase = new ProductoDAO();
$msg = $clase->agregarClases($_REQUEST['id'], $_REQUEST['nombre'], $_REQUEST['descripcion']);


?>
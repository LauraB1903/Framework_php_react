<?php
include ("../Models/ProductoDAO.php");
$clase=new ProductoDAO();

if ($_REQUEST['id']=='') {
    $clase->agregarClases($_REQUEST['id'], $_REQUEST['nombre'], $_REQUEST['descripcion']);
    echo ("Se agrego con exito");
}else{
    $clase->actualizarClase($_REQUEST['id'],$_REQUEST['nombre'],$_REQUEST['descripcion']);
    echo ("Se actualizo con exito");

}

?>
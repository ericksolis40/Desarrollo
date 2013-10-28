<?
include("metodos.php");


$met = new metodos();
$metodos = $met->eliminar_maquina($_REQUEST["id"]);
?>
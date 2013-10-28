<?
include("metodos.php");


$met = new metodos();
$metodos = $met->eliminar_color($_REQUEST["id"]);
?>
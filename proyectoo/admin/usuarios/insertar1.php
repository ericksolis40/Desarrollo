<?
include ("metodos.php");


$met = new metodos();
$metodos = $met->checa_usuario($_REQUEST["id"],$_REQUEST["user"],$_REQUEST["pass"],$_REQUEST["tipo"],$_REQUEST["nombre"]);
?>
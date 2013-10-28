<?
include("metodos_login.php");


$met = new metodos();
$metodos = $met->accesar($_REQUEST["user"],$_REQUEST["pass"]);

?>
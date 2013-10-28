<?
include("metodos.php");


if(trim($_REQUEST["maquina"]) == false)
		{
			header("Location: maquinas.php");
		}
		else
		{
$met = new metodos();
$metodos = $met->checa_maquina($_REQUEST["id"],$_REQUEST["maquina"]);
		}
	
?>
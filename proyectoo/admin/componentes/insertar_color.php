<?
include("metodos.php");


if(trim($_REQUEST["color"]) == false)
		{
			header("Location: colores.php");
		}
		else
		{
$met = new metodos();
$metodos = $met->checa_color($_REQUEST["id"],$_REQUEST["color"]);
		}
	
?>
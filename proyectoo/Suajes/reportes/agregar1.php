<?
include("metodos.php");
?>
<?

if($_REQUEST["planta"] == 'xx')
{
	$numdiseno = $_REQUEST["cod"];
	echo "<script>alert('Seleccione Planta..');</script>";
	echo "<script LANGUAJE = 'javascript'>location.href = 'agregar.php?numdiseno=$numdiseno';</script>";
}
else if($_REQUEST["materiales"] == "xx")
{
	 $numdiseno = $_REQUEST["cod"];
	echo "<script>alert('Seleccione Material..');</script>";
	echo "<script LANGUAJE = 'javascript'>location.href = 'agregar.php?numdiseno=$numdiseno';</script>";
}
else if($_REQUEST["maquina"] == "xx")
{
	$numdiseno = $_REQUEST["cod"];
	echo "<script>alert('Seleccione Maquina..');</script>";
	echo "<script LANGUAJE = 'javascript'>location.href = 'agregar.php?numdiseno=$numdiseno';</script>";
}
else
{
$met =  new metodos();
$metodos = $met->insertar($_REQUEST["id_suajes"],$_REQUEST["cod"],$_REQUEST["outs"],$_REQUEST["maquina"],$_REQUEST["rack"],$_REQUEST["planta"],$_REQUEST["rule"],$_REQUEST["materiales"],$_REQUEST["tamano"]);
}
?>
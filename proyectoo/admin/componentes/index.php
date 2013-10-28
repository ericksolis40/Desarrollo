<?
include("metodos.php")
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?
//checa que no brinquen los ususarios
if($_SESSION["tipo"] == "Diseno" )
{
	header("Location: ../../Diseno/inicio_diseno.php");
	
	
}
else if($_SESSION["tipo"] == "Grabados" )
{
	header("Location: ../../Grabados/inicio_grabados.php");
	
}
else if($_SESSION["tipo"] == "Suajes" )
{
	header("Location: ../../Suajes/inicio_suajes.php");
	
}
?>
</body>
</html>
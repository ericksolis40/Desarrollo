<?
include ("metodos.php");
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?
//================= CODIGO QUE DESAPERECE ERRORES CUANDO ESTAN BIEN ====================
error_reporting(E_ALL ^ E_NOTICE);
$met = new metodos();
$metodos = $met->checa_reporte($_REQUEST["id_numdiseno"],$_REQUEST["numdiseno"],$_REQUEST["ident"],$_REQUEST["cliente"],$_REQUEST["tipo"],$_REQUEST["color1"],$_REQUEST["color2"],$_REQUEST["color3"],$_REQUEST["style"],$_REQUEST["rad"],$_REQUEST["arte"],$_REQUEST["disenador"],$_REQUEST["fecha_i"]);
?>
</body>
</html>
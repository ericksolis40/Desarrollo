<?
include("../conexiones/base.php");
?>			

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>

<!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!----========== TEXTO 3D ==============----->
<link href="3d.css" rel="stylesheet" type="text/css">


</head>

<?
//checa que no brinquen los ususarios
if($_SESSION["tipo"] == "Admin" )
{
	header("Location: ../admin/inicio_admin.php");
	
	
}
else if($_SESSION["tipo"] == "Grabados" )
{
	header("Location: ../Grabados/inicio_grabados.php");
	
}
else if($_SESSION["tipo"] == "Suajes" )
{
	header("Location: ../Suajes/inicio_suajes.php");
	
}
?>
<body>
<div align="right">
<table width="200" >
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="left"><br />
<b>Usuario:</b> <? echo $_SESSION["user"];?><br />
<b>Nombre:</b> <? echo $_SESSION["nombre"];?><br />
<b>Tipo Usuario:</b> <? echo $_SESSION["tipo"];?></td>
  </tr>
</table>
</div>



<div class="navbar">
  <div class="navbar-inner">
    <a class="brand" >Diseño</a>
    <ul class="nav">
      <li class="active"><a href="inicio_diseno.php"><i class="icon-home"></i> Inicio</a></li>
      <!---DROPDOWN MENU--->
      <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
     <i class=" icon-th-list"></i> Reportes
      <b class="caret"></b>
    </a>
    <ul class="dropdown-menu">
    <li><a href="reportes/alta.php"><i class=" icon-ok"></i> Alta Reporte</a></li>
    <li><a href="reportes/eliminar.php"><i class=" icon-trash"></i> Baja Reporte</a></li>
    <li><a href="reportes/modificar.php"><i class=" icon-pencil"></i> Modificar Reporte</a></li>
    <li><a href="reportes/reportes.php"><i class=" icon-th-list"></i> Ver Reportes</a></li> 
  </ul>
    </li>
          <li ><a href="contacto.php"><i class="icon-question-sign"></i> Contacto</a></li>

          <li><a href="../conexiones/cerrar.php"><i class=" icon-off"></i> Salir</a></li>

    </ul>
  </div>
</div>
<br /><br /><br />
<br /><br /><br />
<div id="wrapper">
 <h1 align="center">Area Diseño</h1>
 <br /><br />
 
<div align="center"> <img src="sinil.jpg" class="img-rounded"  width="300" height="250" ></div>


</div>



   <script src="http://code.jquery.com/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
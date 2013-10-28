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
if($_SESSION["tipo"] == "Diseno" )
{
	header("Location: ../Diseno/inicio_diseno.php");
	
	
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
    <a class="brand" >Administrador</a>
    <ul class="nav">
      <li class="active"><a href="inicio_admin.php"><i class="icon-home icon-black"></i> Inicio</a></li>
      <!---DROPDOWN MENU--->
      <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
     <i class=" icon-th-list"></i> Reportes
      <b class="caret"></b>
    </a>
    <ul class="dropdown-menu">
    <li><a href="reportes/reporte_diseno.php"></i><i class=" icon-th-list"></i> Reporte Diseno</a></li>
    <li><a href="reportes/reporte_suajes.php"></i><i class=" icon-th-list"></i> Reporte Suajes</a></li>
    <li><a href="reportes/reporte_grabados.php"></i><i class=" icon-th-list"></i> Reporte Grabados</a></li>
  </ul>
    </li>
      <!---DROPDOWN MENU--->
      <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
     <i class="icon-user icon-black"></i> Usuarios
      <b class="caret"></b>
    </a>
    <ul class="dropdown-menu">
    <li><a href="usuarios/insertar.php"><i class="icon-ok icon-black"></i> Alta Usuarios</a></li>
    <li><a href="usuarios/eliminar.php"><i class="icon-trash icon-black"></i> Baja Usuarios</a></li>
    <li><a href="usuarios/actualizar.php"><i class="icon-pencil icon-black"></i> Modificar</a></li>
    <li><a href="usuarios/usuarios.php"><i class="icon-user icon-black"></i> Ver Usuarios</a></li>
  </ul>
    </li>
    <!---DROPDOWN MENU--->
      <li class="dropdown ">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
       <i class="icon-wrench icon-black"></i> Componentes
      <b class="caret"></b>
    </a>
    <ul class="dropdown-menu">
    <li><a href="componentes/maquinas.php"><i class="icon-wrench icon-black"></i> Maquinas</a></li>
    <li><a href="componentes/colores.php"><i class="icon-wrench icon-black"></i> Colores</a></li>
  </ul>
    </li>
          <li><a href="../conexiones/cerrar.php"><i class="icon-off icon-black"></i> Salir</a></li>

    </ul>
  </div>
</div>
<br /><Br /><br /><br /><br /><br />
<div id="wrapper">
 <h1 align="center">Administrador</h1>
 <br /><br />
 </div>
 <br /><br /><br /><br />
 
<div align="center"> <img src="sinil.jpg" class="img-rounded"  width="300" height="250" ></div>




   <script src="http://code.jquery.com/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
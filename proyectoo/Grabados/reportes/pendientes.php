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

</head>
<?
if($_SESSION["tipo"] == "Admin" )
{
	header("Location: ../admin/inicio_admin.php");
	
	
}
else if($_SESSION["tipo"] == "Diseno" )
{
	header("Location: ../Diseno/inicio_diseno.php");
	
}
else if($_SESSION["tipo"] == "Grabados" )
{
	header("Location: ../Grabados/inicio_grabados.php");
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
    <a class="brand" >Suajes</a>
    <ul class="nav">
      <li class="active"><a href="inicio_admin.php">Inicio</a></li>
      <!---DROPDOWN MENU--->
      <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
      Usuarios
      <b class="caret"></b>
    </a>
    <ul class="dropdown-menu">
    <li><a href="usuarios/insertar.php">Alta Usuarios</a></li>
    <li><a href="usuarios/eliminar.php">Baja Usuarios</a></li>
    <li><a href="#">Modificar</a></li>
    <li><a href="usuarios/usuarios.php">Ver Usuarios</a></li>
  </ul>
    </li>
          <li><a href="../conexiones/cerrar.php">salir</a></li>

    </ul>
  </div>
</div>





   <script src="http://code.jquery.com/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
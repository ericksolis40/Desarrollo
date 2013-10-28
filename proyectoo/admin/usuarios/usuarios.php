<?
include("metodos.php")
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<!-- Bootstrap -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-----TABLA------>
        <link href="../tabla/tabla.css" rel="stylesheet" media="screen">


</head>
<?
//checa que no brinquen los ususarios
if($_SESSION["tipo"] == "Diseno" )
{
	header("Location: ../../diseno/inicio_diseno.php");
	
	
}
else if($_SESSION["tipo"] == "Grabados" )
{
	header("Location: ../../grabados/inicio_grabados.php");
	
}
else if($_SESSION["tipo"] == "Suajes" )
{
	header("Location: ../../suajes/inicio_suajes.php");
	
}
?>


<body>
<?
// metodo dde  llama a los datos
$met = new metodos();
$metodos = $met->select();
?>
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
      <li class="divider-vertical" ><a href="../inicio_admin.php"><i class="icon-home icon-black"></i> Inicio</a></li>
      <!---DROPDOWN MENU--->
      <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
     <i class=" icon-th-list"></i> Reportes
      <b class="caret"></b>
    </a>
    <ul class="dropdown-menu">
    <li><a href="#"></i><i class=" icon-th-list"></i> Reporte Diseno</a></li>
    <li><a href="#"></i><i class=" icon-th-list"></i> Reporte Suajes</a></li>
    <li><a href="#"></i><i class=" icon-th-list"></i> Reporte Grabados</a></li>
  </ul>
    </li>
      <!---DROPDOWN MENU--->
      <li class="dropdown active ">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
     <i class="icon-user icon-black"></i> Usuarios
      <b class="caret"></b>
    </a>
    <ul class="dropdown-menu">
    <li ><a href="insertar.php"><i class="icon-ok icon-black"></i> Alta Usuarios</a></li>
    <li><a href="eliminar.php"><i class="icon-trash icon-black"></i> Baja Usuarios</a></li>
    <li><a href="actualizar.php"><i class="icon-pencil icon-black"></i> Modificar</a></li>
    <li class="active "><a href="usuarios.php"><i class="icon-user icon-black"></i> Ver Usuarios</a></li>
  </ul>
    </li>
    <!---DROPDOWN MENU--->
      <li class="dropdown ">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
     <i class="icon-wrench icon-black"></i> Componentes
      <b class="caret"></b>
    </a>
    <ul class="dropdown-menu">
    <li><a href="../componentes/maquinas.php"><i class="icon-wrench icon-black"></i> Maquinas</a></li>
    <li><a href="../componentes/colores.php"><i class="icon-wrench icon-black"></i> Colores</a></li>
  </ul>
    </li>
           <li class="divider-vertical"><a href="../../conexiones/cerrar.php"><i class="icon-off icon-black"></i> Salir</a></li>

    </ul>
  </div>
</div>
<br /><br /><br />

<h2 align="center"> Usuarios Registrados </h2>
<br /><br />
<div class="row"> 
<div class="span4"></div>
  <div class="span8">
  
<div class="datagrid" >
<table >
<thead>
<tr>
<th>Nombre</th>
<th>Usuario</th>
<th>Contrasena</th>
<th>Tipo Usuario</th>
</tr>
</thead>
<?
for($i = 0;$i < sizeof($metodos);$i++)
{
	?>
   
    <tr>
	<td><? echo $metodos[$i]["nombre"];?></td>
	<td><? echo $metodos[$i]["user"];?></td>
	<td><? echo $metodos[$i]["pass"];?></td>
	<td><? echo $metodos[$i]["tipos"];?></td>
    </tr>
   
<?
}
?>
</table>
</div>
</div>
</div>
<br />
<br />

<?
error_reporting(E_ALL ^ E_NOTICE);

if($_REQUEST["men"] == 1)
{
?>
<br />
<div class="row" align="center">
<div class="span5" align="center"></div> 
<div class="span4" align="center">
<div class="alert alert-success" align="center">
 Agregado correctamente
</div>
<div class="span3" align="center"></div> 

</div>
</div>
<meta http-equiv="Refresh" content="1; URL= usuarios.php">
<?
}

if($_REQUEST["men"] == 2)
{
?>
<br />
<div class="row" align="center">
<div class="span5" align="center"></div> 
<div class="span4" align="center">
<div class="alert alert-error" align="center">
 Eliminado correctamente
</div>
<div class="span3" align="center"></div> 

</div>
</div>
<meta http-equiv="Refresh" content="1; URL= usuarios.php">
<?
}

if($_REQUEST["men"] == 3)
{
?>
<br />
<div class="row" align="center">
<div class="span5" align="center"></div> 
<div class="span4" align="center">
<div class="alert alert-info" align="center">
 Actualizado correctamente
</div>
<div class="span3" align="center"></div> 

</div>
</div>
<meta http-equiv="Refresh" content="1; URL= usuarios.php">
<?
}

if($_REQUEST["men"] == 4)
{
?>
<br />
<div class="row" align="center">
<div class="span5" align="center"></div> 
<div class="span4" align="center">
<div class="alert alert-error" align="center">
 Usuario Existente
</div>
<div class="span3" align="center"></div> 

</div>
</div>
<meta http-equiv="Refresh" content="1; URL= usuarios.php">
<?
}

if($_REQUEST["men"] == 5)
{
?>
<br />
<div class="row" align="center">
<div class="span5" align="center"></div> 
<div class="span4" align="center">
<div class="alert alert-error" align="center">
 Nombre Usuario Existente
</div>
<div class="span3" align="center"></div> 

</div>
</div>
<meta http-equiv="Refresh" content="1; URL= usuarios.php">
<?
}
?>


 <script src="http://code.jquery.com/jquery.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>




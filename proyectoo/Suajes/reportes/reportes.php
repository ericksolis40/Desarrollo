<?
include("metodos.php");
?>			

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>

<!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
     <!-----TABLA------>
        <link href="tabla/tabla.css" rel="stylesheet" media="screen">

</head>
<?
error_reporting(E_ALL ^ E_NOTICE);
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
<?
$met = new metodos();
$metodos = $met->reportes();
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
    <a class="brand" >Suajes</a>
    <ul class="nav">
      <li ><a href="../inicio_suajes.php"><i class="icon-home"></i> Inicio</a></li>
      <li ><a href="pendientes.php"><i class="icon-th-list"></i> Reportes Pendientes</a></li>

      <!---DROPDOWN MENU--->
       <li class="dropdown active" >
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
     <i class="icon-th-list"></i> Reportes
      <b class="caret"></b>
    </a>
    <ul class="dropdown-menu">
    <li class="active" ><a href="reportes.php"><i class="icon-ok"></i> Ver Reportes</a></li>
        <li ><a href="eliminar.php"><i class="icon-trash"></i> Eliminar Reportes</a></li>

   
   
  </ul>
    </li>
          <li><a href="../../conexiones/cerrar.php"><i class="icon-off"></i> Salir</a></li>

    </ul>
  </div>
</div>

<br /><br /><br />
<br /><br /><br />
<div class="datagrid">
<table >
<thead>
<tr align="center">
<th># Diseno</th>
<th>Ident</th>
<th>Tipo</th>
<th>Fecha_i</th>
<th>Outs</th>
<th>Maquina</th>
<th>Rack</th>
<th>Planta</th>
<th>Rule In</th>
<th>Materiales</th>
<th>Tamano</th>
  </tr>
    </thead>
    <?

for($i = 0;$i < sizeof ($metodos);$i++)
{
?>
	<tr class="<?=($c++%2==1) ? 'alt' : 'white' ?>" align="center" >
<td><?php echo $metodos[$i] ['numdiseno'];?></td>
<td><?php echo $metodos[$i] ['ident']; ?></td>
<td><?php echo $metodos[$i] ["tipo"]; ?></td>
<td><?php echo $metodos[$i] ["fecha_i"];?></td>
<td><?php echo $metodos[$i] ["outs"];?></td>
<td><?php echo $metodos[$i] ["maquina"];?></td>
<td><?php echo $metodos[$i] ["rack"];?></td>
<td><?php echo $metodos[$i] ["planta"];?></td>
<td><?php echo $metodos[$i] ["rule"];?></td>
<td><?php echo $metodos[$i] ["materiales"];?></td>
<td><?php echo $metodos[$i] ["tamano"];?></td>



<?
}

?>
</table>
</div>
</div
></div>
<?
if($_REQUEST["e"] == 2)
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
<meta http-equiv="Refresh" content="1; URL= reportes.php">
<?
}

if($_REQUEST["e"] == 3)
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
<meta http-equiv="Refresh" content="1; URL= reportes.php">
<?
}
?>




   <script src="http://code.jquery.com/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
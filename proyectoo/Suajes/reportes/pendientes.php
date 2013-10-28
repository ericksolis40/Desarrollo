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
$metodos = $met->pendientes();
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
      <li class="active"><a href="pendientes.php"><i class="icon-th-list"></i>Reportes Pendientes</a></li>

      <!---DROPDOWN MENU--->
      <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
     <i class="icon-th-list"></i> Reportes
      <b class="caret"></b>
    </a>
    <ul class="dropdown-menu">
    <li><a href="reportes.php"><i class="icon-ok"></i> Ver Reportes</a></li>
    <li><a href="eliminar.php"><i class="icon-trash"></i> Baja Reportes</a></li>

  </ul>
    </li>
          <li><a href="../../conexiones/cerrar.php"><i class="icon-off"></i> Salir</a></li>

    </ul>
  </div>
</div>

<br /><br /><br />


<br /><br />
<form class="form-inline" action="agregar.php" method="post">
 <select name="numdiseno">
 <option value="xx">Seleccione # Diseño</option>
 <?php
 $met = new metodos();
 $metodos = $met->combo();
 for($i = 0;$i < sizeof ($metodos); $i++)
 {
	 ?>
  
 <option value="<? echo $metodos[$i]["numdiseno"]; ?>"><? echo $metodos[$i]["numdiseno"];?></option>
 
 <?
  }
 
?>
</select>
  
  <button type="submit" class="btn btn-primary">Agregar</button>
 <?
 if($_REQUEST["e"] == 1)
 {
	echo "Seleccione un numero por favor"; 
	?>
   
	<meta http-equiv="Refresh" content="1; URL=pendientes.php">
  <?
 }
 ?>
</form>
<br />
<div class="datagrid">
<table >
<thead>
<tr align="center">
<th># Diseno</th>
<th>Ident</th>
<th>Cliente</th>
<th>Tipo</th>
<th>Color1</th>
<th>Color2</th>
<th>Color3</th>
<th>Style</th>
<th>Arte_Com</th>
<th>Arte_Incom</th>
<th>Disenador</th>
<th>fecha_i</th>
  </tr>
    </thead>
    <?

for($i = 0;$i < sizeof ($metodos);$i++)
{
?>
	<tr class="<?=($c++%2==1) ? 'alt' : 'white' ?>" align="center" >
<td><?php echo $metodos[$i] ['numdiseno'];?></td>
<td><?php echo $metodos[$i] ['ident']; ?></td>
<td><?php echo $metodos[$i] ["cliente"]; ?></td>
<td><?php echo $metodos[$i] ['tipo'];?></td>
<td><?php echo $metodos[$i] ["color1"]; ?></td>
<td><?php echo $metodos[$i] ["color2"]; ?></td>
<td><?php echo $metodos[$i] ["color3"]; ?></td>
<td><?php echo $metodos[$i] ["style"]; ?></td>
<td><?php echo $metodos[$i] ["arte_completo"]; ?></td>
<td><?php echo $metodos[$i] ["arte_incompleto"]; ?></td>
<td><?php echo $metodos[$i] ["disenador"]; ?></td>
<td><?php echo $metodos[$i] ["fecha_i"];?></td>
<?
}

?>
</table>
</div>
</div
></div>





   <script src="http://code.jquery.com/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
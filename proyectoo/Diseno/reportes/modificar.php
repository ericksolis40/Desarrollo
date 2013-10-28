<?
include("metodos.php")
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<!-- Bootstrap -->
    <link href="bootstrap1/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-----TABLA------>
        <link href="tabla/tabla.css" rel="stylesheet" media="screen">

</head>

<body>
<?
//checa que no brinquen los ususarios
if($_SESSION["tipo"] == "Admin" )
{
	header("Location:../../admin/inicio_admin.php");
	
	
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
      <li ><a href="../inicio_diseno.php"><i class="icon-home"></i> Inicio</a></li>
      <!---DROPDOWN MENU--->
      <li class="dropdown active">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
     <i class=" icon-th-list"></i> Reportes
      <b class="caret"></b>
    </a>
    <ul class="dropdown-menu">
    <li ><a href="alta.php"><i class=" icon-ok"></i> Alta Reporte</a></li>
    <li><a href="eliminar.php"><i class=" icon-trash"></i> Baja Reporte</a></li>
    <li  class="active"><a href="modificar.php"><i class=" icon-pencil"></i> Modificar Reporte</a></li>
    <li ><a href="reportes.php"><i class=" icon-th-list"></i> Ver Reportes</a></li> 
  </ul>
    </li>        
      <li ><a href="../contacto.php"><i class="icon-question-sign"></i> Contacto</a></li>
          <li><a href="../../conexiones/cerrar.php"><i class=" icon-off"></i> Salir</a></li>

    </ul>
  </div>
</div>

<?
$met = new metodos();
$metodos = $met->select_reportes();
?>

<br /><br /><br /><br />
<br /><br /><br /><br />

<div class="row"> 
<div class="span1"></div>
  <div class="span11">
  
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
<th>Modificar</th>

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
<td><a href="modificar1.php?id=<? echo $metodos[$i]['id_diseno']; ?>"><button class="btn btn-mini btn-info" type="button" >Modificar <i class="icon-trash"></i></button></a></td>

<?
}

?>
</table>
</div>
</div>
</div>

<script src="http://code.jquery.com/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
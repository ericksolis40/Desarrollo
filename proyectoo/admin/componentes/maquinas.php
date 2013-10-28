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
        
       <script> 
function validar(e) { 
tecla = (document.all) ? e.keyCode : e.which; 
if (tecla==8) return true; //Tecla de retroceso (para poder borrar) 
// dejar la línea de patron que se necesite y borrar el resto 
patron =/[A-Za-z\s]/; // Solo acepta letras 
//patron = /\d/; // Solo acepta números 
//patron = /\w/; // Acepta números y letras 
//patron = /\D/; // No acepta números 
// 
te = String.fromCharCode(tecla); 
return patron.test(te); 
} 
</script> 

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
      <li  ><a href="../inicio_admin.php"><i class="icon-home icon-black"></i> Inicio</a></li>
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
      <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
     <i class="icon-user icon-black"></i> Usuarios
      <b class="caret"></b>
    </a>
    <ul class="dropdown-menu">
    <li><a href="../usuarios/insertar.php"><i class="icon-ok icon-black"></i> Alta Usuarios</a></li>
    <li><a href="../usuarios/eliminar.php"><i class="icon-trash icon-black"></i> Baja Usuarios</a></li>
    <li><a href="../usuarios/actualizar.php"><i class="icon-pencil icon-black"></i> Modificar</a></li>
    <li class="active"><a href="../usuarios/usuarios.php"><i class="icon-user icon-black"></i> Ver Usuarios</a></li>
  </ul>
    </li>
    <!---DROPDOWN MENU--->
      <li class="dropdown active">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
      <i class="icon-wrench icon-black"></i> Componentes
      <b class="caret"></b>
    </a>
    <ul class="dropdown-menu">
    <li class="active"><a href="../componentes/maquinas.php"><i class="icon-wrench icon-black"></i> Maquinas</a></li>
    <li><a href="../componentes/colores.php"><i class="icon-wrench icon-black"></i> Colores</a></li>
  </ul>
    </li>
           <li><a href="../../conexiones/cerrar.php"><i class="icon-off icon-black"></i> Salir</a></li>

    </ul>
  </div>
</div>
<?
$met = new metodos();
$metodos = $met->select_maquina(); 
?>

<h2 align="center">Maquinas</h2>
<br /><br />
<br />
<!-- Button to trigger modal -->
<div align="center"><a href="#myModal" role="button" class="btn btn-primary " data-toggle="modal">Agregar Maquina <i class="icon-pencil"></i></a></div>
 
<!-- Modal -->
  <form action="insertar_maquina.php" method="post">

<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
    <h3 id="myModalLabel">Agrega Maquinas</h3>
  </div>
  <div class="modal-body">
    <p>
    
  <fieldset>
  <label>Ingresa Nombre</label><br />
    <input type="text" placeholder="Maquina" name="maquina" maxlength="20"  onkeypress="return validar(event)" autofocus="autofocus" required autocomplete="off">
    <input type="hidden" name="id" />
  </fieldset>
    </p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cerrar</button>
    <button class="btn btn-success">Agregar <i class=" icon-ok"></i></button>
  </div>
</div>
</form>
<br />
<br /><br />

<div class="row"> 
<div class="span4"></div>
  <div class="span8">

<!--TABALALALALA-->
<div class="datagrid" >
<table class="table-striped">
<thead>
<tr align="center">
<th>Maquina</th>
<th>Eliminar</th>
</tr>
</thead>
<?
for($i = 0;$i < sizeof($metodos);$i++)
{
	?>
   
    <tr align="center">
	<td ><? echo $metodos[$i]["maquina"];?></td>
	<td ><a href="eliminar_maquina.php?id=<? echo $metodos[$i]["id"];?>"><button class="btn btn-mini  btn-danger" type="button">Eliminar <i class="icon-trash"></i></button></a></td>
    </tr>
   
<?
}
?>
</table>
</div>
</div>
</div>
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
<meta http-equiv="Refresh" content="1; URL= maquinas.php">
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
<meta http-equiv="Refresh" content="1; URL= maquinas.php">
<?
}

if($_REQUEST["exi"] == 1)
{
?>
<br />
<div class="row" align="center">
<div class="span5" align="center"></div> 
<div class="span4" align="center">
<div class="alert alert-error" align="center">
 Maquina Existente 
</div>
<div class="span3" align="center"></div> 

</div>
</div>
<meta http-equiv="Refresh" content="1; URL= maquinas.php">
<?
}
?>


   <script src="http://code.jquery.com/jquery.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
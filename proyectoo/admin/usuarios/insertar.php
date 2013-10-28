<?
include("../../conexiones/base.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<!-- Bootstrap -->
   <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> 

<!--- codigo de validacion de cajas de fechas-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
     <script src="http://cloud.github.com/downloads/franz1628/validacionKeyCampo/validCampoFranz.js"></script>
  
  
     <!--- codigo de validacion de cajas de fecha inicio-->
        <script type="text/javascript">
            $(function(){
                //Para escribir solo letras
                $('#nombre').validCampoFranz(' abcdefghijklmnñopqrstuvwxyzáéiou');

               //Para escribir solo letras
                $('#user').validCampoFranz('abcdefghijklmnñopqrstuvwxyzáéiou1234567890'); 
				//Para escribir solo letras
                $('#pass').validCampoFranz('abcdefghijklmnñopqrstuvwxyzáéiou1234567890'); 
            });
        </script>     
</head>

<?
error_reporting(E_ALL ^ E_NOTICE);

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
    <a class="brand " >Administrador</a>
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
    <li class="active"> <a href="insertar.php"><i class="icon-ok icon-black"></i> Alta Usuarios</a></li>
    <li><a href="eliminar.php"><i class="icon-trash icon-black"></i> Baja Usuarios</a></li>
    <li><a href="actualizar.php"><i class="icon-pencil icon-black"></i> Modificar</a></li>
    <li><a href="usuarios.php"><i class="icon-user icon-black"></i> Ver Usuarios</a></li>
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

<div class="row"> 
<div class="span4"></div>
  <div class="span6">

 <div class="hero-unit">
<form class="form-horizontal" action="insertar1.php" method="post">
<fieldset>

<!-- Form Name -->
<legend>Ingresar Usuario</legend>
<input type="hidden" name="id" />


<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="textinput">Usuario</label>
  <div class="controls">
        <input id="user" name="user" type="text" placeholder="Ingresa Usuario" class="input-large" required autofocus maxlength="10" autocomplete="off" > 

  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="textinput">Contrasena</label>
  <div class="controls">
    <input id="pass" name="pass" type="text" placeholder="Ingresa Contrasena" class="input-large" required maxlength="10" autocomplete="off">
  </div>
</div>

<!-- Select Basic -->
<div class="control-group">
  <label class="control-label" for="selectbasic">Tipo Usuario</label>
  <div class="controls">
    <select id="selectbasic" name="tipo"  class="selectpicker input-large">
      <option value="Admin">Administrador</option>
      <option value="Diseno">Diseno</option>
      <option value="Suajes">Suajes</option>
      <option value="Grabados">Grabados</option>
    </select>
    
  </div>
</div>
<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="textinput">Nombre</label>
  <div class="controls">
    <input id="nombre" name="nombre" type="text" placeholder="Ingresa Nombre" class="input-large" required maxlength="30" autocomplete="off">
  </div>
</div>

<!-- Button -->
<div class="control-group">
  <div class="controls">
  <button type="submit" class="btn btn-success">Agregar <i class="icon-ok"></i></button>
    
  </div>
</div>

</fieldset>
</form>
</div>
</div>
<div class="span2"></div>
</div>
<br /><Br />


    

 <!---<script src="http://code.jquery.com/jquery.js"></script> -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>>>
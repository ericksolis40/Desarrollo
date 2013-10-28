<?
include ("metodos.php")
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    
    <!--============== Validar solo tipos de caracteres, numeros y letras ================-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>     
<script src="http://cloud.github.com/downloads/franz1628/validacionKeyCampo/validCampoFranz.js"></script>

       <script type="text/javascript">
            $(function(){
                //Para escribir solo letras
                $('#diseno').validCampoFranz('abcdefghijklmnñopqrstuvwxyzáéiou1234567890-');
				 $('#client').validCampoFranz('abcdefghijklmnñopqrstuvwxyzáéiou1234567890 ');
				  $('#art').validCampoFranz('abcdefghijklmnñopqrstuvwxyzáéiou1234567890 ');   
                $('#identt').validCampoFranz('abcdefghijklmnñopqrstuvwxyzáéiou1234567890 ');    
            });
        </script>      


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
    <li class="active"><a href="alta.php"><i class=" icon-ok"></i> Alta Reporte</a></li>
    <li><a href="eliminar.php"><i class=" icon-trash"></i> Baja Reporte</a></li>
    <li><a href="modificar.php"><i class=" icon-pencil"></i> Modificar Reporte</a></li>
    <li><a href="reportes.php"><i class=" icon-th-list"></i> Ver Reportes</a></li> 
  </ul>
    </li>
              <li ><a href="../contacto.php"><i class="icon-question-sign"></i> Contacto</a></li>

          <li><a href="../../conexiones/cerrar.php"><i class=" icon-off"></i> Salir</a></li>

    </ul>
  </div>
</div>
<?
$met = new metodos;
$metodos = $met->select_color()
?>

<br /><br /><br />
<div class="row">
  <div class="span2">...</div>
  <div class="span8">
<form class="form-inline" method="post" action="alta2.php">

<table width="1000" height="400" border="1">
  <tr align="center">
    <td>
    <label><b># Diseno</b></label><br />
    <input type="text" name="numdiseno" id="diseno" placeholder="# Numero Diseno" class="input-medium" autofocus="autofocus" required/ maxlength="15" autocomplete="off">
	</td>
    <td>
        <label><b>Ident</b></label><br /> 
    <textarea rows="4" cols="50" maxlength="50" name="ident" required id="identt"></textarea>
	</td>
    <td>     
    <label><b>Cliente</b></label><br />
    <input type="text" name="cliente" placeholder="Cliente" class="input-medium" autocomplete="off" required maxlength="10" id="client"/>
	</td>
    <td>
    
       <label><B>Tipo:</B><br />
    <select name="tipo" id="tipo">
      <option value="xx">Seleccione..</option>
      <option value="Full Litho">Full litho</option>
      <option value="Impresion Directa">Impresion Directa</option>
      <option value="Estructural">Estructural</option>
    </select>
  </label>
	</td>
  </tr>
  <tr align="center">
    <td >
    
    <label><b>Color 1</b></label><br />
    <select class="input-large" name="color1"> 
    <option value="xx">Seleccione..</option>
    <?
	for($i = 0;$i < sizeof($metodos);$i++)
	{
		?>
  <option value="<? echo $metodos[$i]["colores"];?>"><? echo $metodos[$i]["colores"];?></option>
  
   <? } ?>
	</select>
    </td>
    <td>
    <label><b>Color 2</b></label><br />
    <select class="input-large" name="color2">
   <option value="xx">Seleccione..</option>
   <?
	for($i = 0;$i < sizeof($metodos);$i++)
	{
		?>
  <option value="<? echo $metodos[$i]["colores"];?>"><? echo $metodos[$i]["colores"];?></option>
  
   <? } ?>
	</select>
    </td>
    <td>
    <label><b>Color 3</b></label><br />
    <select class="input-large" name="color3">
    <option value="xx">Seleccione..</option>
   <?
	for($i = 0;$i < sizeof($metodos);$i++)
	{
		?>
  <option value="<? echo $metodos[$i]["colores"];?>"><? echo $metodos[$i]["colores"];?></option>
  
   <? } ?>
	</select>
    </td>
    <td>
    <label><b>Style</b></label><br />
    <select class="input-medium" name="style">
   <option value="xx">Seleccione..</option>
      <option value="Rsc">Rsc</option>
      <option value="Hsc">Hsc</option>
      <option value="Die Cut">Die Cut</option>
      <option value="Fol">Fol</option>
      <option value="Pad">Pad</option>
    </select>
    </td>
    
  </tr>
  <tr align="center">
    <td>
      <B>Arte Recibido:</B> &nbsp;&nbsp;&nbsp;Completo<input type="radio" name="rad" value="Completo" checked="checked" />
  &nbsp;&nbsp;&nbsp;&nbsp;
Incompleto
<input type="radio" name="rad" onclick="arte.disabled = false" />

<textarea rows="4" cols="50" name = "arte" id="art" maxlength="50" disabled="disabled" placeholder = "Introduce Descripcion">
</textarea>
   </td>
    <td>
    <label><b>Disenador</b></label><br />
    <select class="input-medium" name="disenador">
   <option value="xx">Seleccione..</option>
  <option value="Alberto">Alberto</option>
     <option value="Carlito">Carlito</option>
     <option value="Isaac">Isaac</option>
     <option value="Miguel">Miguel</option>
	</select>
    </td>
    <td>      <label><b>Fecha Inicio</b></label><br /> 
     <input type="date" name="fecha_i" class="input-medium"  />
</td>
    <td>&nbsp;</td>
  </tr>
  <tr align="center" >
    <td>
    
    </td>
    <td colspan="2">  <button class="btn btn-success" type="submit">Agregar</button></td>
    <td></td>
    <td>     <input type="hidden" name="id_numdiseno" />
</td>
  </tr>
</table>
</form>
</div>
 <div class="span2">...</div>
 </div>



<!--<script src="http://code.jquery.com/jquery.js"></script>-->
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
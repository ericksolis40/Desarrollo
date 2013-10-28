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
    
    <!--- codigo de validacion de cajas de fechas-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
     <script src="http://cloud.github.com/downloads/franz1628/validacionKeyCampo/validCampoFranz.js"></script>
  
  
     <!--- codigo de validacion de cajas de fecha inicio-->
        <script type="text/javascript">
            $(function(){
                //Para escribir solo numeros    
                $('#rack').validCampoFranz('abcdefghijklmnñopqrstuvwxyzáéiou0123456789-');  
				//Para ident    
                $('#outs').validCampoFranz('0123456789'); 
				//Para cliente   
                $('#rule').validCampoFranz('0123456789.'); 
				// colores 
				 $('#tamano').validCampoFranz('x0123456789. "'); 
				        
				
				});
        </script>     
    
    
</head>

<body>
<?
if($_REQUEST["numdiseno"]== 'xx')
{
	header("Location: pendientes.php?e=1");	
}
else
{
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


<?
$met =  new metodos();
$metodos = $met->combo_id($_REQUEST["numdiseno"]);

for($i = 0;$i < sizeof($metodos);$i++)
?>
<form action="agregar1.php?cod=<? echo $metodos[0]["numdiseno"];?>" method="post" >
<table width="1200" border="1" height="400">
  <tr align="center">
    <td>
    <label><b># Diseño</b> </label><br />
    <input type="text" value="<? echo $metodos[0]["numdiseno"]; ?>"    disabled="disabled" style="text-align:center"  /> 
	</td>
    <td>
    <label><b>Ident</b></label><br />
<textarea rows="4" cols="50" maxlength=50 disabled="disabled" style="text-align:center">
 <?php echo $metodos[0]["ident"]?>  </textarea>	</td>
    <td>
    <label><B>Tipo:</B></label><br>
    <select name="maquina2" id="maquina2"  disabled="disabled" title= "Seleccione Maquina" style="text-align:center">
      <option value="Full Litho"<?php if ($metodos[0]["tipo"] == 'Full Litho') echo ' selected="selected"'; ?>>Full litho</option>
      <option value="Impresion Directa"<?php if ($metodos[0]["tipo"] == 'Impresion Directa') echo 'selected="selected"'; ?>>Impresion Directa</option>
      <option value="Estructural"<?php if ($metodos[0]["tipo"] == 'Estructural') echo ' selected="selected"'; ?>>Estructural</option>
    </select>
    </td>
    <td>
       <label><B>Fecha Inicio: </B></label><br />
  <input type="date" name="fechai" maxlength=30 size=20 id="fechai" placeholder="" disabled="disabled" value="<?php echo $metodos[0]["fecha_i"]?>" />
    </td>
  </tr>
  <tr align="center">
    <td>
    <?
    $met = new metodos();
 $metodos = $met->maquina();

 ?>
    <label><b>Maquina</b></label><br />
	<select name="maquina">
 	<option value="xx">Seleccionar..</option>
  <? for($i = 0;$i < sizeof ($metodos); $i++)
  {?>
  
 <option value="<? echo $metodos[$i]['maquina']; ?>"><? echo $metodos[$i]['maquina'];?></option>
 
<?
  }
?>
</select>
    
    </td>
    <td>
    <label><b>Outs:</b></label>
    <br><input title= "Introduce Out" id="outs" type="text" name="outs" required autocomplete ="off" placeholder = "Salidas" autofocus maxlength="10"/>
    </td>
    <td>
     <label><b>Rack:</b></label><br><input title= "Introduce Rack" id="rack"  type="text" name="rack" required autocomplete ="off" placeholder = "Ubicacion" maxlength="10"/>
    </td>
    <td>
    <label><B>Planta:</B>  </label><br>
    <select name="planta" id="planta" required  >
      <option value="xx">Seleccione..</option>
      <option value="Planta 1">Planta 1</option>
      <option value="Planta 2">Planta 2</option>
    </select>

    </td>
    
  </tr>
  <tr align="center">
<td>
    <label><b>Rule In:</b></label>
     <br><input title="Intruduce Rule In" id="rule" type="text" name="rule" autocomplete = "off" placeholder = "Rule In" 			     required maxlength="10"/>
    </td>
      <td><label><B>Materiales:</B></label><br>
    <select name="materiales" id="materiales" required  title="Seleccione un Material">
      <option value="xx">Seleccione..</option>
      <option value="Maderas">Maderas</option>
      <option value="Trim Curvo">Trim Curvos</option>
      <option value="Trim Recto">Trim Recto</option>
    </select>
 </td>
 <td>
     <label><b>Tamaño Material:</b></label> <br><input type="text" id="tamano" title="Introduce un Tamaño" name="tamano" autocomplete = "off" placeholder = "Tamaño" required maxlength="10"/>
    </td>
    <td><input type="hidden" name="id_suajes"  /> </td>
      </tr>
</table>
<br /><br />
<td><p align="center"> <button class="btn btn-small btn-success" type="submit">Agregar</button></td>
<Br /><br />
</form>
<?
}
?>

    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>>>>>
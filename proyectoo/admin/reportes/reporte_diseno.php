<?
include("metodos.php")
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>

<!-- Bootstrap -->
   <!-- <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">-->

    <!-----TABLA------>
        <link href="tabla/tabla.css" rel="stylesheet" media="screen">
</head>

<body bgcolor=" #a9f5bc">
<?
$met = new metodos();
$metodos = $met->reporte_diseno();
?><br /><br /><br />
<h1>Reportes Diseno</h1>



<table width="1380" border="1">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td width="600">  
    <form action="fechas_diseno.php" method="post">
        <b>Fecha Inicial:</b>
        <input type="date" name="fecha1" class= "input-medium" >
        <b>Fecha Final:</b>
        <input type="date" name="fecha2" value="<?php echo  date("Y-m-d");?>" class= "input-medium">
        <input type="submit" value="Checar" class="btn-info btn-mini">
      </form></td>
  </tr>
</table>




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
for($i = 0;$i < sizeof($metodos);$i++)
{
	?>
   
    <tr class="<?=($c++%2==1) ? 'alt' : 'white' ?>" align="center">
	<td><? echo $metodos[$i]["numdiseno"];?></td>
	<td><? echo $metodos[$i]["ident"];?></td>
	<td><? echo $metodos[$i]["cliente"];?></td>
	<td><? echo $metodos[$i]["tipo"];?></td>
    <td><? echo $metodos[$i]["color1"];?></td>
    <td><? echo $metodos[$i]["color2"];?></td>
    <td><? echo $metodos[$i]["color3"];?></td>
    <td><? echo $metodos[$i]["style"];?></td>
    <td><? echo $metodos[$i]["arte_completo"];?></td>
    <td><? echo $metodos[$i]["arte_incompleto"];?></td>
    <td><? echo $metodos[$i]["disenador"];?></td>
    <td><? echo $metodos[$i]["fecha_i"];?></td>
     </tr>
   
<?
}
?>
</table>
</div>



</body>
</html>
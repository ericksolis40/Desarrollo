<?
include("metodos.php")
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>

 <!-----TABLA------>
        <link href="tabla/tabla.css" rel="stylesheet" media="screen">
</head>

<body bgcolor=" #a9f5bc">

<br /><br /><br />

<?
$met = new metodos();
$metodos = $met->reporte_suajes();

?>
<div class="datagrid">
<table >
	<thead>
		<tr align="center">
		<th># Diseno</th>
		<th>Ident</th>
		<th>Tipo</th>
		<th>Fecha_i</th>
		<th>Maquina</th>
		<th>Outs</th>
		<th>Rack</th>
		<th>Planta</th>
		<th>Rule In</th>
		<th>Materiales</th>
		<th>Tamano</th>
 		</tr>
   </thead>
<?
for($i = 0;$i < sizeof($metodos);$i++)
{
	?>
 <tr class="<?=($c++%2==1) ? 'alt' : 'white' ?>" >
<td><?php echo $metodos [$i]["numdiseno"];?></td>
<td><?php echo $metodos [$i]["ident"]; ?></td>
<td><?php echo $metodos [$i]["tipo"];?></td>
<td><?php echo $metodos [$i]["fecha_i"];?></td>
<td><?php echo $metodos [$i]["maquina"];?></td>
<td><?php echo $metodos [$i]["outs"];?></td>
<td><?php echo $metodos [$i]["rack"];?></td>
<td><?php echo $metodos [$i]["planta"];?></td>
<td><?php echo $metodos [$i]["rule"];?></td>
<td><?php echo $metodos [$i]["materiales"];?></td>
<td><?php echo $metodos [$i]["tamano"];?></td>
     </tr>
<?	
}
?>
</table>
</div>

</body>
</html>
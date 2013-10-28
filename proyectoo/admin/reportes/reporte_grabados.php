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
<?
$met = new metodos();
$metodos = $met->reporte_grabados();
?><br /><br /><br />

<div class="datagrid">
<table>
<thead>
<tr align="center">
   <th>Diseño #</th>
    <th >Ident</th>
    <th >Color 1</th>
    <th >Color 2</th>
    <th >Color 3</th>
    <th >Maquina</th>
    <th >Outs</th>
    <th >Rack</th>
    <th >Planta</th>
    <th >Cyrel</th>
    <th >Mylar</th>
    <th >Tape Doble</th>
    <th >Regletas</th>
    <th >Tape Azul</th>
    <th >Rule</th>
    <th >Materiales</th>
    <th >Tamanos</th>

</tr>
</tr>
    </thead>
<?
for($i = 0;$i < sizeof($metodos);$i++)
{
	?>
    
	<tr class="<?=($c++%2==1) ? 'alt' : 'white' ?>" align="center" >
<td><?php echo $metodos[$i] ['numdiseno'];?></td>
<td><?php echo $metodos[$i] ['ident']; ?></td>
<td><?php echo $metodos[$i] ["color1"]; ?></td>
<td><?php echo $metodos[$i] ["color2"]; ?></td>
<td><?php echo $metodos[$i] ["color3"]; ?></td>
<td><?php echo $metodos[$i] ["maquina"];?></td>
<td><?php echo $metodos[$i] ["outs"];?></td>
<td><?php echo $metodos[$i] ["rack"];?></td>
<td><?php echo $metodos[$i] ["planta"];?></td>
<td><?php echo $metodos[$i] ["cyrel"];?></td>
<td><?php echo $metodos[$i] ["mylar"];?></td>
<td><?php echo $metodos[$i] ["tape_doble"];?></td>
<td><?php echo $metodos[$i] ["regletas"];?></td>
<td><?php echo $metodos[$i] ["tape_azul"];?></td>
<td><?php echo $metodos[$i] ["rule"];?></td>
<td><?php echo $metodos[$i] ["materiales"];?></td>
<td><?php echo $metodos[$i] ["tamano"];?></td>
</tr>
<?	
}
?>
</table>
</div>


</body>
</html>
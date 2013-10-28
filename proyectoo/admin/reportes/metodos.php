<?
include("../../conexiones/base1.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<? 

class metodos
{
	public $select = array();
	
public function reporte_diseno()
	{
		$sql = "SELECT * FROM diseno ";
		$sql1 = mysql_query($sql,conexion::con());
		
		while($sql2 = mysql_fetch_assoc($sql1))
		{
			$this->select[] = $sql2;
		}
		return $this->select;		
	}
	
	public function fechas_diseno($fecha1,$fecha2)
	{
		$sql = "SELECT * FROM  diseno WHERE fecha_i  BETWEEN  '$fecha1' AND  '$fecha2' ";
		$sql1 = mysql_query($sql,conexion::con());
	
	while($sql2 = mysql_fetch_assoc($sql1))
		{
			$this->select[] = $sql2;
		}
		return $this->select;	
	}
	public function reporte_suajes()
	{
		$sql = "Select diseno.numdiseno, diseno.ident, diseno.tipo, diseno.fecha_i, suajes.Id_diseno, suajes.outs, suajes.maquina, suajes.rack, suajes.planta, suajes.rule, suajes.materiales, suajes.tamano FROM diseno INNER JOIN  suajes ON diseno.numdiseno = suajes.Id_diseno ORDER BY numdiseno";
		$sql1 = mysql_query($sql,conexion::con());
		
		while($sql2 = mysql_fetch_assoc($sql1))
		{
			$this->select[] = $sql2;
		}
		return $this->select;
	}
	public function reporte_grabados()
	{
		$sql ="SELECT diseno.numdiseno, diseno.ident,  diseno.color1, diseno.color2, diseno.color3,suajes.maquina, suajes.outs, suajes.rack, suajes.planta, suajes.rule, suajes.materiales, suajes.tamano, grabados.cyrel, grabados.mylar, grabados.tape_doble, grabados.regletas, grabados.tape_azul FROM diseno INNER JOIN suajes ON diseno.numdiseno = suajes.Id_diseno INNER JOIN grabados ON diseno.numdiseno = grabados.Id_diseno";
		$sql1 = mysql_query($sql,conexion::con());
		
		while($sql2 = mysql_fetch_assoc($sql1))
		{
			$this->select[] = $sql2;
		}
		return $this->select;
	}
	
}
	?>
</body>
</html>
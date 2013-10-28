<?
include("../../conexiones/base1.php");
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
	
	public function select_reportes()
	{
		$sql = "Select * From diseno";
		$sql1 = mysql_query($sql,conexion::con());
		
		while($sql2 = mysql_fetch_assoc($sql1))
		{
			$this->select[] = $sql2;
		}
		return $this->select;
	}
	
	public function select_color()
	{
		$sql = "Select * From colores";
		$sql1 = mysql_query($sql,conexion::con());
		
		while($sql2 = mysql_fetch_assoc($sql1))
		{
			$this->select[] = $sql2;
		}
		return $this->select;
	}
	
	public function checa_reporte($id_numdiseno,$numdiseno,$ident,$cliente,$tipo,$color1,$color2,$color3,$style,$rad,$arte,$disenador,$fecha_i)
	{
		$sql = "Select * From diseno where numdiseno = '$numdiseno'";
		$sql1 = mysql_query($sql,conexion::con());
		
		if(mysql_num_rows($sql1) > 0)
		{
			header("Location: reportes.php");
		}
		else
		{
			$this->insertar($id_numdiseno,$numdiseno,$ident,$cliente,$tipo,$color1,$color2,$color3,$style,$rad,$arte,$disenador,$fecha_i);
		}
	}
//=========== Funcion insertar los datod ala base
	public function insertar($id_numdiseno,$numdiseno,$ident,$cliente,$tipo,$color1,$color2,$color3,$style,$rad,$arte,$disenador,$fecha_i)
	{
$sql = "insert into diseno values ('".$id_numdiseno."','".$numdiseno."','".$ident."','".$cliente."','".$tipo."','".$color1."','".$color2."','".$color3."','".$style."','".$rad."','".$arte."','".$disenador."','".$fecha_i."')";
		$sql1 = mysql_query($sql,conexion::con());
		echo "bien";
	}
	
	public function eliminar($id)
	{
		$sql = "delete from diseno where numdiseno = '$id' ";
		$sql1 = mysql_query($sql,conexion::con());
		header("Location: reportes.php");
	}
	//============== mODIFICAR ========================
	public function select_id($id)
	{
		$sql = "Select * From diseno where id_diseno = '$id'";
		$sql1 = mysql_query($sql,conexion::con());
		
		while($sql2 = mysql_fetch_assoc($sql1))
		{
			$this->select[] = $sql2;
		}
		return $this->select;	
	}
	public function modificar($idd,$numdiseno,$ident,$cliente,$tipo,$color1,$color2,$color3,$style,$arte_completo,$arte_incompleto,$disenador,$fechai)
	{
				print_r($_REQUEST[""]);

		$sql= "UPDATE diseno SET numdiseno = '$numdiseno',ident='$ident',cliente='$cliente',tipo='$tipo',color1='$color1',color2='$color2',color3='$color3',style='$style',arte_completo='$arte_completo',arte_incompleto='$arte_incompleto',disenador='$disenador',fecha_i='$fechai' WHERE id_diseno = '$idd' ";	
		mysql_query($sql,conexion::con());
		header("Location: reportes.php");
	}
}

?>
</body>
</html>
<?
include("../../conexiones/base1.php");


class metodos
{
	public $variable = array();
	
	public function select_maquina()
	{
		$sql = "SELECT * FROM maquina";
		$sql1 = mysql_query($sql,conexion::con());
	
		while ($sql2 = mysql_fetch_assoc($sql1))
		{
			$this->variable[] = $sql2;
		}
		return $this->variable;
	}
	
	// ====== checa si existe maquina en la base de datos =======
	public function checa_maquina($id,$maquina)
	{
		$sql = "SELECT * FROM maquina WHERE maquina = '$maquina'";
		$sql1 = mysql_query($sql,conexion::con());
		
		if(mysql_num_rows($sql1) > 0)
		{
			header("Location: maquinas.php?exi=1");
		}
		else
		{
			$this->insertar_maquina($id,$maquina);
		}
	}
	
	public function insertar_maquina($id,$maquina)
	{		
		$sql = "INSERT INTO maquina VALUES ('$id','$maquina')";
		$sql1 = mysql_query($sql,conexion::con());
		header("Location: maquinas.php?men=1");
	}
	
	public function eliminar_maquina($id)
	{
		$sql = "DELETE FROM maquina WHERE id ='$id' ";
		$sql1 = mysql_query($sql,conexion::con());
		header("Location: maquinas.php?men=2");
	}
	//========================== METODOS COLORES ===============================
	public function select_color()
	{
		$sql = "SELECT * FROM colores";
		$sql1 = mysql_query($sql,conexion::con());
	
		while ($sql2 = mysql_fetch_assoc($sql1))
		{
			$this->variable[] = $sql2;
		}
		return $this->variable;
	}
	
	public function eliminar_color($id)
	{
		$sql = "DELETE FROM colores WHERE id ='$id' ";
		$sql1 = mysql_query($sql,conexion::con());
		header("Location: colores.php?men=2");
	}
	
	// ============ checa si existe color en la base de datos ==============
	public function checa_color($id,$color)
	{
		$sql = "SELECT * FROM colores WHERE colores = '$color'";
		$sql1 = mysql_query($sql,conexion::con());
		
		if(mysql_num_rows($sql1) > 0)
		{
			header("Location: colores.php?exi=1");
		}
		else
		{
			$this->insertar_color($id,$color);
		}
	}
	
	public function insertar_color($id,$color)
	{
		$sql = "INSERT INTO colores VALUES ('$id','$color')";
		$sql1 = mysql_query($sql,conexion::con());
		header("Location: colores.php?men=1");
	}
}
?>
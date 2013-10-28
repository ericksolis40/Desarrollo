<?
include("../../conexiones/base1.php");


//=============== METODOS SECCION USUARIOS ==================
class metodos 
{
	public $select = array();
	
	public function select()
	{
		$sql = "SELECT * FROM usuarios";
		$sql1 = mysql_query($sql,conexion::con());
		
		while($sql2 = mysql_fetch_assoc($sql1))
		{
			$this->select[] = $sql2;
		}
		return $this->select;
	}
	
	public function eliminar($id)
	{
		$sql = "DELETE FROM usuarios WHERE id_usuarios = '$id' ";	
		$sql1 = mysql_query($sql,conexion::con());
		header("Location: usuarios.php?men=2");
	}
	//==================== checa si existe el usuario ================================
	public function checa_usuario($id,$user,$pass,$tipo,$nombre)
	{
		$sql = "SELECT user FROM usuarios WHERE user = '$user' ";
		$sql1 = mysql_query($sql,conexion::con());
		
		if (mysql_num_rows($sql1) > 0)
		{
			header("Location: usuarios.php?men=4");	
		}
		else
		{
			$this->agregar($id,$user,$pass,$tipo,$nombre);
		}
	}
	
	public function agregar($id,$user,$pass,$tipo,$nombre)
	{
	$sql = "INSERT INTO usuarios (id_usuarios,user,pass,tipos,nombre) VALUES ('$id','$user','$pass','$tipo','$nombre') ";	
			$sql1 = mysql_query($sql,conexion::con());
	    	header("Location: usuarios.php?men=1");
		
	}
	
	public function select_id($id)
	{
		$sql = "SELECT * FROM usuarios WHERE id_usuarios = '$id' ";
		$sql1 = mysql_query($sql,conexion::con());
		
		while($sql2 = mysql_fetch_assoc($sql1))
		{
			$this->select[] = $sql2;
		}
		return $this->select;
	}
	//============== checamos a la hora d eactualizar si existe =====================
	public function checa_usuarios_actualizar($id,$user,$pass,$tipo,$nombre)
	{
		$sql = "SELECT user FROM usuarios WHERE user = '$user' ";
		$sql1 = mysql_query($sql,conexion::con());
		
		if (mysql_num_rows($sql1) > 0)
		{
			header("Location: usuarios.php?men=5");
		}
		else
		{
			$this->actualizar($id,$user,$pass,$tipo,$nombre);
		}
	}
	
	public function actualizar($id,$user,$pass,$tipo,$nombre)
	{
		
		$sql = "UPDATE  usuarios SET user = '$user',pass = '$pass',tipos = '$tipo',nombre = '$nombre' WHERE  id_usuarios = '$id' ";
		$sql1 = mysql_query($sql,conexion::con());
		header("Location: usuarios.php?men=3");			
	}
	
	
}


?>
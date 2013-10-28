<?
include("conexiones/base.php");



class metodos
{
	public $select = array();
	
	public function accesar($user,$pass)
	{
		$sql = "SELECT * FROM usuarios where user = '$user' AND pass = '$pass' ";
		$sql1 = mysql_query($sql,conexion::con());
		
		if(mysql_num_rows($sql1) == 0)
		{
			header("Location: login.php?men=1");
		}
		else
		{
			$fila = mysql_fetch_array($sql1);
			
			$_SESSION["user"] = $fila["user"];
			$_SESSION["nombre"] = $fila["nombre"];
			$_SESSION["tipo"] = $fila["tipos"];
			
			if($_SESSION["tipo"] == "Admin")
			{
				header("Location: admin/inicio_admin.php");
			}
			else if($_SESSION["tipo"] == "Diseno")
			{
				header("Location: Diseno/inicio_diseno.php");
			}
			else if($_SESSION["tipo"] == "Grabados")
			{
				header("Location: Grabados/inicio_grabados.php");
			}
			else if($_SESSION["tipo"] == "Suajes")
			{
				header("Location: Suajes/inicio_suajes.php");
			}
		}
	}	

}

?>

























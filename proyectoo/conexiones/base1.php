<?
// CHECAMOS QUE ESTE LOGUEADO EL USUARIO
include("verificar_sesion_carpetas.php");

class conexion
{
	static function con()
	{
		$conexion = mysql_connect("localhost","root","");
		mysql_select_db("sinil");
		return $conexion; 
	}

}

?>
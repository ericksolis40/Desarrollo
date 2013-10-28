<?
include("../conexiones/base.php");
?>			

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>

<!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
     <!----========== TEXTO 3D ==============----->
<link href="3d.css" rel="stylesheet" type="text/css">

</head>
<?
if($_SESSION["tipo"] == "Admin" )
{
	header("Location: ../admin/inicio_admin.php");
	
	
}
else if($_SESSION["tipo"] == "Diseno" )
{
	header("Location: ../Diseno/inicio_diseno.php");
	
}
else if($_SESSION["tipo"] == "Grabados" )
{
	header("Location: ../Grabados/inicio_grabados.php");
}
?>
<body>
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
      <li class="active"><a href="inicio_Suajes.php"><i class="icon-search icon-home"></i> Inicio</a></li>
      <li ><a href="reportes/pendientes.php"><i class="icon-search icon-th-list"></i> Reportes Pendientes</a></li>

      <!---DROPDOWN MENU--->
      <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
    <i class="icon-search icon-th-list"></i>  Reportes
      <b class="caret"></b>
    </a>
    <ul class="dropdown-menu">
        <li><a href="reportes/reportes.php"><i class="icon-search icon-ok"></i> Ver reportes</a></li>
                <li><a href="reportes/eliminar.php"><i class="icon-search icon-trash"></i> Eliminar reportes</a></li>

        

  </ul>
    </li>
          <li><a href="../conexiones/cerrar.php"><i class="icon-search icon-off"></i> Salir</a></li>

    </ul>
  </div>
</div>

<br /><br /><br />
<br /><br /><br />
<div id="wrapper">
 <h1 align="center">Area Suajes</h1>
 <br /><br />
 
<div align="center"> <img src="sinil.jpg" class="img-rounded"  width="300" height="250" ></div>


</div>




   <script src="http://code.jquery.com/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
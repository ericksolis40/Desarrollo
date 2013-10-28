<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>





<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Form</title>

<!--STYLESHEETS-->
<link href="login/css/style.css" rel="stylesheet" type="text/css" />

<!--SCRIPTS-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
<!--Slider-in icons-->

</script>






<!--============== Validar solo tipos de caracteres, numeros y letras ================-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>     
<script src="http://cloud.github.com/downloads/franz1628/validacionKeyCampo/validCampoFranz.js"></script>

       <script type="text/javascript">
            $(function(){
                //Para escribir solo letras
                $('#username').validCampoFranz('abcdefghijklmnñopqrstuvwxyzáéiou1234567890');

                //Para escribir solo numeros    
                $('#pass').validCampoFranz('abcdefghijklmnñopqrstuvwxyzáéiou1234567890');    
            });
        </script>      



</head>
<body bgcolor="#D8D8D8">
<?
error_reporting(E_ALL ^ E_NOTICE);

?>


<?
if ($_REQUEST["men"] == 1)
{

  $men = "Usuario o Contraseña Inexistentes";
	header('refresh:1; url=login.php'); // Refresh a pagina del login
}

?>

<?
if ($_REQUEST["mensajee"] == 2)
{

  $mensajee = "Cerro sesion Correctamente";
	header('refresh:1; url=login.php'); // Refresh a pagina del login
}

?>

<?
if ($_REQUEST["nosesion"] == 1)
{

  $nosesion = "Por favor Inicie session";
	header('refresh:1; url=login.php'); // Refresh a pagina del login
}

?>
<div align="center">
<a href="login.php"><img src="sinil.png" width="513" height="130" title="Sinil Industry" /> </a>
<br />
<br />
<br />  <p align="center"><font size="5" color="#003399">Acceso Al Sistema de Usuarios.</font></p>

</div>


<div id="wrapper">

	<form name="login-form" class="login-form" action="accesar.php" method="post">
	
		<div class="header">
		<h1>Login</h1>
		<span>Acceso Al Sistema.<br /></span><br />
		</div>
	
		<div class="content">
		<input title="Usuario" name="user" id= "username" type="text" class="input username" placeholder="Username" maxlength="10" required autofocus autocomplete="off" />
		<input title="Password" name="pass" id= "pass" type="password" class="input password" placeholder="Password" maxlength="10" required/>
		</div>

		<div class="footer">
		<input type="submit" name="submit" value="Accesar" class="button" /><br /><br><br>
        
  <?  echo "<p align='center'><b><font size= '2'color ='red'>$men</font></b></p>"; // Imprime el VAlor pasado por url?><br>
  <?  echo "<p align='center'><b><font size= '2'color ='green'>$mensajee</font></b></p>"; // Imprime el VAlor pasado por url?>
  <?  echo "<p align='center'><b><font size= '2'color ='red'>$nosesion</font></b></p>";?>
	<!--	<input type="submit" name="submit" value="Register" class="register"  />     BOtono Registro-->
		</div>
	
	</form>

</div>
<div class="gradient"></div>



</body>
</html>
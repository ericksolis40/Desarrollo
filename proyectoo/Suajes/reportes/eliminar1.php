<?

include ("metodos.php");

$met = new metodos();
$metodos = $met->eliminar($_REQUEST["id"]); 


?>
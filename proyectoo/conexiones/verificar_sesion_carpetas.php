<?php
session_start();
if($_SESSION["user"]== "")
{
header ("Location: ../../login.php?nosesion=1");
}
?>
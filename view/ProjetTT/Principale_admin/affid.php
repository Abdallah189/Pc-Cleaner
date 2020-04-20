<?php
 var_dump($_GET["iddd"]);
 $cookie_name = "id";
 $cookie_value =$_GET["iddd"];
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

var_dump($_COOKIE["id"]);
header("Location: apps-team_ensi.php#inscr"); 
?>
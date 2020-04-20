<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=pro;charset=utf8', 'root', '');
   } catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
   }
   var_dump($_GET["id"]);
   $e=$_GET["id"];
 $bdd->exec("DELETE FROM etudiant WHERE `etudiant`.`num`= '$e'");
 header("Location: index.php"); 
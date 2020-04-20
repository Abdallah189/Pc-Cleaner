<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=pro;charset=utf8', 'root', '');
   } catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
   }
var_dump($_POST["effect"]);
var_dump($_POST["nn"]);
$eff=$_POST["effect"];
$e=$_POST["nn"];
$req = "UPDATE `enseignant` SET `group` = '$eff' WHERE `enseignant`.`cin` = '$e'";
$bdd->query($req);

header("Location: apps-team%20_ensi.php"); 
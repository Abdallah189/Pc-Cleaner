<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=tunisie telecom;charset=utf8', 'root', '');
   } catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
   }
$nom = $_POST['name'] ;
$tel=$_POST['tel'];
$email = $_POST['email'] ;
$msg=$_POST['message'];
// On ajoute une entrée dans la table personne
$bdd->exec("INSERT INTO `contact` (`id`, `nom`, `message`, `email`, `tel`) VALUES (NULL,'$nom', '$msg', '$email', '$tel')");

var_dump($_POST);
header("Location: index.php"); 
?>
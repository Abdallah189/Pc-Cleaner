<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=pro;charset=utf8', 'root',
    '');
     } catch(Exception $e) { die('Erreur : '.$e->getMessage()); }
    // On récupère les données du formulaire
    $nom=$_POST['category-name'];
    $cat=$_POST['category-color'];
    $date=$_POST['category-date'];
    var_dump($date);
    // On ajoute une entrée dans la table personne
    $bdd->exec("INSERT INTO even (nom_event, cat_event,date) VALUES ('$nom', '$cat', '$date')");
    header("Location: apps-calendar.php"); 
?>
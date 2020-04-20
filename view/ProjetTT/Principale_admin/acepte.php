<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=pro;charset=utf8', 'root', '');
   } catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
   }
   $i=0;
   $etu = $bdd->query('SELECT *FROM etudiant');

   while($data=$etu->fetch()) {
       if ($data["email"]==$_POST["Acp"]){
        var_dump($data["email"]);
        var_dump($_POST["Acp"]);
        $e=$_POST["Acp"];
        $req = "UPDATE `etudiant` SET `etat` = '1' WHERE `etudiant`.`email` = '$e'";
        $bdd->query($req);
       }
       if ($data["cin"]==$_POST["Acp"]){
        var_dump($data["email"]);
        var_dump($_POST["Acp"]);
        $e=$_POST["Acp"];
        $bdd->exec("DELETE FROM etudiant WHERE `etudiant`.`cin`= '$e'");
       }
    }
    header("Location: index.php"); 
?>
    
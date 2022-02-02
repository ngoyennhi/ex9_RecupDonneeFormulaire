<?php 
// Tester si le script est appelé en traitement du formulaire.

if (isset($_POST['ok'])) { 
    // oui
    // Récupérer les valeurs saisies dans le formulaire.
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $auteur = "$prenom $nom";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 9 :récupérer des données saisies dans un formulaire</title>
</head>
<body>
    <!-- Formulaire de saisie de l’auteur. -->
    <form action="saisie.php" method="post">
        <div>
        <b>Prénom et nom du nouvel auteur :</b>
        <br /><label>Prénom</label> 
        <input type="text" name="prenom" size="40" maxlength="40" autofocus="autofocus"/>
        
        <br /><label>Nom</label> 
        <input type="text" name="nom" size="40" maxlength="40" autofocus="autofocus"/>
        <input type="submit" name="ok" value="Enregistrer"/>
    </div> 
    </form>

<div><?= (isset($auteur))?$auteur:’’ ?></div>
</body>
</html>
<?php
// Affiche l'interface du mini-jeu de combat.
// Le joueur peut créer un héros.
// Le joueur peut sélectionner un héros existant.
require_once './classes/HeroesManager.php';
require_once './config/db.php';
require_once './classes/Hero.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="post">

<label for="text" name="champ">inscription/jouer</label>
<input type="text"name="pseudo" placeholder="pseudo">
<button type="submit" name="validation">Valider</button>
</form>



</body>
</html>

<?php

if(isset($_POST["pseudo"]) && !empty($_POST["pseudo"])){ // si le pseudo éxiste et si il n'est pas vide
    $heroesManager = new HeroesManager($db);
    $hero = new Hero([
       'heroName' => $_POST["pseudo"],
    ]);
    $heroesManager->add($hero);
    echo 'Héros ajouté avec succès !';
   
    
}


?>
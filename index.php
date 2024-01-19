<?php
// Affiche l'interface du mini-jeu de combat.
// Le joueur peut créer un héros.
// Le joueur peut sélectionner un héros existant.
require_once './config/db.php'; // je lie ma BDD
require_once './config/autoload.php'; // je lie autoload qui permet de lié les fichiers HeroesManager et Hero
$heroesManager = new HeroesManager($db); // j'instencie ma nouvelle classe
$allHeroes = $heroesManager->findAllAlive();
 // je récupère les infos (tous les héros qui ont encore leur point de vie) et les stocks dans la variables $allHeroes

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="./styles.css" /> -->
    <title>Document</title>
</head>
<body class="d-flex justify-content-start">
    
<form action="" method="post">
<label for="text" name="champ">inscription/jouer</label>
<input type="text"name="pseudo" placeholder="pseudo">
<button type="submit" name="validation">Valider</button>
</form>

<?php foreach($allHeroes as $data){ ?> <!-- je crée une boucle (les héros dans la BDD) -->
<div id="card" class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $data->getHeroName() ?></h5> <!-- affiche le nom du héro-->
    <p class="card-text"><?php echo $data->getHeroLife()?></p> <!-- affiche la vie de mon héro -->
    <form action="./fight.php"method="post">
      <input type="hidden" name="hero_id"<?php echo $data->getId('id'); ?>>  
      <button type="submit">choisir</button>
    </form>
    
  </div>
</div>
<?php } ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

<?php

if(isset($_POST["pseudo"]) && !empty($_POST["pseudo"])){ // si le pseudo éxiste et si il n'est pas vide
    $heroesManager = new HeroesManager($db); // je crée une nouvel classe qui récupère les infos (pour la connexion à la BDD)
    $hero = new Hero([ // je créé une variable ou je stock les valeurs de ma new classe
       'name' => $_POST["pseudo"], // tableau assiosatif qui permet de récupèrer la valeur envoyer par le formulaire et l'envoyer dans la BDD dans un tableau
    ]);
    $heroesManager->add($hero); // tu appel la méthode qui ajoute le héro dans la BDD
    echo 'Héros ajouté avec succès !';
   
}


?>
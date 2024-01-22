<?php
// Utilise les classes instanciées et les méthodes souhaitées sur les objets.
// Une instance de HeroesManager doit être créée.
require_once './config/autoload.php';
require_once './config/db.php';

$heroesManager = new HeroesManager($db); // j'instencie ma nouvelle classe
// $heroesManager->findAllAlive();
// $allHeroes = $heroesManager->findAllAlive();
if(isset($_POST['hero_id'])) {
    $hero=$heroesManager->find(intval($_POST['hero_id']));
}
// $heroesManager = new HeroesManager($db);
// $hero = $heroesManager->find($_GET["hero_id"]);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css" />
    <title>Document</title>
</head>
<body class="pageF">
    <div class="log">
        <?php
            //démarrage du fight
            $fightManager = new FightsManager();
            $monster = $fightManager->createMonster();
            $fightResults = $fightManager->fight($hero, $monster);
            $heroesManager->update($hero);
        ?>
    </div>
<div class="perso">
        <div class="perso1">
        <img src="./img/yoshiatack.png" alt="">
    </div>
    <div class="perso2">
        <img class="" src="./img/linatack.png" alt="">
    </div>
    </div>
    
</div>
</body>
</html>
<?php
// Utilise les classes instanciées et les méthodes souhaitées sur les objets.
// Une instance de HeroesManager doit être créée.
require_once './config/autoload.php';
require_once './config/db.php';

$heroesManager = new HeroesManager($db); // j'instencie ma nouvelle classe
// $heroesManager->findAllAlive();
// $allHeroes = $heroesManager->findAllAlive();
if(isset($_POST['hero_id'])) {
    $hero=$heroesManager->find($_POST['hero_id']);
}
// $heroesManager = new HeroesManager($db);
// $hero = $heroesManager->find($_GET["hero_id"]);

//démarrage du fight
$fightManager = new FightsManager();
$monster = $fightManager->createMonster();
$fightResults = $fightManager->fight($hero, $monster);
$heroesManager->update($hero);


?>
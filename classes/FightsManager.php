<?php
// Définit la classe FightsManager qui stocke les données du combat et comporte ces fonctionnalités :
// Créer automatiquement un monstre.
// Déclencher un combat et obtenir les résultats du combat.

class FightsManager {

private array $combatLog;

public function createMonster() {

    $monster = new Monster();
return $monster;
}

public function fight(Hero $hero , Monster $monster) {
    $combatLog = array();
    while ($hero->getHeroLife() > 0 && $monster->getMonsterLife() > 0) {
        echo "<p>Le monstre attaque "  . $hero->getHeroName() . " et lui inflige " . $monster->hit($hero) . " points de degats</p>";
        
        echo "<p>Le héros attaque "  . $monster->getMonsterName() . " et lui inflige " . $hero->hit($monster) . " points de degats</p>";
    }
        
}


}


?>
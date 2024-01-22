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
        echo "<p class='monster'>Le monstre attaque "  . $hero->getHeroName() . " et lui inflige <span>" . $monster->hit($hero) . " </span> points de degats</p>";
        
        echo "<p class='hero'>Le héros attaque " . $monster->getMonsterName() . " et lui inflige <span>" .  $hero->hit($monster) . "</span> points de degats</p>";
    }
        
}


}


?>
<?php
// Définit la classe Monster avec :
// 2 propriétés :
// Son nom.
// Ses points de vie.

class Monster {

    private $monsterName;
    private $monsterLife = 100;

    public function setMonsterName($monsterName) {
        $this->monsterName=$monsterName;

    }
    public function getMonsterName() {
        return $this->monsterName;
    }

    public function setMonsterLife($monsterLife){
        $this->monsterLife = $monsterLife;
    }
    public function getMonsterLife() { // je crée la méthode qui récupère la vie du héro
    return $this->monsterLife;
    }
    public function hit(Hero $hero): int {
        $damage = rand(0,50);
        $heroHealPoint = $hero->getHeroLife();
        $hero->setHeroLife($heroHealPoint - $damage);
        return $damage;
    }
    
}
// class Ogre extends Monster {
//     public function hit(Hero $archer): int {
//         if ($this instanceof Ogre && $hero instanceof Archer)
//         $damage = rand(0,50)*2;
//         $heroHealPoint = $hero->getHeroLife();
//         $hero->setHeroLife($heroHealPoint - $damage);
//         return $damage;
//     }
// }
// class Sorcier extends Monster {

// }
// class Fantassin extends Monster {

// }

// $ogre = new Ogre();
// $sorcier = new Sorcier();
// $fantassin = new Fantassin();
?>
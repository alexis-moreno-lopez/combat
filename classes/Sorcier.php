<?php
class Sorcier extends Monster {
    public function hit(Hero $guerrier): int {
        if ($this instanceof Ogre && $hero instanceof Archer)
        $damage = rand(0,50)*2;
        $heroHealPoint = $hero->getHeroLife();
        $hero->setHeroLife($heroHealPoint - $damage);
        return $damage;
    }
}
?>
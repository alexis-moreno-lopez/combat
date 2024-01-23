<?php
class Ogre extends Monster {
    public function hit(Hero $archer): int {
        if ($this instanceof Ogre && $hero instanceof Archer)
        $damage = rand(0,50)*2;
        $heroHealPoint = $hero->getHeroLife();
        $hero->setHeroLife($heroHealPoint - $damage);
        return $damage;
    }
}
?>
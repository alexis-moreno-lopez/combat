<?php
    class Guerrier extends Hero {

        public function hit(Monster $monster): int {
            $damage = rand(0,50);
            $monsterLife = $monster->getMonsterLife();
            $monster->setMonsterLife($monsterLife - $damage);
            return $damage;
        }
    }
?>
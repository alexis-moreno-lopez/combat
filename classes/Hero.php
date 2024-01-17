<?php
// Définit la classe Hero avec :
// 2 propriétés :
// Son nom (unique).
// Ses points de vie.
// 1 méthode :
// frapper un monstre.

class Hero {

private $heroName;
private $heroLife = 100;
private $id;


public function __construct(array $data){
$this->heroName = $data['heroName'];


}
public function hitMonster() {

}

public function hit(){


}
public function getHeroName(){
return $this->heroName;
}
public function getHeroLife() {
return $this->$heroLife;
}
public function setId($id){
$this->id = $id;
}




}



?>
<?php
// Définit la classe Hero avec :
// 2 propriétés :
// Son nom (unique).
// Ses points de vie.
// 1 méthode :
// frapper un monstre.

class Hero {

private $heroName; // je crée une propriéter pour le nom du héro
private $heroLife = 100; // je crée une propriéter avec la valeur 100
private $id; // je crée une propriéter pour l'id du héro


public function __construct(array $data){ // je crée une méthode __construct pour instencier directement ma propriéter à la BDD
$this->heroName = $data['name']; // je récupère le nom du héro et le met dans le tableau de la BDD


}
public function hitMonster() { // je crée la méthode qui sert à frapper un monstre

}

public function hit(){ // je crée la méthode qui sert à frapper


}
public function getHeroName(){ // je crée la méthode qui sert à récupérer le nom du héro
return $this->heroName;
}
public function getHeroLife() { // je crée la méthode qui récupère la vie du héro
return $this->heroLife;
}
public function setId($id){ // je crée la méthode qui affecte l'id du héro
$this->id = $id;
}




}



?>
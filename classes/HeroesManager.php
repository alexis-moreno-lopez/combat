<?php
// Définit la classe HeroesManager qui contient tout le CRUD d’un héros :
// Enregistrer un nouveau héros en base de données.
// Modifier un héros.
// Sélectionner un héros.
// Récupérer une liste de plusieurs héros vivants.
// Savoir si un héros existe.

class HeroesManager {

    private $db;
    private array $heroesArray = [];

    public function __construct(PDO $db){ // le typage : c'est le type de l'objet/ exemple string = chaine de character/int = nombre/boolean = true ou false
    $this->db = $db; // heroesManager se connecte à la BDD et met les infos dans la variable $db



}
public function add(Hero $hero){  // je crée la méthode qui ajoute mon héro à la BDD
    $request = $this->db->prepare("INSERT INTO heroes (name ) VALUES(:name)"); // je prépare une requet qui ajoute mon héro dans la BDD
    $request->execute([ // j'éxécute 

        'name' => $hero->getHeroName(), // je récupère le nom du héro et je l'insert dans la colonne name de ma table combat
        
    ]);
    $id = $this->db->lastInsertId(); // je viens récupérer l'Id du dernier héro crée
    $hero->setId($id);
}  
public function findAllAlive() { // je crée la méthode qui récupère tous les héros qui ont encore leur point de vie 
$request = $this->db->query("SELECT * FROM heroes WHERE health_point > 0 ");
$allHeroes = $request->fetchAll();
 // je les récupère et les mets dans allHeroes
 foreach ($allHeroes as $hero ){ // je vais chercher tous mes héros dans le tableau $héro
    $newHeroes = new Hero($hero); //j'instencie un nouveau héro dans ma table héro et le stock dans la variable $newHeroes
    $newHeroes->setId($hero['id']); // j'associe l'id à mes héros
    
    
    $this->heroesArray[] = $newHeroes; // récupération des héros dans le tableau
}

return $this->heroesArray; 
}

public function find($id) {

    $request = $this->db->query("SELECT * FROM heroes  WHERE id ");
    $fightHero=$request->fetch();
    $hero = new Hero($fightHero);
    $hero->setId($fightHero['id']);
    return $hero;

}
public function update(Hero $hero) {
   

 $request = $this->db->prepare("UPDATE heroes SET health_point = :health_point WHERE id = :id");
 $request->execute([

    
    'health_point' => $hero->getHeroLife(),
    'id' => $hero->getId(),
]);

 
}

}

?>
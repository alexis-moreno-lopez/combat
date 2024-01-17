<?php
// Définit la classe HeroesManager qui contient tout le CRUD d’un héros :
// Enregistrer un nouveau héros en base de données.
// Modifier un héros.
// Sélectionner un héros.
// Récupérer une liste de plusieurs héros vivants.
// Savoir si un héros existe.

class HeroesManager {

    private $db;
 private $allHeroes;

    public function __construct(PDO $db){ // le typage : c'est le type de l'objet/ exemple string = chaine de character/int = nombre/boolean = true ou false
    $this->db = $db;



}
public function add($hero){
    $request = $this->db->prepare("INSERT INTO heroes (name ) VALUES(:name)");
    $request->execute([

        'name' => $hero->getHeroName(),
        
    ]);
    $id = $this->db->lastInsertId();
    $hero->setId($id);
}  
public function findAllAlive() {


$request = $this->db->query("SELECT health_point > 0 FROM heroes");
$allHeroes = $request->fetchAll();
return $allHeroes;
}
}

?>
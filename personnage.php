 <?php
 class Personnage {

//variables 
//dégfinir les propriétés ici 
    public $life = 80;
    public $attack = 20;
    // pas de val par défaut
    public $name;
   
//méthode
    public function shout() {
        echo 'Arthur Pendragon !';
    }
//méthode pour regénérer vie à 100  
    // public function regenerate() {
    //     $this->life = 100;
    // }

    public function dead() {
        return $this->life <= 0;
    }

//on utilise un constructeur pour définir la var $name 
    public function __construct($name){
    //il faut sauvegarder la var instanciée 
    $this->name = $name; 
}

    public function regenerate2($life  = null) {
    if (is_null($life)) {
        $this->life = 100;
         //par défaut 100 vies
    } else {
        $this->life = $this->life + $life; 
        // si points de vie passés en parametre      
        // ou $this->life += $life;
    }
    }
    public function attack($target) {
        //attaquant = $this
        $target->life -= $this->attack;
        // -20 vies pour lancelot = 64
    }

 }
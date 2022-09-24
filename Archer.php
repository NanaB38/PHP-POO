 <?php
 class Archer extends Personnage {

public $life = 40; 

  public function attack($target) {
  $target->life -= 2 * $this->attack;
 $target -> non_negative();
  }

 }
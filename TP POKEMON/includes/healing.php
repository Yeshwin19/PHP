<?php
    class Healing {
        protected $name;
        protected $healing;
        protected $owner;
        public function __construct($name, $healing, $quantity, $owner, Bag $bag) {
            $this->name = $name;
            $this->healing = $healing;
            $this->owner = $owner;

            echo $owner . ' viens d\'ajouter ' . $quantity . ' ' . $name . ' dans son sac !';
        }

        public function healing(Pokemon $pokemon) {
            
            $pokemon->life = $pokemon->life + $this->healing;
            if($pokemon->life > $pokemon->max_life){

                $pokemon->life = $pokemon->max_life;
            }

            echo $pokemon->owner . ' Just used ' . $this->name . ' on ' . $pokemon->name . '<br>';
            echo $pokemon->name . ' now on ' . $pokemon->life . ' LP';
        }
    }
?>
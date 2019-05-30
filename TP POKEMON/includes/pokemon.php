<?php
    class pokemon {
        protected $name;
        protected $level;
        protected $max_life;
        protected $life;
        protected $type;
        protected $strength;
        protected $owner;
        protected $defence;
        public function __construct($name, $level, $life, $type, $strength, $defence,  $owner = null) {
            $this->name = $name;
            $this->level = $level;
            $this->life = $life + (4 * $level);
            $this->max_life = $life + (4 * $level);
            $this->type = $type;
            $this->strength = $strength;
            $this->defence = $defence;
            $this->owner = $owner;
        }
        public function level_up() {
            $this->level += 1;
            $this->life += 5;
            $this->strength += 8;
            $str = $this->name . ' already up to level '. $this->level;
            $str2 = 'Life increased ' . $this->life . ' and strength increased by ' . $this->strength;
            echo $str;
            echo '<br>';
            echo $str2;
            echo '<br>';
            return true;
        }
        public function take_damages($damages) {
            $result = round($damages/($this->defence/2));
            $this->life -= $result ;
            return $result;
        }
        public function attack(Pokemon $pokemon) {
            $value = ceil($this->strength * rand(900, 1100) / 1000);
            $inflicted_damages = $pokemon->take_damages($value);
            $str = $this->name . ' inflicted ' . $inflicted_damages . ' damage points to ' . $pokemon->name . ' !';
            $str2 = $pokemon->name . ' now on ' . $pokemon->life . ' LP!';
            echo $str;
            echo '<br>';
            echo $str2;
            echo '<br>';
            return true;
        }
        public static function cri() {
            return "Hi !";
        }
    }
?>
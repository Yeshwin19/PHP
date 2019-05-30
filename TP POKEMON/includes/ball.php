<?php

	class ball {
		protected $name;
		protected $level;
		protected $owner;
		protected $pokemon;


		public function __construct($name, $quantity, $level, $owner) {

			$this->name = $name;
			$this->level = $level;
			$this->owner = $owner;
		}

		public function capture(Pokemon $pokemon) {
			if(!isset($pokemon->owner)) {
				$cap_chance = round((($pokemon->max_life - $pokemon->life) / $pokemon->max_life) * (1 + ($this->level - $pokemon->level))

					$chance = rand(0,100)/100;

					if ($chance <= $cap_chance) {
						$pokemon->owner = $this->owner;
						$this->pokemon = clone $pokemon;
						$str = 'Pokemon successfully captured:' .$pokemon->name;
					} else {
						$str = $pokemon->name . ' Fought against the capture!';
					}

					echo "$str";
					echo "<br>";

			} else {

				echo "This pokemon belongs to somebody else!";

			}

			return true;
		}

		public function choose(Pokemon $pokemon)

		echo $this->owner . 'Chose to use' . $pokemon->name . 'with this' .$this->name . '<br>';
	}

?>



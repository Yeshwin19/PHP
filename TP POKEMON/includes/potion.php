<?php

	class potion extends Healing {
		public function __construct($quantity, $owner, $bag) {
			parent::__construct('potion', 15, $quantity, $bag);
		}
	}

?>
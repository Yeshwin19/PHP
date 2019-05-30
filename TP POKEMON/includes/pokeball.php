<?php

	class pokeball extends ball{
		public function __construct($quantity, $owner) {
			parent::__construct('pokeball', $quantity, $owner);
		}
	}
?>
<?php

	class superpotion extends Healing {

		public function __construct($quantity, $owner) {

			parent::__construct('superpotion', $quantity, 60, $owner);
		}
	}
?>
<?php

	class superball extends ball {
		public function __construct($quantity,$owner) {

			parent::__construct('superball', $quantity, 15, $owner);
		}
	}
?>
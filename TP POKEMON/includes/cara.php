<?php

	class Carapuce extends pokemon {

		public function __construct($level, $life, $owner = null) {

			$name = 'Carapuce';
			$type = 'Water';
			$strength = 30;
			$defence = 15;

			parent::__construct($name, $level, $life, $type, $strength, $defence, $owner);
		}

		public static function cri() {
			return "Cara!";
		}
	}
?>
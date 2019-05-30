<?php 

	class salameche extends pokemon {

		public function __construct($level, $life, $owner = null) {

			$name = 'salameche';
			$type = 'feu';
			$strength = 55;
			$defence = 10;

			parent::__construct($name, $level, $life, $type, $strength, $defence, $owner);
	}

		public static function cri() {

			return "Salameche!";
	}
  }
?>
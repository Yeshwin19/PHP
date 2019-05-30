<?php 

	class bullebizarre extends pokemon {

		public function __construct($level, $life, $owner = null) {

			$name = 'bullebizarre';
			$type = 'plant';
			$strength = 40;
			$defence = 12;

			parent ::__construct($name, $level, $type, $strength, $defence, $owner);
		}

		public static function cri() {
			return "bullebi!"
		}
	}

?>
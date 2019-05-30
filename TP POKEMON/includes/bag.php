<?php

	class bag {
		protected $owner;
		protected $pocket = array();

		public function __construct($owner) {
			$this->owner = $owner;
			echo $owner . 'come take the bag!';
		}

		public function add($object) {
			$this->pocket[count($pocket)] = $object;
		}
	}
?>
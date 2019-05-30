<?php

	class masterball extends ball{
		public function  __construct($quantity, $owner) {
			parent::__construct('masterball', $quantity, 100, $owner);
		}
	}
?>
<?php

	try{

		$bdd = new PDO('mysql:host=localhost; dbname=spawn', 'root', '');
	}

	catch (PDOException $e) {
		echo $e->getMessage();
	}

?>

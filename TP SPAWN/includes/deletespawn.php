<?php include_once('base.php');

	if (!empty(int) trim(htmlspecialchars($_POST['spawn_id']))) {
		
		$id = (int) trim(htmlspecialchars($_POST['spawn_id']));

		if (is_int($id)) {
			
			$test = $bdd- > prepare("SELECT * FROM spawn WHERE ID = :id");
			$test- > execute(array(
				"id" => $id
			));

			$test_result = ($test- > rowCount() > 0)? true : false;

			if ($test_result) {

				echo '<center><h1>The Spawn with ID:'.$id.' has been erased sucessfully!</h1></center>';

				$query = $bdd- > prepare("DELETE FROM spawn WHERE ID = :id");
				 $query- > execute(array(
				 	"id" => $id
				));


		} else {
			echo '<center><h1>The Spawn with ID:'.$id.' n\'does not exist!</h1></center>';
		}

?>

<center><a href="TP SPAWN/index.php?page=3">Main Menu</a></center>

<?php

	} else {

		 header('Location: TP SPAWN/index.php?page=3&error=2');
	}

} else {

	header('Location: TP SPAWN/index.php?page=3&error=1');
}

?>

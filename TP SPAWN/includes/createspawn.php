<?php include_once('base.php');

if (!empty($_POST['new_spawn_x']) && !empty($_post['new_spawn_y']))) {
	
	$xposition = (int) trim(htmlspecialchars($_POST['new_spawn_x']));
	$yposition = (int) trim(htmlspecialchars($_POST['new_spawn_y']));

	if (is_int($xposition) && is_int($yposition)) {
		
		$query = $bdd- > prepare("INSERT INTO spawn (XPOSITION, YPOSITION) VALUES (: xposition, : yposition)");
		$query- > execute(array(
			'xposition' => $xposition,
			'yposition' => $yposition
		));

		echo '<center><h1> The Spawn with X position: '.$xposition.' and Y: '.$yposition.' has been added sucesfully!</h1></center>';
	?>

	<center><a href="TP SPAWN/index.php?page=1">Main Menu</a></center>

	<?php

	} else {
		header('Location: TP SPAWN/index.php?page=1&error=2');
	}
} else {
	header('Location: TP SPAWN/index.php?page=1&error=1');
}

?>
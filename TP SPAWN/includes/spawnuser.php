<?php
session_start();
include_once ('base.php');

$query = $bdd- > prepare("SELECT id FROM spawn");
$query- > execute

if($query- > rowCount() > 0) {

	$items = array();
	$i = 0;
	while($rows = $query- > fetch()) {
		$items[$i] = $rows['id'];
		$i++;
	}
	$i--;


	$pick_spawn = random_int(0, $i);
	if (empty($_SESSION['last_pick']) && $_SESSION['last_pick'] === "") {
        $_SESSION['last_pick'] = $pick_spawn;

} else {
    	while ($pick_spawn == $_SESSION['last_pick']){
    		$pick_spawn = random_int(0, $i);
    }

    $_SESSION['last_pick'] = $pick_spawn;
}

 	$query = $bdd- > prepare("SELECT XPOSITION, YPOSITION FROM spawn WHERE ID=:id");
    $query- > execute (array(
    	"id" => $items[$pick_spawn]
    ));

    $xposition = 0;
    $yposition = 0;


     while($rows = $query->fetch()) {
     	$xposition = $rows['XPOSITION'];
        $yposition = $rows['YPOSITION'];

    }

    echo '<center><h1>You have been spawned at X:'.$xposition.' et Y:'.$yposition.'</h1></center>';
    ?>

    <center><a href="TP SPAWN/index.php?page=3">Main Menu</a></center>

    <?php

 } else {
 	echo '<center><h1>There n\'are no spawns!</h1></center>';
 }

 ?>







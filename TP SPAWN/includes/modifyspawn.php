<?php include_once ('base.php');

	if(!empty($_POST['modified_position_X']) && !empty($_POST['modified_position_Y']) && !empty($_POST['spawn_id'])) {

		$xposition = (int) trim(htmlspecialchars($_POST['modified_position_X']));
    	$yposition = (int) trim(htmlspecialchars($_POST['modified_position_Y']));
    	$id = (int) trim(htmlspecialchars($_POST['spawn_id']));

    	if (is_int($xposition) && is_int($yposition) && is_int($id)) {


    		$test = $bdd->prepare("SELECT * FROM spawn WHERE ID = :id");
        	$test->execute(array(
            	"id" => $id
            ));

            $test_result = ($test->rowCount() > 0) ? true : false;

            if ($test_result) {

            	echo '<center><h1>The Spawn with ID:'.$id.' has been modified with the following value of X:'.$xposition.' and Y:'.$yposition.'</h1></center>';

            	$query = $bdd->prepare("UPDATE spawn SET XPOSITION=:xposition, YPOSITION=:yposition WHERE id=:id");
            	 $query->execute (array(
            	 	"xposition" => $xposition,
                	"yposition" => $yposition,
                	"id" => $id
                ));

            } else {
            	echo '<center><h1>The Spawn with ID:'.$id.' n\'does not exist !</h1></center>';
            }

        } else {
        	header('Location: TP SPAWN/index.php?page=1&error=2');
        }

} else {
	 header('Location: TP SPAWN/index.php?page=1&error=1');
}

?>

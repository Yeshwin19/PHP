<?php
	session_start();
	include_once ('includes/base.php');

	if (!empty($_GET['page'])) {
	    $page = htmlspecialchars($_GET['page']);
	}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="CSS/main.css">	
	
	<title>Fortnite | Spawn</title>
</head>

<body style="background-image: url(images/fortnite.png);">
    
	<header>
		<div class="menu-toggler">
			<div class="bar half start"></div>
			<div class="bar"></div>
			<div class="bar half end"></div>
			
		</div>
		<nav class="top-nav sticky-top">
			<ul class="nav-list">
				<li>
					<a href="index.html" class="nav-link">Spawn</a>
				</li>
				<li>
					<a href="index.php?page=1" class="nav-link">Create Spawn</a>
				</li>
				<li>
					<a href="index.php?page=2" class="nav-link">Modify Spawn</a>
				</li>
				<li>
					<a href="index.php?page=3" class="nav-link">Erase Spawn</a>
				</li>
				<li>
					<a href="index.php?page=4" class="nav-link">List of Spawn</a>
				</li>
				<li>
				
			</ul>
		</nav>
		
		
	</header>

	<br>
	
	<?php
        if (isset($page)) {
           if ($page == 1) {
    ?>

	<h1 style="color: #7BB02E;">Create Spawn!</h1>

		<form action="includes/createspawn.php" method="post">
			<label for="user_name" style="color: #7BB02E;">Position X:</label>
			<input type="text" name="new_spawn_x" id="new_spawn_x" placeholder="Position of X between 0 and 1000" style="color: #7BB02E;"></input>

			<br>
			<br>


			<label for="user_name" style="color: #7BB02E;">Position Y:</label>
			<input type="text" name="new_spawn_y" id="new_spawn_y" placeholder="Position of Y between 0 and 1000" style="color: #7BB02E;">

			<br>
			<br>
		</form>

		<?php
           } elseif ($page == 2) {
        ?>

		<h1 style="color: #7BB02E;">Modify Spawn!</h1>

		<form action="includes/modifyspawn.php" method="post">
			<label for="user_name" style="color: #7BB02E">Spawn ID :</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
			<input type="text" name="spawn_id" id="spawn_id" placeholder="ID" style="color: #7BB02E;"></input>

			<br>
			<br>

			<label for="modified_position_X" style="color: #7BB02E;"> New Position Of X:</label>
			<input type="text" name="modified_position_X" id="modified_position_X" placeholder="Between 0 to 1000" style="color: #7BB02E;">

			<br>
			<br>


			<label for="modified_position_Y" style="color: #7BB02E;">New Position of Y: &nbsp;</label>
			<input type="text" name="modified_position_Y" id="modified_position_Y" placeholder="Between 0 to 1000" style="color: #7BB02E;">

			<br>
			<br>

			<input type="submit" value="Modify this spawn" id="submit" name="submit" style="color: #7BB02E;">
		</form>

		<?php
            } elseif ($page == 3) {
        ?>

		<h1 style="color: #7BB02E;">Delete Spawn!</h1>

		<form action="includes/deletespawn.php" method="post">
			<label for="user_name" style="color: #7BB02E;">Spawn ID:</label>
			<input type="text" name="spawn_id" id="spawn_id" placeholder="ID" style="color: #7BB02E;">

			<br>
			<br>

			<input type="submit" value="Erase this Spawn" id="submit" name="submit" style="color: #7BB02E;">
		</form>

	    <?php
            } elseif ($page == 4) {
        ?>


		<h1 style="color: #7BB02E;">List of Spawns:</h1>
		<center>
			 <?php
                 $query = "SELECT ID, XPOSITION, YPOSITION FROM spawn";
                    if ($fetch = $bdd- > query($query)) {
                        echo '<table>
                        <tr>
                            <th>ID</th>
                            <th>X</th>
                            <th>Y</th>
                        </tr>';
                        
                        while ($row = $fetch- > fetch()) {
                            
                            echo '<tr><td>'.$row['ID'].'</td>';
                            echo '<td>'.$row['XPOSITION'].'</td>';
                            echo '<td>'.$row['YPOSITION'].'</td></tr>';
                            
                        }
                        
                        echo '</table>';
                    }
            ?>
		</center>

		<?php
              }
           } else {
        ?>


		<h1 style="color: #7BB02E;">Spawner</h1>
		<form action="includes/spawnuser.php" method="post">

			<br>
			<br>

			<input type="submit" value="Spawn Myself!" id="submit" name="submit" style="color: #7BB02E;">

		</form>

		<?php
            
           }
        
        ?>
	</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
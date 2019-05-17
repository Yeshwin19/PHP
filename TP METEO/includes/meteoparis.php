<?php include_once('header.php') ?>

	<body>
		<?php
			for($day = 0; $day < 5; $day ++){
				echo "<img src ='https://www.prevision-meteo.ch/uploads/widget/paris_'. $day .'.png'>";
			}
		?>

		<hr style="width: 100%;">

		<a href="TP METEO/index.php">Return to the Meterological Station main page.</a>
	</body>
</html>
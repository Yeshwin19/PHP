<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Meterological Station</title>

	<?php $time = date('H'); ?>
	<?php if ($time >= 19 || $time < 7) { ?>
		
		<style>
			body{

				color: rgb(159,159,162);
				background-color: rgb(42,215,236);
			}

		</style>
	
	<?php } else { ?>

			<style>

				body{
					color: rgb(0,0,0);
					background-color: rgba(163,74,148);
				}
			</style>

	<?php } ?>

</head>

<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title; ?></title>
		<link rel="stylesheet" type="text/css" href="css/grid.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<?php
			if (isset($scripts)) {
				foreach ($scripts as $script) {
					echo $script;
				}
			}
		?>
	</head>
	<body>
	<div class='row'>
		<div class='logo column grid_12'>
			<img class='logo' src="img/logo.png">
		</div>
	</div>
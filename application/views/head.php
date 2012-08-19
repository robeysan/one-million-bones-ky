<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title; ?></title>
		<link rel="stylesheet" type="text/css" href="css/grid.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
		<?php
			if (isset($scripts)) {
				foreach ($scripts as $script) {
					echo $script;
				}
			}
		?>
		<script type="text/javascript">
			$(document).ready(function(){
				<?php 
					$active_page;
				?>
				var $activepage = "<?php if (isset($active_page)) { echo $active_page; }else{ echo '';} ?>";
				$("li#"+$activepage+"").prop('class', 'active');
			});
		</script>
	</head>
	<body>
		<div class='wrap'>
			<div class='row'>
				<div class='logo column grid_12'>
					<img class='logo' src="img/logo.png">
				</div>
			</div>
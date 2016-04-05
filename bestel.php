<?php session_start();?>
<!doctype html>
<html class="no-js" lang="nl-NL">
	<head>
		<meta charset="utf-8"/>
		<title>Sopranos</title>
		<link rel="stylesheet" href="css/foundation.min.css">
		<script type="text/javascript" src="ajax/ajax.js"/>
    	<link rel="stylesheet" href="css/app.css" />
	    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="title" content="Pizza Sopranos">
		<meta name="keywords" content="pizza pizza pizza"><!--lol wrm doe ik dit zo-->
		<meta name="author" content="Patrick Ramge">
	</head>

	<?php
		$pizza = $_SESSION['pizza'];
		if (isset($pizza)):?>


	<body>
		<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
		<script src="js/foundation.js"></script>
		<div class="top-bar text-center">
			<img class="logo-top" src="img/logo.png" alt="Sopranos">
		</div>
			<div class="top-bar">
			<div class="top-bar-left">
				<ul class="menu">
					<li class="menu-text">Sopranos</li>
					<li><a href="index.php">Home</a></li>
				</ul>
			</div>
		</div>
		<h1> je pizza is de <?= $pizza; ?></h1>
	</body>
	<?php endif ?>
</html>
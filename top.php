<!doctype html>
<html class="no-js" lang="nl-NL">
	<head>
		<meta charset="utf-8"/>
		<title>Sopranos</title>
		<link rel="stylesheet" href="css/app.css" />
		<link rel="stylesheet" href="css/foundation.min.css">
		<script type="text/javascript" src="ajax/ajax.js"/>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="title" content="Pizza Sopranos">
		<meta name="keywords" content="pizza pizza pizza,porn,porno,sex,seks"><!--lol wrm doe ik dit zo-->
		<meta name="author" content="Patrick Ramge">
	</head>
	<body>
	</body>
		<?php
			$iplog = fopen("iplog.txt", "a");
			$txt = "user ip: ".$_SERVER["REMOTE_ADDR"]."\n";
			fputs($iplog, $txt);
			fclose($iplog);
		?>
		<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
		<script src="js/foundation.js"></script>
		<div class="top text-center">
			<img class="logo-top" src="img/logo.png" alt="Sopranos">
		</div>
		<div class="top-bar">
			<div class="top-bar-left">
				<ul class="menu">
					<li><a href="index.php">Shop</a></li>
					<li><a href="cart.php">Winkelwagen</a></li>
				</ul>
			</div>
		</div>
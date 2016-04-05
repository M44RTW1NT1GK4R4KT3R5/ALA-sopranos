<?php session_start();?>
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
		<meta name="keywords" content="pizza pizza pizza"><!--lol wrm doe ik dit zo-->
		<meta name="author" content="Patrick Ramge">
	</head>
	<body>
		<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
		<script src="js/foundation.js"></script>
		<div class="top text-center">
			<img class="logo-top" src="img/logo.png" alt="Sopranos">
		</div>
		<hr>
		<div class="row column text-center">
			<h2>Onze pizza`s</h2>
			<hr>
		</div>
		<div id="msg"></div>
		<div class="row small-up-2 large-up-4">
			<div class="column">
				<img class="thumbnail" src="img/pizza-soprano.png">
				<h5>Pizza Soprano</h5>
				<p>€7</p>
				<button type="button" onclick="AJAX('add.php?pizza=sopranos pizza')" class="button expanded">Bestel</button>
			</div>
			<div class="column">
				<img class="thumbnail" src="img/pizzapatrick.jpg">
				<h5>Vierkantpizza van de chef</h5>
				<p>$8</p>
				<button type="button" onclick="AJAX('add.php?pizza=vierkante pizza')" class="button expanded">Bestel</button>
			</div>
			<div class="column">
				<img class="thumbnail" src="http://placehold.it/300x400">
				<h5>Nulla At Nulla Justo, Eget</h5>
				<p>$400</p>
				<a href="#" class="button expanded">Buy</a>
			</div>
			<div class="column">
				<img class="thumbnail" src="http://placehold.it/300x400">
				<h5>Nulla At Nulla Justo, Eget</h5>
				<p>$400</p>
				<a href="#" class="button expanded">Buy</a>
			</div>
		</div>
		<hr>
<div class="row column">
<div class="callout primary">
<h3>Really big special this week on items.</h3>
</div>
</div>
<hr>
<div class="row column text-center">
<h2>Some Other Neat Products</h2>
<hr>
</div>
<div class="row small-up-2 medium-up-3 large-up-6">
<div class="column">
<img class="thumbnail" src="http://placehold.it/300x400">
<h5>Nulla At Nulla Justo, Eget</h5>
<p>$400</p>
<a href="#" class="button small expanded hollow">Buy</a>
</div>
<div class="column">
<img class="thumbnail" src="http://placehold.it/300x400">
<h5>Nulla At Nulla Justo, Eget</h5>
<p>$400</p>
<a href="#" class="button small expanded hollow">Buy</a>
</div>
<div class="column">
<img class="thumbnail" src="http://placehold.it/300x400">
<h5>Nulla At Nulla Justo, Eget</h5>
<p>$400</p>
<a href="#" class="button small expanded hollow">Buy</a>
</div>
<div class="column">
<img class="thumbnail" src="http://placehold.it/300x400">
<h5>Nulla At Nulla Justo, Eget</h5>
<p>$400</p>
<a href="#" class="button small expanded hollow">Buy</a>
</div>
<div class="column">
<img class="thumbnail" src="http://placehold.it/300x400">
<h5>Nulla At Nulla Justo, Eget</h5>
<p>$400</p>
<a href="#" class="button small expanded hollow">Buy</a>
</div>
<div class="column">
<img class="thumbnail" src="http://placehold.it/300x400">
<h5>Nulla At Nulla Justo, Eget</h5>
<p>$400</p>
<a href="#" class="button small expanded hollow">Buy</a>
</div>
</div>
<div class="callout large secondary">
<div class="row">
<div class="large-4 columns">
<h5>Vivamus Hendrerit Arcu Sed Erat Molestie</h5>
<p>Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed molestie augue sit.</p>
</div>
<div class="large-3 large-offset-2 columns">
<ul class="menu vertical">
<li><a href="#">One</a></li>
<li><a href="#">Two</a></li>
<li><a href="#">Three</a></li>
<li><a href="#">Four</a></li>
</ul>
</div>
<div class="large-3 columns">
<ul class="menu vertical">
<li><a href="#">One</a></li>
<li><a href="#">Two</a></li>
<li><a href="#">Three</a></li>
<li><a href="#">Four</a></li>
</ul>
</div>
</div>
</div>
<p class="leeg"><?php print_r($_SESSION)?></p>
	</body>
	</html>
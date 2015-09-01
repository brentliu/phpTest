<!DOCTYPE html>
<html lang="en">
<head>
  <title>American Gifted</title>
  <link rel="shortcut icon" href="https://40.media.tumblr.com/eabdab0b47e13ac7e7059246d220d213/tumblr_nrpn9nNwwh1sd5rlwo2_540.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
	<ul class="nav nav-pills navbar-custom nav-justified navbar-fixed-top">
		<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">Classes
			<span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="#">Math Olympiad Division E</a></li>
				<li><a href="#">Math Olympiad Division M</a></li>
				<li><a href="#">Science Bowl</a></li> 
			</ul>
		</li>
		<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">Our Competitions
			<span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="#">Annual Math Competiton</a></li>
				<li><a href="#">MathCounts Math Video Challenge</a></li>
				<li><a href="#">Science Bowl Tryouts</a></li> 
			</ul>
		</li>
		<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">Other Competitions
			<span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="#">Google something</a></li>
				<li><a href="#">Lego something</a></li>
				<li><a href="#">go do something</a></li> 
			</ul>
		</li>
		<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">About
			<span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="#">Contact</a></li>
				<li><a href="#">Our Program</a></li>
				<li><a href="#">Our Teachers</a></li> 
			</ul>
		</li>
  </ul>
	</div>
<div class="container-fluid">
  <div class="jumbotron j-margin">
    <div class="bob">
		<a href="/">
		<img class="img-responsive displayed" src="https://41.media.tumblr.com/c2471eb3fc4d4e5ddceaf1813abb52c8/tumblr_nrpn9nNwwh1sd5rlwo1_540.png" alt="American Gifted"/>  
		</a>
	</div>
	<div class="row">
		<div class="col-sm-5 rbob"><h4>EST.</h4></div>
		<div class="col-sm-2 bob"><a href="http://apple.com/" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-flash"></span> REGISTER NOW</a></div>
		<div class="col-sm-5 lbob"><h4>2012</h4></div>
	</div>
  </div>
  <img class="img-responsive img-float i-margin" src="https://40.media.tumblr.com/eabdab0b47e13ac7e7059246d220d213/tumblr_nrpn9nNwwh1sd5rlwo2_540.png" alt="icon">
	
	<hr><div class="p-margin">
	<?php
	$page = "home";
	if (isset($_GET["page"]))
		$page = $_GET["page"];
	$fname = "page-". $page .".html";
	if (! is_readable($fname))
		$fname = "page-home.html";
	$f = fopen($fname, "r");
	while ($line = fgets($f))
		print $line;
	?>
	</div></div>
	
<hr/>
<div class="bob f-margin">Copyright 2015 by American Gifted</div>
</body>
</html>

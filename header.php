<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Alexandre Masciulli</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Personal website">
		<meta name="author" content="Alexandre Masciulli">
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:regular,medium,thin,italic,mediumitalic,bold" title="roboto"/>

		<!-- Le styles -->
		<link href="assets/css/bootstrap.css" rel="stylesheet">
		<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
		<link href="./style.css" rel="stylesheet">

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.js"></script>
		<![endif]-->

		<!-- Fav and touch icons -->
<!-- 		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png"> -->
		<link rel="shortcut icon" href="./img/favicon.png">
	</head>

	<body>
		<div id="wrap">
			<div class="container">
				<div class="masthead">
					<h1>Alexandre Masciulli</h1>
					<div class="navbar">
						<div class="navbar-inner">
							<div class="container">
								<ul class="nav">
									<?php
									if(isset($_GET["p"])){
										switch($_GET["p"]){
											case "home":
												$page = "home";
												break;
											case "projects":
												$page = "projects";
												break;
											default:
												$page = "home";
												break;
										}
									}
									else{
										$page = "home";
									}
									?>
									<li <?php if($page == "home") echo 'class="active"' ?> ><a href="./">Home</a></li>
									<li <?php if($page == "projects") echo 'class="active"' ?> ><a href="./?p=projects">Projects</a></li>
									<li><a href="./alexandremasciulli.pdf">Resume</a></li>
								</ul>
							</div>
						</div>
					</div><!-- /.navbar -->
				</div>
			</div>
<!DOCTYPE html>
<html lang="en">
	<?php
	if(isset($_GET["p"])){
		switch($_GET["p"]){
			case "home":
				$page = "home";
				break;
			case "projects":
				$page = "projects";
				break;
			case "resume":
				$page = "resume";
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
    <head>
        <meta charset="utf-8" />
        <title>Alexandre Masciulli</title>
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:regular,medium,thin,italic,mediumitalic,bold" title="roboto"/>
        <link href="./design.css" rel="stylesheet">
		<link rel="stylesheet" href="slimbox/css/slimbox.css" type="text/css" media="screen" />
		<link rel="icon" type="image/png" href="img/favicon.png" />

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

    </head>
	
	<body>
		<div id="page">
			<header>
				<div id="maintitle">
					<h1><a href="./?p=home" title="Home" rel="home">Alexandre Masciulli</a></h1>
				</div>
				<nav>
					<ul>
						<li <?php if($page=="home") echo 'class="current"'; ?>><a href="./?p=home">Home</a></li>
						<li <?php if($page=="projects") echo 'class="current"'; ?>><a href="./?p=projects">Projects</a></li>
						<li <?php if($page=="resume") echo 'class="current"'; ?>><a href="./?p=resume">Resume</a></li>
					</ul>
				</nav>
			</header>
			<div id="box">
				<?php
						switch($page){
							case "home":
								include "home.php";
								break;
							case "projects":
								include "projects.php";
								break;
							case "resume":
								include "resume.php";
								break;
							default:
								include "home.php";
								break;
						}
				?>
			</div>
			<footer>
				Alexandre Masciulli - 2013
			</footer>
		</div>
	
	</body>
	
</html>
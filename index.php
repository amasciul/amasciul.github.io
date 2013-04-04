<?php
if(isset($_GET["p"])){
	switch($_GET["p"]){
		case "home":
			include "home.php";
			break;
		case "projects":
			include "projects.php";
			break;
		default:
			include "home.php";
			break;
	}
}
else{
	include "home.php";
}
?>
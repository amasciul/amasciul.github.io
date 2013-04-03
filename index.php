<?php
if(isset($_GET["p"])){
	switch($_GET["p"]){
		case "home":
			include "home.html";
			break;
		case "projects":
			include "projects.html";
			break;
		default:
			include "home.html";
			break;
	}
}
else{
	include "home.html";
}
?>
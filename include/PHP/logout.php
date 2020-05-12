<?php

	session_start();
	session_destroy();
	header("location:log.php");
	echo ("Vous vous êtes bien déconnectés");
	
?>
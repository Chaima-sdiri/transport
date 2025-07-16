<?php

	// connect to the database
	$connexion = mysqli_connect('localhost', 'root', '', 'abon');

	// check connection
	if(!$connexion){
		echo 'Connection error: '. mysqli_connect_error();
	}

?>

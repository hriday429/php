<?php

	$db = mysqli_connect('localhost', 'root', '', 'shah');


	if ( $db ){
		//echo "Database Connected";
	}
	else{
		echo "Database Connection Faild";
	}


?>
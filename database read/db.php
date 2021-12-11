<?php

$db= mysqli_connect('localhost','root','','shah');


If($db){
	//echo "database connected";
}
else{
	echo "database not connected";
}


?>
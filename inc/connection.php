<?php

$connection = mysqli_connect('localhost','root','','maheema_studio');

if(mysqli_connect_errno()){
	
	die('database connection faild'. mysqi_connect_error());
	
}
else{
	echo "connection successfull";
}
		

?>
<?php
	session_start();
	if(isset($_SESSION['id'])){}
	else{
		header("Location:index.php");
	}

?>
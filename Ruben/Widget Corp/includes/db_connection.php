<?php 
	define("DB_SERVER", "localhost");
	define("DB_PASSWORD", 1337);
	define("DB_USER", "widget_cms");
	define("DB_NAME", "widget_corp");

	$connection = mysqli_connect(DB_SERVER,DB_USER, DB_PASSWORD, DB_NAME);
	if(mysqli_connect_errno()){
		die("Database connection FAILED: " . 
				mysqli.connect_error()
				. " ("  . mysqli.connect_errno() . ")"
				);
	}
?>
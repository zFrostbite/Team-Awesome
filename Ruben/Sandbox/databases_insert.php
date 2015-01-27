<?php 

	$dbhost = "localhost";
	$dbuser = "widget_cms";
	$dbpass = "1337";
	$dbname = "widget_corp";
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	if(mysqli_connect_errno()){
		die("Database connection FAILED: " . 
				mysqli.connect_error()
				. " ("  . mysqli.connect_errno() . ")"
				);
	}


?>
<?php 
	$menu_name = "Today's Widget Trivia";
	$position = 4;
	$visible = 1;
	
	$menu_name = mysqli_real_escape_string($connection, $menu_name);
	
	$query 	= "INSERT INTO subjects (";
	$query .= "menu_name, position, visible";
	$query .= ") VALUES (";
	$query .= " '{$menu_name}', '{$position}', '{$visible}'";
	$query .= ")";
	$result = mysqli_query($connection, $query);
	// Query ERROR?
	if(!$result) {
		die("Database query failed.");
	}else{
		echo "Success!";
	}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="ISO-8859-1">
		<title>Databases</title>
	</head>
	<body>
		
	</body>
</html>

<?php mysqli_close($connection); ?>
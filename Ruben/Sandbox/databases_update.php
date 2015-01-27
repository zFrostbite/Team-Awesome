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
	$id = 6;
	$menu_name = "Delete me";
	$position = 4;
	$visible = 1;
	
	$query 	= "UPDATE subjects SET ";
	$query .= "menu_name 	= 	'{$menu_name}', ";
	$query .= "position 	= 	{$position}, ";
	$query .= "visible		=	{$visible} ";
	$query .= "WHERE id 	=	{$id} ";
	$query .= "";
	$result = mysqli_query($connection, $query);
	// Query ERROR?
	if($result && mysqli_affected_rows($connection) < 0) {
		echo "Success!";
	}else{
		die("Database query failed.");
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
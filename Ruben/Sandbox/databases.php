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
	// QUERY
	$query 	= 	"SELECT * ";
	$query 	.= 	"FROM subjects ";
	$query	.= 	"WHERE visible = 1 ";
	$query	.= 	"ORDER BY position ASC";
	
	$result = mysqli_query($connection, $query);
	// Query ERROR?
	if(!$result) {
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
	
		<ul><?php 
			// Use returned data if any.
			
			while($subject = mysqli_fetch_assoc($result)) {
				// oOutput data from each row
				?>
				<li> <?php  	echo $subject['menu_name'] . " (" . $subject['id'] .")" ; ?> </li>
				<?php
			} 
				?>
		</ul>
		
		<?php 
			// release the result.
			mysqli_free_result($result);
		
		?>
		</pre>
	</body>
</html>

<?php mysqli_close($connection); ?>
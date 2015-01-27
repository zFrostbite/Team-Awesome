<?php 
	session_start(); 
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="ISO-8859-1">
		<title>Sessions</title>
	</head>
	<body>
	<?php 
		$_SESSION["first_name"] = "Kevin";
		$name = $_SESSION['first_name'];
		echo $name;
		?>
	</body>
</html>
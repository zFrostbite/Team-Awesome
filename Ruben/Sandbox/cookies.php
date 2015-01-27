<?php 
	$name 	= "test";
	$value 	= "Hello.";
	$expire = time() + (60 * 60 * 24 * 7); // add seconds.
	
	//Setcookie($name, $value, $expire);
	//setcookie($name);
	//setcookie($name, null, $expire);
	// -- preferred
	setcookie($name, null, time() - 3600);
?>
	
<!DOCTYPE html>
<html>
	<head>
		<meta charset="ISO-8859-1">
		<title>Cookies</title>
	</head>
	<body>
	
	<?php 
	$test =  isset($_COOKIE["test"]) ? $_COOKIE["test"] : "";
	echo $test;
	?>
	
	
	
	</body>
</html>
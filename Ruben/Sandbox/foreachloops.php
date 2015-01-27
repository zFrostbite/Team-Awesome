<!DOCTYPE html>
<html>
	<head>
		<meta charset="ISO-8859-1">
		<title>Loops: Foreach</title>
	</head>
	<body>
	<?php 
	
	$ages = array(4, 8, 15, 16, 23, 42);
	foreach($ages as $age) {
		echo "Age: {$age}<br />";
	}
	
	?>
	</body>
</html>
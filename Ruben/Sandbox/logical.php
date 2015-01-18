<!DOCTYPE html>
<html>
	<head>
		<meta charset="ISO-8859-1">
		<title>Logical </title>
	</head>
	<body>
	<?php 
		$a = 3;
		$b = 4;
		
		if($a > $b)
		{
			echo "a is larger than b";
			
		}else{
			echo "a isn't larger than b";
		}
		?>
		<br />
		<?php 
		$new_user = true;
		
		if($new_user) {
			echo "<h1>Welcome!</h1>";
			echo "<p>We are glad you decided to join us!</p>";	
		}
		?>
		<br />
		
	</body>
</html>
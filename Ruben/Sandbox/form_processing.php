<!DOCTYPE html>
<html>
	<head>
		<meta charset="ISO-8859-1">
		<title>Insert title here</title>
	</head>
	<body>
		<pre><?php 
		
		print_r($_POST);
		
		?>
		 </pre>
		<br />
		
		<?php 
		
		$username = isset($_POST['username']) ? $_POST['username'] : "";
		$password = isset($_POST['password']) ? $_POST['password'] : "Not defined";
		echo "Username is {$username} and password is {$password}"
		?>
		<br />
		
		<?php 
		
		
		
		
		?>
	</body>
</html>
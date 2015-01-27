<!DOCTYPE html>
<html>
	<head>
		<meta charset="ISO-8859-1">
		<title>Validation Errors</title>
	</head>
	<body>
		<?php 
		require_once('validation_functions.php');
		$errors = array();
		
		// $username = trim($_POST["username"]);
		$username = trim("Rubz");
		if(!has_presence($username)) {
			$errors['username'] = "Username cannot be blank";
		}
		?>
		<?php echo form_errors($errors); ?>
	</body>
</html>
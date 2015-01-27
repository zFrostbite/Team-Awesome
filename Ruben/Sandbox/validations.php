<!DOCTYPE html>
<html>
	<head>
		<meta charset="ISO-8859-1">
		<title>Validations</title>
	</head>
	<body>
		<?php 
		
		// * presence
		$value = trim("0");
		if(!isset($value) || empty($value) && !is_numeric($value) )  {
			echo "Validation failed. <br />";
		}
		
		// * string length
		
		$value 	= "abcd";
		$min 	= 3;
		if(strlen($value) < $min) {
			echo "Validation failed. <br />";
		}
		
		// max length
		$max = 6;
		if(strlen($value) > $max) {
			echo "Validation failed. <br />";
		}
		// * type
		$value = "2";
		if(!is_string($value)) {
			echo "Validation failed. <br />";
		}
		// * inclusion in a set
		$value = "1";
		$set = array("1", "2", "3", "4");
		if(!in_array($value, $set)) {
			echo "Validation failed. <br />";
		}
		// * uniqueness
		// Uses a DB to check uniqueness
		
		// * format
		// use a regex on a astring
		// preg_match($regex, $subject)
		if(preg_match("/PHP/", "PHP is fun")){
			echo "Matched! PHP<br />";
		}else{
			echo "No match!<br />";
		}
		$value = "lol@lol.com";
		if(!preg_match("/@/", $value)){
			echo "No match!<br />";
		}else{
			echo "Matched! @<br />";
		}
		if(strstr($value, "@") === false) {
			echo "Validation failed.";
		}
		
		?>
	</body>
</html>
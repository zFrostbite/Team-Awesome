<?php 
	function redirect_to($new_location) {
		header("Location: " . $new_location);
		exit;
	}
	
	$logged_in = $_GET['logged_in'];
	if($logged_in == '1'){
		redirect_to("basic.html");
	}else{
		redirect_to("http://www.lynda.com");
	}
	redirect_to("basic.html");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="ISO-8859-1">
		<title>Insert title here</title>
	</head>
	<body>

	</body>
</html>
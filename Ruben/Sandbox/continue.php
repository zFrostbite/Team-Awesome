<!DOCTYPE html>
<html>
	<head>
		<meta charset="ISO-8859-1">
		<title>Insert title here</title>
	</head>
	<body>
		<?php 
			$age = array(16, 18, 29, 30, 40, 15, 32, 5, 10, 22, 67);
			$i = 0;
			while($i <= 11){
				if(current($age) == 30){
					echo "I found " . current($age) . "!<br />";
					$i++;
					next($age);
					continue;
				}
				echo "{$i}: " . current($age) . "<br />";
				$i++;
				next($age);
			}
			
			
			?>
	</body>
</html>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="ISO-8859-1">
		<title>Loops</title>
	</head>
	<body>
		<?php 
		
		/*$count = 0;
		while($count <= 10) {
			if(!empty($count % 2))
			{
				echo "{$count}<br /> ";
			}else{
			echo $count . ", ";
			}
			$count ++;
		}
		*/
		
		$count = 0;
		while($count <= 10){
			echo $count . ", ";
			$count++;
		} ?>
		<br />
		<?php 
		for($count = 0; $count <= 10; $count++){
			
			echo $count . ", ";
		}
		?>
	</body>
</html>
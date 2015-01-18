<!DOCTYPE html>
<html>
	<head>
		<meta charset="ISO-8859-1">
		<title>Array Functions</title>
	</head>
	<body>
		<?php $numbers = array(8, 23, 15, 42, 16, 4); ?>
		Count: 			<?php echo count($numbers); ?> <br/>
		Min: 			<?php echo max($numbers); ?> <br/>
		Max: 			<?php echo min($numbers); ?> <br/>
		<br />
		<pre>	
			Sort: 			<?php sort($numbers); print_r($numbers);?> <br/>
			Reverse sort: 	<?php rsort($numbers); print_r($numbers);?>	<br/> 
		</pre>
		
		
	</body>
</html>
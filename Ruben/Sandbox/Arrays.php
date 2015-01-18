<!DOCTYPE html>
<html>
	<head>
		<meta charset="ISO-8859-1">
		<title>Arrays</title>
	</head>
	<body>
		<?php 
		
		
		$numbers = array(4, 8, 15, 16, 23, 42);
		echo $numbers[0];
		
		
		?>
		<br  />
		<?php $mixed = array(6, "fox", "dog", array("x", "y", "Z"))   ?>
		<?php echo $mixed[2]; ?><br />
		<?php // echo //$mixed[3]; ?><br />
		<?php //echo //$mixed ?><br />
		
		<?php echo $mixed[3][1]; ?><br />
		<?php $mixed[2] = "cat"; ?><br />
		<?php $mixed[4] = "mouse";?> <br />
		<?php $mixed[]  = "horse";?> <br />
		
		<pre>
			<?php echo print_r($mixed); ?> <br/>
		</pre>
	</body>
</html>
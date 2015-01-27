<!DOCTYPE html>
<html>
	<head>
		<meta charset="ISO-8859-1">
		<title>Insert title here</title>
	</head>
	<body>
	
		<?php $i = 1;while($i <= 10){ 
			$id = $i;
			$i++;
		} ?>
		<a href="second_page.php?id=<?php echo $id;?>">"Hallais" </a>
	</body>
</html>
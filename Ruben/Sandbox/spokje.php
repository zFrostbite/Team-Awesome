<!DOCTYPE html>
<html>
	<head>
		<meta charset="ISO-8859-1">
		<title>Insert title here</title>
	</head>
	<body>
	<?php 
	
	$a = 4;
	$b = 4;
	
	if($a > $b) {
		
		echo "Lols. A e jeddna større enn B.";
	}elseif($a == $b) {
		
		echo "Jeddna dei e like.";
		
	}else{
		
		echo "A e mindre enn b";
	}
	?>
	<br />
	<?php 
	$fornavn = "Kjetil";
	$etternavn = "Bakken";
	echo "Jeddna du hette " .$fornavn ." " . $etternavn . " santvell? Mja.";

	
	?>
	</body>
</html>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="ISO-8859-1">
		<title>Insert title here</title>
	</head>
	<body>
	<?php 
	
	$a = 4;
	$b = 3;
	
	if($a > $b) {
		
		echo "Lols. A e jeddna st�rre enn B.";
	}elseif($a == $b) {
		
		echo "Jeddna dei e like.";
		
	}else($a < $b) {
		
		echo "Tenkje meg at a e mindre enn b eg da.";
	}
	?>
	<br />
	<?php 
	$fornavn = "Kjetil";
	$etternavn = "Bakken";
	echo "Jeddna du hette" .$fornavn ." " . $etternavn . " santvell? Mja.";

	
	?>
	</body>
</html>
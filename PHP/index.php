<?php
	$mysql_ip = '127.0.0.1';
	$mysql_username = 'root';
	$mysql_password = '';
	
	@mysql_connect($mysql_ip,$mysql_username, $mysql_password) or die('Unable to connect to MySQL Database!'); 
	echo 'Connection with MySQL DB established';
	
	
	
?>
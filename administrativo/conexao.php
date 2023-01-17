<?php

/*
$conecta = mysqli_connect("127.0.0.1","root","","projeto_pi");

if (!$conecta){
	echo "Error: Unble to connect to MySQL." . PHP_EOL;
	echo "Debugging errno: " . mysqli_connect_errno(). PHP_EOL;
	echo "Debugging error: " . mysqli_connect_error(). PHP_EOL;
	exit();
}
*/
//$conecta = mysqli_connect('localhost', 'root', '') or die(mysqli_error());
//mysqli_select_db($conecta, 'projeto_epi');

$conecta = mysqli_connect('localhost', 'root', '123456789');
mysqli_select_db($conecta, 'fullturismo');

?>
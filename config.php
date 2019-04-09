<?php  

try {
	
	$conn = new PDO("mysql:dbname=wishbox;host=localhost","root","");

} catch (PDOException $e) {
	echo "Falhou: ".$e->getMessage();
}


?>
<?php  

class Usuarios {
	
	private $conn;

	public function __construct($conn) //faz a conexão com o banco;
	{
		$this->conn = $conn;
	}

	public function cadEmail($email) //cadastra o email
	{

		$sql = "INSERT INTO `clientes`(email) VALUES (:email)";
		$sql = $this->conn->prepare($sql);
		$sql->bindValue(":email", $email);
		$sql->execute();

	}



}

?>
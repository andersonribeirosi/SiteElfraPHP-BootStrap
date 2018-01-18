<?php 
	$host = "mysql.hostinger.com.br";
	$user = "u678540954_root";
	$pass = "5414jb";
	$banco = "u678540954_loja";

	$conn = new mysqli ($host, $user, $pass, $banco);
	if ($conn->connect_error){
		die ("Falha na conexão: ". $conn->connect_error);
	}
 ?>
<?php 
	require ("db.php");

	$nome = $_POST['inputNome'];
	$email = $_POST['inputEmail'];
	$senha = md5($_POST['inputPassword']);

	$sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

	if ($conn->query($sql)==TRUE){
		echo "Realizado com sucesso";
		header('Location: login.php');
	}else{
		echo $conn->error;
	}
	$conn->close();
 ?>
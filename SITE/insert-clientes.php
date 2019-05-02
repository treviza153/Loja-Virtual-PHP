<?php

	include "conexao.php";

	$nome 		= $_POST['nome'];
	$email 		= $_POST['email'];
	$cpf 		= $_POST['cpf'];
	$sexo 		= $_POST['sexo'];
	$senha 		= $_POST['senha'];
	$confsenha 	= $_POST['confsenha'];

	$sql = "INSERT INTO clientes (nome, email, cpf, sexo, senha, confsenha) VALUES ('$nome','$email','$cpf','$sexo','$senha','$confsenha')";

	if ($conn->query($sql) === TRUE) {
		echo "Salvo com sucesso";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

	header('Location: index.php');
	

?>
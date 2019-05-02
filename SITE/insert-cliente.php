<?php

	include "conexao.php";
	$id = $_GET['id'];


	$nome 		= $_POST['nome'];
	$email 		= $_POST['email'];
	$cpf 		= $_POST['cpf'];
	$endereco	= $_POST['endereco'];
	$sexo 		= $_POST['sexo'];
	$senha 		= $_POST['senha'];
	$confsenha 	= $_POST['confsenha'];

	$sql = "INSERT INTO clientes (nome, email, cpf, endereco, sexo, senha, confsenha) VALUES ('$nome','$email','$cpf','$endereco','$sexo','$senha','$confsenha')";

	if ($conn->query($sql) === TRUE) {
		echo "Salvo com sucesso";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

	header("Location: cadastro.php?id=$id");
	

?>
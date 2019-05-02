<?php

	include "conexao.php";

	$id 	= $_POST['id'];
	$nome 	= $_POST['nome'];
	$email 	= $_POST['email'];
	$cpf 	= $_POST['cpf'];
	$sexo 	= $_POST['sexo'];
	$senha 	= $_POST['senha'];

	$sql = "UPDATE clientes SET nome='$nome', email='$email', cpf='$cpf', sexo='$sexo', senha='$senha'   WHERE id = $id ";

	if ($conn->query($sql) === TRUE) {
		echo "Salvo com sucesso";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	
	header('Location: lista-clientes.php');

?>
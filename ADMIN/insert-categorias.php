<?php

	include "conexao.php";

	$nome 	= $_POST['nome'];
	
	$sql = "INSERT INTO categorias (nome) VALUES ('$nome')";

	if ($conn->query($sql) === TRUE) {
		echo "Salvo com sucesso";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	
	header('Location:lista-categorias.php');

?>
<?php

	include "conexao.php";

	$id 	= $_POST['id'];
	$nome 	= $_POST['nome'];
	$login 	= $_POST['login'];
	$senha 	= $_POST['senha'];


	$sql = "UPDATE usuarios SET nome='$nome', login='$login', senha='$senha'WHERE id = $id ";

	if ($conn->query($sql) === TRUE) {
		echo "Salvo com sucesso";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	
	header('Location: lista-usuarios.php');

?>
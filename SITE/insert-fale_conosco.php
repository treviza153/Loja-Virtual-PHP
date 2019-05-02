<?php

	include "conexao.php";

	$nome 		= $_POST['nome'];
	$email 		= $_POST['email'];
	$relatorio 	= $_POST['relatorio'];

	$sql = "INSERT INTO fale_conosco (nome, email, relatorio) VALUES ('$nome','$email','$relatorio')";

	if ($conn->query($sql) === TRUE) {
		echo "Salvo com sucesso";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	
	header('Location: fale_conosco.php');

?>
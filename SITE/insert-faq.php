<?php

	include "conexao.php";

	$nome 		= $_POST['nome'];
	$data 		= $_POST['data'];
	$mensagem 	= $_POST['mensagem'];

	$sql = "INSERT INTO faq (nome, data, mensagem) VALUES ('$nome','$data','$mensagem')";

	if ($conn->query($sql) === TRUE) {
		echo "Salvo com sucesso";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	
	header('Location: faq.php');

?>
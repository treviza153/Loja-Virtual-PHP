<?php

	include "conexao.php";

	$id 	= $_POST['id'];
	$nome 	= $_POST['nome'];

	$sql = "UPDATE faq SET nome='$nome' data='$data' mensagem='$mensagem' resposta='$resposta' WHERE id = $id ";

	if ($conn->query($sql) === TRUE) {
		echo "Salvo com sucesso";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	
	header('Location: lista-faqs.php');

?>
<?php

	include "conexao.php";

	$id 	= $_POST['id'];
	$nome 	= $_POST['nome'];
	$email 	= $_POST['email'];
	$relatorio 	= $_POST['relatorio'];

	$sql = "UPDATE fale_conosco SET nome='$nome', email='$email', relatorio='$relatorio' WHERE id = $id ";

	if ($conn->query($sql) === TRUE) {
		echo "Salvo com sucesso";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	
	header('Location: lista-fale_conosco.php');

?>
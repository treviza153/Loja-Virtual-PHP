﻿<?php

	include "conexao.php";

	$id 	= $_GET['id'];

	$sql = "DELETE FROM clientes WHERE id = $id";
	
	if ($conn->query($sql) === TRUE) {
		echo "Salvo com sucesso";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	
	header('Location: lista-clientes.php');

?>
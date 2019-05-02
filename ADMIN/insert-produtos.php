<?php

	include "conexao.php";

	$imagem 	= $_POST['imagem'];
	$nome 	= $_POST['nome'];
	$descricao = $_POST['descricao'];
	$valor 	= $_POST['valor'];
	$quantidade = $_POST['quantidade'];
	$id_categoria = $_POST['id_categoria'];

	$sql = "INSERT INTO produtos (imagem, nome, descricao, valor,quantidade,id_categoria) VALUES ('$imagem','$nome','$descricao','$valor','$quantidade',$id_categoria)";

	if ($conn->query($sql) === TRUE) {
		echo "Salvo com sucesso";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	
	header('Location:lista-produtos.php');

?>
<?php

	include "conexao.php";

	$imagem 	= $_POST['imagem'];
	$id 	= $_POST['id'];
	$nome 	= $_POST['nome'];
	$descricao = $_POST['descricao'];
	$valor 	= $_POST['valor'];
	$quantidade = $_POST['quantidade'];
	/*$id_categoria = $_POST['id_categoria'];*/

	$sql = "UPDATE produtos SET  imagem='$imagem', nome='$nome', descricao='$descricao', valor='$valor', quantidade='$quantidade' WHERE id = $id ";

	if ($conn->query($sql) === TRUE) {
		echo "Salvo com sucesso";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	
	header('Location:lista-produtos.php');

?>
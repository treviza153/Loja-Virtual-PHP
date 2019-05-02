
<?php

$enderecoServidor = "localhost";
$usuario = "root";
$senha = "";
$nomeBanco = "loja";
$conn = mysqli_connect($enderecoServidor, $usuario, 
						$senha, $nomeBanco);
if (!$conn) {
   die("<h1> VERIFIQUE SE O BANCO DE DADOS <b style='color:red'>LOJA</b> FOI CRIADO Erro de conexão: " . mysqli_connect_error());
}
?>

<?php
	include "header.php";
	include "conexao.php";
	include "menu.php";
	$id = $_GET['id'];
	$sql = "SELECT * FROM produtos WHERE id = $id";
	$result=mysqli_query($conn,$sql);
	$linha = mysqli_fetch_array($result,MYSQLI_ASSOC);
?>
<br><br>

	<input type="hidden" name="id" value="<?php print $linha['id']; ?>" />

	<table style="margin: auto;">
		<tr>
			<td>
				<img style="width: 350px" src="masculino/<?php print $linha['imagem']; ?>">
			</td>
		</tr>
	</table><br><br><br>

	<div style="border: 2px solid black; font: 20px 'verdana',cursive; width: 50%; margin-left: 450px;">
			Informações de Pagamento<br><br>
			Nome do Produto: <?php print $linha['nome']; ?><br>
			Valor: R$<?php print $linha['valor']; ?><br>
			Descrição: <?php print $linha['descricao']; ?><br>
			Nome do Cliente: Julio Cesar<br>
			Email: julio.cesar@email.com<br>
			CPF:159.999.666.10<br>
			Sexo:Masculino<br><br>

			Digite o endereço de entrega: <input style="font: 15px 'verdana', cursive; border: 1px solid black; border-radius: 2px; width: 500px; height: 20px;" name="endereco" type="text" required><br> <br><br>
		</div><br><br><br>

	<div class="tituloProd"> Pague no Cartão de Crédito </div>

	<form id="formCadastro2" method="post" style="font: 25px 'verdana', cursive; margin-left: 700px; margin-bottom: 50px;">
		<table>
			<tr>
				<td>
					<label for="n-cartao">Número do Cartão:</label> 
				</td>
			</tr>

			<tr>
				<td>
					<input style="font: 20px 'verdana', cursive; border: 1px solid black; border-radius: 2px; width: 200px; height: 25px;" name="nome" type="text" maxlength="50" required><br><br>
				</td>
			</tr>

			<tr>
				<td>
					<label for="email">Nome do Titular:</label> 
				</td>
			</tr>

			<tr>
				<td>
					<input style="font: 20px 'verdana', cursive; border: 1px solid black; border-radius: 2px; width: 500px; height: 25px;" name="email" type="text" maxlength="50" required><br> <br>
				</td>
			</tr>

			<tr>
				<td style="">
					<label for="cpf">Data de validade:</label>
				</td>
			</tr>

			<tr>
				<td>
					<input style="font: 20px 'verdana', cursive; border: 1px solid black; border-radius: 2px; width: 150px; height: 25px;" name="cpf" type="text" maxlength="10" required><br> <br>
				</td>
			</tr>

			<tr>
				<td style="">
					<label for="cpf">Código de Segurança:</label>
				</td>
			</tr>

			<tr>
				<td>
					<input style="font: 20px 'verdana', cursive; border: 1px solid black; border-radius: 2px; width: 50px; height: 25px;" name="cpf" type="text" maxlength="3" required><br> <br>
				</td>
			</tr>
		</table>

			<br><a href="checkout.php" class="add"> FINALIZAR COMPRA </a>
	</form>

	<div class="tituloProd"> Pague no Boleto </div>
		<div style="text-align: center; margin-right: 110px; font: 15px 'verdana',cursive;">
			<a href="checkout.php" title="Gere seu boleto" onclick="pedido3()"><img style="width: 100px;" src="boleto.png" alt="GERAR BOLETO"></a><br><br>
				AVISO:<br>
				Você poderá visualizar ou imprimir após a finalização do pedido.<br>A data de vencimento é de 2 dias corridos após a conclusão do pedido. Após esta data, ele perderá a validade.
		</div><br><br>




			
<br><br>
<?php
	include "footer.php";
?>	
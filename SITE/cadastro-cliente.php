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

<div class="tituloProd"> Preencha as informações para o seu cadastro!</div>

<form id="formCadastro2" method="post" action="insert-cliente.php?id=<?php print $id; ?>" style="font: 25px 'verdana', cursive; margin-left: 700px; margin-bottom: 50px;">
		<table>
			<tr>
				<td>
					<label for="senha">Nome:</label> 
				</td>
			</tr>

			<tr>
				<td>
					<input style="font: 20px 'verdana', cursive; border: 1px solid black; border-radius: 2px; width: 500px; height: 25px;" name="nome" type="text" maxlength="50" required><br><br>
				</td>
			</tr>

			<tr>
				<td>
					<label for="email">E-mail:</label> 
				</td>
			</tr>

			<tr>
				<td>
					<input style="font: 20px 'verdana', cursive; border: 1px solid black; border-radius: 2px; width: 500px; height: 25px;" name="email" type="text" maxlength="50" required><br> <br>
				</td>
			</tr>

			<tr>
				<td style="">
					<label for="cpf">CPF:</label>
				</td>
			</tr>

			<tr>
				<td>
					<input style="font: 20px 'verdana', cursive; border: 1px solid black; border-radius: 2px; width: 500px; height: 25px;" name="cpf" type="text" maxlength="15" required><br> <br>
				</td>
			</tr>

			<tr>
				<td style="">
					<label for="cpf">Sexo:</label>
				</td>
			</tr>

			<tr>
				<td>
					<input type="radio" name="sexo" value="M">Masculino
					<input type="radio" name="sexo" value="F">Feminino<br><br>
				</td>
			</tr>

			<tr>
				<td style="">
					<label for="senha">Senha: </label>
				</td>
			</tr>

			<tr>
				<td>
					<input style="font: 20px 'verdana', cursive; border: 1px solid black; border-radius: 2px; width: 500px; height: 25px;" name="senha" type="password" minlength="8" required><br> <br>
				</td>
			</tr>

			<tr>
				<td style="">
					<label for="confsenha">Confirmação de Senha: </label>
				</td>
			</tr>

			<tr>
				<td>
					<input style="font: 20px 'verdana', cursive; border: 1px solid black; border-radius: 2px; width: 500px; height: 25px;" name="confsenha" type="password" minlength="8" required><br> <br>
				</td>
			</tr>

			<tr>
				<td>
					<input type="reset"  value="Limpar" style="cursor: pointer;">
					<a href="finalizar.php?id=<?php print $linha['id']; ?>"><input type="submit"  value="Enviar" style="cursor: pointer;"></a>
				</td>
			</tr>
		</table>
	</form>



<br><br>
<?php
include "footer.php" 
?>

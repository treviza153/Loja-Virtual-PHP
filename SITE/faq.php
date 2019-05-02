
<?php

	include "header.php";

?>
	
<div class="tituloProd" style="margin-top: 50px; margin-bottom: 50px;"> Preencha os Campos para o envio da sua dúvida</div>
		
	<form method="post" action="insert-faq.php" style="font: 25px 'verdana', cursive; margin-left: 700px; margin-bottom: 50px;">
		<table>
			<tr>
				<td>
					<label for="nome">Nome:</label> 
				</td>
			</tr>

			<tr>
				<td>
					<input style="font: 20px 'verdana', cursive; border: 1px solid black; border-radius: 2px; width: 500px; height: 25px;" name="nome" type="text" maxlength="50" required><br><br>
				</td>
			</tr>

			<tr>
				<td>
					<label for="data">Data:</label> 
				</td>
			</tr>

			<tr>
				<td>
					<input style="font: 20px 'verdana', cursive; border: 1px solid black; border-radius: 2px; width: 500px; height: 25px;" name="data" type="text" maxlength="50" required><br> <br>
				</td>
			</tr>

			<tr>
				<td style="">
					<label for="mensagem">Mensagem:</label>
				</td>
			</tr>

			<tr>
				<td>
					<textarea name="mensagem" cols="20" rows="10" style="font: 15px 'verdana', cursive; border: 1px solid black; border-radius: 2px; width: 500px;"></textarea>
				</td>
			</tr>

			<tr>
				<td>
					<input type="reset"  value="Limpar" style="cursor: pointer;">
					<input type="submit"  value="Enviar" style="cursor: pointer;">
				</td>
			</tr>
		</table>
	</form>

<?php

include "footer.php";

?>











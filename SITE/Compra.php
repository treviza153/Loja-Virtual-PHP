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
		<table style=" margin:auto;">
		<tr>
		<td><br><br>
						<a href="login.php?id=<?php print $linha['id']; ?>" class="add">Login</a>
						<a href="cadastro-cliente.php?id=<?php print $linha['id']; ?>" class="add"> Não Possuo uma conta </a><br><br>
			</form>
		</td>
		</tr>
		</table>






<br><br>
<?php
	include "footer.php"
?>
	
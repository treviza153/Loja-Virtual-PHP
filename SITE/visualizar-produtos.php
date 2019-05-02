<?php
	include "header.php";
	include "conexao.php";
	include "menu.php";
	$id = $_GET['id'];
	$sql = "SELECT * FROM produtos WHERE id = $id";
	$sql2 = "SELECT * FROM produtos";
	$result=mysqli_query($conn,$sql);
	$result2=mysqli_query($conn,$sql2);
	$linha = mysqli_fetch_array($result,MYSQLI_ASSOC);

?>
<br><br>

	<input type="hidden" name="id" value="<?php print $linha['id']; ?>" />

	<div class="tituloProd"><?php print $linha['nome']; ?></div>

	<div style="text-align: center; margin-bottom: 50px; margin-left: -150px;">
			<div><img style=" width: 500px; height: 500px; margin-left: 150px; margin-top: 50px;" class="vitrine1" src="masculino/<?php print $linha['imagem']; ?>" alt="<?php print $linha['nome']; ?>"></div>
		
			<div><br><h2 class="precos1"><?php print $linha['nome']; ?></h2></div>
				
			<div><br><h2 class="precos1">Valor: R$<?php print $linha['valor']; ?></h2></div>

			<div><br><h2 class="precos1">Descrição: <?php print $linha['descricao']; ?></h2></div>
			
			<div style="margin-left: 80px;"><br><a href="Compra.php?id=<?php print $linha['id']; ?>" class="add"> SEGUIR COM A COMPRA </a></div>
		</div>
		<hr>

<?php
				
		while($linha2 = mysqli_fetch_array($result2,MYSQLI_ASSOC)){


	?>
		<div style="display: inline-block; text-align: center; margin-bottom: 50px;">
			<div><img style="margin-left: 150px; margin-top: 50px;" class="vitrine1" src="masculino/<?php print $linha2['imagem']; ?>" alt="<?php print $linha2['nome']; ?>"></div>
		
			<div><br><h2 class="precos1"><?php print $linha2['nome']; ?></h2></div>
				
			<div><br><h2 class="precos1">Valor: R$<?php print $linha2['valor']; ?></h2></div>
			
			<div style="margin-left: 80px;"><br><a href="visualizar-produtos.php?id=<?php print $linha['id']; ?>" class="add"> COMPRAR </a></div>
		</div>
	<?php
		}
	?>

	
<?php
	include "footer.php";
?>	
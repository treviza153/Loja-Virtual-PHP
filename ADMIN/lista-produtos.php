

<?php
	include "header.php";
	include "menu.php";
	include "conexao.php";

	
	$sql = "

			SELECT *,p.nome as nome_prod,c.nome as nome_cat,p.id as idp FROM produtos as p
				INNER JOIN  categorias as c ON c.id = p.id_categoria";
	$result=mysqli_query($conn,$sql);
	
?>


<div class="container">
	<div class="row">
		<div class="col-md-12">
		<h1 style="color:#337ab7">Produtos:</h1>
			<table class="table table-hover table-bordered">
				<tr>
					<td align="center"><b>Nome</td>
					<td align="center"><b>Descrição</td>
					<td align="center"><b>Valor R$</td>
					<td align="center"><b>Quantidade</td>
					<td align="center"><b>Categoria</td>
					<td align="center"><b>ID Categoria</td>
					<td align="center"><a href="cadastro-produtos.php?id=<?php print $linha['idp']; ?>"><img src="icones/add.png" width="25" height="25" style=""></a></td>
				</tr>
			<?php		
				while($linha = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			?>
				<tr>
					<td><?php print $linha['nome_prod']; ?></td>
					<td><?php print $linha['descricao']; ?></td>
					<td>R$ <?php print $linha['valor']; ?></td>
					<td><?php print $linha['quantidade']; ?></td>
					<td><?php print $linha['nome_cat']; ?></td>
					<td><?php print $linha['id_categoria']; ?></td>
					<td></td>
					<td align="center"><a href="deletar-produtos.php?id=<?php print $linha['idp']; ?>"><img src="icones/delete.png" width="25" height="25" style=""></a></td>
					<td align="center"><a href="editar-produtos.php?id=<?php print $linha['idp']; ?>"><img src="icones/edita.png" width="25" height="25" style=""></a></td>
				</tr>
			<?php
			}
			?>
		</div>
	</div>
</div>

<?php
	include "footer.php";
?>
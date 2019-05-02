
<?php
	include "header.php";

	include "conexao.php";
	include "menu.php";
	
	$id = $_GET['id'];

	$sql = "SELECT * FROM produtos WHERE id = $id";
	$result=mysqli_query($conn,$sql);
	$linha = mysqli_fetch_array($result,MYSQLI_ASSOC);
?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form  method="post" action="atualizar-produtos.php">
					<h1 style="color:#337ab7">Editar Produtos:</h1>
					<input type="hidden" name="id" value="<?php print $linha['id']; ?>"/>
					
						<div class="form-group">
						<label for="nome">Imagem</label>
						<input type="text" name="imagem" class="form-control" value="<?php print $linha['imagem']; ?>"/>
					</div>
					
					<div class="form-group">
						<label for="nome">Nome</label>
						<input type="text" name="nome" class="form-control" value="<?php print $linha['nome']; ?>"/>
					</div>

					<div class="form-group">
						<label for="nome">Descrição</label>
						<input type="text" name="descricao" class="form-control" value="<?php print $linha['descricao']; ?>"/>
					</div>

					<div class="form-group">
						<label for="nome">Valor</label>
						<input type="text" name="valor" class="form-control" value="<?php print $linha['valor']; ?>"/>
					</div>

					<div class="form-group">
						<label for="nome">Quantidade</label>
						<input type="number" name="quantidade" class="form-control" value="<?php print $linha['quantidade']; ?>"/>
					</div>

					<div class="form-group">
						<label for="nome">Categoria</label>
						<input type="text" name="categoria" class="form-control" value="<?php print $linha['id_categoria']; ?>"/>
					</div>
				
					<input type="submit" value="Salvar" class="btn btn-success btn-sm">
			</form> 
		</div>
	</div>
</div>
<?php
	include "footer.php";
?>

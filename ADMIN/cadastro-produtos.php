

<?php
	include "header.php";
	include "menu.php";

	include "conexao.php";

	$sql = "SELECT * FROM categorias";
	$result=mysqli_query($conn,$sql);
?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form  method="post" action="insert-produtos.php">
					
					<h1 style="color:#337ab7">Cadastrar Produto:</h1>
					<div class="form-group">
						<label for="nome">Imagem</label>
						<input type="text" placeholder="Insira o Nome da Imagem" name="imagem" class="form-control"/>
					</div>
					
					<div class="form-group">
						<label for="nome">Nome</label>
						<input type="text" placeholder="Insira o Nome do Produto" name="nome" class="form-control"/>
					</div>
					

					<div class="form-group">
						<label for="nome">Descrição</label>
						<input type="text"  placeholder="Insira a Descrição do Produto" name="descricao" class="form-control"/>
					</div>
					
					<div class="form-group">
						<label for="nome">Valor</label>
						<input type="text" placeholder="Insira o Valor do Produto" name="valor" class="form-control"/>
					</div>
					
					<div class="form-group">
						<label for="nome">Quantidade</label>
						<input type="number" placeholder="Selecione a Quantidade do Produto"  name="quantidade" class="form-control"/>
					</div>
					
					<div class="form-group">
						<label for="categoria">Categoria</label>
						<select name="id_categoria" class="form-control">
							<?php 

							while($linha = mysqli_fetch_array($result,MYSQLI_ASSOC)){

							?>

	  							<option value="<?php print $linha['id']; ?>"><?php print $linha['nome'];?></option>

	  						<?php
	  						}
	  						 ?>
						</select>
					</div>

					<input type="submit" value="Salvar" class="btn btn-success btn-sm">
					<a href="home_adm.php"><input type="button" value="Cancelar" class="btn btn-danger btn-sm"></a>
			</form> 
		</div>
	</div>
</div>
</body>
</html>

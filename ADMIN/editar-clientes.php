

<?php
	include "conexao.php";
	include "header.php";
	include "menu.php";
	
	$id 	= $_GET['id'];

	$sql = "SELECT * FROM clientes WHERE id = $id";
	$result=mysqli_query($conn,$sql);
	$linha = mysqli_fetch_array($result,MYSQLI_ASSOC);
?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form  method="post" action="atualizar-clientes.php">
					<h1 style="color:#337ab7">Editar Categorias:</h1>
					<input type="hidden" name="id" value="<?php print $linha['id']; ?>" />
					
					<div class="form-group">
						<label for="nome">Nome</label>
						<input type="text" name="nome" class="form-control" value="<?php print $linha['nome']; ?>"/>
					</div>

					<div class="form-group">
						<label for="nome">E-mail</label>
						<input type="text" name="email" class="form-control" value="<?php print $linha['email']; ?>"/>
					</div>

					<div class="form-group">
						<label for="nome">CPF</label>
						<input type="text" name="cpf" class="form-control" value="<?php print $linha['cpf']; ?>"/>
					</div>

					<div class="form-group">
						<label for="nome">Sexo</label>
						<input type="text" name="sexo" class="form-control" value="<?php print $linha['sexo']; ?>"/>
					</div>

					<div class="form-group">
						<label for="nome">Senha</label>
						<input type="text" name="senha" class="form-control" value="<?php print $linha['senha']; ?>"/>
					</div>



				
				
				
					<input type="submit" value="Salvar" class="btn btn-success btn-sm">
			</form> 
		</div>
	</div>
</div>
<?php
	include "footer.php";
?>

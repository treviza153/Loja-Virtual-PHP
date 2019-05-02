

<?php
	include "conexao.php";
	include "header.php";
	include "menu.php";
	
	$id 	= $_GET['id'];

	$sql = "SELECT * FROM categorias WHERE id = $id";
	$result=mysqli_query($conn,$sql);
	$linha = mysqli_fetch_array($result,MYSQLI_ASSOC);
?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form  method="post" action="atualizar-categorias.php">
					<h1 style="color:#337ab7">Editar Categorias:</h1>
					<input type="hidden" name="id" value="<?php print $linha['id']; ?>" />
					
					<div class="form-group">
						<label for="nome">Nome</label>
						<input type="text" name="nome" class="form-control" value="<?php print $linha['nome']; ?>"/>
					</div>
				
					<input type="submit" value="Salvar" class="btn btn-success btn-sm">
			</form> 
		</div>
	</div>
</div>
<?php
	include "footer.php";
?>

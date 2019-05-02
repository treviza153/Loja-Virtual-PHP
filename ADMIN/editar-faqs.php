

<?php
	include "conexao.php";
	include "header.php";
	include "menu.php";
	
	$id 	= $_GET['id'];

	$sql = "SELECT * FROM faq WHERE id = $id";
	$result=mysqli_query($conn,$sql);
	$linha = mysqli_fetch_array($result,MYSQLI_ASSOC);
?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form  method="post" action="atualizar-faqs.php">
					<h1 style="color:#337ab7">Editar Faqs:</h1>
					<input type="hidden" name="id" value="<?php print $linha['id']; ?>" />
					
					<div class="form-group">
						<label for="nome">Nome</label>
						<input type="text" name="nome" class="form-control" value="<?php print $linha['nome']; ?>"/>
					</div>

					<div class="form-group">
						<label for="nome">Data</label>
						<input type="text" name="data" class="form-control" value="<?php print $linha['data']; ?>"/>
					</div>

					<div class="form-group">
						<label for="nome">Mensagem</label>
						<input type="text" name="mensagem" class="form-control" value="<?php print $linha['mensagem']; ?>"/>
					</div>

					<div class="form-group">
						<label for="nome">Resposta</label>
						<input type="text" name="resposta" class="form-control" value="<?php print $linha['resposta']; ?>"/>
					</div>
				
					<input type="submit" value="Salvar" class="btn btn-success btn-sm">
			</form> 
		</div>
	</div>
</div>
<?php
	include "footer.php";
?>

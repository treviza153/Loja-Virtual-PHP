
<?php
	include "header.php";
	include "menu.php";
?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form  method="post" action="insert-categorias.php">
					
					<h1 style="color:#337ab7">Cadastrar Categorias:</h1>	
					<div class="form-group">
						<label for="nome">Nome</label>
						<input type="text" name="nome" class="form-control" placeholder="Digte o Nome da Categoria" />
					</div>

					<input type="submit" value="Salvar" class="btn btn-success btn-sm">
					<a href="home_adm.php"><input type="button" value="Cancelar" class="btn btn-danger btn-sm"></a>
			</form> 
		</div>
	</div>
</div>
</body>
</html>

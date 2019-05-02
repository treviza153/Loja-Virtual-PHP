


<?php
	include "header.php";

?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form  method="post" action="insert-usuarios.php">
					
					<h1 style="color:#337ab7">Cadastro Usuário:</h1>	
					<div class="form-group">
						<label for="nome">Nome</label>
						<input type="text" name="nome" class="form-control" placeholder="Digite o Seu Nome"/>
					</div>
					<div class="form-group">
						<label for="nome">Login</label>
						<input type="text" name="login" class="form-control" placeholder="Digite o seu Login" />
					</div>
					<div class="form-group">
						<label for="nome">Senha</label>
						<input type="text" name="senha" class="form-control" placeholder="Digite a sua Senha" />
					</div>

					<input type="submit" value="Salvar" class="btn btn-success btn-sm">
					<a href="index.php"><input type="button" value="Cancelar" class="btn btn-danger btn-sm"></a>
			</form> 
		</div>
	</div>
</div>
</body>
</html>

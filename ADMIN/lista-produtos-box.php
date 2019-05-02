<?php
	include "header.php";
	include "conexao.php";
	$sql = "SELECT * FROM produtos";
	$result=mysqli_query($conn,$sql);
	
	include "menu.php";
?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			
			<?php		
				while($linha = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			?>
			
			  <div class="col-md-4" align="center">
				<a href="#" class="thumbnail">
				  <img src="imagens/<?php print $linha['imagem']; ?>" alt="<?php print $linha['nome']; ?>">
				</a>
			       <p style="color: #000; font-size: 20px;"><?php print $linha['nome']; ?></p>
            <p style="color: #000; font-size: 20px;">Categoria: <?php print $linha['id_categoria']; ?></p>
            <p style="color: #000; font-size: 20px;"><b>Valor:R$ <?php print $linha['valor']; ?></p><B>
            <a href="deletar-produtos.php?id=<?php print $linha['id']; ?>" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-remove"></span>DELETAR</a> 
        <a href="editar-produtos.php?id=<?php print $linha['id']; ?>" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-pencil"></span>EDITAR</a>
			  </div>
  
			<?php
			}
			?>
		</div>
	</div>
</div>

<?php
	include "footer.php";
?>
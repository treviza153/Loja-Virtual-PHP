

<?php
	include "conexao.php";
	include "header.php";
	include "menu.php";

	
	$sql = "SELECT * FROM faq";
	$result=mysqli_query($conn,$sql);
	
?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
		<h1 style="color:#337ab7">Faqs:</h1>
			<table class="table table-hover table-bordered ">
				<tr>
					<td align="center"><b>Nome</b></td>
					<td align="center"><b>Data</b></td>
					<td align="center"><b>Mensagem</b></td>
					<td align="center"><b>Resposta</b></td>


				</tr>
				<?php		
				while($linha = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			?>
				<tr>
					<td><?php print $linha['nome']; ?></td>
					<td><?php print $linha['data']; ?></td>
					<td><?php print $linha['mensagem']; ?></td>
					<td><?php print $linha['resposta']; ?></td>
					<td></td>
					<td align="center"><a href="deletar-faqs.php?id=<?php print $linha['id']; ?>"><img src="icones/delete.png" width="25" height="25" style=""></a></td>
					<td align="center"><a href="editar-faqs.php?id=<?php print $linha['id']; ?>"><img src="icones/edita.png" width="25" height="25" style=""></a></td>
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
<?php
	include "header.php";

	include "conexao.php";
	$sql = "SELECT * FROM faq";
	$result=mysqli_query($conn,$sql);
	
?>
<div style="" class="tituloProd"> Dúvidas Frequentes </div>

<?php		
	while($linha = mysqli_fetch_array($result,MYSQLI_ASSOC)){
?>

	<table style="font: 15px 'verdana',cursive; border: 2px solid black; margin-left: 500px;">
		<tr>
			<td><?php print $linha['mensagem']; ?></td>
			<td><?php print $linha['resposta']; ?></td>	
		</tr>
	</table>

<?php
	}
?>

</div>


<?php
	include "footer.php";
?>
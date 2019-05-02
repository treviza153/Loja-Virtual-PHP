
<?php

	include "header.php" ;
	include "conexao.php";


	if($busca != ""){
		$sql = "SELECT * FROM produtos WHERE nome LIKE '%$busca%' OR descricao LIKE '%$busca%' ORDER BY id DESC";
	}else{
		$sql = "SELECT * FROM produtos ORDER BY id DESC";
	}

	$result=mysqli_query($conn,$sql);

?>

<?php		
		while($linha = mysqli_fetch_array($result,MYSQLI_ASSOC)){
	?>
		
	<?php
		}
	?>



<?php

include "footer.php" ;

?>











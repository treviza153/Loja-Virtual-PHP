
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
	
<div id="slider">

	<div class="slideshow-container">

		<div class="mySlides fade">
		  <img src="promo2.jpg" alt="Conheca nossa linha feminina" style="width:100%">
		</div>

		<div class="mySlides fade">
		  <img src="promo1.jpg" alt="Conheca nossa linha Masculina" style="width:100%">
		</div>

		<div class="mySlides fade">
		  <img src="promo3.jpg" alt="Conheca nossa linha Infantil" style="width:100%">
		</div>
		
		<div class="mySlides fade">
		  <img src="promo4.jpg" alt="Conheca nossa linha de times" style="width:100%">
		</div>

		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>

	</div><br>

		<div style="text-align:center">
		  <span class="dot" onclick="currentSlide(1)"></span> 
		  <span class="dot" onclick="currentSlide(2)"></span> 
		  <span class="dot" onclick="currentSlide(3)"></span> 
		  <span class="dot" onclick="currentSlide(4)"></span>
		</div>

</div>



<div id="tituloProdutos" style="margin-top: 600px;" class="tituloProdutos"><h1> OFERTAS DO DIA </h1></div>

<div class="timer"><h1>Ofertas expirão em:</h1><p id="demo"></p></div>

<div style="width: 1500px;"></div>

	<?php		
		while($linha = mysqli_fetch_array($result,MYSQLI_ASSOC)){
	?>
		<div style="display: inline-block; text-align: center;">
			<div><img style="margin-left: 150px; margin-top: 50px;" class="vitrine1" src="masculino/<?php print $linha['imagem']; ?>" alt="<?php print $linha['nome']; ?>"></div>
		
			<div><br><h2 class="precos1"><?php print $linha['nome']; ?></h2></div>
				
			<div><br><h2 class="precos1">Valor: R$<?php print $linha['valor']; ?></h2></div>
			
			<div style="margin-left: 80px;"><br><a href="visualizar-produtos.php?id=<?php print $linha['id']; ?>" class="add"> COMPRAR </a></div>
		</div>
	<?php
		}
	?>

<div id="marcas">

	<h1 class="escolha"> As Melhores Marcas! </h1>
	
	<div class="logoMarcas">
		<img src="nike.png" class="marca marca1" alt="Logo Nike" title="Nike">
		<img src="adidas.png" class="marca" alt="Logo Adidas" title="Adidas">
		<img src="under.png" class="marca" alt="Logo Under Armor" title="Under Armor">
		<img src="361.png" class="marca" alt="Logo 361º" title="361º">
		<img src="umbro.png" class="marca" alt="Logo Umbro" title="Umbro">
		<img src="mizuno.png" class="marca" alt="Logo Mizuno" title="Mizuno">
		<img src="puma.png" class="marca" alt="Logo Puma" title="Puma">
		<img src="topper.png" class="marca" alt="Logo Topper" title="Topper">
	</div>

</div>

<?php

include "footer.php" ;

?>











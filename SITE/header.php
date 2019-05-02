<?php
	include "conexao.php";
	
	$busca = @$_POST['busca'];

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="estilo.css">
<link rel="stylesheet" type="text/css" href="masculino.css">


<title> Sports.com </title>

<script type="text/javascript">

function mudarFundo() {

  	document.getElementById('backgroundtop').style.background = "url('div_top2.jpg')";  
	document.getElementsByClassName('tituloProdutos').style.backgroundColor = "black";	
	
}

function retomarFundo() {
	
  	document.getElementById('backgroundtop').style.background = "url('div_top.png')";
	document.getElementByClassName('tituloProdutos').style.backgroundColor = "#3b5998";	
	
   }

</script>

<script>

function fundo_opaco(){

	var classe = document.getElementById('login').classList;

	if(classe.contains("opaco")){
			classe.remove("opaco");
		}else{
			classe.add("opaco");
			}
	}

function fundo_opaco(){

	var classe = document.getElementById('cadastro').classList;

	if(classe.contains("opaco")){
			classe.remove("opaco");
		}else{
			classe.add("opaco");
			}
	}

</script>
	
<script type="text/javascript">	
	var slideIndex = 1;


function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");

console.log(slides[0]);

  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}

  for (i = 0; i < slides.length; i++) {
 	  slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }

  console.log(slideIndex);
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}

</script>

<script>
// Set the date we're counting down to
var countDownDate = new Date("Jun 03, 2017 00:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = hours + "h " + minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "Esgotado!";
    }
}, 1000);
</script>

<script type="text/javascript">

	
	function pedido1(){
			
			nome = formCadastro1.nome.value;
			email = formCadastro1.email.value;
			cpf = formCadastro1.cpf.value;
			senha = formCadastro1.senha.value;
			confsenha = formCadastro1.confsenha.value;

			
			
			if(nome!="" || email!="" || cpf!="" || senha!="" || confsenha!=""){

		alert("Cadastramento efetuado com sucesso!")
		
		}
		}

</script>

<script type="text/javascript">

	
	function pedido2(){
			
			nome = formCadastro2.nome.value;
			email = formCadastro2.email.value;
			relatorio = formCadastro2.relatorio.value;

			
			
			if(nome!="" || email!="" || relatorio!=""){

		alert("Cadastramento efetuado com sucesso!")
		
		}
		}

</script>

<script type="text/javascript">

	
	function pedido3(){

		alert("Boleto aparecerá na guia de downloads no seu navegador!")
		
		}

</script>

</head>

<button class="botaofundo" onclick="mudarFundo()"> Site Acessivel </button>
<button class="botaofundo botaofundo1" onclick="retomarFundo()"> Site Normal </button>

<a href="#login" class="conta" onclick="fundo_opaco()"> Login </a>
<a href="#cadastro" class="conta1" onclick="fundo_opaco()"> Cadastre-se </a>

<a href="https://pt-br.facebook.com/"><img src="1.png" class="face social" alt="Acesse nosso facebook" title="Acesse nossa página no Facebook"/></a>
<a href="https://twitter.com/?lang=pt-br"><img src="4.png" class="twitter social" alt="Acesse nosso Twitter" title="Acesse nossa página no Twitter"/></a>
<a href="https://www.instagram.com/?hl=pt-br"><img src="2.png" class="insta social" alt="Acesse nosso Instagram" title="Acesse nossa página no Instagram"/></a>
<a href="https://br.pinterest.com/"><img src="3.png" class="pint social" alt="Acesse nosso Pinterest" title="Acesse nossa página no Pinterest"/></a>


<div class="modal" id="login" >

	<div class="modal-container">
	
	<div id="tituloLogin"> Insira seus dados abaixo </div>
		
		<form id="formLogin" method="post">

			<label for="email">E-mail:</label> <input id="email" type="text" class="campo_e-mail" maxlength="50" placeholder="seu.email@provedor.com.br" required><br> <br>
			<label for="senha">Senha:</label> <input id="senha" type="password" class="campo_senha" minlength="8" required><br><br>

			<input type="reset"  value="Limpar"  id="limpar" style="cursor: pointer">
			<input type="submit"  value="Enviar"  id="enviar" style="cursor: pointer">
			
		</form>

			<a href="#" id="cancelar" onclick="fundo_opaco()"> Cancelar </a>
			<a href="#esqueciSenha" id="esqueciSenha"> Esqueceu sua senha? </a> 
			<a href="#esqueciEmail" id="esqueciEmail"> Esqueceu seu e-mail? </a>
	</div>

</div>

<div class="modal1" id="cadastro">

	<div class="modal-container1">

	<div id="tituloCadastro1"> Preencha as informações abaixo </div>
	<h1 class="Masculino"> Masculino </h1>
	<h1 class="Feminino"> Feminino </h1>
		
		<form id="formCadastro1" method="post" action="insert-clientes.php">
	
			<label for="nome1">Nome:</label> <input name="nome" type="text" class="campo_nome1" maxlength="50" placeholder="Nome Completo" required><br><br>

			<label for="email1">E-mail:</label> <input name="email" type="text" class="campo_e-mail1" maxlength="50" placeholder="seu.email@provedor.com.br" required><br> <br>

			<label for="cpf1">CPF:</label> <input name="cpf" type="text" class="campo_cpf1" minlength="14" maxlength="14" placeholder="000.000.000-00" required><br> <br>

			<label for="sexo1">Sexo:</label> 

				<input type="radio" id="sexo1" name="sexo" value="M" class="campo_sexo1" required>  

				<input type="radio" id="sexo2" name="sexo" value="F" class="campo_sexo2" required><br><br>
	
			<label for="senha1">Senha:</label> <input name="senha" type="password" class="campo_senha1" minlength="8" required><br><br>

			<label for="confsenha1">Confirmar Senha:</label> <input name="confsenha" type="password" class="campo_confsenha1" minlength="8" required><br><br>

			<input type="reset"  value="Limpar"  id="limpar1" style="cursor: pointer">
			<input type="submit"  value="Enviar"  id="enviar1" onclick="pedido1()" style="cursor: pointer">

		</form>	
		
			<a href="#" id="cancelar1" onclick="fundo_opaco()"> Cancelar </a>
	</div>

</div>


<div class="menu">

	<ul class="menu-list">

		<li><a href="#" class="menu-opcao"> Masculino |</a>
			<ul class="sub-menu">
				<li><a class="sub-menu-single" href="masculino-roupas.php"> Roupas </a></li>
				<li><a class="sub-menu-single" href="masculino-calcados.php"> Calçados </a></li>
				<li><a class="sub-menu-single" href="masculino-acessorios.php"> Acessórios </a></li>
				<li><a class="sub-menu-single" href="mais_procurados.php"> Mais Procurados </a></li>
			</ul>
		</li>

		<li><a href="#" class="menu-opcao"> Feminino |</a>
			<ul class="sub-menu">
				<li><a class="sub-menu-single" href="feminino-roupas.php"> Roupas </a></li>
				<li><a class="sub-menu-single" href="feminino-calcados.php"> Calçados </a></li>
				<li><a class="sub-menu-single" href="feminino-acessorios.php"> Acessórios </a></li>
				<li><a class="sub-menu-single" href="mais_procurados.php"> Mais Procurados </a></li>
			</ul>
		</li>

		<li><a href="#" class="menu-opcao"> Kids |</a>
			<ul class="sub-menu">
				<li><a class="sub-menu-single" href="kids-roupas.php"> Roupas </a></li>
				<li><a class="sub-menu-single" href="kids-calcados.php"> Calçados </a></li>
				<li><a class="sub-menu-single" href="kids-acessorios.php"> Acessórios </a></li>
				<li><a class="sub-menu-single" href="mais_procurados.php"> Mais Procurados </a></li>
			</ul>
		</li>

		<li><a href="#about" class="menu-opcao"> Seu time |</a>
			<ul class="sub-menu time">
				<li><a class="sub-menu-single" href=""> Atlético - GO </a></li>
				<li><a class="sub-menu-single" href="atletico_mg.php"> Atlético - MG </a></li>
				<li><a class="sub-menu-single" href=""> Atlético - PR </a></li>
				<li><a class="sub-menu-single" href=""> Avaí </a></li>
				<li><a class="sub-menu-single" href=""> Bahia </a></li>
				<li><a class="sub-menu-single" href=""> Botafogo </a></li>
				<li><a class="sub-menu-single" href=""> Chapecoense </a></li>
				<li><a class="sub-menu-single" href=""> Corinthias </a></li>
				<li><a class="sub-menu-single" href=""> Coritiba </a></li>
				<li><a class="sub-menu-single" href=""> Cruzeiro </a></li>
				<li><a class="sub-menu-single" href="flamengo.php"> Flamengo </a></li>

			</ul>

			<ul class="sub-menu time time2">
				<li><a class="sub-menu-single" href=""> Fluminense </a></li>
				<li><a class="sub-menu-single" href=""> Grêmio </a></li>
				<li><a class="sub-menu-single" href=""> Palmeiras </a></li>
				<li><a class="sub-menu-single" href=""> Ponte Preta </a></li>
				<li><a class="sub-menu-single" href=""> Santos </a></li>
				<li><a class="sub-menu-single" href=""> São Paulo </a></li>
				<li><a class="sub-menu-single" href=""> Sport </a></li>
				<li><a class="sub-menu-single" href=""> Vasco </a></li>
				<li><a class="sub-menu-single" href=""> Vitória </a></li>
				<li><a class="sub-menu-single" href=""> Internacional </a></li>
				<li><a class="sub-menu-single" href=""> Goiás </a></li>
			</ul>
		</li>

		<li><a href="" class="menu-opcao"> Suplementos |</a>
			<ul class="sub-menu">
				<li><a class="sub-menu-single" href="suplementos-prod.php"> Produtos </a></li>
				<li><a class="sub-menu-single" href="suplementos-marca.php"> Marcas </a></li>
				<li><a class="sub-menu-single" href="mais_procurados.php"> Mais Procurados </a></li>
			</ul>
		</li>
		
		<li><a href="" class="menu-opcao"> Esportes |</a>
			<ul class="sub-menu">
				<li><a class="sub-menu-single" href="basquete.php"> Basquete </a></li>
				<li><a class="sub-menu-single" href="futebol.php"> Futebol </a></li>
				<li><a class="sub-menu-single" href="natacao.php"> Natação </a></li>
				<li><a class="sub-menu-single" href="volei.php"> Vôlei </a></li>
			</ul>
		</li>
		
		<li><a href="" class="menu-opcao"> Ofertas |</a>
			<ul class="sub-menu">
				<li><a class="sub-menu-single" href="ofertas_dia.php"> Ofertas do dia </a></li>
				<li><a class="sub-menu-single" href="combo.php"> Combos </a></li>
				<li><a class="sub-menu-single" href="mais_procurados.php"> Mais Procurados </a></li>
			</ul>
		</li>

		<li><a href="lojasfisicas.php" class="menu-opcao"> Lojas Físicas </a></li>

	</ul>

</div>

<div id="backgroundtop">

	<a href="index.php"><img src="logo.png" class="logo" alt="SPORTS.COM - A SUA LOJA DE ESPORTES" title="SPORTS.COM - A SUA LOJA DE ESPORTES"></a>

	<form action="index.php" method="POST">
  		<input type="text" name="busca" value="<?php print $busca; ?>" placeholder="Pesquise..."  class="barra_pesquisa">
		<input type="submit" value="Buscar" />
	</form>
</div>
	
<body>
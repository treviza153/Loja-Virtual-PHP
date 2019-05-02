<?php
	include "header.php";
?>

<link href="css/login.css" rel="stylesheet">


 <div class="container" style="width: 40%;">

      <form class="form-signin" method="post" action="efetuar-login.php">
        <label for="inputEmail" class="sr-only"></label>
        <div class="input-group" style="margin-bottom: 10px;">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input type="text" name="login" class="form-control" placeholder="Login " required autofocus >
        </div>
        
        <div class="input-group" style="margin-bottom: 10px;">
        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
        <input type="password" name="senha" class="form-control" placeholder="Senha" required>
        </div>
        <a href="cadastro-novo-usuario.php">Não é cadastrado?</a><BR>
      
       <input  type="submit" value="ENTRAR" id="entrar" name="entrar" class="btn btn-lg btn-primary btn-block"><br>
      </form>
    </div> 

<?php
	include "footer.php";
?>
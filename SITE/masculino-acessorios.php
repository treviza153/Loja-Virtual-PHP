<?php

	include "header.php";
        include "conexao.php";
        $sql = "SELECT * FROM produtos";
        $result=mysqli_query($conn,$sql);

?>

<h2 class="tituloProd"> <b>Acessórios Masculinos</b> </h2>
<?php           
                while($linha = mysqli_fetch_array($result,MYSQLI_ASSOC)){
        ?>
                <div style="display: inline-block; text-align: center;">
                        <div><img style="margin-left: 150px; margin-top: 50px;" class="vitrine1" src="masculino/<?php print $linha['imagem']; ?>" alt="<?php print $linha['nome']; ?>"></div>
                
                        <div><br><h2 class="precos1"><?php print $linha['nome']; ?></h2></div>
                                
                        <div><br><h2 class="precos1">Valor: R$<?php print $linha['valor']; ?></h2></div>
                        
                        <div style="margin-left: 80px;"><br><a href="visualizar-produtos.php" class="add"> COMPRAR </a></div>
                </div>
        </div>
        <?php
                }
        ?>

<?php

	include "footer.php";

?>
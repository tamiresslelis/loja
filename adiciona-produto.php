<?php include("header.php")?>
      <?php
        $nome = $_GET["nome"];
        $preco = $_GET["preco"];
        $conexao= mysqli_connect('localhost','root','','loja');
        $query = "insert into produtos (nome, preco) values ('{$nome}', {$preco})";
        if(mysqli_query($conexao,$query)){
          ?><p class="alert-success">Produto <?php echo $nome; ?>, <?php echo $preco; ?> adicionado com sucesso!</h1>
        <?php }else{ ?>
          <p class="alert-danger">Produto <?php echo $nome; ?>, não foi adicionado!</h1>
        <?php
        }
        
        ?>
<?php include("footer.php")?>

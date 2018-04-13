<?php
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("produto-banco.php");


    $nome = $_POST["nome"];
    $preco = $_POST["preco"];
    $descricao = $_POST["descricao"];
    $categoria_id = $_POST["categoria_id"];

    if (insereProduto($conexao, $nome, $preco, $descricao, $categoria_id)) { ?>
        <p class="text-success">O produto <?=$nome?>, foi adicionado com sucesso!</p>
    <?php } else {
        $msg = mysqli_error($conexao);?>
        <p class="text-danger">O produto <?=$nome?>, não foi adicionado no banco de dados: <?=$msg?></p>
    <?php }

?>


<?php include_once("rodape.php"); ?>

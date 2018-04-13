<?php
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("produto-banco.php");
?>

<?php
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $preco = $_POST["preco"];
    $descricao = $_POST["descricao"];
    $categoria = $_POST["categoria_id"];

    if (alteraProduto($conexao, $id, $nome, $preco, $descricao, $categoria)) {
        ?>
            <p class="text-success">O produto <?=$nome?> foi alterado com sucesso!</p>
        <?php
    } else {
        $msg = mysqli_error($conexao);
        ?>
            <p class="text-danger">O produto <?=$nome?> não foi alterado com sucesso: <?=$msg?></p>
        <?php
    }

    include_once("rodape.php");

    ?>
<?php
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("produto-banco.php");
?>

<?php

    $id = $_POST['id'];
    $produto = buscaProduto($conexao, $id);
    removeProduto($conexao, $id);

    header("Location: produto-lista.php?removido=true&produto={$produto[nome]}");
    die();

    ?>
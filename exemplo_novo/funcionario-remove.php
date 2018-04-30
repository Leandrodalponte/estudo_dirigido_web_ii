<?php
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("funcionario-banco.php");
?>

<?php

    $id = $_POST['id'];
    $funcionario = buscaFuncionario($conexao, $id);
    removeFuncionario($conexao, $id);

    header("Location: funcionario-lista.php?removido=true&funcionario={$funcionario[Nome]}");
    die();

    ?>
<?php
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("funcionario-banco.php");
?>

<?php

    $IDFuncionario = $_POST['IDFuncionario'];
    $funcionario = buscaFuncionario($conexao, $IDFuncionario);
    removeFuncionario($conexao, $IDFuncionario);

    header("Location: funcionario-lista.php?removido=true&funcionario={$funcionario[Nome]}");
    die();

    ?>
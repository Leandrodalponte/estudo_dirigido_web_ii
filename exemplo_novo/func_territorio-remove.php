<?php
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("func_territorio-banco.php");
?>

<?php

    $IDTerritoriofun = $_POST['IDTerritorio'];
    $funterritorio = buscaFunTerritorio($conexao, $IDTerritoriofun);
    removeFunTerritorio($conexao, $IDTerritoriofun);

    header("Location: func_territorio-lista.php?removido=true&territorio={$IDTerritoriofun[IDTerritorio]}");
    die();

    ?>
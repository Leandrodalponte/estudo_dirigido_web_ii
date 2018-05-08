<?php
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("territorio-banco.php");
?>

<?php

    $IDTerritorio = $_POST['IDTerritorio'];
    $territorio = buscaTerritorio($conexao, $IDTerritorio);
    removeTerritorio($conexao, $IDTerritorio);

    header("Location: territorio-lista.php?removido=true&territorio={$IDTerritorio[IDTerritorio]}");
    die();

    ?>
<?php
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("func_territorio-banco.php");
?>

<?php

    $IDTerritorio = $_POST['IDTerritorio'];
    $funterritorio = buscaTerritorio($conexao, $IDTerritorio);
    removeFunTerritorio($conexao, $IDTerritorio);

    header("Location: func_territorio-lista.php?removido=true&territorio={$funterritorio[IDTerritorio]}");
    die();

    ?>
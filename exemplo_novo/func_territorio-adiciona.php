<?php
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("func_territorio-banco.php");

    $IDTerritoriofun = $_POST["IDTerritorio"];
    $IDFuncionario = $_POST["IDFuncionario"];
    
    if (insereFunTerritorio($conexao, $IDTerritoriofun, $IDFuncionario)) { ?>
        <p class="text-success">O Territorio Funcionario <?=$IDTerritoriofun?>, foi adicionado com sucesso!</p>
    <?php } else {
        $msg = mysqli_error($conexao);?>
        <p class="text-danger">O Territorio Funcionario <?=$IDTerritoriofun?>, não foi adicionado no banco de dados: <?=$msg?></p>
    <?php }

?>


<?php include_once("rodape.php"); ?>

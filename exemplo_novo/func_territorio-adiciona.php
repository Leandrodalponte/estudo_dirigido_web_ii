<?php
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("fun_territorio-banco.php");


    $IDFuncionario = $_POST["IDFuncionario"];
    $IDTerritorio = $_POST["IDTerritorio"];
    
    if (insereFunTerritorio($conexao, $IDTerritorio, $IDFuncionario)) { ?>
        <p class="text-success">O Territorio Funcionario <?=$IDTerritorio?>, foi adicionado com sucesso!</p>
    <?php } else {
        $msg = mysqli_error($conexao);?>
        <p class="text-danger">O Territorio Funcionario <?=$IDTerritorio?>, não foi adicionado no banco de dados: <?=$msg?></p>
    <?php }

?>


<?php include_once("rodape.php"); ?>

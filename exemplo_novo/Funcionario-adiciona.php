<?php
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("produto-banco.php");


    $idFuncionario = $_POST["idFuncionario"];
    $sobrenome = $_POST["sobrenome"];
    $nome = $_POST["nome"];
    $titulo = $_POST["titulo"];
    $titulocortesia = $_POST["titulocortesia"];
    

    if (insereFuncionario($conexao, $idFuncionario, $sobrenome, $nome, $titulo, $titulocortesia, )) { ?>
        <p class="text-success">O produto <?=$nome?>, foi adicionado com sucesso!</p>
    <?php } else {
        $msg = mysqli_error($conexao);?>
        <p class="text-danger">O produto <?=$nome?>, não foi adicionado no banco de dados: <?=$msg?></p>
    <?php }

?>


<?php include_once("rodape.php"); ?>

<?php
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("territorio-banco.php");



    $IDTerritorio = $_POST["IDTerritorio"];
    $DescricaoTerritorio = $_POST["DescricaoTerritorio"];
    $IDRegiao = $_POST["IDRegiao"];
    

    if (insereTerritorio($conexao, $IDTerritorio, $DescricaoTerritorio, $IDRegiao)) { ?>
        <p class="text-success">O Territorio <?=$DescricaoTerritorio?>, foi adicionado com sucesso!</p>
    <?php } else {
        $msg = mysqli_error($conexao);?>
        <p class="text-danger">O Territorio <?=$DescricaoTerritorio?>, não foi adicionado no banco de dados: <?=$msg?></p>
    <?php }

?>


<?php include_once("rodape.php"); ?>

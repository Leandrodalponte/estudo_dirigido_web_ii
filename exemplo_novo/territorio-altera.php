<?php
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("territorio-banco.php");
?>

<?php
      $IDTerritorio = $_POST["IDTerritorio"];
      $DescricaoTerritorio = $_POST["DescricaoTerritorio"];
      $IDRegiao = $_POST["IDRegiao"];

    if (alteraTerritorio($conexao, $IDTerritorio, $DescricaoTerritorio, $IDRegiao)) {
        ?>
            <p class="text-success">O Territorio <?=$DescricaoTerritorio?> foi alterado com sucesso!</p>
        <?php
    } else {
        $msg = mysqli_error($conexao);
        ?>
            <p class="text-danger">O Territorio <?=$DescricaoTerritorio?> não foi alterado com sucesso: <?=$msg?></p>
        <?php
    }

    include_once("rodape.php");

    ?>
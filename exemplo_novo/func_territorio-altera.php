<?php
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("func_territorio-banco.php");
?>

<?php
      $IDRegiao = $_POST["IDFuncionario"];

    if (alteraFunTerritorio($conexao, $IDTerritorio, $IDFuncionario)) {
        ?>
            <p class="text-success">O Territorio <?=$IDTerritorio?> foi alterado com sucesso!</p>
        <?php
    } else {
        $msg = mysqli_error($conexao);
        ?>
            <p class="text-danger">O Territorio <?=$IDTerritorio?> não foi alterado com sucesso: <?=$msg?></p>
        <?php
    }

    include_once("rodape.php");

    ?>
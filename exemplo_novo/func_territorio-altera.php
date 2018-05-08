<?php
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("func_territorio-banco.php");
?>

<?php
      $IDFuncionario = $_POST["IDFuncionario"];
      $IDTerritoriofun = $_POST["IDTerritorio"];

    if (alteraFunTerritorio($conexao, $IDTerritoriofun, $IDFuncionario)) {
        ?>
            <p class="text-success">O Territorio <?=$IDTerritoriofun?> foi alterado com sucesso!</p>
        <?php
    } else {
        $msg = mysqli_error($conexao);
        ?>
            <p class="text-danger">O Territorio <?=$IDTerritoriofun?> não foi alterado com sucesso: <?=$msg?></p>
        <?php
    }

    include_once("rodape.php");

    ?>
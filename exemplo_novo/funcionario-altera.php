<?php
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("funcionario-banco.php");
?>

<?php
       $sobrenome = $_POST["Sobrenome"];
       $nome = $_POST["Nome"];
       $titulo = $_POST["Titulo"];
       $titulocortesia = $_POST["TituloCortesia"];
       $dataNac = $_POST["DataNac"];
       $dataAdmissao = $_POST["DataAdmissao"];
       $endereco = $_POST["Endereco"];
       $cidade = $_POST["Cidade"];
       $regiao = $_POST["Regiao"];
       $cep = $_POST["Cep"];
       $pais = $_POST["Pais"];
       $telefoneresidencial = $_POST["TelefoneResidencial"];
       $extensao = $_POST["Extensao"];

    if (alteraFuncionario($conexao, $sobrenome, $nome, $titulo, $titulocortesia, $dataNac, $dataAdmissao, $endereco, $cidade, $regiao, $cep, $pais, $telefoneresidencial, $extensao )) {
        ?>
            <p class="text-success">O funcionario <?=$nome?> foi alterado com sucesso!</p>
        <?php
    } else {
        $msg = mysqli_error($conexao);
        ?>
            <p class="text-danger">O funcionario <?=$nome?> não foi alterado com sucesso: <?=$msg?></p>
        <?php
    }

    include_once("rodape.php");

    ?>
<?php
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("produto-banco.php");



    $sobrenome = $_POST["Sobrenome"];
    $nome = $_POST["Nome"];
    $titulo = $_POST["Titulo"];
    $titulocortesia = $_POST["TituloCortesia"];
    $dataNac = $_POST["Datanac"];
    $dataAdmisao = $_POST["DataAdmissao"];
    $endereco = $_POST["Endereco"];
    $cidade = $_POST["Cidade"];
    $regiao = $_POST["Regiao"];
    $cep = $_POST["Cep"];
    $pais = $_POST["Pais"];
    $telefoneresidencial = $_POST["TelefoneResidencial"];
    $extensao = $_POST["Extensao"];
    $notas = $_POST["Notas"];
    

    if (insereFuncionario($conexao, $sobrenome, $nome, $titulo, $titulocortesia, $dataNac, $dataAdmissao, $endereco, $cidade, $regiao, $cep, $pais, $telefoneresidencial, $extensao )) { ?>
        <p class="text-success">O produto <?=$nome?>, foi adicionado com sucesso!</p>
    <?php } else {
        $msg = mysqli_error($conexao);?>
        <p class="text-danger">O produto <?=$nome?>, não foi adicionado no banco de dados: <?=$msg?></p>
    <?php }

?>


<?php include_once("rodape.php"); ?>

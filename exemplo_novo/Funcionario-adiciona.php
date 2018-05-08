<?php
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("funcionario-banco.php");



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
    $dataNac="1948-12-08";    

   
    

    if (insereFuncionario($conexao, $sobrenome, $nome, $titulo, $titulocortesia, $dataNac, $dataAdmissao, $endereco, $cidade, $regiao, $cep, $pais, $telefoneresidencial, $extensao )) { ?>
        <p class="text-success">O Funcionario <?=$nome?>, foi adicionado com sucesso!</p>
    <?php } else {
        $msg = mysqli_error($conexao);?>
        <p class="text-danger">O Funcionario <?=$nome?>, não foi adicionado no banco de dados: <?=$msg?></p>
    <?php }

?>


<?php include_once("rodape.php"); ?>

<?php
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("funcionario-banco.php");
?>

<?php if (array_key_exists("removido", $_GET) && $_GET["removido"]==true) { ?>
    <p class="alert-success">Funcionario <?=$_GET['funcionario']?> foi removido com sucesso!</p>
<?php } ?>

<table class="table table-striped table-bordered">
    <tr>
        <td>Nome</td>
        <td>Sobrenome</td>
        <td>Titulo</td>
        <td>Cortesia</td>
        <td>Data Nacimento</td>
        <td>Data Admissão</td>
        <td>Endereço</td>
        <td>Cidade</td>
        <td>Regiao</td>
        <td>Cep</td>
        <td>Pais</td>
        <td>Telefone</td>
        <td>Extensao</td>
    </tr>
    <?php
        $funcionario = listaFuncionario($conexao);
        foreach ($funcionarios as $funcionario) :
    ?>
        <tr>
            <td><?=$funcionario['Nome']?></td>
            <td><?=$funcionario['Sobrenome']?></td>
            <td><?=$funcionario['Titulo']?></td>
            <td><?=$funcionario['TituloCortesia']?></td>
            <td><?=$funcionario['DataNac']?></td>
            <td><?=$funcionario['DataAdmissao']?></td>
            <td><?=$funcionario['Endereco']?></td>
            <td><?=$funcionario['Cidade']?></td>
            <td><?=$funcionario['Regiao']?></td>
            <td><?=$funcionario['Cep']?></td>
            <td><?=$funcionario['Pais']?></td>
            <td><?=$funcionario['TelefoneResidencial']?></td>
            <td><?=$funcionario['Extensao']?></td>
            <td>
            
                <a class="btn btn-primary" href="funcionario-altera-formulario.php?id=<?=$funcionario['id']?>">Alterar</a>

                <form action="funcionario-remove.php" method="post">
                    <input type="hidden" name="id" value="<?=$funcionario['id']?>" />
                    <button class="btn btn-danger">Remover</button>
                </form>
            </td>
        </tr>
    <?php
        endforeach;
    ?>
</table>

<?php
    include_once("rodape.php");
?>
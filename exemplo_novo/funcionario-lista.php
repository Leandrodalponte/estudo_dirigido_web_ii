<?php
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("funcionario-banco.php");
?>

<?php if (array_key_exists("removido", $_GET) && $_GET["removido"]==true) { ?>
    <p class="alert-success">Funcionario <?=$_GET['funcionario']?> foi removido com sucesso!</p>
<?php } ?>

<table class="centered bordered">
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
        <td>Opções</td>
    </tr>
    <?php
        $funcionario = listaFuncionario($conexao);
        foreach ($funcionario as $funcionario) :
    ?>
        <tr>
            <td><?=$funcionario['Nome']?></td>
            <td><?=$funcionario['Sobrenome']?></td>
            <td><?=$funcionario['Titulo']?></td>
            <td><?=$funcionario['TituloCortesia']?></td>
            <td><?=date('d/m/Y',  strtotime($funcionario['DataNac']));?></td>
            <td><?=date('d/m/Y',  strtotime($funcionario['DataAdmissao']));?></td>
            <td><?=$funcionario['Endereco']?></td>
            <td><?=$funcionario['Cidade']?></td>
            <td><?=$funcionario['Regiao']?></td>
            <td><?=$funcionario['Cep']?></td>
            <td><?=$funcionario['Pais']?></td>
            <td><?=$funcionario['TelefoneResidencial']?></td>
            <td><?=$funcionario['Extensao']?></td>
            <td>
            
                <a class="btn-floating"  href="funcionario-altera-formulario.php?id=<?=$funcionario['IDFuncionario']?>"><i class="material-icons">edit</i></a>

                <form action="funcionario-remove.php" method="post">
                    <input type="hidden" name="IDFuncionario" value="<?=$funcionario['IDFuncionario']?>" />
                    <button class="btn-floating waves-effect"><i class="material-icons">delete</i></button>
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
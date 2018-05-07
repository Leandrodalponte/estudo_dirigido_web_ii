<?php
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("funcionario-banco.php");
    //include_once("categorias-banco.php");

    $IDFuncionario = $_GET['id'];
    $funcionario = buscaFuncionario($conexao, $IDFuncionario);
    //$categorias = listaCategorias($conexao);
?>

<h1>Alteração de Funcionario Cadastrado</h1>

<form action="funcionario-altera.php" method="post">
    <input type="hidden" name="IDFuncionario" value="<?=$IDFuncionario?>" />
    <table>
    <?php
        while ($row = mysqli_fetch_assoc($funcionario)) {
            ?>
        <tr>
            <td>Nome</td>
            <td><input type="text" class="form-control" value="<?= $row['Nome'] ?>" name="Nome" /></td>
        </tr>

        <tr>
            <td>SobreNome</td>
            <td><input type="text" class="form-control" value="<?= $row['Sobrenome'] ?>" name="Sobrenome" /></td>
        </tr>

        <tr>
            <td>Titulo</td>
            <td><input type="text" type="form-control" class="form-control" value="<?= $row['Titulo'] ?>" name="Titulo" /></td>
        </tr>

        <tr>
            <td>Titulo Cortesia</td>
            <td><input type="text" type="form-control" class="form-control" value="<?= $row['TituloCortesia'] ?>" name="TituloCortesia"/></td>
        </tr>

        <tr>
            <td>Data Nascimento</td>
            <td><input type=date value="<?php echo date('Y-m-d', strtotime($row['DataNac'])); ?>" name="DataNac" ></td>
        </tr>
         
        <tr>
            <td>Data Admimissão</td>
            <td><input type=date value="<?php echo date('Y-m-d', strtotime($row['DataAdmissao'])); ?>" name="DataAdmissao" ></td>
        </tr>

        <tr>
            <td>Endereço</td>
            <td><input type="text" class="form-control" value="<?= $row['Endereco'] ?>" name="Endereco" /></td>
        </tr>
        <tr>
            <td>Cidade</td>
            <td><input type="text" class="form-control" value="<?= $row['Cidade'] ?>" name="Cidade" /></td>
        </tr>
        <tr>
            <td>Região</td>
            <td><input type="text" class="form-control" value="<?= $row['Regiao'] ?>" name="Regiao" /></td>
        </tr>
        <tr>
            <td>Cep</td>
            <td><input type="number_format" class="form-control" value="<?= $row['Cep'] ?>" name="Cep" /></td>
        </tr>
        <tr>
            <td>Pais</td>
            <td><input type="text" class="form-control" value="<?= $row['Pais'] ?>" name="Pais" /></td>
        </tr>
        <tr>
            <td>Telefone</td>
            <td><input type="text" class="form-control" value="<?= $row['TelefoneResidencial'] ?>" name="TelefoneResidencial" /></td>
        </tr>
        <tr>
            <td>Extesão</td>
            <td><input type="text" class="form-control" value="<?= $row['Extensao'] ?>" name="Extensao" /></td>
        </tr>

        <tr>
            <td>
                <button class="btn btn-primary" type="submit">Alterar</button>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
</form>
<script type="text/javascript">
    $(".form_datetime").datetimepicker({format: 'dd-mm-yyyy'});
</script>
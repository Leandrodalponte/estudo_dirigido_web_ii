<?php
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("funcionario-banco.php");
    //include_once("categorias-banco.php");

    $IDFuncionario = $_GET['IDFuncionario'];
    $funcionario = buscaFuncionario($conexao, $IDFuncionario);
    //$categorias = listaCategorias($conexao);
?>

<h1>Alteração de Funcionario Cadastrado</h1>

<form action="funcionario-altera.php" method="post">
    <input type="hidden" name="id" value="<?=$id?>" />
    <table>
        <tr>
            <td>Nome</td>
            <td><input type="text" class="form-control" name="nome" value="<?=$funcionario['nome']?>" /></td>
        </tr>

        <tr>
            <td>Preço</td>
            <td><input type="number" class="form-control" name="preco" value="<?=$funcionario['preco']?>" /></td>
        </tr>

        <tr>
            <td>Descrição</td>
            <td><textarea class="form-control" name="descricao" ><?=$funcionario['descricao']?></textarea></td>
        </tr>

        <tr>
            <td>Categoria</td>
            <td>
                <select name="categoria_id">
                    <?php foreach ($categorias as $categoria) {
                        $ehCategoriaBanco = $funcionario['categoria_id'] == $categoria['id'];
                        $selecao = $ehCategoriaBanco ? "selected='selected'":"";
                    ?>
                        <option value="<?=$categoria['id']?>" <?=$selecao?>><?=$categoria["nome"]?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>

        <tr>
            <td>
                <button class="btn btn-primary" type="submit">Alterar</button>
            </td>
        </tr>
    </table>
</form>
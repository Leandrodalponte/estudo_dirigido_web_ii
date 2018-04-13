<?php
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("produto-banco.php");
    include_once("categorias-banco.php");

    $categorias = listaCategorias($conexao);
?>

<h1>Formulário de Cadastro</h1>

<form action="produto-adiciona.php" method="post">
    <table>
        <tr>
            <td>Nome</td>
            <td><input type="text" class="form-control" name="nome" /></td>
        </tr>

        <tr>
            <td>Preço</td>
            <td><input type="number" class="form-control" name="preco" /></td>
        </tr>

        <tr>
            <td>Descrição</td>
            <td><textarea class="form-control" name="descricao"></textarea></td>
        </tr>

        <tr>
            <td>Categoria</td>
            <td>
                <select name="categoria_id">
                    <?php foreach ($categorias as $categoria) {
                    ?>
                        <option value="<?=$categoria['id']?>"><?=$categoria["nome"]?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>

        <tr>
            <td>
                <button class="btn btn-primary" type="submit">Cadastrar</button>
            </td>
        </tr>
    </table>
</form>
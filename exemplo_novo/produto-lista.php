<?php
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("produto-banco.php");
?>

<?php if (array_key_exists("removido", $_GET) && $_GET["removido"]==true) { ?>
    <p class="alert-success">Produto <?=$_GET['produto']?> foi removido com sucesso!</p>
<?php } ?>

<table class="table table-striped table-bordered">
    <tr>
        <td>Nome</td>
        <td>Preço</td>
        <td>Descrição</td>
        <td>Categoria</td>
        <td>Ações</td>
    </tr>
    <?php
        $produtos = listaProdutos($conexao);
        foreach ($produtos as $produto) :
    ?>
        <tr>
            <td><?=$produto['nome']?></td>
            <td><?=$produto['preco']?></td>
            <td><?=$produto['descricao']?></td>
            <td><?=$produto['categoria_nome']?></td>
            <td>
            
                <a class="btn btn-primary" href="produto-altera-formulario.php?id=<?=$produto['id']?>">Alterar</a>

                <form action="produto-remove.php" method="post">
                    <input type="hidden" name="id" value="<?=$produto['id']?>" />
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
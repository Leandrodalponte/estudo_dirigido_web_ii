<?php
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("territorio-banco.php");
?>

<?php if (array_key_exists("removido", $_GET) && $_GET["removido"]==true) { ?>
    <p class="alert-success">Territorio <?=$_GET['territorio']?> foi removido com sucesso!</p>
<?php } ?>

<table class="table table-striped table-bordered">
    <tr>
        <td>Terrirotio</td>
        <td>ID Região</td>
    </tr>
    <?php
        $territorio = listaTerritorio($conexao);
        foreach ($territorio as $territorio) :
    ?>
        <tr>
            <td><?=$territorio['Nome']?></td>
            <td><?=$territorio['Sobrenome']?></td>
            <td>
            
                <a class="btn btn-primary" href="territorio-altera-formulario.php?id=<?=$territorio['IDTerritorio']?>">Alterar</a>

                <form action="territorio-remove.php" method="post">
                    <input type="hidden" name="IDTerritorio" value="<?=$territorio['IDTerritorio']?>" />
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
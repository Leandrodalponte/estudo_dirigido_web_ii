<?php
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("func_territorio-banco.php");
?>

<?php if (array_key_exists("removido", $_GET) && $_GET["removido"]==true) { ?>
    <p class="alert-success">Territorio <?=$_GET['IDTerritorio']?> foi removido com sucesso!</p>
<?php } ?>

<table class="centered bordered ">
    <tr>
        <td>ID Territorio</td>
        <td>ID Funcionario</td>
        <td>Opções</td>
    </tr>
    <?php
        $funterritorio = listaFunTerritorio($conexao);
        foreach ($funterritorio as $funterritorio) :
    ?>
        <tr>
            <td><?=$funterritorio['IDTerritorio']?></td>
            <td><?=$funterritorio['IDFuncionario']?></td>
            <td>
            
                <a class="btn-floating" href="func_territorio-altera-formulario.php?id=<?=$funterritorio['IDTerritorio']?>"> 
                <i class="material-icons">edit</i></a>

                <form action="func_territorio-remove.php" method="post">
                    <input type="hidden" name="IDTerritorio" value="<?=$funterritorio['IDTerritorio']?>" />
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
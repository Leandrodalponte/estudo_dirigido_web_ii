<?php
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("territorio-banco.php");
    //include_once("categorias-banco.php");

    $IDTerritorio = $_GET['id'];
    $territorio = buscaTerritorio($conexao, $IDTerritorio);
    //$categorias = listaCategorias($conexao);
?>

<h1>Alteração de Territorio Cadastrado</h1>

<form action="territorio-altera.php" method="post">
    <input type="hidden" name="IDTerritorio" value="<?=$IDTerritorio?>" />
    <table>
            <?php
        while ($row = mysqli_fetch_assoc($territorio)) {
            ?>
        <tr>
            <td>Territorio</td>
            <td><input type="text" class="form-control" value="<?= $row['DescricaoTerritorio'] ?>"  name="DescricaoTerritorio" /></td>
        </tr>

        <tr>
            <td>ID Região</td>
            <td><input type="text" class="form-control"  value="<?= $row['IDRegiao'] ?>" name="IDRegiao" /></td>
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
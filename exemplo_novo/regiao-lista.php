<?php
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("regiao-banco.php");
?>

<table class="table table-striped table-bordered">
    <tr>
        <td>ID Região</td>
        <td>Região</td>
    </tr>
    <?php
        $regiao = listaRegiao($conexao);
        foreach ($regiao as $regiao) :
    ?>
        <tr>
            <td><?=$regiao['IDRegiao']?></td>
            <td><?=$regiao['DescricaoRegiao']?></td>
        </tr>
    <?php
        endforeach;
    ?>
</table>

<?php
    include_once("rodape.php");
?>
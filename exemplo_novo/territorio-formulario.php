<?php
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("territorio-banco.php");
    include_once("categorias-banco.php");

   // $categorias = listaCategorias($conexao);
?>

<h1>Formulário de Cadastro</h1>

<form action="territorio-adiciona.php" method="post">
    <table>
        <tr>
            <td>ID Territorio</td>
            <td><input type="text" class="form-control" name="IDTerritorio" /></td>
        </tr>

        <tr>
            <td>Territorio</td>
            <td><input type="text" class="form-control" name="DescricaoTerritorio" /></td>
        </tr>

        <tr>
            <td>ID Região</td>
            <td><input type="text" class="form-control" name="IDRegiao" /></td>
        </tr>
       

        <tr>
            <td>
                <button class="btn btn-primary" type="submit">Cadastrar</button>
            </td>
        </tr>
    </table>
</form>
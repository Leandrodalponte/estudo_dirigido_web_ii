<?php
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("func_territorio-banco.php");
    include_once("categorias-banco.php");

   // $categorias = listaCategorias($conexao);
?>

<h1>Formulário de Cadastro</h1>

<form action="func_territorio-adiciona.php" method="post">
    <table>
        <tr>
            <td>ID Territorio</td>
            <td><input type="number_format" class="form-control" name="IDTerritorio" /></td>
        </tr>

        <tr>
            <td>ID Funcionario</td>
            <td><input type="number_format" class="form-control" name="DescricaoTerritorio" /></td>
        </tr>       

        <tr>
            <td>
                <button class="btn btn-primary" type="submit">Cadastrar</button>
            </td>
        </tr>
    </table>
</form>
<?php
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("funcionario-banco.php");
    include_once("categorias-banco.php");

   // $categorias = listaCategorias($conexao);
?>

<h1>Formulário de Cadastro</h1>

<form action="funcionario-adiciona.php" method="post">
    <table>
        <tr>
            <td>Nome</td>
            <td><input type="text" class="form-control" name="Nome" /></td>
        </tr>

        <tr>
            <td>Preço</td>
            <td><input type="form-control" class="form-control" name="Titulo" /></td>
        </tr>

        <tr>
            <td>Descrição</td>
            <td><textarea class="form-control" name="TituloCortesia"></textarea></td>
        </tr>

        <tr>
            
        </tr>

        <tr>
            <td>
                <button class="btn btn-primary" type="submit">Cadastrar</button>
            </td>
        </tr>
    </table>
</form>
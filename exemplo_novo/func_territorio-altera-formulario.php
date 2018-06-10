<?php
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("func_territorio-banco.php");
    //include_once("categorias-banco.php");

    $IDTerritoriofun = $_GET['id'];
    $funterritorio = buscaFunTerritorio($conexao, $IDTerritoriofun);
    //$categorias = listaCategorias($conexao);
?>

<h1>Alteração de Cadastrado</h1>

<form action="func_territorio-altera.php" method="post">
    <input type="hidden" name="IDTerritorio" value="<?=$IDTerritoriofun?>" />
    <table>
        <tr>

            <td><input type="number" class="input-field col s6" 
            placeholder="ID Funcionario" name="IDFuncionario" /></td>
        </tr>

        <tr>
            
            <td>
                <button class="btn btn-primary" type="submit">Alterar</button>
            </td>
        </tr>
    </table>
</form>
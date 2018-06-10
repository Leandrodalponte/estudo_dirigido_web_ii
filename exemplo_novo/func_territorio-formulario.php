<?php
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("func_territorio-banco.php");
    include_once("categorias-banco.php");

   // $categorias = listaCategorias($conexao);
?>

<div class="card-panel blue z-depth-4 center"> <h4>Cadastro de Territorio Funcionario</h4></div>

<form action="func_territorio-adiciona.php" method="post">
    <table>
        <tr>
            
            <td><input type="number" class="input-field col s6" 
            placeholder="ID Território"name="IDTerritorio" /></td>
        </tr>

        <tr>
            
            <td><input type="number" class="input-field col s6" 
            placeholder="ID Funcionario" name="DescricaoTerritorio" /></td>
        </tr>       

        <tr>
            <td>
                <button class="btn btn-primary" type="submit">Cadastrar</button>
            </td>
        </tr>
    </table>
</form>
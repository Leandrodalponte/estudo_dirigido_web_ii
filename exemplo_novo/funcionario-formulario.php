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
            <td>SobreNome</td>
            <td><input type="text" class="form-control" name="Sobrenome" /></td>
        </tr>

        <tr>
            <td>Titulo</td>
            <td><textarea type="form-control" class="form-control" name="Titulo" ></textarea></td>
        </tr>

        <tr>
            <td>Titulo Cortesia</td>
            <td><textarea type="form-control" class="form-control" name="TituloCortesia"></textarea></td>
        </tr>

        <tr>
            <td>Data Nascimento</td>
            <td><input type="date" name="DataNac" ></td>
        </tr>
         
        <tr>
            <td>Data Admimissão</td>
            <td><input type="date"  name="DataAdmissao" ></td>
        </tr>

        <tr>
            <td>Endereço</td>
            <td><input type="text" class="form-control" name="Endereco" /></td>
        </tr>
        <tr>
            <td>Cidade</td>
            <td><input type="text" class="form-control" name="Cidade" /></td>
        </tr>
        <tr>
            <td>Região</td>
            <td><input type="text" class="form-control" name="Regiao" /></td>
        </tr>
        <tr>
            <td>Cep</td>
            <td><input type="number_format" class="form-control" name="Cep" /></td>
        </tr>
        <tr>
            <td>Pais</td>
            <td><input type="text" class="form-control" name="Pais" /></td>
        </tr>
        <tr>
            <td>Telefone</td>
            <td><input type="text" class="form-control" name="TelefoneResidencial" /></td>
        </tr>
        <tr>
            <td>Extesão</td>
            <td><input type="text" class="form-control" name="Extensao" /></td>
        </tr>
       

        <tr>
            <td>
                <button class="btn btn-primary" type="submit">Cadastrar</button>
            </td>
        </tr>
    </table>
</form>
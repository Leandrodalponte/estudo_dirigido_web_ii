<?php
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("funcionario-banco.php");
    include_once("categorias-banco.php");

   // $categorias = listaCategorias($conexao);
?>

<div class="card-panel blue z-depth-4 center"> <h4>Cadastro de funcionarios</h4></div>

<form action="funcionario-adiciona.php" method="post">
    <table>
        <tr>          
            <td><input type="text" 
            class="input-field col s6" 
            placeholder="Seu nome" 
            name="Nome" /></td>
        </tr>

        <tr>
            <td><input type="text"
             class="input-field col s6" 
            placeholder="Sobrenome"
             name="Sobrenome" /></td>
        </tr>

        <tr>
            <td><input type="text" class="input-field col s6" 
            placeholder="Titulo" name="Titulo" /></td>
        </tr>

        <tr>
            <td><input type="text" class="input-field col s6" 
            placeholder="Titulo Cortesia" name="TituloCortesia"/></td>
        </tr>

        <tr>
            <td>  <input type="text" placeholder="Data Nascimento" name="DataNac" class="datepicker">  </td>
        </tr>
         
        <tr>
            <td><input type="text" placeholder="Data Admissão" class="datepicker"  name="DataAdmissao" ></td>
        </tr>

        <tr>
            <td><input type="text" class="input-field col s6" 
            placeholder="Endereço" name="Endereco" /></td>
        </tr>
        <tr>
            <td><input type="text"  class="input-field col s6" 
            placeholder="Cidade" name="Cidade" /></td>
        </tr>
        <tr>
            <td><input type="text" class="input-field col s6" 
            placeholder="Região" name="Regiao" /></td>
        </tr>
        <tr>
            <td><input type="number"  class="input-field col s6" 
            placeholder="Cep" name="Cep" /></td>
        </tr>
        <tr>
            <td><input type="text"  class="input-field col s6" 
            placeholder="Pais" name="Pais" /></td>
        </tr>
        <tr>
            <td><input type="text"  class="input-field col s6" 
            placeholder="Telefone" name="TelefoneResidencial" /></td>
        </tr>
        <tr>
            <td><input type="text"  class="input-field col s6" 
            placeholder="Extensão" name="Extensao" /></td>
        </tr>
       

        <tr>
            <td>
                <button class="btn btn-primary" type="submit">Cadastrar</button>
            </td>
        </tr>
    </table>
    <script>

    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.datepicker');
    var instances = M.Datepicker.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.datepicker').datepicker();
  });
  </script>
  

</form>
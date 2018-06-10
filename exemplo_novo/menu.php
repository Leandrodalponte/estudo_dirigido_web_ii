<div class="navbar-fixed">
<nav class="red darken-3" >
    <div class="nav-wrapper  ">
      <a href="index.php"  class="brand-logo"><i class="material-icons">home</i> Inicio</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="funcionario-formulario.php">Cadastra Funcionario</a></li>
        <li><a href="funcionario-lista.php">Lista Funcionario</a></li>
        <li><a href="territorio-formulario.php">Cadastra Territorio</a></li>
        <li><a href="territorio-lista.php">Lista Territorios</a></li>
        <li><a href="func_territorio-formulario.php">Cadastro Territorio por Funcionario</a></li>
        <li><a href="func_territorio-lista.php">Territorios Funcionario</a></li>
        <li><a href="regiao-lista.php">Regiao</a></li>

      </ul>
    </div>
  </nav>
  </div>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="funcionario-formulario.php">Cadastra Funcionario</a></li>
    <li><a href="funcionario-lista.php">Lista Funcionario</a></li>
    <li><a href="territorio-formulario.php">Cadastra Territorio</a></li>
    <li><a href="territorio-lista.php">Lista Territorios</a></li>
    <li><a href="func_territorio-formulario.php">Cadastro Territorio por Funcionario</a></li>
    <li><a href="func_territorio-lista.php">Territorios Funcionario</a></li>
    <li><a href="regiao-lista.php">Regiao</a></li>
  </ul>
  <!-- Jquery-->
 <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>     
  <!-- materialize js-->
 <script src="js/materialize.js"></script>
    <!-- menu mobile-->
<script>    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.sidenav').sidenav();
  }); 
  </script>

<div class="container">
    <div class="principal">
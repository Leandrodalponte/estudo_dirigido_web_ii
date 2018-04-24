<?php
    function listaFuncionario($conn) {
        $funcionarios = array();

        $sql = "select IDFuncionario, Nome, Sobrenome
                from funcionarios";
        $resultado = mysqli_query($conn, $sql);

        while ($funcionario = mysqli_fetch_assoc($resultado)) {
            array_push($funcionarios, $funcionario);
        }
        //mysqli_fetch_all($resultado)

        return $funcionarios;
    }

    function insereFuncionario($conn, $sobrenome, $nome, $titulo, $titulocortesia, $dataNac, $dataAdmissao, $endereco, $cidade, $regiao, $cep, $pais, $telresidencial, $extensao ) {
        $query = "insert into funcionarios ( Sobrenome, Nome, Titulo, TituloCortesia, DataNac, DataAdmissao, Dndereco, Cidade, Regiao, Cep, Pais, TelefoneResidencial, Extensao ) values ('{$sobrenome}','{$nome}', '{$titulo}', '{$titulocortesia}', {$dataNac}, {$dataAdmissao}, '{$endereco}', '{$cidade}', {$regiao}, {$cep}, {$pais}, {$telefoneresidencial}, '{$extensao}')";
        return mysqli_query($conn, $query);
    }

    function alteraFuncionario($conn,$id,$nome,$preco,$descricao,$categoria_id) {
        $query = "update produtos set nome = '{$nome}', preco = {$preco}, descricao = '{$descricao}', categoria_id = {$categoria_id} where id = {$id}";
        return mysqli_query($conn, $query);
    }

    function removeFuncionario($conn, $IDFuncionario) {
        $query = "delete from funcionarios where IDFuncionario = {$IDFuncionario}";
        return mysqli_query($conn, $query);
    }

    function buscaFuncionario($conn, $IDFuncionario) {
        $query = "select * from funcionarios where IDFuncionario = {$IDFuncionario}";
        $resultado = mysqli_query($conn, $query);
        return mysqli_fetch_assoc($resultado);
    }
?>
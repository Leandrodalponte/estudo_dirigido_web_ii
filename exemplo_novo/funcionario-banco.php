<?php
    function listaFuncionario($conn) {
        $funcionarios = array();

        $sql = "select IDFuncionario, Nome, Sobrenome, Titulo, TituloCortesia, DataNac, DataAdmissao, Endereco, Cidade, Regiao, Cep, Pais, TelefoneResidencial, Extensao
                from funcionarios";
        $resultado = mysqli_query($conn, $sql);

        while ($funcionario = mysqli_fetch_assoc($resultado)) {
            array_push($funcionarios, $funcionario);
        }
        //mysqli_fetch_all($resultado)

        return $funcionarios;
    }

    function insereFuncionario($conn, $sobrenome, $nome, $titulo, $titulocortesia, $dataNac, $dataAdmissao, $endereco, $cidade, $regiao, $cep, $pais, $telefoneresidencial, $extensao ) {
        $query = "insert into funcionarios (Sobrenome, Nome, Titulo, TituloCortesia, DataNac, DataAdmissao, Endereco, Cidade, Regiao, Cep, Pais, TelefoneResidencial, Extensao ) values ('{$sobrenome}','{$nome}', '{$titulo}', '{$titulocortesia}', '{$dataNac}', '{$dataAdmissao}', '{$endereco}', '{$cidade}', '{$regiao}', '{$cep}', '{$pais}', '{$telefoneresidencial}', '{$extensao}')";
        return mysqli_query($conn, $query);
    }

    function alteraFuncionario($conn,$IDFuncionario,$sobrenome, $nome, $titulo, $titulocortesia, $dataNac, $dataAdmissao, $endereco, $cidade, $regiao, $cep, $pais, $telefoneresidencial, $extensao) {
        $query = "update funcionarios set Nome = '{$nome}', Sobrenome = '{$sobrenome}', Titulo = '{$titulo}', TituloCortesia = '{$titulocortesia}', DataNac = '{$dataNac}', DataAdmissao = '{$dataAdmissao}', Endereco = '{$endereco}', Cidade = '{$cidade}', Regiao = '{$regiao}', Cep =  '{$cep}', Pais = '{$pais}', TelefoneResidencial = '{$telefoneresidencial}', Extensao = '{$extensao}' where IDFuncionario = '{$IDFuncionario}'";
        return mysqli_query($conn, $query);
    }

    function removeFuncionario($conn, $IDFuncionario) {
        $query = "delete from ordens_detalhes where ordens_detalhes.IDOrdem in (select IDOrdem from ordens where IDFuncionario = {$IDFuncionario})";
        mysqli_query($conn, $query);
        $query = "delete from ordens where IDFuncionario = {$IDFuncionario}";
        mysqli_query($conn, $query);
        $query = "delete from funcionarios_territorios where IDFuncionario = {$IDFuncionario}";
        mysqli_query($conn, $query);
        $query = "delete from funcionarios WHERE IDFuncionario = {$IDFuncionario}";
        return mysqli_query($conn, $query);
    }

    function buscaFuncionario($conn, $IDFuncionario) {
        $query = "select * from funcionarios where IDFuncionario = {$IDFuncionario}";
        return mysqli_query($conn, $query);
    }
?>
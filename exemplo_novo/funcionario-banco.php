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
        $sql = "delete from funcionarios where IDFuncionario = {$IDFuncionario}";
        $query = mysqli_query($conn, $sql)or die(mysqli_error($conn)); ;
        return $query;
    }

    function buscaFuncionario($conn, $IDFuncionario) {
        $query = "select * from funcionarios where IDFuncionario = {$IDFuncionario}";
        return mysqli_query($conn, $query);
    }
?>
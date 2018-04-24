<?php
    function listaFuncionario($conn) {
        $produtos = array();

        $sql = "select p.*, c.nome as categoria_nome from produtos as p join categorias as c on p.categoria_id = c.id";
        $resultado = mysqli_query($conn, $sql);

        while ($produto = mysqli_fetch_assoc($resultado)) {
            array_push($produtos, $produto);
        }
        //mysqli_fetch_all($resultado)

        return $produtos;
    }

    function insereFuncionario($conn, $sobrenome, $nome, $titulo, $titulocortesia, $dataNac, $dataAdmissao, $endereco, $cidade, $regiao, $cep, $pais, $telresidencial, $extensao ) {
        $query = "insert into funcionarios ( Sobrenome, Nome, Titulo, TituloCortesia, DataNac, DataAdmissao, Dndereco, Cidade, Regiao, Cep, Pais, TelefoneResidencial, Extensao ) values ('{$sobrenome}','{$nome}', '{$titulo}', '{$titulocortesia}', {$dataNac}, {$dataAdmissao}, '{$endereco}', '{$cidade}', {$regiao}, {$cep}, {$pais}, {$telefoneresidencial}, '{$extensao}')";
        return mysqli_query($conn, $query);
    }

    function alteraProduto($conn,$id,$nome,$preco,$descricao,$categoria_id) {
        $query = "update produtos set nome = '{$nome}', preco = {$preco}, descricao = '{$descricao}', categoria_id = {$categoria_id} where id = {$id}";
        return mysqli_query($conn, $query);
    }

    function removeProduto($conn, $id) {
        $query = "delete from produtos where id = {$id}";
        return mysqli_query($conn, $query);
    }

    function buscaProduto($conn, $id) {
        $query = "select * from produtos where id = {$id}";
        $resultado = mysqli_query($conn, $query);
        return mysqli_fetch_assoc($resultado);
    }
?>
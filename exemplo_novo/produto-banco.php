<?php
    function listaProdutos($conn) {
        $produtos = array();

        $sql = "select p.*, c.nome as categoria_nome from produtos as p join categorias as c on p.categoria_id = c.id";
        $resultado = mysqli_query($conn, $sql);

        while ($produto = mysqli_fetch_assoc($resultado)) {
            array_push($produtos, $produto);
        }
        //mysqli_fetch_all($resultado)

        return $produtos;
    }

    function insereProduto($conn, $nome, $preco, $descricao, $categoria_id) {
        $query = "insert into produtos (nome, preco, descricao, categoria_id) values ('{$nome}',{$preco},'{$descricao}',{$categoria_id})";
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
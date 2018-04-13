<?php
    function listaCategorias($conn) {
        $categorias = array();
        $sql = "select * from categorias";
        $resultado = mysqli_query($conn, $sql);

        while ($categoria = mysqli_fetch_assoc($resultado)) {
            array_push($categorias, $categoria);
        }

        return $categorias;
    }

?>
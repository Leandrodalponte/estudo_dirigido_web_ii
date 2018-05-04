<?php
    function listaTerritorio($conn) {
        $territorios = array();

        $sql = "select IDTerritorio, DescricaoTerritorio, IDRegiao
                from territorios";
        $resultado = mysqli_query($conn, $sql);

        while ($territorio = mysqli_fetch_assoc($resultado)) {
            array_push($territorios, $territorio);
        }
        //mysqli_fetch_all($resultado)

        return $territorios;
    }

    function insereTerritorio($conn, $descricaoTerritorio, $IDRegiao) {
        $query = "insert into territorios ( descricaoTerritorios, IDRegiao) values ('{$descricaoTerritorio}',{$IDRegiao})";
        return mysqli_query($conn, $query);
    }

    function alteraTerritorio($conn, $IDTerritorios, $descricaoTerritorio, $IDRegiao) {
        $query = "update territorios set descricaoTerritorios = '{$descricaoTerritorios}', IDRegiao = '{$IDRegiao}'";
        return mysqli_query($conn, $query);
    }

    function removeTerritorio($conn, $IDTerritorios) {
        $query = "delete from territorios where IDTerritorios = {$IDTerritorios}";
        return mysqli_query($conn, $query);
    }

    function buscaTerritorio($conn, $IDTerritorios) {
        $query = "select * from territorios where IDTerritorios = {$IDTerritorios}";
        $resultado = mysqli_query($conn, $query);
        return mysqli_fetch_assoc($resultado);
    }
?>
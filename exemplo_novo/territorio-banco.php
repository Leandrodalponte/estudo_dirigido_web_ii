<?php
    function listaTerritorio($conn) {
        $territorios = array();

        $sql = "select IDTerritorio, DescricaoTerritorio, IDRegiao
                from territorios";
        $resultado = mysqli_query($conn, $sql);

        while ($territorio = mysqli_fetch_assoc($resultado)) {
            array_push($territorios, $territorio);
        }
        return $territorios;
    }

    function insereTerritorio($conn, $IDTerritorio, $descricaoTerritorio, $IDRegiao) {
        $query = "insert into territorios (IDTerritorio, DescricaoTerritorio, IDRegiao) values ({$IDTerritorio},'{$descricaoTerritorio}',{$IDRegiao})";
        return mysqli_query($conn, $query);
    }

    function alteraTerritorio($conn, $IDTerritorio, $descricaoTerritorio, $IDRegiao) {
        $query = "update territorios set DescricaoTerritorio = '{$descricaoTerritorios}', IDRegiao = {$IDRegiao}";
        return mysqli_query($conn, $query);
    }

    function removeTerritorio($conn, $IDTerritorio) {
        $query = "delete from territorios where IDTerritorio = {$IDTerritorio}";
        return mysqli_query($conn, $query);
    }

    function buscaTerritorio($conn, $IDTerritorio) {
        $query = "select * from territorios where IDTerritorio = {$IDTerritorio}";
        $resultado = mysqli_query($conn, $query);
        return mysqli_fetch_assoc($resultado);
    }
?>
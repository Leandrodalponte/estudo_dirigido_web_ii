<?php
    function listaFunTerritorio($conn) {
        $funterritorios = array();

        $sql = "select IDTerritorio, IDFuncionario
                from funcionarios_territorios";
        $resultado = mysqli_query($conn, $sql);

        while ($funterritorio = mysqli_fetch_assoc($resultado)) {
            array_push($funterritorios, $funterritorio);
        }
        return $funterritorios;
    }

    function insereFunTerritorio($conn, $IDTerritoriofun, $IDTerritorIDFuncionarioiofun) {
        $query = "insert into funcionarios_territorios (IDTerritorio, IDFuncionario, ) values ({$IDTerritoriofun},{$IDFuncionario})";
        return mysqli_query($conn, $query);
    }

    function alteraFunTerritorio($conn, $IDTerritoriofun, $IDFuncionario) {
        $query = "update funcionarios_territorios set IDFuncionario = {$IDFuncionario} where IDTerritorio = {$IDTerritoriofun}";
        return mysqli_query($conn, $query);
    }

    function removeFunTerritorio($conn, $IDTerritoriofun) {
        $query = "delete from funcionarios_territorios where IDTerritorio = {$IDTerritoriofun}";
        return mysqli_query($conn, $query);
    }

    function buscaFunTerritorio($conn, $IDTerritoriofun) {
        $query = "select * from funcionarios_territorios where IDTerritorio = {$IDTerritoriofun}";
        $resultado = mysqli_query($conn, $query);
        return mysqli_fetch_assoc($resultado);
    }
?>
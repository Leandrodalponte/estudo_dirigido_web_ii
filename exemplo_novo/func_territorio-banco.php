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

    function insereFunTerritorio($conn, $IDTerritorio, $IDFuncionario) {
        $query = "insert into funcionarios_territorios (IDTerritorio, IDFuncionario, ) values ({$IDTerritorio},{$IDFuncionario})";
        return mysqli_query($conn, $query);
    }

    function alteraFunTerritorio($conn, $IDTerritorio, $IDFuncionario) {
        $query = "update funcionarios_territorios set IDFuncionario = {$IDFuncionario}";
        return mysqli_query($conn, $query);
    }

    function removeFunTerritorio($conn, $IDTerritorio) {
        $query = "delete from funcionarios_territorios where IDTerritorio = {$IDTerritorio}";
        return mysqli_query($conn, $query);
    }

    function buscaFunTerritorio($conn, $IDTerritorio) {
        $query = "select * from funcionarios_territorios where IDTerritorio = {$IDTerritorio}";
        $resultado = mysqli_query($conn, $query);
        return mysqli_fetch_assoc($resultado);
    }
?>
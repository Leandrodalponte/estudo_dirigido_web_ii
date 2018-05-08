<?php
    function listaRegiao($conn) {
        $regioes = array();

        $sql = "select IDRegiao, DescricaoRegiao
                from regiao";
        $resultado = mysqli_query($conn, $sql);

        while ($regiao = mysqli_fetch_assoc($resultado)) {
            array_push($regioes, $regiao);
        }
        return $regioes;
    }

?>
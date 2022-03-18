<?php
    $sigla = "RJ";
    switch($sigla){
        case "SP":
            echo "São Paulo";
            break;
        case "RJ":
            echo "Rio de Janeiro";
            break;
        case "MG":
            echo "Minas Gerais";
            break;
        default:
            echo "Sigla não encontrada";
            break;
    }

?>
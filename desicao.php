<?php

    date_default_timezone_set('America/Sao_Paulo');


    $cidade = 'São Paulo';
    $idade = 18;

    //if((date('H') > 12) &&
    //    ($cidade == 'São Paulo' ||
    //        $idade >= 20)
    //) {
    //    echo 'Passou do meio dia em sp ';
    //} 

    switch ($cidade) {
        case 'São Paulo':

            if(date('H') > 12) {
                echo 'Muito transito depois do almoço ';
            } else {
                echo 'Muito transito antes do almoço';
            }

            break;
        case 'Curitiba':
            echo 'Pouco transito ';
            break;
        default:
            echo 'Não sei ';
            break;
    }



    echo date('H');

?>
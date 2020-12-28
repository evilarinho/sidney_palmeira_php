<?php
    // Nessa aula vamos ver um exemplo dos comandos PHP SWITCH CASE para mostrar os dias da semana por extenso.
    /* Comando switch Case
        Receber um dia de 1 a 7 e retornar o dia da semana (1-Segunda-feira até 7-Domingo)

        Exibir a mensagem: Hoje é o 1 ° dia da semana, SEGUNDA-FEIRA.           
    */

    $dia = 1;

    switch ($dia) {
        case 1:
            $diaSemana = "SEGUNDA-FEIRA";
            break;
        case 2:
            $diaSemana = "TERÇA-FEIRA";
            break;
        case 3:
            $diaSemana = "QUARTA-FEIRA";
            break;
        case 4:
            $diaSemana = "QUINTA-FEIRA";
            break;
        case 5:
            $diaSemana = "SEXTA-FEIRA";
            break;
        case 6:
            $diaSemana = "SÁBADO";
            break;
        case 7:
            $diaSemana = "DOMINGO";
            break;
    }
    if ( ($dia >= 1) and ($dia <= 7) ) {
        echo "Hoje é o $dia ° da semana, $diaSemana.";
    } else {
        echo "Dia: $dia<br>";
        echo "O dia deve está entre 1 e 7";
    }
    




    /*
    $i = 4;
    switch ($i) {
        case 0:
            echo "i equals 0<br>";
            break;
        case 1:
            echo "i equals 1<br>";
            break;
        case 2:
            echo "i equals 2<br>";
            break;
        default:
            echo "i is not equal to 0, 1 or 2";
            
    }  
    */

?>
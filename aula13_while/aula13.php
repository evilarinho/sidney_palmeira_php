<?php
    // Exemplos práticos de laços de repetição com o comando PHP WHILE.
    /* Laços de Repetição: Comando WHILE

        1. Receber dois números e mostrar na tela todos os números entre eles, um em cada linha.
        2. Mostrar na tela os números de 50 a 0, de 10 em 10, quando chegar na metade, mostrar a mensagem: Chegamos na metade   
    */

    /* Resposta 1 */
    echo "Resposta 1";
    echo "<hr>";

    $num1 = 0;
    $num2 = 10;
    $i = $num1;
 
    while ( $i <= $num2) {
        echo "$i<br>";
        $i++;
    }
    
    // Resposta 2
    echo "<br>Resposta 2";
    echo "<hr>";
    $numIni = 50;
    $numFim = 0;  
    $metade = $numIni / 2; 
    $chegou = true;
        
    while ( $numIni >= $numFim) {
        echo "<br>$numIni";
        if ( $numIni <= $metade and $chegou )  {
            echo " Chegamos na metade";
            $chegou = false;             
        }
        $numIni -= 10;
    }  
?>
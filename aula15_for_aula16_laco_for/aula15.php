<?php
    // Nessa aula teremos exemplos bem práticos de laço de repetição com o comando FOR em PHP.
    /* Laços de repetição com o comando FOR
        1. Mostrar uma tabuada de 1 a 10    
    */

    $tabuadaInicial = 1;
    $tabuadaFinal = 5;
 
    for ( $i=$tabuadaInicial; $i <= $tabuadaFinal; $i++ ) {
        //echo "<hr>";
        echo "<h2>Tabuada de $i</h2>";       
        for ($j=1; $j <= 10; $j++) {
            echo "<br>$i x $j = " . ($i * $j);
        }        
    }

?>
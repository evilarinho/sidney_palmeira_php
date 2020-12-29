<?php
    # Nessa aula vamos aprender um pouco sobre funções em PHP.
    /* Function */

    function Soma($num1, $num2) 
    {
        $resultado = $num1 + $num2;
        return $resultado;
    }

    $num1 = 100;
    $num2 = 200;

    echo "A soma de $num1 + $num2 = " . Soma($num1, $num2) , "\n";

    function Tabuada($numInicial, $numFinal) 
    {
        for ( $i=$numInicial; $i <= $numFinal; $i++ ) {            
            echo "\nTabuada de $i";       
            for ($j=1; $j <= 10; $j++) {
                echo "\n$i x $j = " . ($i * $j);
            }        
        } 
    }   
    
    $tabuadaInicial = 1;
    $tabuadaFinal = 10;
    Tabuada($tabuadaInicial, $tabuadaFinal);
    
    


?>
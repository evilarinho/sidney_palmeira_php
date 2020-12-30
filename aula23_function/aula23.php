<?php
    # Nessa aula vamos aprender um pouco mais sobre funções e require em PHP.
    /* Funções e Require */

    /** Função que mostra uma mensagem na tela
     * @param $nome Nome a ser exibido
     */
    function teste($nome="") 
    {
        echo "Olá $nome\n";
    }

    //teste();
    //teste("José");
    
    require("aula-23-lib.php");
    $num1 = 30;
    $num2 = 10;
    $oper = "soma";
    //$oper = "subtração";
    //$oper = "divisão";
    //$oper = "multiplicação";
    //$oper = "raiz2";
    
    //echo "A $oper de $num1 e $num2 = " . Calculadora($num1, $num2, $oper);

    echo "Hojé é: " . DiasdaSemana() . "<br>";
    echo "<hr>";
    echo "O mês é: " . MesdoAno(); 





?>
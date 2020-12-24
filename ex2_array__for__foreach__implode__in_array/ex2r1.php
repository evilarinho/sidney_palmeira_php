<?php
    # Exercícios bacanas pra você treinar sua lógica e revisar os comandos em PHP.
    /* Exercício 2
        1. Criar um programa que receba NOME e hora do sistema e mostre na tela:
            Se hora > 0, mostrar: São X horas, Bom Dia NOME
            Se hora > 12, mostrar: São X horas, Boa Tarde NOME
            Se hora > 18, mostrar: São X horas, Bom Noite NOME
        
    */

    date_default_timezone_set('America/Recife');
    //echo date('d/m/Y H:i:s');
    $nome = "José";
    $horaAtual = date('H:i');
    $apenasHora = date('H');
    //echo "<br>São $hora h";  

    if ( ($apenasHora >= 0) and ($apenasHora < 12) ) {
        $msg = "Bom Dia";
    } else if ( ($apenasHora >= 12) and ($apenasHora < 18) ) {
        $msg = "Boa Tarde";
    } else {
        $msg = "Boa Noite";
    }
    echo "<br>São " . $horaAtual . ", $msg $nome";
 
    
    
    
    // echo number_format(1500, 2, ',', '.');
    /*
    $valores = array(2,3,4);
    var_dump($valores);
    $valores = [2,3,4];
    var_dump($valores);
    phpinfo();
    */
?>

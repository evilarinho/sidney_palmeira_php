<?php
    # Exercícios bacanas pra você treinar sua lógica e revisar os comandos em PHP.
    /* Exercício 2
        1. Criar um programa que receba NOME e hora do sistema e mostre na tela:
            Se hora > 0, mostrar: São X horas, Bom Dia NOME
            Se hora > 12, mostrar: São X horas, Boa Tarde NOME
            Se hora > 18, mostrar: São X horas, Bom Noite NOME
        
        2. Criar um programa com as variáveis TVLigada=Boolean e $canal=4.
           Caso a TV esteja ligada, mostrar na tela "A TV ESTÁ LIGADA NO CANAL X", desligar a TV e mostrar "AGORA A TV ESTÁ DESLIGADA."
           Se a TV esiver desligada, mostrar "A TV ESTÁ DESLIGADA.", ligar a TV e mostrar "AGORA A TV ESTÁ LIGADA NO CANAL X".
        
        3. Recebendo o array (2,3,5,1,8,10,4). Mostrar na tela: ATENÇÃO, NÃO PODE USAR FUNÇÕES DE ARRAY
            Resultado do array (2,3,5,1,8,10,4)
            Qtd de itens......: 7
            Menor valor.......: 1
            Maior valor.......: 10
            Soma dos valores..: 33
            Média dos valores.: 4.714

        4. Cria rum programa de bolão da quina, onde o cliente fará 1 bolão com 5 jogos, sendo 5 números em cada (de 1 a 80)
           O programa fará o sorteio de forma randômica (RAND), sorteando os 5 números
           Depois irá comparar os números sorteados com as 5 apostas do bolão
           Caso cada aposta tenha mais de 2 números sorteados, o programa indicará que a aposta foi premiada.

        5. Criar um array com 5 materias e duas notas cada, mostrar na tela as materias, notas e media, 
           se MEDIA < 5 mostrar REPROVADO, se MEDIA < 7 em EM EXAME, se MEDIA >= 7 APROVADO. Exemplo:
           ---------------------------------------------
           Materia  N1      N2      Media   Situação
           ---------------------------------------------
           CSS      5.00    6.00    5.50    EM EXAME
           HTML     6.00    3.50    4.75    REPROVADO
           Ajax     4.50    8.50    6.50    EM EXAME
           PHP      8.00    9.00    8,50    APROVADO
           MySQL    7.50    7.50    7.50    APROVADO
           ---------------------------------------------
    */


     // **** RESPOSTA 1 *****

    date_default_timezone_set('America/Recife');
    //echo date('d/m/Y H:i:s');
    $nome = "José";
    $horaAtual = date('H:i');
    $apenasHora = date('H');
    //echo "$apenasHora<br>";
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

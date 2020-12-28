<?php 
    // Exemplos práticos do comando PHP Do..While
    /* Laço de Repetição com comando DO...WHILE
        1. Simular uma viagem pela rodovia, saindo do KM 10 até o KM 80, com ao menos 3 paradas obrigatórias:

        Para cada KM rodado: Dirigindo pelo KM X (onde X é o KM atual)
        Para cada KM de parada obrigatória, mostrar: Atenção parada OBRIGATÓRIA no KM X
        Ao final da viagem, exibir FIM DE VIAGEM.   
    */

    $kmAtual = 10;
    $kmFinal = 80;
    $qtdMin_paradas = 2;
    $numParadas = 0;
    $intervalo_paradas = ($kmFinal - $kmAtual) / $qtdMin_paradas;
    $contParadas = $kmAtual + $intervalo_paradas;
    $qtdParadas = ($kmFinal - $kmAtual) / $intervalo_paradas;

    echo "KM Inicial: $kmAtual<br>";
    echo "KM Final: $kmFinal<br>";
    echo "Quantidade min parada: $qtdMin_paradas<br>";
    echo "Intervalo em KM para as paradas obrigatórias: $intervalo_paradas<br>";
    echo "Quantidade de Paradas: $qtdParadas<br>";

    do {
        echo "<br>Dirigindo pelo Km $kmAtual";
        if ($kmAtual >= $contParadas) {
            $numParadas ++;
            echo " Atenção $numParadas ª parada OBRIGATÓRIA no Km $kmAtual ";
            $contParadas = $contParadas + $intervalo_paradas;
        }
        $kmAtual ++;
    } while ($kmAtual <= $kmFinal);

    echo "<br>FIM DE VIAGEM.";





?>
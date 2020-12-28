<?php
    // Estudo de caso placa de rodízio usando comandos PHP IF, ElSE IF e ELSE com operadores AND e OR.

    /*Condicional IF com OR
        Crie um programa que receba um número final de placa e indique se está em dia de rodízio.
        Considerando os finais:
        1 e 2 - Segunda; 3 e 4 - Terça; 5 e 6 - Quarta; 7 e 8 - Quinta; 9 e 0 - Sexta
        Horário de rodízio> De seg a sex das 7h às 10h e das 17h às 20h. 

        Mostrar as mensagens:
        Sábado, Domingo ou dia fora de rodízio: Boa Viagem, sua placa está fora do rodízio.
        Dia de rodízio fora do horário: Atenção !!! Sua placa está em dia de rodízio não trafegue em horário de restrição.
        Dia de rodízio em horário de restrição: CUIDADO! Você está sujeito a multa por trafegar em horário proibido.   
     */
    
    date_default_timezone_set('America/Sao_Paulo');
     //$dia = 1;   // 1 a 7 == 2a a dom
    $dia = date('N'); // Pega automaticamente o dia da semana 1 a 7 == 2a a dom
    //$hora = 8;
    $hora = date('H'); // Pega a hora atual (0 a 24h)
    $placaFinal = 1;

    echo "Dia: $dia - Hora: $hora - Final Placa: $placaFinal <br>";

    if (($dia == 1) and ($placaFinal == 1 or $placaFinal == 2)) {
        if ((($hora >= 7) and ($hora <= 10)) or (($hora >= 17) and ($hora <= 20))) {
            echo "Dia de rodízio em horário de restrição: CUIDADO! Você está sujeito a multa por trafegar em horário proibido.";
        } else {
            echo "Dia de rodízio fora do horário: Atenção !!! Sua placa está em dia de rodízio não trafegue em horário de restrição.";
        }
    } else if (($dia == 2) and ($placaFinal == 3 or $placaFinal == 4)) {
        if ((($hora >= 7) and ($hora <= 10)) or (($hora >= 17) and ($hora <= 20))) {
            echo "Dia de rodízio em horário de restrição: CUIDADO! Você está sujeito a multa por trafegar em horário proibido.";
        } else {
            echo "Dia de rodízio fora do horário: Atenção !!! Sua placa está em dia de rodízio não trafegue em horário de restrição.";
        }
    } else if (($dia == 3) and ($placaFinal == 5 or $placaFinal == 6)) {
        if ((($hora >= 7) and ($hora <= 10)) or (($hora >= 17) and ($hora <= 20))) {
            echo "Dia de rodízio em horário de restrição: CUIDADO! Você está sujeito a multa por trafegar em horário proibido.";
        } else {
            echo "Dia de rodízio fora do horário: Atenção !!! Sua placa está em dia de rodízio não trafegue em horário de restrição.";
        }
    } else if (($dia == 4) and ($placaFinal == 7 or $placaFinal == 8)) {
        if ((($hora >= 7) and ($hora <= 10)) or (($hora >= 17) and ($hora <= 20))) {
            echo "Dia de rodízio em horário de restrição: CUIDADO! Você está sujeito a multa por trafegar em horário proibido.";
        } else {
            echo "Dia de rodízio fora do horário: Atenção !!! Sua placa está em dia de rodízio não trafegue em horário de restrição.";
        }
    } else if (($dia == 5) and ($placaFinal == 9 or $placaFinal == 0)) {
        if ((($hora >= 7) and ($hora <= 10)) or (($hora >= 17) and ($hora <= 20))) {
            echo "Dia de rodízio em horário de restrição: CUIDADO! Você está sujeito a multa por trafegar em horário proibido.";
        } else {
            echo "Dia de rodízio fora do horário: Atenção !!! Sua placa está em dia de rodízio não trafegue em horário de restrição.";
        }
    } else {
            echo "Sábado, Domingo ou dia fora de rodízio: Boa Viagem, sua placa está fora do rodízio.";
    }
?>
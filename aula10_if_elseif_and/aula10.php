<?php
    /* Condicionais
        Criar um programa que direcione os visitantes para os alojamentos corretos:
        Dormitório 1: Meninas (abaixo de 15 anos)
        Dormitório 2: Mulheres
        Dormitório 3: Meninos (abaixo de 15 anos)
        Dormitório 4: Homens

        Ao fazer o checkin o visitante deve informar nome, idade e sexo e receberá a mensagem:
        NOME você deve ser acomodar com as/os SEXO no Dormitório X.
    */

        $nome = "Eli";
        $sexo = "F";
        $idade = 15;
        
        if ($sexo == "M" and $idade < 15)  {
            $domitorioX = "Dormitório 3";
            $msg_sexo = "os meninos";}
        elseif ($sexo == "M") {
            $domitorioX = "Dormitório 4";
            $msg_sexo = "os homens";}
        elseif ($sexo == "F" and $idade < 15) {
            $domitorioX = "Dormitório 1";
            $msg_sexo = "as meninas";}
        elseif ($sexo == "F") {
            $domitorioX = "Dormitório 2";
            $msg_sexo = "as mulheres";}
        else {
            echo "Sexo(M/F): $sexo inválido";}
        
        if ($sexo == "M" or $sexo == "F") {
            echo "$nome você deve ser acomodar com $msg_sexo no $domitorioX";
        }    
?>
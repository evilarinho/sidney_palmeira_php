<?php
    $Nome ="Sofia";
    $AnoAtual = 2020;
    $AnoNascimento = 2010;
    $Idade = $AnoAtual - $AnoNascimento;

    echo "$Nome tem $Idade anos.";
    if ($Idade > 18) {
        echo "<br>$Nome é maior de idade.";    
    } else {
        echo "<br>$Nome é menor de idade.";
    }
?>
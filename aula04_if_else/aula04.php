<?php
    $Nome ="Maria";
    $AnoAtual = 2020;
    $AnoNascimento = 1978;
    $Idade = $AnoAtual - $AnoNascimento;

    echo "$Nome tem $Idade anos.";
    if ($Idade > 18) {
        echo "<br>$Nome é maior de idade.";    
    }
?>
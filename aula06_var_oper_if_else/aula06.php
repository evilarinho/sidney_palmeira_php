<?php
    /* Variáveis e operadores */
    $cpf_ativo = true;
    $nome = "Aline";
    $salario_beneficiario = 1500.00;
    $salario_base_beneficio = 1040.00;

    if ($cpf_ativo) {
        echo "$nome, seu pedido está em Análise.<br>";

        if ($salario_base_beneficio > $salario_beneficiario ) {
            echo "$nome, Parabéns Seu pedido de benefício foi aceito.";
        } else {
            echo "$nome, Infelizmente seu benefício foi negado. Seu salário é maior que o salário base de R$$salario_base_beneficio.";
        }
    } else {
        echo "$nome, seu benefíco foi negado. Regularize o CPF e tente novamente.";
    }
    

?>
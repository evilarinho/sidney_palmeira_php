<?php
    # Nessa aula vamos aprender um pouco sobre PHP orientado a objetos, PHP OO.
    /** Orientação a Objetos
     * 
     */
    require('aula24.class.php');

    $frota1 = new Veiculo();
    $frota1->marca = "Ferrari";
    $frota1->modelo = "F430";
    $frota1->ano = 2010;
    $frota1->valor = 500000.00;
    
    echo $frota1->mostrarFicha();
    
    echo "<br>O valor da " . $frota1->modelo . " é R$ " . number_format($frota1->mostrarValor(), 2, ',' , '.');

?> 
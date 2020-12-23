<?php
    // Nessa aula veremos exemplos práticos do comando PHP ForEach com uso do apelido da chave de índice
    /* Laços de Repetição com FOREACH */

    $fichaVeiculo = array('Marca' => 'Hyndai',
                          'Modelo' => 'Azera', 
                          'Ano' => 2020, 
                          'Preço' => 198000.10   
                    );

    //var_dump($fichaVeiculo);
    foreach($fichaVeiculo as $campo => $valor) {
        echo "$campo : $valor<br>";
    }
?> 
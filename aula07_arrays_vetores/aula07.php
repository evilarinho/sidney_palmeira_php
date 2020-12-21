<?php
    /* Arrays */

    //$veiculo = array('BMW', '320i', '2020-05-02', 140000.00, 4.5, 8.00, true);
    $veiculo = array('marca' =>'BMW',
                     'modelo' => '320i',
                     'data_compra' => '2020-05-02',
                     'valor_compra' => 140000.00,
                     'ipva_aliquota' => 4.5,
                     'seguro_aliquota' => 8.00,
                     'frota_ativa' => true);

    //var_dump($veiculo);
    //echo $veiculo[0];
    //echo ($veiculo[3] * $veiculo[4]) / 100;
    //echo "Comprei uma $veiculo[0] $veiculo[1], por $veiculo[3]"; 
    //echo "Comprei uma $veiculo[marca] $veiculo[modelo], por $veiculo[valor_compra]";
    //echo "Seguro Aliquota: $veiculo[seguro_aliquota]";
    //echo 'Seguro Aliquota: ' . $veiculo['seguro_aliquota'];

    echo count($veiculo);

     


?> 
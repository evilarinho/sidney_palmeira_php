<?php
    /* Arrays */

    $frota1 = array('frota' => '001', 'marca' => 'Fiat', 'modelo' => 'Uno', 'ano' => 2020, 'aluguel' => 1200.00, 'valor' => 35000.00);
    $frota2 = array('frota' => '002', 'marca' => 'Ford', 'modelo' => 'Ka Sedan', 'ano' => 2019, 'aluguel' => 1500.00, 'valor' => 45000.00);

    //echo "Patrimônio = " . ($frota1['valor'] + $frota2['valor']);

    $frotas = array('Frota_001' => $frota1, 'Frota_002' => $frota2);

    //echo "Frota 2: " . $frotas['Frota_001']['ano'];

    echo count($frotas['Frota_001']);


?>
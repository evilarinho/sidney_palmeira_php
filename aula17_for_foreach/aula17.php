<?php
    // Nessa aula vamos ver exemplos práticos dos comandos PHP FOR e FOREACH

    $diasDaSemana = array('segunda-feira', 'terça-feira', 'quarta-feira', 'quinta-feira', 'sexta-feira', 'sábado', 'domingo');

    //echo "<hr>";
    echo "<h2>Com FOR</h2>";

    for ($dia=0; $dia < count($diasDaSemana); $dia++) {
        echo "<br>Hoje é $diasDaSemana[$dia]";
        if ($diasDaSemana[$dia] == 'sábado') {
            echo " *** Obá hoje tem pastel e caldo de cana.";
        }
    }
    
    //echo "<hr>";
    echo "<h2>Com FOREACH</h2>";

    foreach($diasDaSemana as $dia) {
        echo "<br>Hoje é $dia";
        if ($dia == 'sábado') {
            echo " *** Obá hoje tem pastel e caldo de cana.";
        }
    }
?>
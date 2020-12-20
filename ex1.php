<?php
/* Exercício 1 */
# 1. Mostrar na tela a frase: "TEDDY IS A DRIVER!
# 2. Mostrar na tela a frase: "IS TEDDY DRIVING NOW?" (usar concatenação de textos)
# 3. Criar uma variável action=DRIVING e mostrar a frase: "YES, TEDDY IS DRIVING."
# 4. Criar uma variável amount- 150000 e mostrar a mensagem: "TEDDY IS DRIVING HIS 150000 DOLLARS CAR!"
# 5. Criar uma variável name=BILL e mostrar na tela a mensagem: "BILL IS A DRIVER!
#                                                                IS BILL DRIVING NOW?
#                                                                YES, BILL IS DRIVING RIGHT NOW.
#                                                                BILL IS DRIVING HIS 150000 DOLLARS CAR!"

// Resposta 1
echo "<br>TEDDY IS A DRIVER!";

// Resposta 2
echo "<br>IS TEDDY" . " DRIVING NOW?";

// Resposta 3
$action = "DRIVING";
echo "<br>YES, TEDDY IS $action.";

//Resposta 4
$amount = 150000;
echo "<br>TEDDY IS $action HIS $amount DOLLARS CAR!";

//Resposta 5
$name = "BILL";
echo "<br>$name IS A DRIVER";
echo "<br>IS $name $action NOW?";
echo "<br> YES, $name IS $action RIGHT NOW.";
echo "<br>$name IS $action HIS $amount DOLLARS CAR!"



?> 

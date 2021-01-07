<?php
    
    if ( ($_POST['txtLogin'] == 'maria') and 
        ($_POST['txtSenha'] == '1234')) {
            echo "Login efetuado com sucesso";
    } else {
        echo "Usuário ou senha incorretos";
    }   
    
?>
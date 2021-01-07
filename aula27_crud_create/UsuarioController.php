<?php
/* 
    *******************************************************************************************
    Nessa aula veremos como criar o cadastro em arquivo texto com PHP, operação Create do CRUD.
    *******************************************************************************************
*/
    //var_dump($_POST);

    require('Usuario.class.php');
    $usuario = new Usuario();

    //var_dump($usuario);

    if ( $_POST ) {
        $usuario->email = $_POST['txtEmail'];
        $usuario->nome  = $_POST['txtNome'];
        $usuario->senha = $_POST['txtSenha'];

        $usuario->gravar();
        
    }   

    //var_dump($usuario);

?>

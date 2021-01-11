<?php
/* 
    ************************************************************
    Nessa aulas vamos criar o formulário de pesquisa de usuários
    ************************************************************
*/
    //var_dump($_POST);

    require('Usuario.class.php');
    $usuario = new Usuario();
    echo $usuario->menu();

    //var_dump($usuario);
    // Cadastrar
    if ( $_POST ) {
        $usuario->email = $_POST['txtEmail'];
        $usuario->nome  = $_POST['txtNome'];
        $usuario->senha = $_POST['txtSenha'];
        if ($usuario->gravar()) {
            echo "<p style='color: green'> Usuário $usuario->nome cadastrado com sucesso. </p>";
        } else {
            echo "<p style='color: red'> Falha ao gravar o Usuário $usuario->nome. </p>";
        }
        
    }   

    //var_dump($usuario);
    //var_dump($_GET);

    //Listar
    
    if ( ( isset($_GET['act']) ) and 
        ($_GET['act'] == 'listar') ) {
        echo "<table width='80% align='center' border='1'>";
        echo "<tr>";
        echo "<th>Nome</th>";
        echo "<th>E-mail</th>";
        echo "<th>Senha</th>";
        echo "</tr>";
        echo $usuario->listar();
        echo "</table>";        
    } 
    
?>

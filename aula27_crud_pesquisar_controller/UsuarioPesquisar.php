<!-- 
    ************************************************************
    Nessa aulas vamos criar o formulário de pesquisa de usuários
    ************************************************************
-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Cadastro de Usuário em TXT</title>
</head>
<body>
<?php
    require_once('Usuario.class.php');
    $usuario = new Usuario();

    echo $usuario->menu();
?>

<form method="post" action="UsuarioController.php">
<input type="hidden" name="act" value="pesquisar">

    <table align="center" width="300" border="0">
        <tr>
            <td colspan="2" bgcolor="lightgray" align="center">
                Pesquisa de Usuário
            </td>
        </tr>
        <tr>
            <td align="right">E-mail</td>
            <td> <input type="email" name="txtEmail" autofocus required > </td>
        </tr>
        <tr>
            <td colspan="2" bgcolor="lightgray" align="center">
                <input type="submit" value="Pesquisar">
            </td>
        </tr>          
    </table>
</form>
    
</body>
</html>
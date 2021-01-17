<!-- 
    ******************************************************************
    Nessa aula faremos o update dos dados de usuário no arquivo texto.
    ******************************************************************
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
    $usuario->email = $_GET['email'];

    if ( ! $usuario->findByEmail() ) {
        echo "<script> alert('Usuário não encontrado.'); </script>";
        exit;
    }  
    echo $usuario->menu();
?>

<form method="post" action="UsuarioController.php">
    <input type="hidden" name="act" value="update">

    <table align="center" width="300" border="0">
        <tr>
            <td colspan="2" bgcolor="lightgray" align="center">
                Alteração de Usuário
            </td>
        </tr>

        <tr>
            <td align="right">Nome</td>
            <td> <input type="text" name="txtNome" value="<?=$usuario->nome?>"  autofocus required > </td>            
        </tr>

        <tr>
            <td align="right">E-mail</td>
            <td> <input type="email" name="txtEmail" value="<?=$usuario->email?>" readonly required > </td>
        </tr>

        <tr>
            <td align="right">Senha</td>
            <td> <input type="password" name="txtSenha" value="<?=$usuario->senha?>" required > </td>
        </tr>

        <tr>
            <td colspan="2" bgcolor="lightgray" align="center">
                <input type="submit" value="Gravar">
            </td>
        </tr>          
    </table>
</form>
    
</body>
</html>
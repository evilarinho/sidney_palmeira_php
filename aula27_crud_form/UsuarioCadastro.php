<!-- 
    ***************************************************************
    Nessa aula vamos criar nosso front-end do cadastro de usuários.
    ***************************************************************
-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Cadastro de Usuário em TXT</title>
</head>
<body>

<form method="post" action="UsuarioController.php">

    <table align="center" width="300" border="1">
        <tr>
            <td colspan="2" bgcolor="lightgray" align="center">
                Cadastro de Usuário
            </td>
        </tr>

        <tr>
            <td align="right">Nome</td>
            <td> <input type="text" name="txtNome"> </td>
        </tr>

        <tr>
            <td align="right">E-mail</td>
            <td> <input type="email" name="txtEmail"> </td>
        </tr>

        <tr>
            <td align="right">Senha</td>
            <td> <input type="password" name="txtSenha"> </td>
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
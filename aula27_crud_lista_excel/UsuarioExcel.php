<?php
    $arquivo = "UsuariosCadastro.xls";
    // Configurações header para forçar o download
    header('Content-Type: apllication/vnd.mas-excel');
    header('Content-Disposition: attachment;filename="'.$arquivo.'"');
    header('Cache-Content: max-age=0');

    require('Usuario.class.php');
    $usuarios = new Usuario();

    echo "<table width='80% align='center' border='1'>";    
    echo "<tr bgcolor='gray'> <td colspan='3' style='text-align:center;'> <b> CADASTRO DE USUÁRIOS </b> </tr>";    
    echo "<tr bgcolor='orange'>";
    echo "<th>Nome</th>";
    echo "<th>E-mail</th>";
    echo "<th>Senha</th>";
    echo "</tr>";
    echo $usuarios->listar();
    echo "</table>";    


?>
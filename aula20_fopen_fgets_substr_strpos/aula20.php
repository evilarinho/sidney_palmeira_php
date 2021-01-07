<?php
    # Nessa vídeo aula veremos como ler o conteúdo de um arquivo texto em PHP e criar uma mala direta.
    /* Trabalhando com arquivo texto
       Com base em um arquivo texto pré-formatado, ler o conteúdo do arquivo e criar uma mala direta conforme abaixo:
        Prezado(a) (Primeiro nome do motorista)

        Consta em nossos registros que sua habilitação encontra-se (status da CNH), você possui x pontos (pontos).

        Nome..: (nome completo)
        E-mail: (email)

        Att.

        Depto. de RH  
    */

    $nomeArquivo = "CadastroDeMotoristas.txt";

    $CadastroDeMotoristas = fopen($nomeArquivo, 'r');

    while (! feof($CadastroDeMotoristas) ) {
        $motorista = fgets($CadastroDeMotoristas);
        $emailMotorista = substr($motorista, 0, 50);
        $nomeCompletoMotorista = substr($motorista, 50, 50);
        $posBranco1NomeMotorista = strpos($nomeCompletoMotorista, ' ');
        $nome1Motorista = substr($nomeCompletoMotorista, 0, $posBranco1NomeMotorista);
        $statusCNH = substr($motorista, 100, 1);
        $pontosCNH = substr($motorista, 101, 3);
        
        switch ( $statusCNH ) {
            case 'A': $msgStatusCNH = "ATIVA"; break;
            case 'C': $msgStatusCNH = "CANCELADA"; break;
            case 'S': $msgStatusCNH = "SUSPENSA"; break;
            default: $msgStatusCNH = "NÃO DEFINIDO";
        }

        $mensagemMalaDireta = "<br>Prezado(a) $nome1Motorista<br>

        <br>Consta em nossos registros que sua habilitação encontra-se $msgStatusCNH, você possui $pontosCNH pontos.<br>

        <br>Nome.: $nomeCompletoMotorista<br>
        E-mail: $emailMotorista<br>

        <br>Att.<br>

        <br>Depto. de RH<br>";

        echo $mensagemMalaDireta;       
        echo str_repeat("*", 100);
    }
    fclose($CadastroDeMotorista);
?>
<?php
    # Nessa aula vamos aprender a criar um arquivo texto com dados do array. PHP File Open Example.

    /* Trabalahndo com arquivos texto
        Com base no array de motoristas, gravar os dados  em arquivo texto, formatação com espaços definidos entre os campos
        Email (string 50), Nome (string 50), status_CNH string (1) (A-Ativa, C-Cancelada, S-Suspensa), pontos (numérico 3)

        Mororistas:
        Email                           Nome                CNH_Status  CNH_Pontos
        marina@gestorfrotas.com.br      Marina Souza Lima   A           10
        joao@gestorfrotas.com.br        João da Silva       C           0
        joice@gestorfrotas.com.br       Joice Tavares       S           22
        guilherme@gestorfrotas.com.br   Guilhermes Arantes  C           30  
    */
    $motoristas = array(
        array ('email'=>'marina@gestorfrotas.com.br'    ,  'nome'=>'Marina Souza Lima'  , 'status'=>'A' , 'pontos'=>10),
        array ('email'=>'joao@gestorfrotas.com.br'      ,  'nome'=>'Joao da Silva'      , 'status'=>'C' , 'pontos'=> 0),
        array ('email'=>'joice@gestorfrotas.com.br'     ,  'nome'=>'Joice Tavares'      , 'status'=>'S' , 'pontos'=>22),
        array ('email'=>'guilherme@gestorfrotas.com.br' ,  'nome'=>'Guilhermes Arantes' , 'status'=>'C' , 'pontos'=>30),
    );
    //var_dump($motoristas);

    $ArquivoNome = "CadastroDeMotoristas.txt";

    echo "<br>Criando o arquivo de dados $ArquivoNome";
    $CadastroDeMotoristas = fopen($ArquivoNome, 'a+');
    // 'a' = append

    echo "<br>Gravando dados dos motoristas";
foreach ( $motoristas as $motorista ) {
    echo "<br>Salvando dados do(a) $motorista[nome]";
    fwrite($CadastroDeMotoristas, "\n");
    fwrite($CadastroDeMotoristas, str_pad($motorista['email'], 50, " ", STR_PAD_RIGHT));
    fwrite($CadastroDeMotoristas, str_pad($motorista['nome'], 50, " ", STR_PAD_RIGHT));
    fwrite($CadastroDeMotoristas, $motorista['status']);
    fwrite($CadastroDeMotoristas, str_pad($motorista['pontos'], 3, "0", STR_PAD_LEFT));
}
echo "<br>Dados gravados com sucesso";
echo "<br>Fechando o arquivo $ArquivoNome";
fclose($CadastroDeMotoristas);
?>
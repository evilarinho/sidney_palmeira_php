<?php
    # Nessa aula vamos aprender um pouco mais sobre PHP Orientado a Objetos - PHP OO com Herança
    /** PHP OO
     * 
     * classe Veiculo
     *      + marca
     *      + modelo
     *      + cor
     * 
     *      mostrarFicha()
     *          this->marca
     *          this->modelo 
     *          this->cor
     *          this->placa  
     * 
     * clsse Caminhao extends Veiculo
     *        + pesoLiquido
     *        + capacidadeDeCarga
     * 
     * *      mostrarFichaCaminhao()
     *          this->marca
     *          this->modelo 
     *          this->cor 
     *          this->peloLiquido          
     *          this->capacidadeDeCarga
     * 
     * * clsse Moto extends Veiculo
     *        + cilindradas
     *   
     *        mostrarFichaMoto()
     *          this->marca
     *          this->modelo 
     *          this->cor 
     *          this->cilindrada          
     *          
     * Instanciar os objetos exibir suas respectivas fichas:
     * - $veiculo1
     * - $veiculo2
     * - $caminhao1
     * - $moto1
     */
    
    include_once('Veiculo.class.php');
    include_once('Caminhao.class.php');
    include_once('Moto.class.php');

    $veiculo1 = new Veiculo;

    $veiculo1->marca = 'Ford';
    $veiculo1->modelo = 'Ka Sedan';    
    $veiculo1->cor = 'Vermelha';
    $veiculo1->ano = '2019';
    $veiculo1->placa = 'KPE-1950';

    //var_dump($veiculo1);

    echo $veiculo1->mostrarFicha();

    $veiculo2 = new Veiculo;

    $veiculo2->marca = 'Fiat';
    $veiculo2->modelo = 'UNO';    
    $veiculo2->cor = 'Cinza';
    $veiculo2->ano = '2010';
    $veiculo2->placa = 'KHP-4450';  

    echo $veiculo2->mostrarFicha();

    $caminhao1 = new Caminhao;

    $caminhao1->marca = 'Ford';
    $caminhao1->modelo = 'CB1919';    
    $caminhao1->cor = 'Branca';
    $caminhao1->ano = '2010';
    $caminhao1->placa = 'KHP-2020';
    $caminhao1->pesoLiquido = '15000';
    $caminhao1->capacidadeDeCarga = '25000';
    
    echo $caminhao1->mostrarFicha();
    echo $caminhao1->mostrarFichaCaminhao();

    $moto1 = new Moto;

    $moto1->marca = 'Honda';
    $moto1->modelo = 'CB750';    
    $moto1->cor = 'Azul';
    $moto1->ano = '2018';
    $moto1->placa = 'KJJ-3456';
    $moto1->cilindradas = '1000';

    echo $moto1->mostrarFicha();
    echo $moto1->mostrarFichaMoto();


?>

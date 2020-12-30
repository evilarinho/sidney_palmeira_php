<?php

    class Veiculo {
        public $marca;
        public $modelo;
        public $ano;
        public $valor;


        public function mostrarFicha() {
            $ficha = "<h1>FICHA DO VEÍCULO</h1>";
            $ficha .= "<b>Marca: </b>>" . $this->marca;
            $ficha .= "<br><b>Modelo: </b>" . $this->modelo;
            $ficha .= "<br><b>Ano: </b>" . $this->ano;          

            return $ficha;
        }

        public function mostrarValor() {
            return $this->valor;
        }
        // $ficha += "Valor: " . $this->valor;

    }

?>
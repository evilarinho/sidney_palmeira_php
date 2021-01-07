<?php
    class Veiculo {
        public $marca;
        public $modelo;
        public $cor;
        public $placa;
    
        public function mostrarFicha() {
            $ficha = "<h2> Ficha do ". get_class($this) ." </h2>";
            $ficha .= "Marca: " . $this->marca;
            $ficha .= "<br>Modelo: " . $this->modelo;
            $ficha .= "<br>Cor: " . $this->cor;
            $ficha .= "<br>Placa: " . $this->placa;

            return $ficha;
        }

    }

?>
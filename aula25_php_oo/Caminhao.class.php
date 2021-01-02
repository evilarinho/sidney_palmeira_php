<?php
    class Caminhao extends Veiculo {
        public $pesoLiquido;
        public $capacidadeDeCarga;
    

        function mostrarFichaCaminhao() {
            $ficha = "<h2> Ficha do " . get_class($this) . "</h2>";
            $ficha .= "Marca: " . $this->marca;
            $ficha .= "<br>Modelo: " . $this->modelo;
            $ficha .= "<br>Cor: " . $this->cor;
            $ficha .= "<br>Placa: " . $this->placa;
            $ficha .= "<br>Peso Líquido: " . $this->pesoLiquido;
            $ficha .= "<br>Capacidade de Carga: " . $this->capacidadeDeCarga;
            
            return $ficha;

        }
    }


?>
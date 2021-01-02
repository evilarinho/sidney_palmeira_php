<?php
class Moto extends Veiculo {
    public $cilindradas;   


    function mostrarFichaMoto() {
        $ficha = "<h2> Ficha do " . get_class($this) . "</h2>";
        $ficha .= "Marca: " . $this->marca;
        $ficha .= "<br>Modelo: " . $this->modelo;
        $ficha .= "<br>Cor: " . $this->cor;
        $ficha .= "<br>Placa: " . $this->placa;
        $ficha .= "<br>Cilindradas: " . $this->cilindradas;        
        
        return $ficha;

    }
}
?>
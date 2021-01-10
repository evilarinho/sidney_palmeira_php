<?php
    class Usuario {
        public $nome;
        public $email;
        public $senha;
        private $nomeArquivo = "UsuarioCadastro.txt";

        public function gravar() {
            $arquivo = fopen($this->nomeArquivo, 'a');                                               
            fwrite($arquivo, "\n");
            fwrite($arquivo, $this->email . ";");
            fwrite($arquivo, $this->nome  . ";");
            fwrite($arquivo, $this->senha . ";");            
            fclose($arquivo); 
        }

        public function listar() {
            $arquivo = fopen($this->nomeArquivo, 'r');
            $html = "";

            while ( ! feof($arquivo) ) {
                $UsuarioDados = explode(";", substr(fgets($arquivo), 0, -2) );
                $html .= "<tr>";
                foreach ($UsuarioDados as $valor) {
                    $html .= "<td>$valor</td>";                    
                }
                $html .= "</tr>";

            }            

            fclose($arquivo);
            return $html;
        }
    }


?>
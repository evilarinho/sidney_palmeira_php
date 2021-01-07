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

    }


?>
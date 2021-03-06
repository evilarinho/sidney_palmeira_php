<?php
    class Usuario {
        public $nome;
        public $email;
        public $senha;
        private $nomeArquivo = "UsuarioCadastro.txt";

        public function menu() {
            $html  = "<p> <a href=\"UsuarioController.php?act=listar\"> Listar </a>";
            $html .= " | <a href=\"UsuarioCadastrar.php\"> Cadastrar </a>";
            $html .= "<a href=\"UsuarioPesquisar.php\"> Pesquisar </a> </p>";

            return $html;
        } 

        public function gravar() {
            try {
                if (fopen($this->nomeArquivo, 'a')) {
                    $arquivo = fopen($this->nomeArquivo, 'a');                                               
                    fwrite($arquivo, "\n");
                    fwrite($arquivo, $this->email . ";");
                    fwrite($arquivo, $this->nome  . ";");
                    fwrite($arquivo, $this->senha . ";");            
                    fclose($arquivo); 
                    return true;
                } else {
                    return false;
                }                
            } catch (Exception $e) {
                return false;
            }            
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
<?php
    class Usuario {
        public $nome;
        public $email;
        public $senha;
        private $nomeArquivo = "UsuarioCadastro.txt";

        public function menu() {
            $html  = "<p style='text-align: center;'> <a href=\"UsuarioController.php?act=listar\"> Listar </a>";
            $html .= " | <a href=\"UsuarioCadastrar.php\"> Cadastrar </a>";
            $html .= " | <a href=\"UsuarioPesquisar.php\"> Pesquisar </a>";
            $html .= " | <a href=\"UsuarioExcel.php\"> Exportar Excel </a>";
            $html .= " | <a href=\"index.php\"> Sair </a> </p>";

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
            $bgColor = "white";

            while ( ! feof($arquivo) ) {
                $UsuarioDados = explode(";", substr(fgets($arquivo), 0, -2) );
                //$html .= "<tr bgcolor='$bgColor'>";
                $html .= "<tr>";

                // Muda cor de fundo
                if ($bgColor == 'lightblue') {
                    $bgColor = 'white';
                } else {
                    $bgColor = 'lightblue';
                }

                foreach ($UsuarioDados as $valor) {
                    //$html .= "<td>$valor</td>";
                    $html .= "<td bgcolor='$bgColor'>$valor</td>";                    
                }
                $html .= "</tr>";

            }            

            fclose($arquivo);
            return $html;
        }

        public function pesquisar() {                 
            $arquivo = fopen($this->nomeArquivo, 'r');                  
            $html = "<p style='color: red;'>Usuário <b> $this->email </b> não encontrado.</p>";                                             
            while ( ! feof($arquivo) ) {
                $UsuarioDados = explode(";", substr(fgets($arquivo), 0, -2) );
                if ( $UsuarioDados[0] == $this->email ) {
                    $html  = "<table width='80%' align='center' border='1'>";
                    $html .= "<tr>";
                    $html .= "<th>E-mail</th>";
                    $html .= "<th>Nome</th>";
                    $html .= "<th>Senha</th>";
                    $html .= "</tr>";
                    $html .= "<tr>";
                    foreach ($UsuarioDados as $valor) {
                        $html .= "<td>$valor</td>";                    
                    }
                    $html .= "</tr>";  
                    $html .= "</table>";                                     
                    fclose($arquivo);            
                    return $html;
                }           
            }         
            fclose($arquivo);
            return $html;
        }        
    }


?>
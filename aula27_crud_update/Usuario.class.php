<?php
/*
    ******************************************************************
    Nessa aula faremos o update dos dados de usuário no arquivo texto.
    ******************************************************************
*/
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
                    fwrite($arquivo, $this->senha);            
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
                $UsuarioDados = explode(";", fgets($arquivo) );
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

                $html .= "<td bgcolor='$bgColor'> <a href='UsuarioController.php?act=editar&email=$UsuarioDados[0]'> Editar </a> </td>";

                $html .= "</tr>";
            }            

            fclose($arquivo);
            return $html;
        }

        public function pesquisar() {                 
            $arquivo = fopen($this->nomeArquivo, 'r');                  
            $html = "<p style='color: red;'>Usuário <b> $this->email </b> não encontrado.</p>";                                             
            while ( ! feof($arquivo) ) {
                $UsuarioDados = explode(";", fgets($arquivo) );
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
        
        public function findByEmail() {
            $arquivo = fopen($this->nomeArquivo, 'r');

            while ( ! feof($arquivo) ) {
                $UsuarioDados = explode(";", fgets($arquivo));

                if ( $UsuarioDados[0] == $this->email ) {
                    $this->nome = $UsuarioDados[1];
                    $this->senha = $UsuarioDados[2];
                    fclose($arquivo);
                    return true;
                }                 
            }
            fclose($arquivo);
              return false;
        }

        public function update() {
            $usuarioNovo = "$this->email;$this->nome;$this->senha\n";
            $this->findByEmail();
            $usuarioAntigo = "$this->email;$this->nome;$this->senha";

            $arquivoConteudo = file_get_contents($this->nomeArquivo);
            $arquivoConteudo = str_replace($usuarioAntigo, $usuarioNovo, $arquivoConteudo);
            file_put_contents($this->nomeArquivo, $arquivoConteudo);
        }        

        public function acessar() {                 
            $arquivo = fopen($this->nomeArquivo, 'r');                  
            
            while ( ! feof($arquivo) ) {
                $UsuarioDados = explode(";", fgets($arquivo) );

                //var_dump($UsuarioDados); exit;
                
                if ( ( $UsuarioDados[0] == $this->email ) and ( rtrim($UsuarioDados[2]) == rtrim($this->senha )) ) {
                    fclose($arquivo);            
                    return true;
                }
            }         
            fclose($arquivo);
            return false;
        }        
    }


?>
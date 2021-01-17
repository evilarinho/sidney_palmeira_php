<!-- 
    ******************************************************************
    Nessa aula vamos criar o frontend da tela de alteração de usuário.
    ******************************************************************
-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <!-- <title>Bootstrap Example</title> -->
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body background="imagens/imagem-login.jpeg">

<form action="UsuarioController.php" method="post">
    <input type="hidden" name="act" value="acessar">

    <div class="container">
    <!-- <h2>Centered Modal Example</h2> -->
    <!--<p>Center the modal vertically and horizontally within the page, with the .modal-dialog-centered class.</p> -->
    
    <!-- Button to Open the Modal -->
    <!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
        Open modal
    </button>
    -->

    <!-- The Modal -->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <!--<h4 class="modal-title">Modal Heading</h4> -->
                    <h4 class="modal-title">Cadastro de Usuários</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <!-- Modal body -->
                    <div class="modal-body">
                    <!-- Modal body.. -->
                    <p>
                        <label for="">Email do Usuário</label><br>
                        <input type="email" name="txtEmail" autofocus required>
                    </p>
                    
                    <p>
                        <label for="">Senha do Usuário</label><br>
                        <input type="password" name="txtSenha" required>
                    </p>


                    </div>
                    
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <?php
                            if ( isset($_GET['msg']) and ($_GET['msg'] == 1) ) {
                                echo "<div style='color: red;'>Erro: Email ou senha incorretos.</div>";
                            }                            
                        ?>  
                    <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                    <!--button type="submit" class="btn btn-success" data-dismiss="modal"> Acessar </button> -->
                        <button type="submit" class="btn btn-success" > Acessar </button>
                    </div>
                    
                </div>  
            </div>
        </div>    
    </div>
</form>

<script type="text/javascript">
    $(window).on('load', function() {
        $('#myModal').modal('show');
    });
</script>

</body>
</html>
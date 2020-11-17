<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>TipCash | Empresas</title>

        <!-- Stylesheets -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/empresa.css">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="">
        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/500b73534a.js" crossorigin="anonymous"></script>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    </head>

<body class="container col-12 m-0 p-0">

        <!-- Navbar -->

        <nav class="navbar emp-navbar sticky-top navbar-dark">
            <a class="navbar-brand" href="index.php">TipCash</a>
        </nav>
        
        <!-- Formulário de cadastro --> 

        <section class="siteSection form-imp">
            <form id="cadastro" method="post"> 
                
                <label>Nome Completo</label>
                <br>
                <div class="input-group flex-nowrap">
                    <input type="text" class="form-control" aria-describedby="addon-wrapping" placeholder="" required name="nomeC">
                </div>
                
                <br>

                <label>CPF</label>
                <br>
                <div class="input-group flex-nowrap">
                    <input type="text" class="form-control" aria-describedby="addon-wrapping" placeholder="" required name="CPF">
                </div>

                <br>
                
                <div class="row">
                <div class="input-group flex-nowrap col-sm">
                    <input type="text" class="form-control" aria-describedby="addon-wrapping" placeholder="cel1" required name="cel1" id="cel1">
                </div>
                <label class="errorMessage" id="errorMessage-cel">Adicione ao menos um telefone.</label>
                <div class="input-group flex-nowrap col-sm">
                    <input type="text" class="form-control" aria-describedby="addon-wrapping" placeholder="cel2" required name="cel2" id="cel2"> 
                </div>
                </div>
                <br>

                <div class="form-group">
                <label for="exampleInputEmail1">Email de contato</label>
                <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="addon-wrapping">@</span>
                </div>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="emailC" placeholder="email@exemplo.com" required>
                </div>
                <small id="emailHelp" class="form-text text-muted">Prometemos não compartilhar seu e-mail com ninguém.</small>
                </div>
                <div id="senhaDiferente" class="container-fluid"></div>
                <div class="form-group">
                <label for="exampleInputPassword1">Senha</label>
                <input type="password" class="form-control" name="sD" id="SenhaA">
                <label class="errorMessage" id="errorMessage-password">Preencha os campos com senhas iguais.</label>
                </div>
                <div class="form-group">
                <label for="exampleInputPassword1">Confirmar Senha</label>
                <input type="password" class="form-control" name="sC" id="SenhaB">
                </div>
                <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="termos" required>
                <label class="form-check-label" for="exampleCheck1">Eu li e aceito os <a href="" data-toggle="modal" data-target="#termos">termos de uso</a> e a <a href="" data-toggle="modal" data-target="#termos">Política de Privacidade</a>.</label>
                </div>
                <div class="form-group">
                </div>
                <input type="submit" class="btn btn-primary" value="Cadastrar">
            </form>
        </section>
          
                <!-- Modal Termos -->
                
                <div class="modal fade" id="termos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Termos de uso e política de privacidade</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            A sua privacidade é importante para nós. É política do TipCash respeitar a sua privacidade em relação a qualquer informação sua que possamos coletar no site TipCash, e outros sites que possuímos e operamos.
                        <br>
                            Solicitamos informações pessoais apenas quando realmente precisamos delas para lhe fornecer um serviço. Fazemo-lo por meios justos e legais, com o seu conhecimento e consentimento. Também informamos por que estamos coletando e como será usado.
                        <br>    
                            Apenas retemos as informações coletadas pelo tempo necessário para fornecer o serviço solicitado. Quando armazenamos dados, protegemos dentro de meios comercialmente aceitáveis ​​para evitar perdas e roubos, bem como acesso, divulgação, cópia, uso ou modificação não autorizados.
                        <br>   
                            Não compartilhamos informações de identificação pessoal publicamente ou com terceiros, exceto quando exigido por lei.
                        <br>    
                            O nosso site pode ter links para sites externos que não são operados por nós. Esteja ciente de que não temos controle sobre o conteúdo e práticas desses sites e não podemos aceitar responsabilidade por suas respectivas políticas de privacidade.
                        <br>   
                            Você é livre para recusar a nossa solicitação de informações pessoais, entendendo que talvez não possamos fornecer alguns dos serviços desejados.
                        <br>    
                            O uso continuado de nosso site será considerado como aceitação de nossas práticas em torno de privacidade e informações pessoais. Se você tiver alguma dúvida sobre como lidamos com dados do usuário e informações pessoais, entre em contacto connosco.
                        <br>     
                            Esperemos que esteja esclarecido e, como mencionado anteriormente, se houver algo que você não tem certeza se precisa ou não, geralmente é mais seguro deixar os cookies ativados, caso interaja com um dos recursos que você usa em nosso site.
                        <br>    
                            Esta política é efetiva a partir de November/2020.
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    </div>
                </div>
        
                <!-- JavaScript -->
        <script> 
            function findErrors ( ) {
                // Password
                if ( document.getElementById( 'SenhaA' ).value !== document.getElementById( 'SenhaB' ).value ) {
                    document.getElementById( 'SenhaA' ).style.borderColor = 'red';
                    document.getElementById( 'SenhaB' ).style.borderColor = 'red';
                    document.getElementById( 'errorMessage-password' ).style.display = 'block';
                    return true;
                }
                // Cellphone
                if(( document.getElementById(' cel1 ').value == "") && ( document.getElementById(' cel2 ').value == "")){
                    document.getElementById( 'cel1' ).style.borderColor = 'red';
                    document.getElementById( 'cel2' ).style.borderColor = 'red';
                    document.getElementById( 'errorMessage-cel' ).style.display = 'block';
                    return true;
                }

                //All good :)
                return false;
            }

            function gravar(){
                
                if ( !findErrors() ) $.ajax({
                    method: "post",
                    url: "cadastro.php",
                    data: $("#cadastro").serialize(),
                    success: function(data){
                        alert(data);
                    }
                });
            }

        </script>
        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <!-- Popper.js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <!-- Bootstrap Js -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
    </body>

    <!-- Inserção no Banco de dados -->
    <?php 
        /*$s1 = $_POST['sC'];
        $s2 = $_POST['sD'];
        if($s1 == $s2)
        {
            $s3 = $s2;
        }
        else
        {
            $mensagem = "<span class='errorMessage'><b>Erro</b>: As senhas não conferem!</span>";
            echo "<p id='mensagem'>".$mensagem."</p>";
        }
        */
        include 'conexao.php'; 
        $sql = 'INSERT INTO usuario VALUES (?, ?, ?, ?, ?, ?, ?, ?)';
        $n = $_POST['nomeC'];
        $e = $_POST['emailC'];
        $s = $_POST['sC'];
        $cel1 = $_POST['cel1'];
        $cel2 = $_POST['cel2'];
        $CPF = $_POST['CPF'];
        $V = 0;
        $P;
        sha1($s);
        $stmt  = mysqli_prepare($con, $sql);
        if($stmt == false) 
            {
                die("<pre>".mysqli_error($con).PHP_EOL.$sql."</pre>");
            }
        mysqli_stmt_bind_param($stmt, "isssdsss", $P, $n, $e, $s3, $v, $cel1, $cel2, $CPF);
        if(mysqli_stmt_execute($stmt)){
            /*echo 'registros inserido com sucesso';
            header('Status: 301 Moved Permanently', false, 301);
            header('Location: index.php');*/
        }
        else
        {
            echo  "<script>alert('Dados já inseridos!);</script>";
        }
    ?>
</html>
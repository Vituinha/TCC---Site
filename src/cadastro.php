<?php 
		//	Cadastro no banco de dados//

		
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
        mysqli_stmt_bind_param($stmt, "isssdsss", $P, $n, $e, $s, $v, $cel1, $cel2, $CPF);
        if(mysqli_stmt_execute($stmt)){
            session_start();
            $_SESSION['email'] = $e;
            $_SESSION['password'] = $s;
            $_SESSION['time'] = time();
            echo 'registros inserido com sucesso';
            header('Status: 301 Moved Permanently', false, 301);
            header('Location: localhost/TCC%20-%20WEB/src/index.php');
        }
        else
        {
            echo  "<script>alert('Dados já inseridos!);</script>";
        }
    ?>
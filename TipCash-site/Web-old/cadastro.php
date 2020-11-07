<?php 
	include 'conexao.php'; 
	$sql = 'INSERT INTO User VALUES (?, ?, ?)';
	$s = $_POST['senhaC'];
	$n = $_POST['nomeC'];
	$e = $_POST['emailC'];
	echo "!";
	$stmt = mysqli_prepare($con, $sql);
	mysqli_stmt_bind_param($stmt, "sss", $e, $s, $n);
	if(mysqli_stmt_execute($stmt)){
     	echo 'registros inserido com sucesso';
     	header('Location: home.html');
	}
	else
	{
     	echo mysqli_error($con);
     	echo "erro no cadastro";
     	header('Location: index.php');
	}
?>
<?php

$Host = "143.106.241.3:3306";
$dBName = "cl18128";
$dBPassword = "cl*21062003";

$con = mysqli_connect($servername, $dBName, $dBPassword, $dBName);

if($con->connection_errno)
{
    echo("Conexão falhou: (".$con->connection_errno.") ".$con -> connect_error);
}
?>
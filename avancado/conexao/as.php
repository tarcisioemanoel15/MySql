<?php


$servidor   = "localhost";
$usuario    = "root";
$senha      = "";
$banco      = "vendas";
$conecta    = mysqli_connect($servidor, $usuario, $senha, $banco);


if(mysqli_connect_errno()){
    die("conexão falhou: " . mysqli_connect_errno());
}

?>
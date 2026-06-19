<?php
$conexao = mysqli_connect("localhost", "root", "", "db_teste_injection");
if(!$conexao){
    die("Erro: " . mysqli_connect_error());
}
?>
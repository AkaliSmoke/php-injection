<?php 
include "inc-conexao.php";
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

echo 'usuario: ' . $usuario . ' | senha: ' . $senha;

$sql = "SELECT * FROM tb_usuario WHERE usuario = 
'{$usuario}' AND senha= '{$senha}'";

echo $sql . '<br><br><br><br><br>' ;

$resultado = mysqli_query($conexao, $sql);

echo '<pre>';
var_dump($resultado);

// valido se ouve pelo menos 1 resultado!
if ($resultado -> num_rows > 0) {
    // caso verdadeiro ele vai para a tela de acesso!
    header('location:usuario-autorizado.php');
} else {
    // caso falso ele vai para tela invalida
    header('location:usuario-invalido.php');
}
?>
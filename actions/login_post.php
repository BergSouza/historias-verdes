<?php
require('../conexao.php');

$username = $_POST['username'];
$senha = md5($_POST['senha']);

$query = mysqli_query($conexao, "SELECT * FROM users WHERE username = '$username' AND senha = '$senha'");
$num_rows = mysqli_num_rows($query);
if($num_rows > 0){
    $_SESSION['username'] = $username;
    echo "<script>location.href=('../pages/dashboard.php');</script>";
}else{
    echo "<script>alert('Credenciais inválidas!')</script>";
    echo "<script>location.href=('../pages/login.php');</script>";
}
?>
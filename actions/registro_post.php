<?php
require('../conexao.php');

$username = $_POST['username'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);
$senha_confirmar = md5($_POST['senha_confirmar']);
$autor_ativado = $_POST['tipo_conta'];
$tipo_conta = 'user';
if($autor_ativado){
    $tipo_conta = 'autor';
}

if($senha != $senha_confirmar){
    echo "
        <script>
            alert('Senhas não correspondem');
            history.go(-1);
        </script>
    ";
}

$query_verifica_username_cadastrado = mysqli_query($conexao, "SELECT * FROM users WHERE username = '$username'");
if(mysqli_num_rows($query_verifica_username_cadastrado) > 0){
    echo "
        <script>
            alert('Username em uso! Por favor escolha outro.');
            history.go(-1);
        </script>
    ";
}

$query_verifica_email_cadastrado = mysqli_query($conexao, "SELECT * FROM users WHERE email = '$email'");
if(mysqli_num_rows($query_verifica_email_cadastrado) > 0){
    echo "
        <script>
            alert('Email em uso! Por favor escolha outro.');
            history.go(-1);
        </script>
    ";
}
$query = mysqli_query($conexao, "INSERT INTO users(username,email,senha,tipo_conta,bloqueio)
                                            VALUES('$username','$email','$senha','$tipo_conta','0')
");

$_SESSION['username'] = $username;
echo "<script>location.href=('../pages/dashboard.php');</script>";

?>
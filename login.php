<?php


    $email = $_POST['email'];
    $senha = $_POST['senha'];

include "conexao.php";

$sql = "SELECT * FROM funcionarios
        WHERE email = '$email'
        AND senha = '$senha' ";

$resultado = mysqli_query($con, $sql);

if (mysqli_num_rows($resultado) > 0){
    echo "liberado!";
    header('location: inicio.html');
}
else{
    echo "usuario ou senha invalidos!";
    echo "<a href= 'index.html' > voltar </a>";
}


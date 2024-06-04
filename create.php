<?php

require_once 'conexao.php';

    if(isset($_POST['btn btn-second']));
    $name = mysqli_escape_string($conn, $_POST['name']);
    $cpf = mysqli_escape_string($conn, $_POST['cpf']);
    $email = mysqli_escape_string($conn, $_POST['email']);
    $password = mysqli_escape_string($conn, $_POST['password']);

    $sql = "INSERT INTO users (name, cpf, email, password) VALUES ('$name', '$cpf', '$email', '$password')";

    if(mysqli_query($conn, $sql)){
        $_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso!</p>";
    header("Location: index.php");
    }else{
        $_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso!</p>";
        header("Location: index.php");
    }

?>
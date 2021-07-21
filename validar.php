<?php

    require_once('conexao.php');

    $usuario = $_POST["usuario"];
    $email = $_POST ["email"];
    $senha = $_POST ["senha"];

    $bancodados = new db();
    $link = $bancodados->conecta_mysql();

    $sql = "insert into usuarios(usuario, email, senha) valus ('$usuario', '$email', '$senha')";

    mysqli_query($link, $sql);
    















?>
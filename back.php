<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $con = mysqli_connect("localhost", "root", "", "bd_ficha");

        if (!$con) {
            die("Erro de conexão: " . mysqli_connect_error());
        }

        $email              = $_POST['email'];
        $nome               = $_POST['nome'];
        $sobrenome          = $_POST['sobrenome'];
        $cpf                = $_POST['cpf'];
        $data_nascimento    = $_POST['data_nascimento'];
        $celular            = $_POST['celular'];
        $senha              = $_POST['senha'];
        $genero             = $_POST['genero'];

        $sql = "INSERT INTO usuarios 
        (email, nome, sobrenome, cpf, data_nascimento, celular, senha, genero)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = mysqli_prepare($con, $sql);

        mysqli_stmt_bind_param($stmt, "ssssssss",
            $email, $nome, $sobrenome, $cpf, $data_nascimento, $celular, $senha, $genero
        );

        if (mysqli_stmt_execute($stmt)) {
            echo "Gravado com sucesso!";
        } else {
            echo "Erro: " . mysqli_error($con);
        }

        mysqli_close($con);

        header("Location: https://www.boticario.com.br");
    }

    // CREATE DATABASE IF NOT EXISTS bd_ficha;
    // USE bd_ficha;

    // CREATE TABLE IF NOT EXISTS usuarios (
    //     id INT AUTO_INCREMENT PRIMARY KEY,
    //     email VARCHAR(255) NOT NULL,
    //     nome VARCHAR(100) NOT NULL,
    //     sobrenome VARCHAR(100) NOT NULL,
    //     cpf VARCHAR(14) NOT NULL,            
    //     data_nascimento DATE NOT NULL,      
    //     celular VARCHAR(20) NOT NULL,       
    //     senha VARCHAR(255) NOT NULL,         
    //     genero VARCHAR(20)
    // );
?>

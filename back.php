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
    }

    // Create table usuario(
    // )
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
</head>
<body>

<h2>Cadastro de Usuário</h2>

<form id="a" method="POST">
    <label>Email:</label><br>
    <input type="email" name="email"><br><br>

    <label>Nome:</label><br>
    <input type="text" name="nome"><br><br>

    <label>Sobrenome:</label><br>
    <input type="text" name="sobrenome"><br><br>

    <label>CPF:</label><br>
    <input type="text" name="cpf"><br><br>

    <label>Data de Nascimento:</label><br>
    <input type="date" name="data_nascimento"><br><br>

    <label>Celular:</label><br>
    <input type="text" name="celular"><br><br>

    <label>Senha:</label><br>
    <input type="password" name="senha"><br><br>

    <label>Gênero:</label><br>
    <select name="genero">
        <option value="masculino">Masculino</option>
        <option value="feminino">Feminino</option>
        <option value="outro">Outro</option>
    </select><br><br>

    <input type="submit" value="Cadastrar">
</form>

</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $con = mysqli_connect("localhost", "root", "", "bd_ficha");

    if (!$con) {
        die("Erro de conexão: " . mysqli_connect_error());
    }

    $email = $_POST['email'];
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $cpf = $_POST['cpf'];
    $data_nascimento = $_POST['data_nascimento'];
    $celular = $_POST['celular'];
    $senha = $_POST['senha'];
    $genero = $_POST['genero'];

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
?>

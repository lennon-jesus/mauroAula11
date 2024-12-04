<?php
session_start();
include('conexao.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['usuario'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM tbmedico WHERE usuario = '$email' AND senha = '$senha'"; 
    $result = $conect->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['id'] = $row['id'];
        $_SESSION['nome'] = $row['nome'];

    } else {
        echo "Credenciais inválidas.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="POST">

        <label for="usuario">Email:</label>
        <input type="text" id="usuario" name="usuario" required><br><br>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required><br><br>

        </select><br><br>
        <input type="submit" value="Entrar">
    </form>
</body>
</html>

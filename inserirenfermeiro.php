<?php
session_start();
include('conexao.php');

if (!isset($_SESSION['id'])) {
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $COREN = $_POST['coren'];
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    if (!empty($nome) || !empty($COREN) || !empty($usuario) || !empty($senha)) {
        $sql = "INSERT INTO tbenfermeiro (id, nome, COREN, usuario, senha) VALUES (NULL, '$nome', '$COREN', '$usuario', '$senha')";

        if ($conect->query($sql) === TRUE) {
            echo "Enfermeiro inserido com sucesso!";
        } else {
            echo "Erro: " . $sql . "<br>" . $conect->error;
        }
    } else {
        echo "Por favor preencha todos campos corretamente.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir enfermeiro</title>
</head>
<body>
    <h2>Inserir enfermeiro</h2>

    <form method="POST">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="coren">COREN:</label><br>
        <input type="text" id="coren" name="coren" required><br><br>

        <label for="usuario">Usuário:</label><br>
        <input type="text" id="usuario" name="usuario" required><br><br>

        <label for="senha">Senha:</label><br>
        <input type="password" id="senha" name="senha" required><br><br>

        <input type="submit" value="Confirmar">
    </form>

    <br><a href="login.php">Desconectar</a>
</body>
</html>


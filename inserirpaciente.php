<?php
session_start();
include('conexao.php');

if (!isset($_SESSION['id'])) {
  
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $leito = $_POST['leito'];
    $dataNasc = $_POST['dataNasc'];

    if (!empty($nome) || !empty($dataNasc)) {
        $sql = "INSERT INTO tbpaciente (id, nome, leito, dataNascimento) VALUES (NULL, '$nome', '$leito', '$dataNasc')";

        if ($conect->query($sql) === TRUE) {
            echo "Paciente inserido com sucesso!";
        } else {
            echo "Erro: " . $sql . "<br>" . $conect->error;
        }
    } else {
        echo "Por favor preencha todos campos corretamente";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir paciente</title>
</head>
<body>
    <h2>Inserir paciente</h2>

    <form method="POST">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="leito">Leito:</label><br>
        <input type="number" id="leito" name="leito"><br><br>

        <label for="dataNasc">Data de Nascimento:</label><br>
        <input type="text" id="dataNasc" name="dataNasc" required><br><br>

        <input type="submit" value="Confirmar">
    </form>

    <br><a href="login.php">Desconectar</a>
</body>
</html>

<?php
session_start();
include('conexao.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];

    $sql = "SELECT * FROM tbpaciente WHERE nome = '$nome'"; 
    $result = $conect->query($sql);

    if ($result->num_rows == 0) {
        header("Location: inserirpaciente.php");
    } else {
        header("Location: inserirreceita.php");
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validar paciente</title>
</head>
<body>
    <h2>Validar paciente</h2>
    <form method="POST">

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>
        </select><br><br>

        <input type="submit" value="confirmar">
    </form>
</body>
</html>

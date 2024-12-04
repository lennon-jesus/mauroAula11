<?php
session_start();
include('conexao.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $espec = $_POST['espec'];
    $CRM = $_POST['crm'];
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    if (!empty($nome) || !empty($espec) || !empty($crm) || !empty($usuario) || !empty($senha)) {
        $sql = "INSERT INTO tbmedico (id, nome, especialidade, CRM, usuario, senha) VALUES (NULL, '$nome', '$espec', '$CRM', '$usuario', '$senha')";

        if ($conect->query($sql) === TRUE) {
            echo "Médico inserido com sucesso!";
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
    <title>Inserir médico</title>
</head>
<body>
    <h2>Inserir médico</h2>

    <form method="POST">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="espec">Especialidade:</label><br>
        <input type="text" id="espec" name="espec" required><br><br>

        <label for="coren">CRM:</label><br>
        <input type="text" id="crm" name="crm" required><br><br>

        <label for="usuario">Usuário:</label><br>
        <input type="text" id="usuario" name="usuario" required><br><br>

        <label for="senha">Senha:</label><br>
        <input type="password" id="senha" name="senha" required><br><br>

        <input type="submit" value="Confirmar">
    </form>

    <br><a href="login.php">Desconectar</a>
</body>
</html>


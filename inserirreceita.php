<?php
session_start();
include('conexao.php');

if (!isset($_SESSION['id'])) {
  
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nomePac = $_POST['nomePac'];
    $nomeMed = $_POST['nomeMed'];
    $dataAdmin = $_POST['dataAdmin'];
    $dose = $_POST['dose'];

    if (!empty($nomePac) || !empty($nomeMed) || !empty($dose)) {
        $sql = "INSERT INTO tbreceita (id, nomePaciente, nomeMedicamento, dataAdmin, dose) VALUES (NULL, '$nomePac', '$nomeMed', '$dataAdmin', '$dose')";

        if ($conect->query($sql) === TRUE) {
            echo "Receita inserida com sucesso!";
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
    <title>Inserir receita</title>
</head>
<body>
    <h2>Inserir receita</h2>

    <form method="POST">
        <label for="nomePac">Nome do Paciente:</label><br>
        <input type="text" id="nomePac" name="nomePac" required><br><br>

        <label for="nomeMed">Nome do Medicamento:</label><br>
        <input type="text" id="nomeMed" name="nomeMed" required><br><br>

        <label for="dataAdmin">Data de Administração:</label><br>
        <input type="text" id="dataAdmin" name="dataAdmin"><br><br>

        <label for="dataAdmin">Dose:</label><br>
        <input type="text" id="dose" name="dose" required><br><br>

        <input type="submit" value="Confirmar">
    </form>

    <br><a href="login.php">Desconectar</a>
</body>
</html>

<?php
session_start();
include('conexao.php');

$sql = "SELECT id, nomePaciente, nomeMedicamento, dataAdmin, dose FROM tbreceita";

$result = $conect->query($sql);

if (!$result) {
    echo "Erro na consulta SQL: " . $conect->error . "<br>";
    echo "Consulta SQL: " . $sql;
die();
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Receitas</title>
</head>
<body>
    <h2>Lista de Receitas</h2>
    
    <?php if ($result->num_rows > 0): ?>
        <table border="1">
            <thead>
                <tr>
                    <th>ID Receita</th>
                    <th>Paciente</th>
                    <th>Medicamento</th>
                    <th>Data de Admin.</th>
                    <th>Dose</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['id']); ?></td>
                        <td><?php echo htmlspecialchars($row['nomePaciente']); ?></td>
                        <td><?php echo htmlspecialchars($row['nomeMedicamento']); ?></td>
                        <td><?php echo htmlspecialchars($row['dataAdmin']); ?></td>
                        <td><?php echo htmlspecialchars($row['dose']); ?></td>
                        <td><a href="inseriradmin.php">Inserir administração</a></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Não há receitas cadastradas.</p>
    <?php endif; ?>

 
</body>
</html>

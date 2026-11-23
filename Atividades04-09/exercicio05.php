<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 5</title>
</head>
<body>
    <form method="post">
        Número do chamado: <input type="number" name="chamado">
        <br><br>
        Tempo de indisponibilidade: <input type="number" name="tempo" step="0.1">
        <br><br>
        <button type="submit">Classificar</button>
    </form>
<?php
if (isset($_POST["chamado"])) {
    $numero = $_POST["chamado"];
    $tempo = $_POST["tempo"];

    if ($tempo <= 2) {
        echo "Chamado $numero - Baixa prioridade.";
    } elseif ($tempo <= 8) {
        echo "Chamado $numero - Média prioridade.";
    } else {
        echo "Chamado $numero - Alta prioridade.";
    }
}
?>
</body>
</html>

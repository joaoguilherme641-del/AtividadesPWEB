<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 2</title>
</head>
<body>
    <form method="post">
        Nome: <input type="text" name="nome">
        <br><br>
        Nota: <input type="number" name="nota" step="0.1">
        <br><br>
        <button type="submit">Avaliar</button>
    </form>
<?php
if (isset($_POST["nome"])) {
    $nome = $_POST["nome"];
    $nota = $_POST["nota"];

    if ($nota >= 8) {
        echo "$nome - Excelente desempenho.";
    } elseif ($nota >= 6) {
        echo "$nome - Desempenho satisfatório.";
    } else {
        echo "$nome - Necessita treinamento.";
    }
}
?>
</body>
</html>

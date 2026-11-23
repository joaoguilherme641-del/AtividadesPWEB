<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 8</title>
</head>
<body>
    <form method="post">
        Salário atual: <input type="number" name="salario" step="0.01">
        <br><br>
        Quantidade de anos: <input type="number" name="anos">
        <br><br>
        <button type="submit">Simular</button>
    </form>
<?php
if (isset($_POST["salario"])) {
    $salario = $_POST["salario"];
    $anos = $_POST["anos"];

    echo "<table border='1'>";
    echo "<tr><th>Ano</th><th>Salário</th></tr>";

    for ($ano = 1; $ano <= $anos; $ano++) {
        $salario = $salario * 1.05;
        echo "<tr><td>$ano</td><td>R$ " . number_format($salario, 2, ",", ".") . "</td></tr>";
    }

    echo "</table>";
}
?>
</body>
</html>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 7</title>
</head>
<body>
    <form method="post">
        Valor do produto: <input type="number" name="valor" step="0.01">
        <br><br>
        Quantidade de parcelas: <input type="number" name="parcelas">
        <br><br>
        <button type="submit">Calcular</button>
    </form>
<?php
if (isset($_POST["valor"])) {
    $valor = $_POST["valor"];
    $parcelas = $_POST["parcelas"];
    $cadaParcela = $valor / $parcelas;

    echo "<table border='1'>";
    echo "<tr><th>Parcela</th><th>Valor</th></tr>";

    for ($i = 1; $i <= $parcelas; $i++) {
        echo "<tr><td>$i</td><td>R$ " . number_format($cadaParcela, 2, ",", ".") . "</td></tr>";
    }

    echo "</table>";
}
?>
</body>
</html>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 13</title>
</head>
<body>
    <form method="post">
        Litros disponíveis: <input type="number" name="litros" step="0.1">
        <br><br>
        Consumo por viagem: <input type="number" name="consumo" step="0.1">
        <br><br>
        <button type="submit">Calcular</button>
    </form>
<?php
if (isset($_POST["litros"])) {
    $litros = $_POST["litros"];
    $consumo = $_POST["consumo"];
    $viagens = 0;

    while ($consumo > 0 && $litros >= $consumo) {
        $litros -= $consumo;
        $viagens++;
        echo "Viagem $viagens realizada. Combustível restante: " . number_format($litros, 1, ",", ".") . " litros<br>";
    }

    if ($consumo > 0) {
        echo "<br>Total de viagens possíveis: $viagens";
    }
}
?>
</body>
</html>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 12</title>
</head>
<body>
    <form method="post">
        Valor do servidor: <input type="number" name="valor" step="0.01">
        <br><br>
        Valor economizado por mês: <input type="number" name="economia" step="0.01">
        <br><br>
        <button type="submit">Calcular</button>
    </form>
<?php
if (isset($_POST["valor"])) {
    $valor = $_POST["valor"];
    $economia = $_POST["economia"];
    $saldo = 0;
    $mes = 0;

    while ($economia > 0 && $saldo < $valor) {
        $mes++;
        $saldo += $economia;
        echo "Mês $mes - Saldo acumulado: R$ " . number_format($saldo, 2, ",", ".") . "<br>";
    }

    if ($economia > 0) {
        echo "<br>Serão necessários $mes meses.";
    }
}
?>
</body>
</html>

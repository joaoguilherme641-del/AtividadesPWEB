<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 14</title>
</head>
<body>
    <form method="post">
        Temperatura inicial: <input type="number" name="temperatura">
        <br><br>
        Temperatura máxima segura: <input type="number" name="maxima">
        <br><br>
        <button type="submit">Monitorar</button>
    </form>
<?php
if (isset($_POST["temperatura"])) {
    $temperatura = $_POST["temperatura"];
    $maxima = $_POST["maxima"];

    while ($temperatura <= $maxima) {
        echo "Temperatura: $temperatura °C<br>";
        $temperatura++;
    }
}
?>
</body>
</html>

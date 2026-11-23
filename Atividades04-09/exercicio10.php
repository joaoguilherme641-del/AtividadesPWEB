<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 10</title>
</head>
<body>
    <form method="post">
        Número: <input type="number" name="numero">
        <br><br>
        <button type="submit">Calcular</button>
    </form>
<?php
if (isset($_POST["numero"])) {
    $numero = $_POST["numero"];

    for ($i = 1; $i <= 10; $i++) {
        echo "$numero x $i = " . ($numero * $i) . "<br>";
    }
}
?>
</body>
</html>

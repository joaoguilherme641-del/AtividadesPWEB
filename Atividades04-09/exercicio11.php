<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 11</title>
</head>
<body>
    <form method="post">
        Estoque atual: <input type="number" name="estoque">
        <br><br>
        Quantidade retirada: <input type="number" name="retirada">
        <br><br>
        Estoque mínimo: <input type="number" name="minimo">
        <br><br>
        <button type="submit">Simular</button>
    </form>
<?php
if (isset($_POST["estoque"])) {
    $estoque = $_POST["estoque"];
    $retirada = $_POST["retirada"];
    $minimo = $_POST["minimo"];

    while ($estoque > $minimo && $retirada > 0) {
        $estoque -= $retirada;

        if ($estoque < 0) {
            $estoque = 0;
        }

        echo "Estoque após retirada: $estoque<br>";
    }
}
?>
</body>
</html>

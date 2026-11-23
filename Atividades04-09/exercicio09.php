<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 9</title>
</head>
<body>
    <form method="post">
        Quantidade de produtos: <input type="number" name="quantidade">
        <br><br>
        <button type="submit">Registrar</button>
    </form>
<?php
if (isset($_POST["quantidade"])) {
    $quantidade = $_POST["quantidade"];

    for ($i = 1; $i <= $quantidade; $i++) {
        if ($i % 5 == 0) {
            echo "<strong>Produto #$i registrado</strong><br>";
        } else {
            echo "Produto #$i registrado<br>";
        }
    }
}
?>
</body>
</html>

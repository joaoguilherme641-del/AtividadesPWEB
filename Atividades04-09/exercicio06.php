<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 6</title>
</head>
<body>
    <form method="post">
        Quantidade de participantes: <input type="number" name="quantidade">
        <br><br>
        <button type="submit">Gerar</button>
    </form>
<?php
if (isset($_POST["quantidade"])) {
    $quantidade = $_POST["quantidade"];

    for ($i = 1; $i <= $quantidade; $i++) {
        echo "Crachá $i gerado<br>";
    }
}
?>
</body>
</html>

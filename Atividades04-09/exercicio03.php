<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 3</title>
</head>
<body>
    <form method="post">
        Nome: <input type="text" name="nome">
        <br><br>
        Renda mensal: <input type="number" name="renda" step="0.01">
        <br><br>
        Valor solicitado: <input type="number" name="valor" step="0.01">
        <br><br>
        <button type="submit">Verificar</button>
    </form>
<?php
if (isset($_POST["nome"])) {
    $nome = $_POST["nome"];
    $renda = $_POST["renda"];
    $valor = $_POST["valor"];
    $limite = $renda * 5;

    if ($valor <= $limite) {
        echo "$nome - Crédito aprovado.";
    } else {
        echo "$nome - Crédito negado.";
    }

    echo "<br>Valor máximo permitido: R$ " . number_format($limite, 2, ",", ".");
}
?>
</body>
</html>

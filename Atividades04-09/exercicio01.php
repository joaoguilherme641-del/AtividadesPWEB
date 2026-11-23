<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 1</title>
</head>
<body>
    <form method="post">
        Nome: <input type="text" name="nome">
        <br><br>
        Idade: <input type="number" name="idade">
        <br><br>
        <button type="submit">Verificar</button>
    </form>
<?php
if (isset($_POST["nome"])) {
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];

    if ($idade >= 18) {
        echo "$nome - Acesso autorizado";
    } else {
        echo "$nome - Acesso negado";
    }
}
?>
</body>
</html>

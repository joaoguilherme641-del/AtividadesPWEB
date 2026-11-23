<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 15</title>
</head>
<body>
    <form method="post">
        Senha correta: <input type="password" name="senhaCorreta">
        <br><br>
        Senha digitada: <input type="password" name="senhaDigitada">
        <br><br>
        <button type="submit">Entrar</button>
    </form>
<?php
if (isset($_POST["senhaCorreta"])) {
    $senhaCorreta = $_POST["senhaCorreta"];
    $senhaDigitada = $_POST["senhaDigitada"];
    $tentativas = 0;

    while ($senhaDigitada != $senhaCorreta && $tentativas < 5) {
        $tentativas++;
    }

    if ($senhaDigitada == $senhaCorreta) {
        echo "Senha correta - Acesso concedido.";
    } else {
        echo "Limite excedido - Conta bloqueada.";
    }
}
?>
</body>
</html>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 4</title>
</head>
<body>
    <form method="post">
        Usuário: <input type="text" name="usuario">
        <br><br>
        Senha: <input type="password" name="senha">
        <br><br>
        <button type="submit">Entrar</button>
    </form>
<?php
if (isset($_POST["usuario"])) {
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    if ($usuario == "admin" && $senha == "fatec2026") {
        echo "Login realizado com sucesso.";
    } else {
        echo "Usuário ou senha inválidos.";
    }
}
?>
</body>
</html>

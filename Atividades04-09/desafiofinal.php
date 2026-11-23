<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Desafio Final</title>
</head>
<body>
    <h2>Desafio Final Integrador</h2>
    <form method="post">
        Nome do aluno: <input type="text" name="nome" required>
        <br><br>
        Nota 1: <input type="number" name="nota1" min="0" max="10" step="0.1" required>
        <br><br>
        Nota 2: <input type="number" name="nota2" min="0" max="10" step="0.1" required>
        <br><br>
        Quantidade de exercícios realizados: <input type="number" name="exercicios" min="0" required>
        <br><br>
        <button type="submit">Calcular</button>
    </form>
<?php
if (isset($_POST["nome"])) {
    $nome = $_POST["nome"];
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];
    $exercicios = $_POST["exercicios"];

    $media = ($nota1 + $nota2) / 2;

    if ($media >= 6) {
        $situacao = "Aprovado";
    } elseif ($media >= 4) {
        $situacao = "Exame";
    } else {
        $situacao = "Reprovado";
    }

    echo "<h3>Resultado</h3>";
    echo "<table border='1'>";
    echo "<tr><th>Informação</th><th>Resultado</th></tr>";
    echo "<tr><td>Nome</td><td>$nome</td></tr>";
    echo "<tr><td>Nota 1</td><td>$nota1</td></tr>";
    echo "<tr><td>Nota 2</td><td>$nota2</td></tr>";
    echo "<tr><td>Média</td><td>$media</td></tr>";
    echo "<tr><td>Situação</td><td>$situacao</td></tr>";
    echo "</table>";

    echo "<h3>Exercícios realizados</h3>";
    for ($i = 1; $i <= $exercicios; $i++) {
        echo "Exercício $i realizado<br>";
    }

    echo "<h3>Simulação de pontos extras</h3>";
    $novaMedia = $media;
    $extras = 0;

    if ($novaMedia >= 6) {
        echo "O aluno já atingiu a média mínima de 6.";
    } else {
        while ($novaMedia < 6) {
            $novaMedia += 0.5;
            $extras += 0.5;
            echo "Média após ponto extra: $novaMedia<br>";
        }

        echo "Pontos extras necessários: $extras";
    }
}
?>
</body>
</html>

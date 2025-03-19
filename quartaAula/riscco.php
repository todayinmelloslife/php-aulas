<!DOCTYPE html>
<html lang="pt-BR">
<link rel="stylesheet" href="style.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Risco</title>
</head>
<body>
    <h1>Calculadora de Risco</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $idade = $_POST['idade'];
        $peso = $_POST['peso'];
        $risco = '';

        if ($idade < 18) {
            if ($peso < 50) {
                $risco = 'risco médio';
            } elseif ($peso >= 50 && $peso <= 90) {
                $risco = 'risco normal';
            } elseif ($peso > 90 && $peso <= 120) {
                $risco = 'risco alto';
            } else {
                $risco = 'risco extremamente alto';
            }
        } else {
            if ($peso <= 50) {
                $risco = 'risco médio';
            } elseif ($peso > 50 && $peso <= 100) {
                $risco = 'risco normal';
            } elseif ($peso > 100 && $peso <= 140) {
                $risco = 'risco alto';
            } else {
                $risco = 'risco extremamente alto';
            }
        }

        echo "Idade: $idade anos<br>";
        echo "Peso: $peso kg<br>";
        echo "Grupo de risco: $risco";
    } else {
    ?>
        <form method="post" action="">
            Idade: <input type="number" name="idade" required><br>
            Peso: <input type="number" name="peso" required><br>
            <input type="submit" value="Calcular Risco">
        </form>
    <?php
    }
    ?>
</body>
</html>
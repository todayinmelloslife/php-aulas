<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idade e Rótulo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post">
        <label for="idade">Digite a sua idade:</label>
        <input type="number" id="idade" name="idade" min="0" max="120" required>
        <button type="submit">Enviar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $idade = intval($_POST["idade"]);

        if ($idade < 0 || $idade > 120) {
            echo "<p>Idade inválida. Por favor, insira uma idade entre 0 e 120 anos.</p>";
        } else {
            $classificacao = match (true) {
                $idade > 0 && $idade <= 2 => "Bebê",
                $idade > 2 && $idade < 13 => "Criança",
                $idade >= 13 && $idade <= 19 => "Adolescente",
                $idade > 19 && $idade < 40 => "Adulto jovem",
                $idade >= 40 && $idade < 60 => "Adulto de meia-idade",
                $idade >= 60 => "Idoso",
                default => "Idade inválida",
            };

            echo "<p>Classificação: $classificacao</p>";
        }
    }
    ?>

</body>
</html>
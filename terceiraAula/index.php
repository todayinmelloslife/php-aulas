<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02 - Página Inicial</title>
</head>
<body>
    
    <h1>Aula 02 - PHP</h1>
    
    <?php
        echo "<p>Hello, world!</p>";

        // declaração de variáveis
        $aluno = "Jason Sobreiro"; // string
        $periodo = 3; // int
        $disciplina = "Desenvolvimento de Sistemas"; // string
        $media = 6.5; // float
  
        echo "\n\tAluno: " . $aluno . "<br>"; // concatenação
        echo "\n\tPeríodo: $periodo<br>"; // interpolação
        echo "\n\tDisciplina: " . $disciplina . "<br>";
        echo "\n\tMédia: " . $media . "<br>";

        // \n = quebra uma linha para o interpretador
        // \t = aplica tabulação na linha para o interpretador

        if ($media >= 6) {
            
            echo "\n\tAPROVADO";
        } else if ($media >=1 && $media < 6) {
            
            echo "\n\tPENDENTE";
        } else {
            
            echo "\n\tREPROVADO";
        }

        // valor de 0 a 5
        $dificuldade = 4;

        echo "\n\t<br>Dificuldade da Disciplina (0 a 5): 
            $dificuldade ";

        switch($dificuldade) {

            case 0:
                echo "Muito fácil!";
                break;

            case 1:
                echo "Fácil";
                break;

            case 2:
                echo "Intermediário";
                break;

            case 3:
                echo "Difícil";
                break;

            case 4:
                echo "Muito difícil";
                break;

            case 5:
                echo "Impossibru!";
                break;

            default:
                echo "Valor inválido!";
                break;

        }

        // exemplo de laço for
        echo "<h2>Contagem regressiva:</h2>";
        for($i = 10; $i >= 0; $i--) {

            echo "$i...<br>"; // interpolação
        }

        echo "<h2>Fim da aula!</h2>";

    ?>

</body>
</html>
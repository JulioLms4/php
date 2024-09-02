<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Área do Triângulo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Calculadora de Área do Triângulo</h1>
        <form method="POST">
            <input type="number" name="base" placeholder="Digite a base" required>
            <input type="number" name="altura" placeholder="Digite a altura" required>
            <input type="submit" value="Calcular">
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $base = $_POST['base'];
            $altura = $_POST['altura'];
            $area = ($base * $altura) / 2;
            $limite = 100;

            echo "<div class='result'>";
            echo "A área do triângulo é: " . $area . " unidades².<br>";

            if ($area > $limite) {
                echo "A área é maior que $limite.";
            } else {
                echo "A área é menor ou igual a $limite.";
            }
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>

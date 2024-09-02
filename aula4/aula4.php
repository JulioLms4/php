<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo da Área do Triângulo</title>
</head>
<body>
    <h1>Cálculo da Área do Triângulo</h1>
    <form action="index.php" method="post">
        <label for="base">Base (cm):</label>
        <input type="number" name="base" id="base" required>
        <br><br>
        <label for="altura">Altura (cm):</label>
        <input type="number" name="altura" id="altura" required>
        <br><br>
        <input type="submit" value="Calcular">
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $base = $_POST['base'];
        $altura = $_POST['altura'];


        $area = ($base * $altura) / 2;


        $limite = 100;


        if ($area > $limite) {
            echo "<p>A área do triângulo é $area cm², que é maior que o valor limite de $limite cm².</p>";
        } else {
            echo "<p>A área do triângulo é $area cm², que é menor ou igual ao valor limite de $limite cm².</p>";
        }
    }
    ?>
</body>
</html>

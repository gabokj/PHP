<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method= "post" action="">
        Nota1: <input type="number" name="nota1" step="0.01" required><br><br> <!-- Step serve para colocar números quebrados -->
        Nota2: <input type="number" name="nota2" step="0.01" required><br><br>
        Nota3: <input type="number" name="nota3" step="0.01" required><br><br>
        Nota4: <input type="number" name="nota4" step="0.01" required><br><br>
        <button type="submit">Calcular Média</button><br><br>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nota1 = $_POST["nota1"];
        $nota2 = $_POST["nota2"];
        $nota3 = $_POST["nota3"];
        $nota4 = $_POST["nota4"];
      
        if (is_numeric($nota1) && is_numeric($nota2) && is_numeric($nota3 ) && is_numeric($nota4)) {
          $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
          echo "<p>A média das notas é: " . number_format($media, 2) . "</p>";
        } else {
          echo "<p>Por favor, insira notas válidas.</p>";
        }
      }
      ?>


</body>
</html>
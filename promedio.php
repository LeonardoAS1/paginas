<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $num1 = isset($_POST['numero1']) ? floatval($_POST['numero1']) : 0;
    $num2 = isset($_POST['numero2']) ? floatval($_POST['numero2']) : 0;
    $num3 = isset($_POST['numero3']) ? floatval($_POST['numero3']) : 0;

    $promedio = ($num1 + $num2 + $num3) / 3;

  
    echo "<h2>Resultado:</h2>";
    echo "<p>El promedio de los números $num1, $num2 y $num3 es: <strong>" . round($promedio, 2) . "</strong></p>";
} else {
    echo "Por favor, envía los datos a través del formulario.";
    
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title></title>
  <link rel="stylesheet" href="rfc.css" />
    </head>
    
<body>
    <h2>promedio generado</h2>
    
    <p><a href="promedio.html">calcular otro promedio</a></p>
</body>
</html>
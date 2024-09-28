<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liquidacion</title>
    <link rel="stylesheet" href="./styleliqu.css">
</head>
<body>
<div class="container">
    <?php

    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $cargo = $_POST['cargo'];
    $dias_trabajados = $_POST['dias_trabajados'];

    // Asignar sueldo según cargo
    $sueldos = array(
        'Director' => 5000000,
        'Supervisor' => 3500000,
        'Operario' => 2500000
    );
    $sueldo = $sueldos[$cargo];

    // Calcular salario devengado
    $salario_devengado = $sueldo * ($dias_trabajados / 30);

    // Calcular deducciones
    $deducciones = array(
        'salud' => 0.04,
        'pension' => 0.04
    );
    $salud = $salario_devengado * $deducciones['salud'];
    $pension = $salario_devengado * $deducciones['pension'];

    // Calcular salario líquido
    $salario_liquido = $salario_devengado - $salud - $pension;

    // Mostrar resultados en una lista
    echo "<h2>Liquidación de nómina para $nombre</h2>";
    echo "<ul>";
    echo "<li><strong>Cargo:</strong> $cargo</li>";
    echo "<li><strong>Días trabajados:</strong> $dias_trabajados</li>";
    echo "<li><strong>Sueldo:</strong> $" . number_format($sueldo, 0, ',', '.') . "</li>";
    echo "<li><strong>Salario devengado:</strong> $" . number_format($salario_devengado, 0, ',', '.') . "</li>";
    echo "<li><strong>Deducciones:</strong></li>";
    echo "<ul>";
    echo "<li>Salud (EPS): $" . number_format($salud, 0, ',', '.') . "</li>";
    echo "<li>Pensión (AFP): $" . number_format($pension, 0, ',', '.') . "</li>";
    echo "</ul>";
    echo "<li><strong>Salario líquido:</strong> $" . number_format($salario_liquido, 0, ',', '.') . "</li>";
    echo "</ul>";
    ?>
    <input type="submit" value="Generar pdf" onclick="imprimirPagina()">
    <button  onclick="window.location.href='liquidar.php'">Atrás</button>
    <script src="script.js"></script>
</div>
</body>
</html>

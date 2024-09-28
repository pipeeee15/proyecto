<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liquidar Nomina</title>
    <link rel="stylesheet" href="./styleliqu.css">
</head>
<body>
    <h1>Liquidar Nómina</h1>
    <form action="liquidar_proceso.php" method="post">
        <label for="nombre">Nombre del Empleado:</label>
        <input type="text" id="nombre" name="nombre"><br><br>
        <label for="cargo">Cargo:</label>
        <select id="cargo" name="cargo">
            <option value="Director">Director</option>
            <option value="Supervisor">Supervisor</option>
            <option value="Operario">Operario</option>
        </select><br><br>
        <label for="dias_trabajados">Días Trabajados:</label>
        <input type="number" id="dias_trabajados" name="dias_trabajados"><br><br>
        <input type="submit" value="Liquidar">
        <ul><li><a href="logout.php">Salir</a></li></ul>
    </form>
</body>
</html>
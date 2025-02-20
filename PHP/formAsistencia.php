<?php
    /**
     * isset en $_get siempre dara true por que $_GET es un array que siempre esta, 
     * solo que si no hay datos enviados sera un array vacio, por ende da true if (isset($_GET)).
     * 
     * Debemos usar !empty($_GET) para verificar si $_GET no es un array vacio.
     */
    if (!empty($_GET)) {
        include_once("conexionBD.php");
        // Registramos una 1ra asistencia
        try {
            $primer_nombre = $_GET['primer_nombre'];
            $segundo_nombre = $_GET['segundo_nombre'];
            $primer_apellido = $_GET['primer_apellido'];
            $segundo_apellido = $_GET['segundo_apellido'];
            $cedula = $_GET['cedula'];
            $fecha_actual = $_GET['fecha_actual'];
            $hora_actual = $_GET['hora_actual'];
            // Preparamos la instrucción SQL
            $sql = "INSERT INTO `asistencia` (`primer_nombre`, `segundo_nombre`, `primer_apellido`, `segundo_apellido`, `cedula`, `fecha_actual`, `hora_actual`) VALUES ('$primer_nombre', '$segundo_nombre', '$primer_apellido', '$segundo_apellido', '$cedula', '$fecha_actual', '$hora_actual');";
            $prepacion = $conexionPDO->prepare($sql);
            $prepacion->execute();
            $conexionPDO = null;
            echo "Asistencia registrada";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar asistencia</title>
</head>
<body>
    <form action="formAsistencia.php" method="get">
        <input type="text" name="primer_nombre" placeholder="Primer Nombre"><br>
        <input type="text" name="segundo_nombre" placeholder="Segundo Nombre"><br>
        <input type="text" name="primer_apellido" placeholder="Primer Apellido"><br>
        <input type="text" name="segundo_apellido" placeholder="Segundo Apellido"><br>
        <input type="number" name="cedula" placeholder="Cedula"><br>
        <input type="date" name="fecha_actual" placeholder="Fecha Actual"><br>
        <input type="time" name="hora_actual" placeholder="Hora Actual"><br>
        <button type="submit">Registrar asistencia</button>
    </form>
</body>
</html>
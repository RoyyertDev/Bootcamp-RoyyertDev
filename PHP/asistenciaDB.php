<?php
    include_once("conexionBD.php");

    // Registramos una 1ra asistencia
    try {
        $primer_nombre = 'Gabriela';
	    $segundo_nombre = 'Antonieta';
    	$primer_apellido = 'Garcia';
        $segundo_apellido = 'NoMeLoSe';
        $cedula = "123";
        $fecha_actual = "2025-02-20";
        $hora_actual = "11";
        
        // Preparamos la instrucción SQL
        $sql = "INSERT INTO `asistencia` (`primer_nombre`, `segundo_nombre`, `primer_apellido`, `segundo_apellido`, `cedula`, `fecha_actual`, `hora_actual`) VALUES ('$primer_nombre', '$segundo_nombre', '$primer_apellido', '$segundo_apellido', '$cedula', '$fecha_actual', '$hora_actual');";

        $prepacion = $conexionPDO->prepare($sql);
        $prepacion->execute();

        echo "Asistencia registrada";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
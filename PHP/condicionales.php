<?php
    /**
     * Metodo if
     */
    $edad = 12;
    if ($edad >= 18) {
        echo "Eres mayor de edad.";
    } elseif ($edad < 15) {
        echo "Eres un adolescente.";
    } else {
        echo "Eres menor de edad.";
    }

    /**
     * If en linea
     */
     $edad = 20;
     if ($edad >= 18) echo "Eres mayor de edad.";

    /**
     * If de asignacion
     */
    $edad = 20;
    $imprimimos = $edad >= 18 ? "Eres mayor de edad." : "Eres menor de edad.";
    echo $imprimimos . "\n";
    echo ($edad >= 18) ? "Eres mayor de edad." : "Eres menor de edad.";

    /**
     * If de asignacion corto
     */

    $edad = 20;
    // Asignamos
    $imprimimos = $edad >= 18 ?? "Eres menor de edad.";
    echo $edad . "\n";
    
    //Imprimiendo
    echo $edad >= 18 ?? "Eres menor de edad.";
    echo ($edad >= 18);
    echo isset($edad);

    /**
     * Switch
     */

    $edad = 20;
    switch ($edad) {
        case 18:
            echo "Eres mayor de edad.";
            break;
        case 20:
            echo "Eres mayor de edad.";
            break;
        default:
            echo "Eres menor de edad.";
            break;
    }

    /**
     * Usando isset y empty
     */
    $xd = 20;

    // Si existe
    if (isset($xd)) {
        echo "La variable existe";
    }
    // Si no existe
    if (!isset($xd)) {
        echo "La variable no existe";
    }
    
    // Si esta vacio [0, '', null]
    if (empty($xd)) {
        echo "Edad existe pero esta vacia";
    }
    // Si no esta vacio !== [0, '', null]
    if (!empty($xd)) {
        echo "Edad existe y no esta vacia";
    }
?>

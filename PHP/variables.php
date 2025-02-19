<?php
    /**
     * Introduccion a variables
    */
    echo "-----VARIABLES NATURALES----- \n";
    $enteros = 10;
    $string = "Hola mundo";
    $a = 1.5;
    $booleano = true;
    echo "Tipo entero: " . $enteros . "\n";
    echo "Tipo string: " . $string . "\n";
    echo "Tipo float: " . $a . "\n";
    echo "Tipo booleano: " . $booleano . "\n";

    /**
     * Variables constantes
     */

    echo "-----VARIABLES CONSTANTES----- \n";
    const MI_VARIABLE_CONSTANTE = 5;
    echo "Mi variable constante es: " . MI_VARIABLE_CONSTANTE . "\n";

    /**
     * Variables de una variable
     */
    $nueva = 'enteros';
    echo "Mi variable nueva es: " . $$nueva . "\n";

    /**
     * Variables predefinidas
     */
    echo "-----VARIABLES PREDEFINIDAS----- \n";
    $nombreDelFormulario = $_GET['nombre'];
    $variableDesdePost = $_POST['nombre'];
    $_REQUEST;
    $_SERVER;
    $_SESSION;
    $_FILES;
    $_ENV;
    $_COOKIE;
?>
<input type="text" name="nombre">
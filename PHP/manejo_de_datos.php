<?php
    /**
     * Insertar elementos en un array con push
     */
    $numeros = array(1, 2, 3, 4, 5);
    print_r($numeros);
    array_push($numeros, 6, 7, 8, 9, 10);
    print_r($numeros);

    /**
     * Filtrar elementos en un array
     */
    $numeros = array(1, 2, 3, 4, 5);
    print_r($numeros);
    /**
     * Obtener los números pares
     */
    $pares = array_filter($numeros, function($num) {
        return $num % 2 == 0;
    });
    print_r($pares);
?>
<?php

    /**
     * Funciones en lenguaje C++
     */
    // int suma (int valorA, int valorB){
    //     cout<<valorA + valorB;
    //     return valorA + valorB;
    // }
    // int valorDeFuncion = suma(2,2);
    // suma(4, 5);
    // suma(1,1);
    // suma(9,454546);
    // suma(34,4);

    /**
     * Funciones en lenguaje PHP
     */
    function suma(){
        $a = 5;
        $b = 6;
        $c = $a + $b;
        return $c . "\n";
    }
    $valorDeFuncion = suma();
    echo $valorDeFuncion;

    function resta($a, $b){
        return $a - $b;
    }
    $resta = resta(10, 5);
    echo "La resta es: " . $resta . "\n";

    /**
     * Funciones anonimas
     */
    $funcionAnonima = function($a, $b){
        return $a + $b;
    };
    echo $funcionAnonima(10, 10);

?>

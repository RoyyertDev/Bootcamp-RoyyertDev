<?php
    function dividir (int $a, int $b): float {
        if ($b === 0) {
            throw new DivisionByZeroError('No se puede dividir por 0');
        }
        return $a / $b;
    }

    // Manejo del erro con Try-Catch
    try {
        echo dividir(2,2) . "\n";
        echo dividir(2,0);
    } catch (DivisionByZeroError $error){
        echo $error->getMessage() . "\n";
    }
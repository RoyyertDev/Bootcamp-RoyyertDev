<?php
    /**
     * while
     */
    $i = 0;
    while ($i < 10) {
        $i++;
        echo $i . "\n";
    }

    /**
     * do while
     */
    $i = 0;
    do {
        $i++;
        echo $i . "\n";
    } while ($i < 10);

    /**
     * for
     */
    $i = 0;
    for ($i = 0; $i < 10; $i++) {
        echo $i . "\n";
    }

    /**
     * foreach
     */
    $array = [1, 2, 3, 4, 5];
    foreach ($array as $posicion => $valor) {
        echo "Posicion: " . $posicion . " Valor: " . $valor . "\n";
    }
?>
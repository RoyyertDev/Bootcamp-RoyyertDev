<?php
    $array = [1, 2, 3, 4, 5];
    echo $array[0];
    print($array[0]);
    print_r($array);

    /**
     * Array indexado
     */
    $numeros = array(1, 2, 3, 4, 5);
    print_r($numeros);

    /**
     * Array associativo
     */
    $numeros = array("uno" => 1, "dos" => 2, "tres" => 3, "cuatro" => 4, "cinco" => 5);
    print_r($numeros);
    echo $numeros["dos"];
?>
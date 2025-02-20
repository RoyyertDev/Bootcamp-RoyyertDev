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

    /**
     * Array ascociativos 2
     */
    $objetoPersonas = [
        [19, "fary", 1.70], 
        [19, "carlo", 1.70, ['direccion', 'telefono', 'email']],
    ];

    $objetoPersonasAsociativos = [
        "fary" => [
            19, 
            "fary", 
            1.70
        ],
        "carlo" => [
            19, 
            "carlo", 
            1.70, 
            "otroDatos" => [
                'direccion', 
                'telefono', 
                'email'
            ]
        ],
    ];

    $objetoPersonasAsociativosBuenaPractica = [
        "fary" => [
            "edad" => 19, 
            "nombre" => "fary", 
            "altura" => 1.70
        ],
        "carlo" => [
            "edad" => 19, 
            "nombre" => "carlo", 
            "altura" => 1.70, 
            "otroDatos" => [
                'direccion' => "donde el diablo dejo las pantaletas", 
                'telefono' => 1234, 
                'email' => "carlos@gmail.com"
            ]
        ],
    ];
    print_r($objetoPersonasAsociativosBuenaPractica['carlo']);
?>
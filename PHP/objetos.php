<?php

    /**
     * Objetos en lenguaje PHP
     * 
     */
    $personas = new stdClass();
    $personas->estudiantes = new stdClass();
    $personas->estudiantes->fary = [
        "edad" => 19, 
        "nombre" => "fary", 
        "altura" => 1.70
    ];
    $personas->estudiantes->carlo = [
        "edad" => 19, 
        "nombre" => "carlo", 
        "altura" => 1.70, 
        "otroDatos" => [
            'direccion' => "donde el diablo dejo las pantaletas", 
            'telefono' => 1234, 
            'email' => "carlos@gmail.com"
        ]
    ];
    print_r($personas->estudiantes->fary);


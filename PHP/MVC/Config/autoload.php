<?php

spl_autoload_register(function ($class) {
    $baseDirs = [
        'Config' => __DIR__ . '',
        'Models' => __DIR__ . '/../Models',
        'Controllers' => __DIR__ . '/../Controllers',
        'Middleware' => __DIR__ . '/../Middleware',
    ];
    
    foreach ($baseDirs as $namespace => $baseDir) {
        // Arroja la posicion donde inicia el mismo string y se compara con 0
        if (strpos($class, $namespace) === 0) {
            // Remueve todo el estring que sea igual entre el namespace y la clase recibida en la funcion principal (parametro $class)
            $relativeClass = str_replace($namespace, '', $class);
            // Se concatena con el baseDir el relativeClass (clase sin el namespace) y un .php (extensión de archivo)
            $file = $baseDir . str_replace('\\', '/', $relativeClass) . '.php';
            if (file_exists($file)) {
                require_once $file;
                return;
            }
        }
    }
});
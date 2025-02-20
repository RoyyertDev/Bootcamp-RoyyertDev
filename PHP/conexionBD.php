<?php 
    $servidor = "127.0.0.1"; // localhost
    $usuario = "root";
    $contrasenia = "";
    $baseDeDatos = "bootcamp";

    // Creamos la conexión con mysqli

    // Parametros de mysqli(servidor, usuario, contraseña, base de datos)
    $conexion = new mysqli($servidor, $usuario, $contrasenia, $baseDeDatos);

    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    echo "Conexion exitosa usando mysqli";

    // AQUI NUESTRA LOGICA PARA MANIPULAR LA BASE DATOS

    $conexion->close();
?>
<?php
    $servidor = "127.0.0.1"; // localhost
    $usuario = "root";
    $contrasenia = "";
    $baseDeDatos = "bootcamp";
    // Creamos la conexión con PDO

    // Parametros de PDO("mysql:host=servidor; dbname=base de dato; usuario; contraseña")
    try {
        $conexionPDO = new PDO("mysql:host=$servidor; dbname=$baseDeDatos", $usuario, $contrasenia);
        $conexionPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conexion exitosa usando PDO";
    } catch(PDOException $error) {
        echo "Conexion fallida: " . $error->getMessage();
    }
?>
<?php
    class Vehiculo {
        private string $marca;
        private string $modelo;

        public function __construct(string $marca, string $modelo) {
            $this->marca = $marca;
            $this->modelo = $modelo;
        }

        public function mostrarInfo(): string {
            return "Marca: $this->marca, Modelo: $this->modelo";
        }
    }

    // Uso de la clase
    $miVehiculo = new Vehiculo("Toyota", "Corolla");
    echo $miVehiculo->mostrarInfo();
?>

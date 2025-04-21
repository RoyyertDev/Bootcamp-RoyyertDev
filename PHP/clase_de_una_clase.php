<?php
    class Animal {
        public function speak() {
            return "El animal hace ruido";
        }
    }

    class Perro extends Animal {
        public function speak() {
            return "Guau Guau";
        }
    }

    // Uso de la clase
    $miPerro = new Animal;
    echo $miPerro->speak();
?>

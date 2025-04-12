CREATE TABLE estudiantes (
  id INT AUTO_INCREMENT PRIMARY KEY, 
  nombre VARCHAR(20) NOT NULL, 
  apellido VARCHAR(20) NOT NULL, 
  edad INT(2) NOT NULL, 
  direccion VARCHAR(250) DEFAULT 'Sin cargar', 
  cedula INT(8) NOT NULL
);
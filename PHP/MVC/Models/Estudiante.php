<?php 
namespace Models;

use Config\Conexion;

class Estudiante 
{
    public $db;
    public function __construct()
    {
        $this->db = Conexion::connect();
    }

    public function create(Array $data)
    {
        $query = "INSERT INTO estudiantes (
            nombre, apellido, edad, email, cedula
        ) VALUES (
            :nombre, 
            :apellido, 
            :edad, 
            :email, 
            :cedula
        )";
        $stmt = $this->db->prepare($query);
        $stmt->execute([
            ':nombre' => $data['nombre'],
            ':apellido' => $data['apellido'],
            ':edad' => $data['edad'],
            ':email' => $data['email'],
            ':cedula' => $data['cedula']
        ]);
        return $stmt->fetchAll();
    }

    public function index()
    {
        $query = "SELECT * FROM estudiantes";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function findByEmail($email)
    {
        $query = "SELECT * FROM estudiantes WHERE email = :email";
        $stmt = $this->db->prepare($query);
        $stmt->execute([':email' => $email]);
        return $stmt->fetch();
    }
}
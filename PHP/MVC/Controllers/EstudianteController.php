<?php 

namespace Controllers;

use Models\Estudiante;

class EstudianteController
{
    private $estudianteModel;

    public function __construct() {
        $this->estudianteModel = new Estudiante();
        session_start();
    }

    public static function create() {
        require_once '../Views/Auth/Login.php';
    }

    public static function showRegister() {
        require_once '../Views/Auth/Register.php';
    }

    public function store()
    {
        $exiteUsuario = $this->estudianteModel->findByEmail($_POST['email']);
        if ($exiteUsuario) {
            echo "Correo ya registrado";
            return;
        }
        $this->estudianteModel->create([
            'nombre' => $_POST['nombre'],
            'apellido' => $_POST['apellido'],
            'edad' => $_POST['edad'],
            'email' => $_POST['email'],
            'cedula' => $_POST['cedula'],
        ]);
    }

    public function login()
    {
        $user = $this->estudianteModel->findByEmail($_POST['email']);
        if ($user) {
            $_SESSION['user'] = $user;
            print_r([
                'message' => 'Logeado exitosamente',
                'session_user' => $_SESSION['user']
            ]);
        } else {
            echo "Correo incorrecto";
        }
    }

    public function logout()
    {
        session_destroy();
        header("Location: public/index.php");
    }

    public function index()
    {
        $estudiantes = $this->estudianteModel->index();
        echo json_encode($estudiantes);
    }
}
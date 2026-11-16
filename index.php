<?php
// Clase principal o clase base
class Estudiante {

    // Atributos que heredaran las clases derivadas
    public $nombre;
    public $matricula;
    public $carrera;

    // Constructor de la clase principal
    public function __construct($nombre, $matricula, $carrera) {
        $this->nombre = $nombre;
        $this->matricula = $matricula;
        $this->carrera = $carrera;
    }

    // Metodo para mostrar los datos
    public function mostrarDatos() {
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Matricula: " . $this->matricula . "<br>";
        echo "Carrera: " . $this->carrera . "<br>";
    }

    // Metodo para saludar
    public function saludar() {
        echo "Hola, bienvenido al sistema de estudiantes.";
    }
}

// Clase derivada que hereda de Estudiante
class EstudiantePresencial extends Estudiante {

    public $horario;

    public function __construct($nombre, $matricula, $carrera, $horario) {
        parent::__construct($nombre, $matricula, $carrera);
        $this->horario = $horario;
    }

    // Sobrescribimos el metodo saludar
    public function saludar() {
        echo "Hola, estudiante presencial.";
    }

    // Metodo exclusivo de esta clase
    public function mostrarHorario() {
        echo "Horario: " . $this->horario . "<br>";
    }
}

// Otra clase derivada que hereda de Estudiante
class EstudianteEnLinea extends Estudiante {

    public $plataforma;

    public function __construct($nombre, $matricula, $carrera, $plataforma) {
        parent::__construct($nombre, $matricula, $carrera);
        $this->plataforma = $plataforma;
    }

    // Metodo exclusivo de esta clase
    public function mostrarPlataforma() {
        echo "Plataforma: " . $this->plataforma . "<br>";
    }
}

// Creamos objetos de las clases derivadas
$estudiante1 = new EstudiantePresencial(
    "Mariana Lopez",
    "2026001",
    "Ingenieria en Sistemas",
    "Matutino"
);

$estudiante2 = new EstudianteEnLinea(
    "Carlos Ramirez",
    "2026002",
    "Administracion",
    "Aula Virtual"
);

// Mostramos los resultados
echo "<h1>Sistema de Gestion de Estudiantes</h1>";

echo "<h2>Estudiante presencial</h2>";
$estudiante1->mostrarDatos();
$estudiante1->mostrarHorario();
$estudiante1->saludar();

echo "<hr>";

echo "<h2>Estudiante en linea</h2>";
$estudiante2->mostrarDatos();
$estudiante2->mostrarPlataforma();
$estudiante2->saludar();

?>
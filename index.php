
<?php
// Sistema de Gestión de Estudiantes

// Creamos la clase Estudiante
class Estudiante {

    // Declaramos los atributos
    public $nombre;
    public $matricula;
    public $carrera;

    // Creamos el constructor
    public function __construct($nombre, $matricula, $carrera) {
        $this->nombre = $nombre;
        $this->matricula = $matricula;
        $this->carrera = $carrera;
    }

    // Metodo para mostrar los datos del estudiante
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

// Creamos un objeto de la clase Estudiante
$estudiante1 = new Estudiante(
    "Mariana Lopez",
    "2026001",
    "Ingenieria en Sistemas"
);
$estudiante2 = new Estudiante(
    "Carlos Ramirez",
    "2026002",
    "Administracion"
);

// Mostramos la informacion
echo "<h1>Sistema de Gestion de Estudiantes</h1>";
$estudiante1->mostrarDatos();
echo "<hr>";
$estudiante2->mostrarDatos();

echo "<br>";
$estudiante1->saludar();

?>


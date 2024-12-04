<?php
/* class Vehiculo {
    public $matricula;
    public $año;

    public function __construct($matricula, $año) {
        $this->matricula = $matricula;
        $this->año = $año;
    }

    public function mostrar() {
        echo "Matricula: " . $this->matricula . "<br>";
        echo "Año: " . $this->año . "<br>";
    }

    function actualizarMatricula($nuevaMatricula) {
        $this->matricula = $nuevaMatricula;
    }

    public function mostrarNuevo() {
        echo "<br> Matricula nueva: " . $this->matricula . "<br>";
        echo "Año: " . $this->año . "<br>";
    }
}
    $miVehiculo = new Vehiculo("1235BHG", 1998);
    $miVehiculo ->mostrar();   


    $miVehiculo->actualizarMatricula("4568JKL");
    $miVehiculo->mostrarNuevo(); */

/* class Libro {
        public $titulo;
        public $autor;
        public $numeroPaginas;
    
    public function __construct($titulo, $autor, $numeroPaginas) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->numeroPaginas = $numeroPaginas;
    }

    public function mostrar() {
        echo "Titulo: " . $this->titulo . "<br>";
        echo "Autor: " . $this->autor . "<br>";
        echo "Numero de paginas: " . $this->numeroPaginas . "<br>";
    }

    public function actualizarLibro($nuevoNumeroPaginas) {

        $this->numeroPaginas = $nuevoNumeroPaginas;
    }

    public function mostrarLibroNuevo() {
        echo "<br>Titulo: " . $this->titulo . "<br>";
        echo "Autor: " . $this->autor . "<br>";
        echo "Numero de paginas nuevas: " . $this->numeroPaginas . "<br>";
    }

}

    $miLibro = new Libro("Cabalgando", "Cristobal Soria", "466");
    $miLibro -> mostrar();

    $miLibro -> actualizarLibro("300");
    $miLibro -> mostrarLibroNuevo(); */

class CuentaBancaria {
    public $titular;
    public $saldo;

    public function __construct($titular, $saldo) {
        $this->titular = $titular;
        $this->saldo = (float)$saldo;
    }

    public function mostrarInformacion() {
        echo "Titular: " . $this->titular . "<br>";
        echo "Saldo: $" . $this->saldo. "<br>";
    }

    public function depositar($cantidad) {
        $this->saldo += $cantidad;
        echo "<br>Se han depositado: $" . $cantidad . "<br>";
        echo "Tu nuevo saldo es: " . $this->saldo . "<br>";
    }

    public function retirar($retiro) {
  if ($retiro > 0 && $retiro <= $this->saldo) {
            $this->saldo -= $retiro;
            echo "<br>Se han retirado: $" . $retiro . "<br>";
            echo "Tu nuevo saldo es: $" . $this->saldo . "<br>";
        } else {
            echo "<br>No se puede retirar esa cantidad.<br>";
        }
        
    }
}

    $miCuenta = new CuentaBancaria("Totote", 15000.75);
    $miCuenta->mostrarInformacion();

    $miCuenta->depositar(1000);
    
    $miCuenta->retirar(500);

    $miCuenta->retirar(20000);
    


?>
<?php 

/*     interface Clase{
        class miClase implements Clase{

        }
    }
        NO SE IMPLEMENTAN SOLO SE NOMBRAN
 */
/*     interface Vehiculo{
        public function arrancar();

        public function detener();
    }

    class Coche implements Vehiculo{
        
        public function arrancar(){
            echo"El coche ha arrancado";
        }

        public function detener(){
            echo"El coche se ha detenido";
        }
    } */

/* abstract class Vehiculo{

    public $estado;
    
    public function arrancar(){
        $this-> $estado = "arrancado";
        echo "El coche esta arrancado";
    }

    abstract public function detener();
}
    

abstract class Coche extends Vehiculo{

    public function detener(){
        echo"El coche se ha detenido";
    }

}
 */


/* interface vehiculoInterfaz{

    public function mostrarTipo();
    public function cantidadRuedas();
}

class Motocicleta implements vehiculoInterfaz{

    public function mostrarTipo(){
        echo "El tipo es una moto";
    }

    public function cantidadRuedas(){
        echo "Tiene 2 ruedas";
    }
} */

//interface Reproductor{
    /* No se pueden poner atributos solo en las functions *//* 
    public function reproducir($archivo);
    public function pausar();
    public function detener();
}

class reproductorAudio implements Reproductor{

    public function reproducir($archivo){
        echo "Se esta reproduciendo <br>" . $archivo . "<br>";
    }

    public function pausar(){
        echo "Pausado <br>";
    }

    public function detener(){
        echo "Detenido <br>";
    }

}

class reproductorVideo implements Reproductor{
    public function reproducir($archivo){
        echo "Se esta reproduciendo" . $archivo . "<br>";
    }

    public function pausar(){
        echo "Pausado <br>";
    }

    public function detener(){
        echo "Detenido <br>";
    }

}
$audioPlayer = new ReproductorAudio();
$audioPlayer->reproducir("cancion.mp3");
$audioPlayer->pausar();
$audioPlayer->detener();

echo "\n";

$videoPlayer = new ReproductorVideo();
$videoPlayer->reproducir("pelicula.mp4");
$videoPlayer->pausar();
$videoPlayer->detener(); */


/* interface Instrumento{
    public function familia();
}


class Guitarra implements Instrumento{

    public function familia(){
        echo "Cuerda";
    }

}

class Bateria implements Instrumento{
    public function familia(){
        echo "Percusion"; 
    }
}

class Saxofon implements Instrumento{
    public function familia(){
        echo "Viento";
    }
} */

/* interface Figura {
    public function calcularArea();
    public function calcularPerimetro();
}

class Cuadrado implements Figura {
    private $lado;

    public function __construct($lado) {
        $this->lado = $lado;
    }

    public function calcularArea() {
        $area = $this->lado * $this->lado;
        echo "El area del cuadrado es: " . $area . " m2 <br>";
    }

    public function calcularPerimetro() {
        $perimetro = $this->lado * 4;
        echo "El perimetro del cuadrado es: " . $perimetro . " m\n";
    }
}

$cuadrado = new Cuadrado(5);
$cuadrado->calcularArea();
$cuadrado->calcularPerimetro();
 */

interface Operaciones{
    public function sumar();
    public function restar();
    public function multiplicar();
    public function dividir();
}

class Calculadora implements Operaciones {
    public $num1;
    public $num2;

    public function __construct($num1, $num2) {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function sumar() {
        return $this->num1 + $this->num2;
        echo "<br>";

    }

    public function restar() {
        return $this->num1 - $this->num2;
        echo "<br>";

    }

    public function multiplicar() {
        return $this->num1 * $this->num2;
        echo "<br>";
    }

    public function dividir() {
        return $this->num1 / $this->num2;
        echo "<br>";

    }
}

$calculadora = new Calculadora(10, 2);
echo $calculadora ->sumar();
echo $calculadora ->restar();
echo $calculadora ->multiplicar();
echo $calculadora ->dividir();









?>
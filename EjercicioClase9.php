<?php 
    /* Una clase abstracta llamada figura con un metodo abstracto que sera calcular area y creamos 2 clases derivadas una que sera circulo y otra rectangulo en la de circulo tiene prop priv que es radio y tendra el metodo de calcular areay la de rectangulo va a tener las prop priv de base y altura y con el metodo de calcular area 
    rect =b*a
    circ = pi*r*r
    */

/*     abstract class Figura{
        abstract public function calcularArea();
        public function mostrarTexto(){
            return "El area de tu poligono: ". $this->calcularArea();
        }
    }

    class Rectangulo extends Figura{
        private $base;
        private $altura;
        public function __construct($base, $altura) {
            $this->base = $base;
            $this->altura = $altura;
        }
        public function calcularArea(){
            return $this->base * $this->altura;

        }
    }

    class Circulo extends Figura{
        private $radio;
        public function __construct($radio) {
            $this->radio = $radio;
        }
        public function calcularArea() {
            return  3.14 * $this->radio * $this->radio;
        }
    }

    $rectangulo = new Rectangulo(2, 5);
    echo $rectangulo->mostrarTexto() . "<br>";
    
    $circulo = new Circulo(radio: 2);
    echo  $circulo->mostrarTexto() . "<br>"; */

    /* una interface metodo pago tendra u metodo q se llamara procesar pago, con 2 clases implementadas pago tarjeta y pago paypal, cada una tiene su metodo el mismo procesar pago, y, me tiene que decir procesando un pago de 100 con tarjeta y procesando un pago de paypal 200 */

  /*   interface metodoPago{
        public function procesarPago($cantidad);
    }

    class Tarjeta implements metodoPago{
        public function procesarPago($cantidad) {
            echo "Procesando un pago de $cantidad con tarjeta.<br>";
        }
    }

    class Paypal implements  metodoPago{
        public function procesarPago($cantidad) {
            echo "Procesando un pago de $cantidad con PayPal.<br>";
        }
    }

    $compra = new Tarjeta();
    $compra ->procesarPago(100);

    $compra2 = new Paypal();
    $compra2 ->procesarPago(200);
  */


  /*Crea una clase abstracta Freelancer con:
Propiedades: nombre, tarifaPorHora.
Un método abstracto calcularPagoMensual.
Crea una interfaz Proyectos con:
Un método calcularBonificacion.
Crea una clase FreelancerDesarrollador que:
Extiende Freelancer e implementa Proyectos.
Añade la propiedad horasTrabajadas.
Implementa los métodos necesarios.*/

?>
<?php 
    /* Crea una clase llamada Personas con las prop publicas nombre y edad, con un metodo llamado presentarse, que nos devuelva el mensaje con el nombre y la edad */

/*     class Personas {
        public $nombre;
        public $edad;

        public function __construct($nombre, $edad) {
            $this->nombre = $nombre;
            $this->edad = $edad;
        }

        public function presentarse(){
            return "Hola mi nombre es " . $this->nombre. " y tengo ". $this->edad. " años. ";
        }
    }

    $Juan = new Personas("Juan", 25);
    echo $Juan -> presentarse(); */

    /* Crea una clase Producto que tengas las prop nombre y precio, una constante que sea el iva=0.21, y un metodo que sea precio con iva que calcule el precio con el iva */
/* 
    class Producto {
        public $nombre;
        public $precio;
        const iva = 0.21;
    
        public function __construct($nombre, $precio){
            $this->nombre = $nombre;
            $this->precio = $precio;
        }

        public function precioConIva(){
            return $this->precio + ($this->precio * self::iva);
        }
    }

    $producto1 = new Producto("Bebida", 100);
    echo "El producto " . $producto1->nombre . " tiene un precio sin iva de: ". $producto1->precio. "€ <br> ";

    echo "Y con iva es: ". $producto1->precioConiva() . "€"; */

    /* Una clase Usuario con 2 prop privadas nombre y correo, y un destructror que muestre que el objeto ha sido destruido, nos tiene que mostrar Usuario creado el nombre y el correo, Modificaremos el nombre y pondremos nuevo nombre, y pondremos que el nombre inicial ha sido destruido*/
/* 
    class Usuario {
        private $nombre;
        private $correo;

        public function __construct($nombre, $correo) {
            $this->nombre = $nombre;
            $this->correo = $correo;
            echo "Usuario creado el nombre: ". $this->nombre. " y el correo: ". $this->correo. "<br>";
        }

        public function setNombre($nombre){
            $this->nombre= $nombre;
        }
        public function setCorreo($correo){
            $this->correo= $correo;
        }

        public function getNombre(){
            return $this->nombre;
        }
        public function getCorreo(){
            return $this->correo;
        }



        public function __destruct(){
            echo "EL nombre del usuario " .$this->nombre. " ha sido destruido.<br>";
        }



    }

    $Juan = new Usuario("Juan", correo: "juan@gmail.com");

    $Juan->setNombre("Pedro <br>");
    echo $Juan->getNombre(); */

    

    /* Clase cuenta bancaria con 2 prop privadas titular y saldo y una constante que sera comision = 0.02, metodo que depositar, retirar, y a la hora de retirar se muestra en el total de la cuenta la cantidad con la comision efectuada. Nos muestra cuenta creada por el usuario con saldo inicial x, retira x y el saldo final es x*/

/*     class CuentaBancaria {
        private $titular;
        private $saldo;
        const COMISION = 0.02;
    
        public function __construct($titular, $saldo) {
            $this->titular = $titular;
            $this->saldo = $saldo;
            echo "Cuenta creada por el usuario: " . $this->titular . " con saldo inicial: " . $this->saldo . "<br>";
        }
    
        public function depositar($cantidad) {
            $this->saldo += $cantidad;
            echo "Se ha depositado " . $cantidad . ". Saldo total: " . $this->saldo . "<br>";
        }
    
        public function retirar($cantidad) {
            $comisionAplicada = $cantidad * self::COMISION;
            $totalRetirado = $cantidad + $comisionAplicada;
    
            if ($totalRetirado > $this->saldo) {
                echo "Fondos insuficientes para retirar " . $cantidad . " más la comisión de " . $comisionAplicada . ".<br>";
            } else {
                $this->saldo -= $totalRetirado;
                echo "Se ha retirado " . $cantidad . " (comisión aplicada: " . $comisionAplicada . "). Saldo final: " . $this->saldo . "<br>";
            }
        }
    }
    
    $cuenta = new CuentaBancaria("Juan", 1000);
    
    $cuenta->depositar(500);
    $cuenta->retirar(100); */


    /* Clase Empleado con prop protegidas nombre y salario, un metodo sera mostrar info, y una clase derivada que sera gerente y añadiremos una prop privada que sera departamento y nos mostrara el nombre el salario y el departamento */

    class Empleado {
        protected $nombre;
        protected $salario;

        public function __construct($nombre, $salario){
            $this->nombre = $nombre;
            $this->salario = $salario;
        }

        public function mostrarInfo(){
            echo "Nombre: " . $this-> nombre. ", Salario: " . $this->salario. "<br>";
        }
    }

    class Gerente extends Empleado{
        private $departamento;

        public function __construct($nombre, $salario, $departamento){
            parent::__construct($nombre, $salario);
            $this->departamento = $departamento;
        }

        public function mostrarInfoGerente(){
            parent::mostrarInfo();
            echo "Departamento: ". $this->departamento. "<br>";
        }
    }

    $Juan = new Gerente("Juan", 2500, "Compras");

    $Juan->mostrarInfoGerente();

?>
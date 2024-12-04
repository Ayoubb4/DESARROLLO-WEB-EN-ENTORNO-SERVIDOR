<?php
/* class Coche {
    public $marca;
    public $color;

    public function __construct($marca, $color) {
        $this->marca = $marca;
        $this->color = $color;
    }

    public function setMarca($marca) {
        $this->marca = $marca;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function getColor() {
        return $this->color;
    }

    public function mostrarInformacion() {
        echo "Marca: " . $this->getMarca() . "<br>";
        echo "Color: " . $this->getColor() . "<br>";
    }
}

    $miCoche = new Coche("BMW", "Negro");
    $miCoche->mostrarInformacion();

    $miCoche->setMarca("Mercedes");
    $miCoche->setColor("Rojo");

    $miCoche->mostrarInformacion(); */

/*     class Producto {
        private $id;
        private $nombre;
        private $descripcion;
        private $precio;
    
        public function __construct($id, $nombre, $descripcion, $precio) {
            $this->id = $id;
            $this->nombre = $nombre;
            $this->descripcion = $descripcion;
            $this->precio = $precio;
        }
    
        public function setId($id) {
            $this->id = $id;
        }
        public function getId() {
            return $this->id;
        }
    
        public function setNombre($nombre) {
            $this->nombre = $nombre;
        }
        public function getNombre() {
            return $this->nombre;
        }

        
        public function getDescripcion(){
            return $this->descripcion;
        }
        public function setDescripcion($descripcion) {
            return $this->descripcion = $descripcion;
        }
        

        public function getPrecio(){
            return $this->precio;
        }

        public function setPrecio($precio){
            return $this->precio = $precio;
        }

        public function mostrarInformacion() {
            echo "ID: " . $this->getId() . "<br>";
            echo "Nombre: " . $this->getNombre() . "<br>";
            echo "Descripcion: " . $this->getDescripcion() . "<br>";
            echo "Precio: $" . $this->getPrecio() . "<br>";
        }
}


    $miProducto = new Producto(1, "PC", "PC Top", 1200.99);
    $miProducto->mostrarInformacion();


    $miProducto->setDescripcion("PC malo");
    $miProducto->mostrarInformacion(); */


/*     class Usuario {
        const usuariosMaximos = 100;
        private $usuariosActuales;
    
        public function __construct($usuariosActuales) {
            $this->usuariosActuales = $usuariosActuales;
        }
    
        public function verificarRegistro() {
            if ($this->usuariosActuales <= self::usuariosMaximos) {
                echo "Aun se puede registrar. Usuarios actuales: " . $this->usuariosActuales . "<br>";
            } else {
                echo "Se ha alcanzado el limite de usuarios. No se puede registrar mas.<br>";
            }
        }
}

$usuarios = new Usuario(100);
$usuarios ->verificarRegistro(); */

/* class Validar {
    const MAYOR_DE_EDAD = 18;

    public function comprobarAcceso($edad) {
        if ($edad >= self::MAYOR_DE_EDAD) {
            echo "Acceso permitido. La persona tiene " . $edad . " años.<br>";
        } else {
            echo "Acceso denegado. La persona tiene " . $edad . " años, y no es mayor de edad.<br>";
        }
    }
}
    $validacion = new Validar();
    $validacion->comprobarAcceso(20); */

    class Producto {
        private static $numProductos = 0;
        private $codigo;
    
        public function __construct($codigo) {
            $this->codigo = $codigo;
            self::$numProductos++;
        }
    
        public function getCodigo() {
            return $this->codigo;
        }
    
        public static function getNumProductos() {
            return self::$numProductos;
        }
    
        public function mostrarInformacion() {
            echo "Codigo del producto: " . $this->getCodigo() . "<br>";
            echo "Numero de productos: " . self::getNumProductos() . "<br><br>";
        }
}

    $producto1 = new Producto("Vanish");
    $producto2 = new Producto("Mici");
    $producto3 = new Producto("iphone");

    echo "El Nº de productos es: ". $producto1->getNumProductos() ."<br>";

<?php 


/* Una clase abstracta llamada figura con un metodo abstracto que sera calcular area y creamos 2 clases derivadas una que sera circulo y otra rectangulo en la de circulo tiene prop priv que es radio y tendra el metodo de calcular areay la de rectangulo va a tener las prop priv de base y altura y con el metodo de calcular area 
    rect =b*a
    circ = pi*r*r */

abstract class Figura{
    abstract function calcularArea();

    public function mostrarTexto(){
        return "El area de tu poligono: ". $this->calcularArea();
    }
}

class Circulo extends Figura{
    private $radio;
    public function __construct($radio) {
        $this->radio = $radio;
    }

    function calcularArea(){
        return 3.14*$this->radio*$this->radio;
    }
}

class Rectangulo extends Figura{
    private $base;
    private $altura;
    public function __construct($base,$altura){
        $this->base= $base;
        $this->altura= $altura;
    }

    function calcularArea(){
        return $this->base * $this->altura;
    }
}

$circulo = new Circulo(radio: 2);
    echo  $circulo->mostrarTexto() . "<br>";
?>
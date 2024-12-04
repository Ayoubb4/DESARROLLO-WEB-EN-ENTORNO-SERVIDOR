<?php 

class Producto {

    public $codigo;

    public function __construct($codigo){
        $this->codigo= $codigo;
    }

}

class Television extends Producto{
    
    public $pulgadas;
    public $tecnologia;

    public function __construct($codigo, $pulgadas, $tecnologia) {
        
        parent::__construct($codigo);

        $this->pulgadas = $pulgadas;
        $this ->tecnologia = $tecnologia;
    }

}


/* abstract class nombreclase{
    public $atributo;
    public function metodo(){
        return;
    }

    abstract public function metodoAbstracto();

} */


abstract class Electrodomestico{
    public $marca;


/*     public function __construct($marca) {
        $this->marca = $marca;
    } */

/*     abstract public function encender();
 */

    abstract protected function encender($estado);
    
    abstract public function mostrar ($color); 

/*     public function mostrarMarca(){
        echo "La marca de tu electrodomestico es: ". $this->marca . "<br>";
    } */

}

class Lavadora extends Electrodomestico{

    public function encender ($estado){
        return "La lavadora esta: " . $estado . "<br>";
    }

    public function mostrar($color, $marca = "LG"){
        return "El color de la lavadora es: ". $color ."<br>". "Y la marca es " . $marca;
    }
    
/*     public function encender(){
        echo "La lavadora esta encendida";
    } */
    
}

/*  $miElectrodomestico = new Lavadora("LG");
    $miElectrodomestico -> mostrarMarca();
    $miElectrodomestico -> encender(); */

    $lavadora = new Lavadora();
    echo $lavadora ->encender('ON');
    echo $lavadora ->mostrar('Gris', "Samsung"); 
 

?>
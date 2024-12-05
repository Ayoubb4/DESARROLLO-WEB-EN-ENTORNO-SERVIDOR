<?php 
/* Crea un objeto que represente a alguien que trabaja por horas. Debe calcular su pago mensual y una bonificación adicional según el total ganado. */

abstract class Persona{
    protected $nombre;
    protected $dineroxHora;

    public function __construct($nombre,$dineroxHora){
        $this->nombre = $nombre;
        $this->dineroxHora = $dineroxHora;
    }

    abstract public function pagoMensual();
}

interface Extra{
    public function extra();
}

class Currante extends Persona implements Extra{

    private $horas;

    public function __construct($nombre,$dineroxHora,$horas){
        parent::__construct($nombre,$dineroxHora);
        $this->horas = $horas;
    }

    public function pagoMensual(){
        return $this->horas * $this->dineroxHora;
    }

    public function extra(){
        return $this->pagoMensual() * 0.10;
    }
}

?>
<?php

require_once 'interfaceJardin.php';

class JardinDecorado implements Jardin {
    //CREAMOS UNA VARIABLE A LA CUAL LE VAMOS A ASIGNAR EL JARDINBASE MEDIANTE EL CONSTRUCTOR
    protected $jardin;

    //ASIGNAMOS A NUESTRA VARIABLE JARDIN, EL OBJETO PASADO POR PARAMETRO
    public function __construct(Jardin $jardin){
        $this->jardin = $jardin;
    }

    //LLAMAMOS AL NOMBRE DEL JARDIN DEL PARAMETRO CONSTRUCTOR Y CONCATENAMOS LO QUE NOSOTROS QUERAMOS
    public function getNombre(){
        return $this->jardin->getNombre() . " Decorado";
    }

    //LLAMAMOS A LAS PLANTAS DEL JARDIN DEL PARAMETRO CONSTRUCTOR Y CONCATENAMOS LO QUE NOSOTROS QUERAMOS
    public function getPlantas(){
        return $this->jardin->getPlantas() . ", margaritas, amapolas";
    }
}

?>
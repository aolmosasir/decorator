<?php

require_once 'claseJardinBase.php';
require_once 'claseJardinDecorado.php';

class Index {
    public function ejecutar(){
        // JARDINBASE SIMPLE
        $jardinBase = new JardinBase();

        echo $jardinBase->getNombre() . "<br>";
        echo $jardinBase->getPlantas(). "<br>";

        //JARDIN DECORATIVO, EN EL CONSTRUCTOR LE PASAMOS LA INSTANCIA DEL JARDINBASE
        $jardinDecorado = new JardinDecorado($jardinBase);
        
        echo $jardinDecorado->getNombre() . "<br>";
        echo $jardinDecorado->getPlantas();
    }
}

$obj = new Index();
$obj->ejecutar();

?>
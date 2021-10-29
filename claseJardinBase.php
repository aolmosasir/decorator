<?php
require_once 'interfaceJardin.php';

// JARDIN DEL QUE VAMOS A PARTIR, SE USARA PARA CREAR JARDINES DECORADOS
class JardinBase implements Jardin {

    public function getNombre(){
        return "Jardin";
    }

    public function getPlantas(){
        return "Arbustos";
    }

}
?>
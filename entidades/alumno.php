<?php 

class Alumno{

    private $nombre;
    private $apellidos;
    private $dni;
    private $fnac;
    private $correo;
    private $hobbies;

    
    public function __get($property){
        if(property_exists($this, $property)) {
            return $this->$property;
        }
    }

    public function __set($property, $value){
        if(property_exists($this, $property)) {
            $this->$property = $value;
        }
    }

}





?>
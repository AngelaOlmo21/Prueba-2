<?php 
class User{
    protected $nombre;
    protected $correo;
    protected $password;
    protected $roles;

    public function getNombre(){
        return $this->nombre;
    }
    public function getCorreo(){
        return $this->correo;
    }
    public function getPassword(){
        return $this->password;
    }
    public function getRoles(){
        return $this->roles;
    }

    public function __construct($row)
    {
        $this->nombre=$row['nombre'];
        $this->correo=$row['correo'];
        $this->nombre=$row['password'];
        $this->nombre=$row['nombre'];
    }
}
?>
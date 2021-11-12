<?php
class BD{

    private static $conexion;
    public static function conectar(){
        self::$conexion = new PDO('mysql:host=localhost;dbname=tienda', 'root', '');
    }

    public static function existeusuario($usuario,$password)
    {

        $sql = "SELECT * FROM USERS " .
            "WHERE nombre='$usuario' " .
            "AND password='" .$password. "'";
            
            if($resultado = self::$conexion->query($sql))
             {
                $fila = $resultado->fetch();
                return ($fila != null);
             }             
    }

    public static function obtieneUsuario($correo,$password):User
    {
        
        $res= self::$conexion->query("SELECT * FROM USERS WHERE correo ='$correo' and password='$password'");
        while ($registro = $res->fetch()) 
        {
            $user=new User(array('nombre'=>$registro['nombre'],'correo'=>$registro['correo'],
            'password'=>$registro['password'],'roles'=>$registro['roles']));
            
        }
        return $user;
	
    }

}
?>
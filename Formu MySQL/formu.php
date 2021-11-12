<?php
    $Conexion= new PDO('mysql:host=localhost;dbname=tienda', 'root', '');
    $resultado = $Conexion->query("SELECT * FROM USERS");


    function mostrar($resultado){
    while($registro=$resultado->fetch(PDO::FETCH_OBJ)){
        echo "Nombre: ".$registro->Nombre ."<br>". 
        "Correo: ".$registro->Correo ."<br>". 
        "Password: ".$registro->Password ."<br>".
        "Roles: ".$registro->Roles ."<br>"."<br>" ;
    }
}
?>
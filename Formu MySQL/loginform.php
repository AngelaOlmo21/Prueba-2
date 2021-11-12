<?php
include "include/BD.php";
require_once "include/User.php";
require_once "include/Login.php";
require_once "include/Sesion.php";
    // Comprobamos si ya se ha enviado el formulario
    $error="";
    if (isset($_POST['enviar']))
    {
        $usuario = $_POST['usuario'];
        $password = $_POST['password'];
       
        if (empty($usuario) || empty($password)) 
            $error = "Debes introducir un nombre de usuario y una contraseña";
        else 
        {
            // Comprobamos si existe el usuario. Si existe se crea la variable de seion login
                        
            Login::Identifica($usuario,$password,false);
            // Si el usuario es identificado se crea la variable de sesion login
            if  (Login::UsuarioEstaLogueado())
            {
                // Creamos la variable de sesion uuario de tipo User
                // Redirigimos a la lista de productos
                Sesion::escribir('usuario', BD::obtieneUsuario($usuario,$password));
                header("Location: productos.php");                    
            }
           
        }
    }
            
    
   
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Login Tienda Web</title>
  </head>

<body>
    <div id='login'>
    <form action='loginform.php' method='post'>
    <fieldset >
        <legend>Login</legend>
        <div>
            <?php echo $error; ?>
        </div>
        <div>
            <label for='usuario' >Usuario:</label><br/>
            <input type='text' name='usuario' id='usuario' maxlength="50" /><br/>
        </div>
        <div>
            <label for='password' >Contraseña:</label><br/>
            <input type='password' name='password' id='password' maxlength="50" /><br/>
        </div>

        <div>
            <input type='submit' name='enviar' value='Enviar' />
        </div>
    </fieldset>
    </form>
    </div>
</body>
</html>

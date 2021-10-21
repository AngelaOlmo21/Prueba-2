<?php 

$aErrores = array();
$aMostrar = array();

    // Patrón para usar en expresiones regulares (admite letras acentuadas y espacios):
     $patron_texto = "/^[a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s]+$/";
    // Comprobar si se ha enviado el formulario:
    if( !empty($_POST) )
    {
        echo "EL FORMULARIO HA SIDO RECIBIDO:<br/>";
        echo "====================<p/>";
        // Mostrar la información recibida del formulario:
        print_r( $_POST );
        echo "<hr/>";
        // Comprobar si llegaron los campos requeridos:
         if( isset($_POST['nombre']) && isset($_POST['apellidos']) )
        {
            // Nombre:
             if( empty($_POST['nombre']) )
                $aErrores[] = "Especifica el nombre";
            else
            {
                // Comprobar mediante una expresión regular, que sólo contiene letras y espacios:
                 if( preg_match($patron_texto, $_POST['nombre']) )
                 $aMostrar[] = "Nombre: [".$_POST['nombre']."]";
                else
                    $aErrores[] = "El nombre sólo puede contener letras y espacios";
            }
            // Apellidos:
            if( empty($_POST['apellidos']) )
                $aErrores[] = "Debe especificar los apellidos";
            else
            {
                // Comprobar mediante una expresión regular, que sólo contienen letras y espacios:
                if( preg_match($patron_texto, $_POST['apellidos']) ){
                    $aMostrar[] = "Apellidos: [".$_POST['apellidos']."]";
                }
                else
                    $aErrores[] = "Los apellidos sólo pueden contener letras y espacios";
            }
            //DNI

            if(isset($_POST['dni']) && (!empty($_POST['dni'])))
            {
                $dni=$_POST['dni'];
                function validar_dni($dni){
                    $letra = substr($dni, -1);
                    $numeros = substr($dni, 0, -1);
                    if ( substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros%23, 1) == $letra && strlen($letra) == 1 && strlen ($numeros) == 8 ){
                      echo 'valido';
                    }else{
                      echo 'no valido';
                    }
                  }
            }
            //Edad

            if( (isset($_POST['fnac']) ) && (!empty($_POST['fnac'])) )
            {
                    $fecha=$_POST['fnac'];
                    substr($fecha, 6);
                    $dateNew = intval($fecha);
                    $fechaAct=date_default_timezone_get();
                    substr($fechaAct,6);
                    $fact=intval($fechaAct);
                    $edad=$fechaAct-$dateNew;
                    $aMostrar[] ="Edad: $edad ";
                }
                else{
                    $aErrores[] = "El campo debe contener una fecha.";
                }

            //Correo Electrónico
            if(isset($_POST['correo']) && (!empty($_POST['correo']))){
                $correo=$_POST['correo'];
                if (preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $correo));
            }
            //Hobbies
         
        if (isset($_POST['enviar'])) {
            if (isset($_POST['hobbies'])) {
                $selected = '';
                $numero_hobbies = count($_POST['hobbies']);
                $current = 0;
                foreach ($_POST['hobbies'] as $key => $value) {
                    if ($current != $numero_hobbies-1)
                        $selected .= $value.', ';
                    else
                        $selected .= $value.'.';
                    $current++;
                }

                $aMostrar[]= '<div>Has seleccionado : '.$selected.'</div>';
            }
           
            else{
            $aErrores[]="Selecciona un hobbie";
            }
        }

        if( count($aErrores) > 0 )
        {
            echo "<p>ERRORES ENCONTRADOS:</p>";
            // Para mostrar los errores:
            for( $contador=0; $contador < count($aErrores); $contador++ )
                echo $aErrores[$contador]."<br/>";
        }
        else
        {
            // Para mostrar los mensajes:
            for( $contador=0; $contador < count($aMostrar); $contador++ )
                echo $aMostrar[$contador]."<br/>";
        }
    }
    else
    {
        echo "<p>No se ha enviado el formulario.</p>";
    }
}
?>
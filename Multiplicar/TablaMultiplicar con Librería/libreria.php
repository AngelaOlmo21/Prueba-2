<?php


function tablamultiplicar(){
    if (isset($_GET['a']))
{
    for ($b=0; $b<=10;$b++)

        if($b<=9)
        {

            echo $_GET['a']." x ". "&nbsp"."&nbsp" .$b . " = ". $_GET['a']*$b. "<br>";
        }
        
        else{
            echo $_GET['a']." x ".$b . " = ". $_GET['a']*$b. "<br>";
        }
                
    }

else {
    echo "algo falla";
}
}

//La funcion le da estilo a la cadena que nos han pasado, si le paso un 1 h1, 2 h2, 5 h5, 6 h6

function estilosa($texto, $numero=0){
    switch($numero){
        case 1:
            return <h1> $texto </h1>;
            break;
        case 2:
            return <h2>$texto </h2>;
            break;
        case 5:
            return <h5>$texto</h5>;
            break;
        case 6:
            return <h6> $texto </h6>;
            break;

        default:
        return $texto;
    }      
}


?>
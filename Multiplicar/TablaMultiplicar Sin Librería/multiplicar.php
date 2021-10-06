<?php


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


?>
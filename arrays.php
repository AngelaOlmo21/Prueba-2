<?php 
// como se generan numeros aleatorios en php
// generar un num aleatorio entre 1 y 100 y rellenar un array de 20 casillas con numeros del 1 al 100 aleatorios
// sin que se repita ninguno y sacarlo por pantalla
// count(nombrearray) te dice cuantos elementos tiene un array

//$a= array();
/*
while (count($a)<20){

    $numeros = random_int(1,100);
    
    $a[]=$numeros."<br>";
    
}
sort($a);
print_r($a);
*/
$a= array(1,2,3,4);
function miVardump($a)
{
    echo $_SERVER['DOCUMENT_ROOT'];
    echo $_SERVER['PHP_SELF'];
    
    for($i=0;$i<count($a);$i++){
        current($a) ;
        
    }
    
}

miVardump($a);

//Array con lista de nombres $roma=array() -> profesores q fueron a roma
// $polonia=array() -> fueron a polonia, 
//$dublin=array() -> lista que quieren ir a dublin
//Quitar de la lista de dublin los que ya fueron a polonia y los que fueron a roma
//función en la que se pasan dos arrays uno con los nombres de los profesores 
//y otro con las veces que han viajado

$roma=array("1","2","3","4","5","6","7","8","9");
$polonia=array("10","11","12","13","14","15","16","17");
$dublin=array("1","3","7","13","16", "18","19","20","21","22","23","24","25");

$dublinBueno= array_diff($dublin, $roma,$polonia);
print_r($dublinBueno);

function ViajesProfes($nombres,$numViajes){

}
?>
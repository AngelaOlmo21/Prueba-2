<?php
 
if(isset($_POST['sumar'])){
    $n1=$_POST['n1'];
    $n2=$_POST['n2'];
    $suma=$n1 + $n2;
    echo $suma;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Calculadora Suma</h2>
    <form action="" method="post">
    <label for="n1">Introduzca un número</label> <input type="text" name="n1" id="n1">
    <label for="n2">Introduzca un número</label> <input type="text" name="n2" id="n2">
    <input type="submit" value="sumar" name="sumar" id="sumar">
    </form>

</body>
</html>
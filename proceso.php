<?php 

function validar(){
    if (isset($_POST["suma"]) || ($_POST["resta"]) || ($_POST["multi"]) || ($_POST["division"])){
        if (is_numeric($_POST['n1']) && is_numeric($_POST['n2'])){
            return true; 
        }
        else return false;
    }

}

if(isset($_POST['suma'])){
    $n1=$_POST['n1'];
    $n2= $_POST['n2'];
    $suma= $n1 + $n2;
    print_r($suma);
}

if(isset($_POST['resta'])){
    $n1=$_POST['n1'];
    $n2= $_POST['n2'];
    $resta= $n1 - $n2;
    print_r($resta);
}

if(isset($_POST['multi'])){
    $n1=$_POST['n1'];
    $n2= $_POST['n2'];
    $multi= $n1 * $n2;
    print_r($multi);
}


if(isset($_POST['divide'])){
    $n1=$_POST['n1'];
    $n2= $_POST['n2'];
    $divide= $n1 / $n2;
    print_r($divide);
}

/*
switch($operacion){
    case 'suma':
        $n1=$_POST['n1'];
        $n2= $_POST['n2'];
        $suma= $n1 + $n2;
        print_r($suma);
        break;
    case 'resta':
        $n1=$_POST['n1'];
        $n2= $_POST['n2'];
        $resta= $n1 - $n2;
        print_r($resta);
        break;
    case 'multi':
        $n1=$_POST['n1'];
        $n2= $_POST['n2'];
        $multi= $n1 * $n2;
        print_r($multi);
        break;
    case 'divide':
        $n1=$_POST['n1'];
        $n2= $_POST['n2'];
        $divide= $n1 / $n2;
        print_r($divide);
        break;            
}

*/
/*else{
    header("Location:form.html");
}
*/
?>


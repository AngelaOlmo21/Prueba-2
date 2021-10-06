<?php 

function validar(){
    if (isset($_POST["suma"])){
        if (is_numeric($_POST['n1']) && is_numeric($_POST['n2'])){
            return true; 
        }
        else return false;
    }

}

if (validar()){
    $n1=$_POST['n1'];
    $n2= $_POST['n2'];
    $suma= $n1 + $n2;
    print_r($suma);
}

else{
    header("Location:form.html");
}
?>


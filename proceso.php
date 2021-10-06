<?php 

function validar(){
    if (isset($_POST["suma"]) || ($_POST["resta"]) || ($_POST["multi"]) || ($_POST["division"])){
        if (is_numeric($_POST['n1']) && is_numeric($_POST['n2'])){
            return true; 
        }
        else return false;
    }

}
$operacion = $_GET['operacion'];

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
    case 'division':
        $n1=$_POST['n1'];
        $n2= $_POST['n2'];
        $division= $n1 / $n2;
        print_r($division);
        break;            
}


/*else{
    header("Location:form.html");
}
*/
?>


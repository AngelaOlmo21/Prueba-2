<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
	<title>Pagina Principal</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<h1>Hola Mundo</h1>
</head>


<body>
    <?php 
	
	$a=1;
    echo  "1" === $a;

    echo $a == false;

    echo $a++ == 2; 
   
    echo --$a == false; 
	
	
	echo $_SERVER['PHP_SELF'];
	echo "<br>" ;
	echo $_SERVER['SERVER_ADDR'];
	echo "<br>";
	echo $_SERVER['SERVER_NAME'];
	echo "<br>";
	echo $_SERVER['DOCUMENT_ROOT'];
	echo "<br>";
	echo $_SERVER['REMOTE_ADDR'];
	echo "<br>";
	echo $_SERVER['REQUEST_METHOD'];
	echo "<br>";

	if (isset($_GET['nombre'], $_GET['apellido']))
	{
		echo $_GET['nombre'] ." ". $_GET['apellido'];	
	}
	else
	{
		echo "No tengo tu nombre completo";
	}
	
	?>
    
</body>
   

</html>

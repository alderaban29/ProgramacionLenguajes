<?php
    if($_POST){
        $valorA=$_POST['valorA'];
        $valorB=$_POST['valorB'];
        if(($valorA!=$valorB)||($valorA>$valorB)){
            echo "El valor de A es diferente de B y es mayor ".$valorA;
        }else{
            echo "El valor B es igual a A y B es mayor".$valorB;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
</head>
<body>
    <form action="ejercicio10.php" method="post">
    valor A:

    <input type="text" name="valorA" id="">
    <br/>

    valor B:

    <input type="text" name="valorB" id="">
    <br/>

    <input type="submit" value="Calcular">

    </form>
</body>
</html>
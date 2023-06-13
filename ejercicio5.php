<?php

    if($_POST){
        $txtnombre=$_POST['txtnombre'];
        $txtapellido=$_POST['txtapellido'];
        echo "Hola ".$txtnombre." ".$txtapellido;
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
    <form action="ejercicio5.php" method="post">
        Nombre:
        <input type="text" name="txtnombre" id="">
        <br/>
        Apellido:
        <input type="text" name="txtapellido" id="">
        <br/>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
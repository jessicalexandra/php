<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Enviar datos </h1>
    <form  method="get">

        <input type="text" name="nombre" placeholder="escribe tu nombre"> <br>
        <input type="number" name="tel" placeholder="escribe tu cel"> <br>
        <button type="submit">Enviar datos</button>
    </form>
    <?php

$nombre=$_GET["nombre"];
$tel=$_GET["tel"];

if (is_numeric($nombre)) {
    echo "el nombre es valido";
}else{
    echo "su nombre: " .$nombre . " ".$tel;
}
    ?>
</body>
</html>
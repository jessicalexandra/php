<?php
# metodo post

// $nombre=$_POST["nombre"];
// $tel=$_POST["tel"];

// echo $nombre . " " . $tel;

# metodo get
$nombre=$_GET["nombre"];
$tel=$_GET["tel"];
// echo $nombre . " " . $tel;

if (is_numeric($nombre)) {
    echo "el nombre es valido";
}else{
    echo "su nombre: " .$nombre . " ".$tel;
}
<?php
$saludo="hola";
$nombre="jess";

echo $saludo." ".$nombre;
/*echo "hola $nombre ";*/
echo"</br>";
print" <h1>hola alexandra </h1>";
#1
$fruta=array("mango","sandia","fresas");
#2
$verduras=["tomate","cebolla","zanahoria"];
#agregar datos
array_push($fruta,"mora","banano");
array_push($verduras,"papa","brocoli");
echo$fruta[1]. " ".$verduras[1] ."<br>";
#recorrido de los arreglos
for ($i=0; $i < count($fruta); $i++) { 
   echo $i . " ".$fruta[$i]. "<br>";

}

   #arreglos asociativos
   $productos=[
    "arroz"=> ["roa","pepita"],
    "aceite"=> ["premier","oliva","gourmet"],
    "arepa"=> ["doña pepita","la quesuda","tela"]
];
#recorrer arreglos asociativo

foreach ($productos as $producto => $marca){
    #echo "producto : ".$producto. "marcas : ". $marca . "<br>";
  
    echo "<ul>  productos :".$producto;
    foreach($marca as $mar){
        echo"<li>" . $mar . "</li>";

    }
    echo "</ul>";
}

?>
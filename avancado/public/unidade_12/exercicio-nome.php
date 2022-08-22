<?php
$alfabeto     = "ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
$tamanho      = 12;
$letra        = "";
$resultado    = "";


for($i = 1 ; $i <= $tamanho ; $i ++){
  $letra      =  substr($alfabeto,rand(0, strlen($alfabeto)-1),1);
  $resultado .= $letra;

}

$agora = getdate();
$codigo_ano = $agora["year"] . "_" . $agora["yday"];
$codigo_data = $agora["hours"] . $agora["minutes"] . $agora["seconds"];


echo $codigo_ano;
echo "<br>";
echo $resultado;
echo "<br>";
echo $codigo_data;
echo "<br>";
echo "<br>";
echo "<br>";
echo "Nome unico" . "<br>";

echo $resultado . "_" . $codigo_ano . "_" . $codigo_data;








/*
echo strlen($alfabeto);
echo "<br>";
echo substr($alfabeto,strlen($alfabeto)-1,1);
echo "<br>";
echo rand(0, strlen($alfabeto)-1);
echo "<br>";
echo substr($alfabeto,rand(0, strlen($alfabeto)-1),1);
*/
?>


<?php
$string = "exemplo";
$invString = "";
for ($i=strlen($string); $i >= 0 ; $i--) { 
    $aux = substr($string, $i, 1);
    $invString =   $invString . $aux;
}
echo "string selecionada:" . $string . "<br>";
echo  "string invertida:" . $invString;
?>
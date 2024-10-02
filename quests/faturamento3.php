<?php
include('../decoders/jsondecode.php');

$Maiorv = 0.0;
$Menorv= 0.0;
$media= 0.0;
$diasut= 0;
$cont=0;
foreach ($dadosdec as $day) {
   $total =+ $day->valor;
   if ($day->valor != 0) {
    $diasut++;
   }
}
$media =  $total/ $diasut;
foreach ($dadosdec as $day) {
if ($day->valor > $media) {
    $cont++;
}
    if ($Menorv == 0 || ($day->valor < $Menorv && $day->valor != 0) ) {
        $Menorv = $day->valor;
    }else if ($Maiorv < $day->valor ) {
        $Maiorv = $day->valor;
    }
}

echo "menor valor faturado em dia útil: R$" . $Menorv . "<br>";
echo "maior valor faturado em dia útil: R$" . $Maiorv . "<br>";
echo "o número de dias que ultrapassaram a média mensal foi: " . $cont;

?>
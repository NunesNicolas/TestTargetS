<?php

$ynumb = 34;
$ant = 1;

//ignorando o caso inicial 0, calculasse a partir de 1,1..
for ($k=1; $k <= $ynumb;   $k = $ant + $k) {
    if ($ynumb == $k) {
        echo "\n" . $ynumb . " está na sequência de fibonacci";
        break;
    }
$ant = $k - $ant;
    echo '['.$k . ']-';
}

if ($k != $ynumb) {
    echo "\n" . $ynumb . " não está na sequência de fibonacci";
}
?>
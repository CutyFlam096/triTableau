<?php
function triTab($tab){
    for ($i = 0; $i < count($tab); $i++){
        for($j=$i + 1; $j < count($tab); $j++){
            $echange = echange($tab[$j], $tab[$i]);
            $tab[$j] = $echange[0];
            $tab[$i] = $echange[1];
        }
    }
    return $tab;
}

function echange($a, $b){
    if ($a < $b){
        $a = $a + $b;
        $b = $a - $b;
        $a = $a - $b;
    }
    $resu = [$a,$b];
    return $resu;
}

$ages = [25,78,24,23,22,21,54,55,2];

echo 'Liste de depart: <br>';
for ($i = 0; $i < count($ages); $i++) {
    echo $ages[$i];
    echo '<br/>';
}

echo '<br/>';
$ages = triTab($ages);

echo "Liste triée: <br>";
for ($i = 0; $i < count($ages); $i++) {
    echo $ages[$i];
    echo '<br/>';
}
?>



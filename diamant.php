<?php 
$omvang=readline("voer een omvang in voor je diamant:");
$teller= ceil($omvang / 2);

for($i= 0; $i<$omvang; $i = $i +2) {

    for($k=0; $k<$teller; $k++) {
        echo " ";
    }

    for($j=0; $j<=$i; $j++) {
        echo"*";
    }
    echo"\n";
    $teller--;
}






?>
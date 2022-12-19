<?php 
//variables & berekening
$omvang=readline("voer een omvang in voor je diamant:");
$spatie_teller= ceil($omvang / 2);

//for loop pyramide 1 (Loopt de helft van omvang keer)
for($i= 0; $i<$omvang; $i = $i +2) {

    //loopt de helft van omvang keer maar elke keer dat de 1ste loop loopt, loopt deze 1keer minder 
    //(omdat aan het einde van de loop  $spatie_teller-- word gedaan).
    for($k=0; $k<$spatie_teller; $k++) {
        echo " ";
    }
    //loopt zo lang $j kleiner en gelijk is aan i$ dus print steeds 2 "*" meer (want er gaat steeds 2 bij $i op
    // als de 1ste loop loopt)
    for($j=0; $j<=$i; $j++) {
        echo"•";
    }
    echo"\n";
    $spatie_teller--;
}
//for loop pyramide 2 (loopt de helft van omvang keer)
for($y= 0; $omvang>=$y; $omvang = $omvang -2) {

    //loopt de helft van omvang maar steeds 1 keer meer (omdat er aan het einde $spatie_teller++ word gedaaan)
    for($l=0; $l<$spatie_teller; $l++) {
        echo " ";
    }
    //loopt zolang $f kleiner of gelijk is aan $omvang dus print steeds 2 "*" minder (want er gaat steeds 2 af van
    // $omvang in de 1ste loop)

    for($f=0; $f<=$omvang; $f++){
        echo"•";
        
        
    }
    echo "\n";
    $spatie_teller++;
}

?>
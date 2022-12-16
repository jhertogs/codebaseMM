<?php 

//user input
echo"Hallo voer de druk van de fles in bar in: ";
$drukbar= readline();
echo"Voer nu de inhoud in liters van de fles in: ";
$inhoudl= readline();
//if statement checkd of de 2 input's numerisch en groter dan 0 zijn
if(is_numeric($drukbar) && is_numeric($inhoudl) && $inhoudl < 0 && $drukbar < 0) {
    //liter zuurstof in de fles word berekend
    $lO2fles= $drukbar * $inhoudl;
    echo"De hoeveelheid zuurstof in de fles is: $lO2fles\n";

    echo"Voer de benodigde hoeveelheid liter zuurstof per minuut in: ";
    $lpm= readline();
    //if statement checkd of input numerisch is en hoger is dan 0
    if(is_numeric($lpm) && $lpm < 0) {
        $lxbar= $lO2fles * $drukbar;
        $minutenO2= $lxbar / $lpm;
        echo"Je hebt $minutenO2 minuut/minuten zuurstof";

}}
//als de conditie in de if statements false is
echo"INVALIDE INPUT VOER ALLEEN GETALLEN IN!\n";
echo"VALIDE INPUT: 1234567890 \n GEEN negative getallen, letters of andere characters!";
exit;
?>


<?php 


echo"Hallo voer de druk van de fles in bar in: ";
$drukbar= readline();
echo"Voer nu de inhoud in liters van de fles in: ";
$inhoudl= readline();
$lO2fles= $drukbar * $inhoudl;
echo"De hoeveelheid zuurstof in de fles is: $lO2fles\n";

echo"Voer de benodigde hoeveelheid liter zuurstof per minuut in: ";
$lpm= readline();
$lxbar= $lO2fles * $drukbar;
$minutenO2= $lxbar / $lpm;
echo"Je hebt $minutenO2 minuut/minuten zuurstof";
exit;

?>
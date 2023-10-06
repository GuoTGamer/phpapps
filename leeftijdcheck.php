<?php
$naam = readline("Hoe heet je: ");
$geboortedatum = readline("Wanneer ben je geboren: ");


$leeftijd = (new DateTime($geboortedatum))->diff(new DateTime())->y;
$maanden = (new DateTime($geboortedatum))->diff(new DateTime())->m;

echo "\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n";
echo "Hallo " . $naam . ", u bent " . $leeftijd . " jaar en " . $maanden . " maanden oud \n";

$jonger= 16-$leeftijd;
$ouder= $leeftijd-16;

if ( $leeftijd < 16 ) {
    echo "Jij bent ".$jonger." jaren jonger dan 16 jaar.\n";
} elseif ( $leeftijd > 16 ) {
    echo "Jij bent ".$ouder." jaren ouder dan 16 jaar.\n";
} else {
    echo "Jij bent precies dan 16 jaar.\n";
}

$jonger= 50-$leeftijd;
$ouder= $leeftijd-50;

if ( $leeftijd < 50 ) {
    echo "Jij bent ".$jonger." jaren jonger dan 50 jaar.\n";
} elseif ( $leeftijd > 50 ) {
    echo "Jij bent ".$ouder." jaren ouder dan 50 jaar.\n";
} else {
    echo "Jij bent precies dan 50 jaar.\n";
} 

$jonger= 67-$leeftijd;

echo "Nog ". $jonger ." jaar tot je klaar bent met werken\n";

$jonger= 100-$leeftijd;

echo "Nog ". $jonger ." jaar tot je dood moet zijn";

?>